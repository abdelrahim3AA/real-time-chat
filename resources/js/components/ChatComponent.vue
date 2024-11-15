<template>
    <div class="chat-container">
      <!-- Chat Title -->
      <header class="chat-title">
        <h2>Chat Room</h2>
      </header>
  
      <!-- Chat Messages -->
      <div class="chat-messages" v-chat-scroll>
  <div v-for="(message, index) in messages" :key="index" class="message">
    <p>{{ message.text }}</p>
    <small class="badge">You</small>
  </div>
  <!-- Badge placed outside the message -->
</div>
  
      <!-- Input Area -->
      <footer class="chat-input">
        <input
          type="text"
          v-model="newMessage"
          placeholder="Type your message"
          @keyup.enter="sendMessage"
        />
        <button @click="sendMessage">Send</button>
      </footer>
    </div>
  </template>
  
  <script>
  
  export default {
    name: 'ChatComponent',
    data() {
      return {
        messages: [], // Example array of messages
        newMessage: '',
      };
    },
    methods: {
      sendMessage() {
        if (this.newMessage.trim()) {
          this.messages.push({ text: this.newMessage });
          this.newMessage = '';
        }
      },
    },
  };
  </script>
  <style scoped>
  .chat-container {
    display: flex;
    flex-direction: column;
    height: 95vh;
    max-width: 500px;
    margin: 20px auto;
    border: 1px solid #ccc;
    box-shadow: 0 0 10px rgba(125, 229, 73, 0.1);
    border-radius: 10px;
    overflow: hidden;
  }

  .chat-title {
    flex-shrink: 0;
    background-color: #00a028;
    color: white;
    padding: 1rem;
    text-align: center;
    font-size: 1.2rem;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
  }

  .chat-messages {
    flex-grow: 1;
    overflow-y: auto;
    padding: 1rem;
    background-color: #f9f9f9d6;
  }

  .message {
    margin-bottom: 1rem;
    padding: 0.5rem;
    background-color: #c2fcc5;
    border-radius: 5px;
    position: relative;
    margin: 0px 0px 30px 0 ;
  }

  /* Adjust badge outside the message */
  .badge {
    position: absolute;
    bottom: -24px; /* Move the badge outside and to the bottom */
    right: 10px; /* Align to the right edge */
    font-size: 0.8rem;
    padding: 0.3rem 0.6rem;
    border-radius: 12px;
    background-color: #07cf04; /* Red background for the badge */
    color: white;
}

  .chat-input {
    flex-shrink: 0;
    display: flex;
    gap: 0.5rem;
    padding: 1rem;
    background-color: #ffffff;
    border-top: 1px solid #ccc;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
  }

  .chat-input input {
    flex-grow: 1;
    padding: 0.5rem;
    border: 2px solid #00a02894;
    border-radius: 5px;
  }

  .chat-input button {
    padding: 0.5rem 1rem;
    background-color: #00a028;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  .chat-input button:hover {
    background-color: #00761e;
  }
</style>

