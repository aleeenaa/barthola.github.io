var createIndex = function () {
    console.log("hi");

    var container = document.getElementById('container');
    var indexArticle = document.createElement('article');
    //indexArticle.margin = '10px';

    var section1 = document.createElement('section');
    section1.margin = '10px';
    section1.height = '10px';

    var section2 = document.createElement('section');
    section2.margin = '10px';
    section2.height = '10px';
    section2.background = 'background: #ffffff none repeat scroll 0% 0%;';

    indexArticle.appendChild(section1);
    indexArticle.appendChild(section2);
    container.appendChild(indexArticle);
    console.log('hi');

};

window.addEventListener('load', createIndex, true);