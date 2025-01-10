<!-- header.blade.php -->
<header class="bg-blue-800 text-white py-4">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo / Title -->
        <div class="flex items-center space-x-3">
            <!-- 可持续发展目标 Logo (可以替换为实际的 SDGs 图标) -->
        
        </div>

        <!-- 导航菜单 -->
        <nav class="space-x-8 text-lg">
            <a href="/" class="hover:text-gray-300">首頁</a>
            <a href="/about" class="hover:text-gray-300">關於我們</a>
            <a href="/goals" class="hover:text-gray-300">SDGs 目標</a>
            <a href="/resources" class="hover:text-gray-300">資源與報告</a>
            <a href="/contact" class="hover:text-gray-300">聯繫我們</a>
        </nav>

        <!-- 搜索框 -->
        <div class="flex items-center space-x-3">
            <input type="text" placeholder="搜尋 SDGs 資訊..."
                   class="px-4 py-2 rounded-md border-gray-300 focus:ring-blue-500 focus:border-blue-500">
            <button class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">搜尋</button>
        </div>
    </div>
</header>
