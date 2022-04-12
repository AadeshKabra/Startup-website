// 8c1cb426929d4674b6bdb801a1dfacd1

// pub_2282d5d66e80b41b19a68c19f65340fae5a1
let i = 1;
let newsSection = document.getElementById("news-section")

// fetch('https://newsapi.org/v2/everything?domains=techcrunch.com,thenextweb.com&apiKey=8c1cb426929d4674b6bdb801a1dfacd1')
//     .then((apidata) => {
//         console.log(apidata);
//         return apidata.json();
//     }).then((actualdata) => {
//         console.log(actualdata);
//         let newsHTML = "";
//         for(let news in actualdata){
//             console.log(actualdata[news]);
//             news = `<div class="row">
//                             <div class="col-sm-4 ">
//                              <div class="card m-5 p-1">

//                                      <img src="${actualdata["image_url"]}" class="card-img-top" alt="...">
//                                     <div class="card-body">
//                                      <a href="${actualdata["link"]}"><h5 class="card-title">${actualdata["title"]}</h5></a>
//                                          <p class="card-text" style="color: black;
//                                          text-decoration: none;">${actualdata["description"]}</p>
//                                          <button href="${actualdata["link"]}" class="btn btn-primary news-btn" style="width: 100%;">See More</button>
//                                          <a class="card-text mx-5">${actualdata["pubDate"]}</a>
//                                      </div>
//                              </div>
//                          </div>
//                          </div>`;  
//             newsHTML += news;
//         }
//         newsSection.innerHTML = newsHTML
//     }).catch((error) => {
//         console.log(error);
//     })

// https://newsapi.org/v2/everything?domains=techcrunch.com,thenextweb.com&apiKey=8c1cb426929d4674b6bdb801a1dfacd1&q=startup
const xhr = new XMLHttpRequest();

xhr.open('GET', 'https://gnews.io/api/v4/search?q=delhi%20Startups&country=in&token=1b51561b7f147c49a0541bad422425e4', true);

xhr.getResponseHeader('Content-type', 'application/json');

xhr.onload = function () {
    if (this.status === 200) {
        let json = JSON.parse(this.responseText);
        let articles = json.articles;
        console.log(articles);
        let newsHTML = "";
        articles.forEach(function (element) {
            let newsApiDate = element["publishedAt"];
            let timestamp = new Date(newsApiDate).getTime();
            let Day = new Date(timestamp).getDate();
            let Month = new Date(timestamp).getMonth() + 1;
            let Year = new Date(timestamp).getFullYear();
            let news = `<div class="col-4 ">
            <div class="card m-5 p-1">

                    <img src="${element["image"]}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <a href="${element["url"]}"><h5 class="card-title">${element["title"]}</h5></a>
                        <p class="card-text" style="color: black;
                        text-decoration: none;">${element["content"]}</p>
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
        console.log(newsHTML);
    } else {
        console.log("Some error occured")
    }
}

xhr.send();

// https://gnews.io/api/v4/search?q=startups&country=in&token=1a95f633671384105494143b49a5909b


mybutton = document.getElementById("myBtn");
console.log(mybutton)
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0; 
  document.documentElement.scrollTop = 0; 
}