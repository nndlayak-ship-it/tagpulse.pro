function generateTags() {
    let keyword = document.getElementById("keyword").value.trim();
    if (keyword === "") return alert("Please enter a keyword!");

    document.getElementById("loading").style.display = "block";
    document.getElementById("result").style.display = "none";

    let formData = new FormData();
    formData.append("keyword", keyword);

    fetch("generate.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        document.getElementById("loading").style.display = "none";

        if (data.error) {
            document.getElementById("result").innerHTML = data.error;
            return;
        }

        let html = "<h3>Generated Tags</h3>";

        data.forEach(tag => {
            html += `<p>${tag}</p>`;
        });

        document.getElementById("result").style.display = "block";
        document.getElementById("result").innerHTML = html;
    })
    .catch(err => {
        document.getElementById("loading").style.display = "none";
        document.getElementById("result").innerHTML = "Error generating tags.";
    });
}