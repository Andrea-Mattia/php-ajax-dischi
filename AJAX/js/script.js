/**
 * Get albums from api
 */

const app = new Vue({
  el: "#app",
  data: {
    albums: [],
    artists: [],
    filterArtist: "all",
    dataURL: window.location.href + "partials/database.php",
  },
  created() {
    // get data

    axios
      .get(this.dataURL)
      .then((result) => {
        this.albums = result.data.albums;
        this.artists = result.data.artists;
      })
      .catch((err) => {
        console.log(err);
      });
  },
  methods: {
    getFiltered() {
      axios
        .get(this.dataURL, {
          params: {
            artist: this.filterArtist,
          },
        })
        .then((result) => {
          this.albums = result.data.albums;
        })
        .catch((err) => {
          console.log(err);
        });
    },
  },
});
