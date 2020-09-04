
function getData() {
  $.ajax({
    url:"data.php",
    method:"GET",
    success: function (data) {
      var songs = data["response"];
      // console.log(songs, songs.length);
      var template = $("#song-template").html();
      // console.log(template);
      var compiled = Handlebars.compile(template);
      var target = $("#container");

      for (var i = 0; i < songs.length; i++) {
        var song = songs[i];
        console.log(song);

        var songHtml = compiled(song);
        target.append(songHtml);
      }

    },
    error: function (err) {
      console.log(err);
    }
  });
}
function init() {
  console.log("ciao");
  getData();
}

$(document).ready(init);
