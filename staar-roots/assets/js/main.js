/*
This is a file,
v 0.0.1
	Defining dat structures that will eventually hold staar download items
 */
// Sample Test Item Model
// This provides the standards for an object that represents an item for download

var sampleItem = Backbone.Model.extend({
    
    defaults: {
      tags: null,
      caption: "",
      description: "",
      id: 282,
      mime_type: "application/pdf",
      parent: 22,
      slug: "staar3math",
      title: "STAAR3Math",
      url: "http://parker-jones.org/staar/media/STAAR3Math.pdf"
    }
});


var DownloadItems = Backbone.Collection.extend({

    model: sampleItem

});

// View for all people
// 
var GalleryView = Backbone.View.extend({

    tagName: 'div',

    className: 'row-fluid download-gallery',

    render: function(){

      this.collection.each(function(sampleItem){
        var itemView = new ItemView({model: sampleItem });
        this.$el.append(itemView.render().el);
        
      }, this);

      return this;

    //Loop over all the Sample Item objects
    //Should call render for the Item objects
    //Should display a collection as HTML

    }
});


var ItemView = Backbone.View.extend({
   
   tagName: 'div',

   className: 'span4 pull-left',

   my_template: _.template($('#itemTemplate').html()),


   render: function(){
     this.$el.html( this.my_template(this.model.toJSON()));
     return this;
  }

});

function get_wordpress_attachments(){

    return $.getJSON("http://parker-jones.org/staar/?json=get_page&page_id=22&include=attachments");

}



