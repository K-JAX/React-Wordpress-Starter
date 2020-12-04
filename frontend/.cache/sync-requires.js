const { hot } = require("react-hot-loader/root")

// prefer default export if available
const preferDefault = m => m && m.default || m


exports.components = {
  "component---src-templates-page-js": hot(preferDefault(require("/home/kjax/Local Sites/jthompson/frontend/src/templates/page.js"))),
  "component---src-templates-post-js": hot(preferDefault(require("/home/kjax/Local Sites/jthompson/frontend/src/templates/post.js"))),
  "component---src-templates-blog-js": hot(preferDefault(require("/home/kjax/Local Sites/jthompson/frontend/src/templates/blog.js"))),
  "component---src-templates-category-js": hot(preferDefault(require("/home/kjax/Local Sites/jthompson/frontend/src/templates/category.js"))),
  "component---src-templates-tag-js": hot(preferDefault(require("/home/kjax/Local Sites/jthompson/frontend/src/templates/tag.js"))),
  "component---src-templates-author-js": hot(preferDefault(require("/home/kjax/Local Sites/jthompson/frontend/src/templates/author.js"))),
  "component---cache-dev-404-page-js": hot(preferDefault(require("/home/kjax/Local Sites/jthompson/frontend/.cache/dev-404-page.js"))),
  "component---src-pages-404-js": hot(preferDefault(require("/home/kjax/Local Sites/jthompson/frontend/src/pages/404.js")))
}

