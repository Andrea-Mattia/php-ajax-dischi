/**
 * Get albums from api
 */

const app = new Vue({
  el: "#app",
  data: {
    albums: [],
  },
  created() {
    // get data
    const dataURL = window.location.href + "partials/database.php";

    axios
      .get(dataURL)
      .then((result) => {
        this.albums = result.data;
      })
      .catch((err) => {
        console.log(err);
      });
  },
});
