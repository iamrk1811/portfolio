// START Project Area
// alert("hello")

function filter_cards(obj){

    var clicked_btn = obj;
    var bt_array = document.getElementsByClassName('button-group');
    var available_btn = bt_array[0].children;
    for(i = 0; i < available_btn.length; i++){
       available_btn[i].classList.remove("active-btn");
    }
    clicked_btn.classList.add("active-btn");

    var  filter_data = clicked_btn.getAttribute('data-filter');
    $('.grid').isotope({
        filter: filter_data
    });

    return false;
}

function project_details_animate_mouse_hover(obj) {
    obj.children[1].className = "project-short-information-container d-block animated zoomIn"
}
function project_details_animate_mouse_leave(obj) {
    obj.children[1].className = "project-short-information-container d-block animated zoomOut"
}
// END Project Area


// START Blog

// function blur_other_blog(obj){
//     var hover_blog = obj;
//     var blog_array = document.getElementsByClassName('blog');
//     for( i=0; i< blog_array.length; i++){
//         blog_array[i].children[5].classList.remove('d-none');
//     }
//     hover_blog.children[5].classList.add('d-none')

// }

// function clear_other_blog(obj){
//     var hover_blog = obj;
//     var blog_array = document.getElementsByClassName('blog');
//     for( i=0; i< blog_array.length; i++){
//         blog_array[i].children[5].classList.add('d-none')
//     }
// }
// END Blog