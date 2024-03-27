document.addEventListener("DOMContentLoaded", function () {
	// Your form or trigger element
	// var myButton = document.querySelector(".wp-element-button");

	if (myButton) {
		myButton.addEventListener("click", function (e) {
			e.preventDefault();
			// Your data to be sent
			var data = {
				action: "my_ajax_action",
				// Add any other data you want to send
			};

			// Fetch request
			fetch(ajax_object.ajax_url, {
				method: "POST",
				headers: {
					"Content-Type": "application/x-www-form-urlencoded",
				},
				body: new URLSearchParams(data),
			})
				.then((response) => response.json())
				.then((data) => {
					// Handle the response data
					console.log(data);
				})
				.catch((error) => {
					// Handle errors
					console.error("Error:", error);
				});
		});
	}
});
