<!-- create.blade.php -->
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增資料</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">
    <!-- 引入页头 -->
    @include('header')

    <div class="container mx-auto px-6 py-10">
        <h1 class="text-3xl font-extrabold text-center text-gray-900 mb-8">
            新增 113年度社會福利統計資料
        </h1>

        <!-- 表單 -->
        <form action="{{ route('population.store') }}" method="POST" class="space-y-4">
            @csrf
            <!-- 區域 -->
            <div>
                <label for="region" class="block text-sm font-medium text-gray-700">區域</label>
                <input type="text" id="region" name="region" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" required>
            </div>

            <!-- 戶數 -->
            <div>
                <label for="household_count_113_1" class="block text-sm font-medium text-gray-700">113-1期戶數</label>
                <input type="number" id="household_count_113_1" name="household_count_113_1" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" required>
            </div>

            <!-- 男性戶數 -->
            <div>
                <label for="household_count_male_113_1" class="block text-sm font-medium text-gray-700">男性戶數</label>
                <input type="number" id="household_count_male_113_1" name="household_count_male_113_1" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" required>
            </div>

            <!-- 女性戶數 -->
            <div>
                <label for="household_count_female_113_1" class="block text-sm font-medium text-gray-700">女性戶數</label>
                <input type="number" id="household_count_female_113_1" name="household_count_female_113_1" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" required>
            </div>

            <!-- 人口總數 -->
            <div>
                <label for="population_count_113_1" class="block text-sm font-medium text-gray-700">人口總數</label>
                <input type="number" id="population_count_113_1" name="population_count_113_1" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" required>
            </div>

            <!-- 男性人口數 -->
            <div>
                <label for="population_count_male_113_1" class="block text-sm font-medium text-gray-700">男性人口數</label>
                <input type="number" id="population_count_male_113_1" name="population_count_male_113_1" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" required>
            </div>

            <!-- 女性人口數 -->
            <div>
                <label for="population_count_female_113_1" class="block text-sm font-medium text-gray-700">女性人口數</label>
                <input type="number" id="population_count_female_113_1" name="population_count_female_113_1" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" required>
            </div>

            <!-- 提交按鈕 -->
            <div class="text-center mt-6">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                    儲存資料
                </button>
            </div>
        </form>
    </div>

    <!-- 引入页脚 -->
    @include('footer')
</body>
</html>
