<div class="main-content">
    <a href="{{ route('comics-list') }}">
        <img src="https://www.pngmart.com/files/23/Dc-Logo-PNG-HD.png" alt="DC Comics Logo">
    </a>
</div>




<style lang="scss">
    * {
        font-family: 'Comic Sans MS', sans-serif;
    }

    .main-content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: rgba(255, 255, 255, 0.3);
        margin: 30px;
    }


    .main-content {
        position: relative;
    }

    .main-content a::after {
        content: "Clicca qui";
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .main-content a:hover::after {
        opacity: 1;
</style>