var downloadItems = new DownloadItems([
    {
      tags: "writing EOC",
      caption: "English Language Arts 1 EOC",
      description: "",
      id: 310,
      mime_type: "application/pdf",
      parent: 22,
      slug: "staar-eoc-ela-1-revising",
      title: "English Language Arts 1 EOC",
      url: "http://parker-jones.org/staar/media/STAAR-EOC-ELA-1-Revising.pdf"
    },
    {
      tags: "math EOC",
      caption: "Geometry EOC",
      description: "",
      id: 311,
      mime_type: "application/pdf",
      parent: 22,
      slug: "staar-eoc-geometry",
      title: "STAAR Geometry End of Course Test",
      url: "http://parker-jones.org/staar/media/STAAR-EOC-Geometry.pdf"
    },
    {
      tags: "EOC",
      caption: "STAAR EOC World Geography",
      description: "",
      id: 312,
      mime_type: "application/pdf",
      parent: 22,
      slug: "staar-eoc-world-geography",
      title: "STAAR World Geography End of Course Test",
      url: "http://parker-jones.org/staar/media/STAAR-EOC-World-Geography.pdf",
     },
      {
      tags: "math grade-3",
      caption: "STAAR Grade 3 Math",
      description: "",
      id: 313,
      mime_type: "application/pdf",
      parent: 22,
      slug: "staar-grade-3-math",
      title: "STAAR Grade 3 Math",
      url: "http://parker-jones.org/staar/media/STAAR-Grade-3-Math.pdf"
     },
      {
      tags: "reading grade-3",
      caption: "STAAR Grade 3 Reading",
      description: "",
      id: 314,
      mime_type: "application/pdf",
      parent: 22,
      slug: "staar-grade-3-reading",
      title: "STAAR Grade 3 Reading",
      url: "http://parker-jones.org/staar/media/STAAR-Grade-3-Reading.pdf"
      },
      {
      tags: "math grade-4",
      caption: "STAAR Grade 4 Math",
      description: "",
      id: 315,
      mime_type: "application/pdf",
      parent: 22,
      slug: "staar-grade-4-math",
      title: "STAAR Grade 4 Math",
      url: "http://parker-jones.org/staar/media/STAAR-Grade-4-Math.pdf"
      },
      {
      tags: "reading grade-4",
      caption: "STAAR Grade 4 Reading",
      description: "",
      id: 316,
      mime_type: "application/pdf",
      parent: 22,
      slug: "staar-grade-4-reading",
      title: "STAAR Grade 4 Reading",
      url: "http://parker-jones.org/staar/media/STAAR-Grade-4-Reading.pdf"
      },
      {
      tags: "writing grade-4",
      caption: "STAAR Grade 4 Writing",
      description: "",
      id: 317,
      mime_type: "application/pdf",
      parent: 22,
      slug: "staar-grade-4-writing",
      title: "STAAR Grade 4 Writing",
      url: "http://parker-jones.org/staar/media/STAAR-Grade-4-Writing.pdf"
      },
      {
      tags: "math grade-5",
      caption: "STAAR Grade 5 Math",
      description: "",
      id: 318,
      mime_type: "application/pdf",
      parent: 22,
      slug: "staar-grade-5-math",
      title: "STAAR Grade 5 Math",
      url: "http://parker-jones.org/staar/media/STAAR-Grade-5-Math.pdf"
      },
      {
      tags: "reading grade-5",
      caption: "STAAR Grade 5 Reading",
      description: "",
      id: 319,
      mime_type: "application/pdf",
      parent: 22,
      slug: "staar-grade-5-reading",
      title: "STAAR Grade 5 Reading",
      url: "http://parker-jones.org/staar/media/STAAR-Grade-5-Reading.pdf"
      },
      {
      tags: "science grade-5",
      caption: "STAAR Grade 5 Science",
      description: "",
      id: 320,
      mime_type: "application/pdf",
      parent: 22,
      slug: "staar-grade-5-science",
      title: "STAAR Grade 5 Science",
      url: "http://parker-jones.org/staar/media/STAAR-Grade-5-Science.pdf"
      },
      {
      tags: "reading EOC",
      caption: "ELA 1 Reading EOC",
      description: "",
      id: 309,
      mime_type: "application/pdf",
      parent: 22,
      slug: "staar-eoc-ela-1-reading",
      title: "ELA 1 Reading EOC",
      url: "http://parker-jones.org/staar/media/STAAR-EOC-ELA-1-Reading.pdf"
      },
      {
      tags: "writing EOC",
      caption: "ELA 1 Prompts EOC",
      description: "",
      id: 308,
      mime_type: "application/pdf",
      parent: 22,
      slug: "staar-eoc-ela-1-prompts",
      title: "ELA 1 Prompts EOC",
      url: "http://parker-jones.org/staar/media/STAAR-EOC-ELA-1-Prompts.pdf"
      },
      {
      tags: "science EOC",
      caption: "Chemistry EOC",
      description: "",
      id: 307,
      mime_type: "application/pdf",
      parent: 22,
      slug: "staar-eoc-chemistry",
      title: "Chemistry EOC",
      url: "http://parker-jones.org/staar/media/STAAR-EOC-Chemistry.pdf"
      },
      {
      tags: "science EOC",
      caption: "Biology EOC",
      description: "",
      id: 306,
      mime_type: "application/pdf",
      parent: 22,
      slug: "staar-eoc-biology",
      title: "Biology EOC",
      url: "http://parker-jones.org/staar/media/STAAR-EOC-Biology.pdf"
      },
      {
      tags: "math EOC",
      caption: "Algebra 1 EOC",
      description: "",
      id: 305,
      mime_type: "application/pdf",
      parent: 22,
      slug: "staar-eoc-algebra1",
      title: "Algebra 1 EOC",
      url: "http://parker-jones.org/staar/media/STAAR-EOC-Algebra1.pdf"
      },
      {
      tags: "math grade-6",
      caption: "STAAR Grade 6 Math",
      description: "",
      id: 321,
      mime_type: "application/pdf",
      parent: 22,
      slug: "staar-grade-6-math",
      title: "STAAR Grade 6 Math",
      url: "http://parker-jones.org/staar/media/STAAR-Grade-6-Math.pdf"
      },
      {
      tags: "reading grade-6",
      caption: "STAAR Grade 6 Reading",
      description: "",
      id: 322,
      mime_type: "application/pdf",
      parent: 22,
      slug: "staar-grade-6-reading",
      title: "STAAR Grade 6 Reading",
      url: "http://parker-jones.org/staar/media/STAAR-Grade-6-Reading.pdf"
      },
      {
      tags: "math grade-7",
      caption: "STAAR Grade 7 Math",
      description: "",
      id: 323,
      mime_type: "application/pdf",
      parent: 22,
      slug: "staar-grade-7-math",
      title: "STAAR Grade 7 Math",
      url: "http://parker-jones.org/staar/media/STAAR-Grade-7-Math.pdf"
      },
      {
      tags: "reading grade-7",
      caption: "STAAR Grade 7 Reading",
      description: "",
      id: 324,
      mime_type: "application/pdf",
      parent: 22,
      slug: "staar-grade-7-reading",
      title: "STAAR Grade 7 Reading",
      url: "http://parker-jones.org/staar/media/STAAR-Grade-7-Reading.pdf"
      },
      {
      tags: "math spanish grade-3",
      caption: "Math 3 Spanish",
      description: "",
      id: 343,
      mime_type: "application/pdf",
      parent: 22,
      slug: "staar3mathspanish",
      title: "Math 3 Spanish",
      url: "http://parker-jones.org/staar/media/STAAR3MathSpanish.pdf"
      }, 
      {
      tags: "reading spanish grade-3",
      caption: "",
      description: "",
      id: 344,
      mime_type: "application/pdf",
      parent: 22,
      slug: "staar3readingspanish",
      title: "Reading 3 Spanish",
      url: "http://parker-jones.org/staar/media/STAAR3ReadingSpanish.pdf"
      }, 
      {
      tags: "math spanish grade-4",
      caption: "Math 4 Spanish",
      description: "",
      id: 345,
      mime_type: "application/pdf",
      parent: 22,
      slug: "staar4mathspanish",
      title: "Math 4 Spanish",
      url: "http://parker-jones.org/staar/media/STAAR4MathSpanish.pdf"
      }, 
      {
      tags: "reading spanish grade-4",
      caption: "",
      description: "",
      id: 346,
      mime_type: "application/pdf",
      parent: 22,
      slug: "staar4readingspanish",
      title: "Reading 4 Spanish",
      url: "http://parker-jones.org/staar/media/STAAR4ReadingSpanish.pdf"
      }, 
      {
      tags: "math spanish grade-5",
      caption: "",
      description: "",
      id: 347,
      mime_type: "application/pdf",
      parent: 22,
      slug: "staar5mathspanish",
      title: "STAAR5MathSpanish",
      url: "http://parker-jones.org/staar/media/STAAR5MathSpanish.pdf"
      }, 
      {
      tags: "science spanish grade-5",
      caption: "Science 5 Spanish",
      description: "",
      id: 348,
      mime_type: "application/pdf",
      parent: 22,
      slug: "staar5sciencespanish",
      title: "Science 5 Spanish",
      url: "http://parker-jones.org/staar/media/STAAR5ScienceSpanish.pdf"
      }, 
      {
      tags: "spanish EOC",
      caption: "",
      description: "",
      id: 349,
      mime_type: "application/pdf",
      parent: 22,
      slug: "staarworldgeography",
      title: "STAARWorldGeography",
      url: "http://parker-jones.org/staar/media/STAARWorldGeography.pdf"
      }
]);

var galleryView = new GalleryView({collection: downloadItems});
$('#container').html(galleryView.render().el);

(function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();

(function(d){
  var f = d.getElementsByTagName('SCRIPT')[0], p = d.createElement('SCRIPT');
  p.type = 'text/javascript';
  p.async = true;
  p.src = '//assets.pinterest.com/js/pinit.js';
  f.parentNode.insertBefore(p, f);
}(document));


//Survey pop-up window

function showPopup(url) {
newwindow=window.open(url,'name','height=1000,width=800,top=200,left=300,resizable');
if (window.focus) {newwindow.focus()}
}

//Filter for the Downloads page.

$(function(){
  var $checkboxes = $("input[id^='type-']");
  $checkboxes.change(function() {
    var selector = '';
    $checkboxes.filter(':checked').each(function(){ // checked 
        selector += '.' + this.id.replace('type-','') + ', '; 
        // builds a selector like '.reading, .math, .science, ' 
    });
    selector = selector.substring(0, selector.length - 2); // remove trailing ', '

    $('.item-container').css('display','none') // hide all rows
       .filter(selector).css('display','block'); // reduce set to matched and show
  }).change(); 
});


