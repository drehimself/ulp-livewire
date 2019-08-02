<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Counter</title>
</head>
<body>
    <div id="app">
        <h2>Vue Example</h2>
        <counter></counter>

        <hr>

        <h2>Livewire Example</h2>
        @livewire('counter')
    </div>

    @livewireAssets
    <script src="/js/app.js"></script>
</body>
</html>
