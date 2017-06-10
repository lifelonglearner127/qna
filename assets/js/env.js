window.QNAConfig = (() => {
    let env = "dev";
    // let env = "production";

    const getBaseUrl = () => {
        if (env === "dev") {
            baseUrl = "http://qna.dev:8000/";
        } else {
            baseUrl = "http://98.142.208.206/~alexdev/";
        }
        return baseUrl;
    }
    return {
        env: "dev",
        baseUrl: getBaseUrl
    };
})();
        