const express = require('express');
const path = require('path');
const bodyParser = require('body-parser');
const logger = require('morgan');

const app = express();

app.use(logger('dev'));
app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());
app.use(express.static(__dirname + '/assets'))
app.set("views", path.resolve(__dirname, "views"));
app.set("view engine", "ejs");

app.get('/', (req, res) => {
    res.render('index');
})

app.get('/ranking/:category', (req, res) => {
    var category = req.params.category;
    var allCategory = ['webDesigning', 'webDevelopment']
    if (category !== undefined) {
        for(var i = 0; i < allCategory.length; i++) {
            if (allCategory[i] === category) {
                res.render('ranking', { name: category })
            }
        }
    }else {
        res.render('404');
    }
})

app.use(function(request, response) {
    response.status(404).render("404");
});

const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
    console.log('app is running on port: ' + PORT);
})

