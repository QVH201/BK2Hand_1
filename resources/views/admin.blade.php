<x-app-layout>
    <x-slot name="header">
        <div class="flex items-start space-x-5">
        
            <div class="relative" >
                <div class="py-2 px-2 bg-white text-base border border-[rgba(0,0,0,0.5)] rounded-md inline-flex items-center">
                    <span id="onclick" class="block leading-4 font-medium text-base px-2">{{ __('Tất cả sản phẩm')}}</span>
                </div>
            </div>
            <div class="relative" >
                <div class="py-2 px-2 bg-white text-base border border-[rgba(0,0,0,0.5)] rounded-md inline-flex items-center">
                    <span id="onclick" class="block leading-4 font-medium text-base px-2">{{ __('Sản phẩm chưa bán') }}</span>
                </div>
            </div>

            <div class="relative" >
                <div class="py-2 px-2 bg-white text-base border border-[rgba(0,0,0,0.5)] rounded-md inline-flex items-center">
                    <span id="onclick" class="block leading-4 font-medium text-base px-2">{{ __('Sản phẩm đã bán') }}</span>
                </div>
            </div>

            <script>

            </script>
        </div>
    </x-slot>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-black dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-white dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    STT
                </th>
                <th scope="col" class="px-6 py-3">
                    Tên sản phẩm
                </th>
                <th scope="col" class="px-6 py-3">
                    Loại
                </th>
                <th scope="col" class="px-6 py-3">
                    Thời gian sử dụng
                </th>
                <th scope="col" class="px-6 py-3">
                    Giá
                </th>
                <th scope="col" class="px-6 py-3">
                    Mô tả
                </th>
                <th scope="col" class="px-6 py-3">
                    Ảnh
                </th>
                <th scope="col" class="px-6 py-3">
                    Video
                </th>
                <th scope="col" class="px-6 py-3">
                    Xác nhận
                </th>
                <th scope="col" class="px-6 py-3">
                    Xóa
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    1
                </td>
                <td class="px-6 py-4">
                    Xe wave RSX
                </td>
                <td class="px-6 py-4">
                    Xe số
                </td>
                <td class="px-6 py-4">
                    3 năm
                </td>
                <td class="px-6 py-4">
                    8.000.000đ
                </td>
                <td class="px-6 py-4">
                    Thời gian sử dụng
                </td>
                <td class="px-6 py-4">
                    <!-- Cột Ảnh -->
                </td>
                <td class="px-6 py-4">
                    <!-- Cột Video -->
                </td>
                <td class="flex flex-col px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
                <td class="flex flex-col px-6 py-4">
                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Remove</a>
                </td>
            </tr>
            <!-- Các hàng khác -->
        </tbody>
    </table>
</div>
</x-app-layout>
