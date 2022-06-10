const app = new Vue({
  el: "#root",
  data: {
    name: "olga",
    faqs: [],
  },
  created() {
    axios
      .get("http://localhost:8888/php-google-include-api/api/server.php")
      .then((resp) => {
        this.faqs = resp.data;
      });
  },
});
