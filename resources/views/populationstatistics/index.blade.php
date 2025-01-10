<!-- index.blade.php -->
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>113年度社會福利統計一覽表-中低收入戶 </title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">
    <!-- 引入页头 -->
    @include('header')

    <div class="container mx-auto px-6 py-10">
        <h1 class="text-3xl font-extrabold text-center text-gray-900 mb-8">
            113年度社會福利統計一覽表-
            中低收入戶
        </h1>
        
        <!-- 搜尋欄 -->
        <div class="flex justify-between items-center mb-4">
            <div>
                <label for="search" class="block text-sm font-medium text-gray-700">搜尋區域</label>
                <input type="text" id="search" placeholder="輸入區域名稱"
                       class="mt-1 block w-full max-w-xs rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
            </div>
        </div>

        <!-- 表格 -->
        <div class="overflow-x-auto rounded-lg shadow-lg bg-white">
            <table class="min-w-full border-collapse border border-gray-200 text-sm">
                <thead class="bg-gradient-to-r from-blue-50 to-blue-100">
                    <tr>
                        <th class="border border-gray-300 px-4 py-2 text-left font-semibold">區域</th>
                        <th class="border border-gray-300 px-4 py-2 text-left font-semibold">113-1期戶數</th>
                        <th class="border border-gray-300 px-4 py-2 text-left font-semibold">男性戶數</th>
                        <th class="border border-gray-300 px-4 py-2 text-left font-semibold">女性戶數</th>
                        <th class="border border-gray-300 px-4 py-2 text-left font-semibold">人口總數</th>
                        <th class="border border-gray-300 px-4 py-2 text-left font-semibold">男性人口數</th>
                        <th class="border border-gray-300 px-4 py-2 text-left font-semibold">女性人口數</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($population_statistics as $population_statistic)
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">{{ $population_statistic->region }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $population_statistic->household_count_113_1 }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $population_statistic->household_count_male_113_1 }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $population_statistic->household_count_female_113_1 }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $population_statistic->population_count_113_1 }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $population_statistic->population_count_male_113_1 }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $population_statistic->population_count_female_113_1 }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- 分頁 -->
        <div class="mt-6 flex justify-between items-center">
            <p class="text-gray-500 text-sm">顯示第 1 到 10 筆，共 {{ $population_statistics->count() }} 筆資料</p>
            <div class="flex space-x-2">
                <button class="px-4 py-2 bg-gray-100 text-gray-600 rounded hover:bg-gray-200">上一頁</button>
                <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">下一頁</button>
            </div>
        </div>
    </div>



    <!-- 引入页脚 -->
    @include('footer')
</body>
</html>
