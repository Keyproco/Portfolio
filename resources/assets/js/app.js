require('./bootstrap');
import router from './routes';



new Vue({
    el: '#app',
    router
});
// var ProgressBar = require('progressbar.js')

// window.onload = function onLoad() {
// AnimateCircle("progress", .5);

// function AnimateCircle(container_id, animatePercentage) {
//     var startColor = '#FC5B3F';
//     var endColor = '#6FD57F';

//     var element = document.getElementById(container_id);
//     var circle = new ProgressBar.Circle(element, {
//         color: startColor,
//         trailColor: '#eee',
//         trailWidth: 5,
//         duration: 1000,
//         easing: 'bounce',
//         strokeWidth: 5,
//         text: {
//             value: (animatePercentage * 100) + " % complete.",
//             className: 'progressbar__label'
//         },
//         // Set default step function for all animate calls
//         step: function (state, circle) {
//             circle.path.setAttribute('stroke', state.color);
//         }
//     });

//     circle.animate(animatePercentage, {
//         from: {
//             color: startColor
//         },
//         to: {
//             color: endColor
//         }
//     });
// }
// };