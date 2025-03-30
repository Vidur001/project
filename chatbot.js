<!-- JavaScript for chatbot -->
document.getElementById("open-chat-btn").addEventListener("click", function () {
    document.getElementById("chatbox").style.display = "block";
    document.getElementById("open-chat-btn").style.display = "none";
});

document.getElementById("close-chat").addEventListener("click", function () {
    document.getElementById("chatbox").style.display = "none";
    document.getElementById("open-chat-btn").style.display = "block";
});

document.getElementById("send-btn").addEventListener("click", function () {
    const userInput = document.getElementById("user-input").value;
    if (userInput) {
        appendMessage("User: " + userInput);
        document.getElementById("user-input").value = "";
        // Call the AI assistant (ChatGPT or other API) to get a response
        getAIResponse(userInput);
    }
});

function appendMessage(message) {
    const messageDiv = document.createElement("div");
    messageDiv.innerText = message;
    document.getElementById("messages").appendChild(messageDiv);
}

async function getAIResponse(query) {
    const response = await fetch("https://api.openai.com/v1/completions", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "Authorization": "Bearer YOUR_API_KEY"
        },
        body: JSON.stringify({
            model: "text-davinci-003", // Example: can be any ChatGPT model
            prompt: query,
            max_tokens: 150
        })
    });
    const data = await response.json();
    appendMessage("Assistant: " + data.choices[0].text.trim());
}
