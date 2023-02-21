export default () => ({
    loading: false,
    generateReport() {
        this.loading = true;

        const sizes = this.$refs.vegacontainer.getBoundingClientRect();

        this.$wire.generateReport()
        .then((result) => {
            var dataset = this.$wire.get('dataset');

            result.data = dataset;
            result.height = sizes.height;
            result.width = sizes.width;

            console.log(dataset, result, sizes);

            window.vegaEmbed("#vis", result);

            this.loading = false;
        })
        .catch((err) => {
            this.loading = false;
            console.log(err)
        })
    }
})