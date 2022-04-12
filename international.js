
let i = 1;
let newsSection = document.getElementById("news-section")


const xhr = new XMLHttpRequest();

xhr.open('GET', 'https://newsapi.org/v2/everything?domains=techcrunch.com,thenextweb.com&apiKey=8c1cb426929d4674b6bdb801a1dfacd1&q=startup', true);

xhr.getResponseHeader('Content-type', 'application/json');

xhr.onload = function () {
    if (this.status === 200) {
        let json = JSON.parse(this.responseText);
        let articles = json.articles;
        console.log(articles);
        let newsHTML="";
        articles.forEach(function (element) {
            let newsApiDate = element["publishedAt"];
            let timestamp = new Date(newsApiDate).getTime();
            let Day = new Date(timestamp).getDate();
            let Month = new Date(timestamp).getMonth() + 1;
            let Year = new Date(timestamp).getFullYear();
            let news = `<div class="col-4 ">
                            <div class="card m-5 p-1">

                                    <img src="${element["urlToImage"]}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <a href="${element["url"]}"><h5 class="card-title">${element["title"]}</h5></a>
                                        <p class="card-text" style="color: black;
                                        text-decoration: none;">${element["description"]}</p>
                                        <input type="button" onclick="location.href='${element["url"]}';" value="See More" class="news-btn"/> 
                                        <a class="card-text mx-5" style="margin-top:1em;
                                        text-decoration: none;">${"Date: " + Day + "-" + Month + "-" + Year}</a>
                                    </div>
                            </div>
                        </div>`
            newsHTML += news;
            window.localStorage.setItem("Data1", element["title"]);
        });
        newsSection.innerHTML = newsHTML;
    } else {
        console.log("Some error occured")
    }
}

xhr.send();

