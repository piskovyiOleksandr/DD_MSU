$(window).load(function () {
	setTimeout(() => {
		$('.load-block').fadeOut()
		$('.main-block').fadeIn()
	},1500)
	$('button').click(()=> {
		$('.answer-block').fadeIn()
	})
	$('.close').click(()=> {
		$('.answer-block').fadeOut()
	})

});