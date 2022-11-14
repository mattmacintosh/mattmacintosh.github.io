window.onload = function() {
	setTimeout(function() {
		// preload wallpaper
		new Image().src = "http://mattmacintosh.com/images/wallpaper/Real-Estates_WP.jpg";
		new Image().src = "http://mattmacintosh.com/images/wallpaper/Subject_WP.jpg";
		new Image().src = "http://mattmacintosh.com/images/wallpaper/Mac-OS-CMYK_Davos.WP.jpg";
		new Image().src = "http://mattmacintosh.com/images/wallpaper/Nagarjuna-and-Difference_WP.jpg";
		new Image().src = "http://mattmacintosh.com/images/wallpaper/Dog-CaterpillarSKY_WP.jpg";
		new Image().src = "http://mattmacintosh.com/images/wallpaper/Illuminated-Manuscripts_WP.jpg";
	}, 1000);
};

function realEstates() {
	var backStretchImage = $.backstretch(["http://mattmacintosh.com/images/wallpaper/Real-Estates_WP.jpg"]);
	var backStretchImageHeight = $(".backstretch img").attr("height", "1");
	var backStretchImageWidth = $(".backstretch img").attr("width", "1");
	var backStretchImageARIAHidden = $(".backstretch img").attr("aria-hidden", "true");
}
function subject() {
	var backStretchImage = $.backstretch(["http://mattmacintosh.com/images/wallpaper/Subject_WP.jpg"]);
	var backStretchImageHeight = $(".backstretch img").attr("height", "1");
	var backStretchImageWidth = $(".backstretch img").attr("width", "1");
	var backStretchImageARIAHidden = $(".backstretch img").attr("aria-hidden", "true");
}
function cmyk() {
	var backStretchImage = $.backstretch(["http://mattmacintosh.com/images/wallpaper/Mac-OS-CMYK_Davos.WP.jpg"]);
	var backStretchImageHeight = $(".backstretch img").attr("height", "1");
	var backStretchImageWidth = $(".backstretch img").attr("width", "1");
	var backStretchImageARIAHidden = $(".backstretch img").attr("aria-hidden", "true");
}
function nagarjuna() {
	var backStretchImage = $.backstretch(["http://mattmacintosh.com/images/wallpaper/Nagarjuna-and-Difference_WP.jpg"]);
	var backStretchImageHeight = $(".backstretch img").attr("height", "1");
	var backStretchImageWidth = $(".backstretch img").attr("width", "1");
	var backStretchImageARIAHidden = $(".backstretch img").attr("aria-hidden", "true");
}
function dog() {
	var backStretchImage = $.backstretch(["http://mattmacintosh.com/images/wallpaper/Dog-CaterpillarSKY_WP.jpg"]);
	var backStretchImageHeight = $(".backstretch img").attr("height", "1");
	var backStretchImageWidth = $(".backstretch img").attr("width", "1");
	var backStretchImageARIAHidden = $(".backstretch img").attr("aria-hidden", "true");
}
function illuminated() {
	var backStretchImage = $.backstretch(["http://mattmacintosh.com/images/wallpaper/Illuminated-Manuscripts_WP.jpg"]);
	var backStretchImageHeight = $(".backstretch img").attr("height", "1");
	var backStretchImageWidth = $(".backstretch img").attr("width", "1");
	var backStretchImageARIAHidden = $(".backstretch img").attr("aria-hidden", "true");
}