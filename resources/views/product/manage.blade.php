<x-app-layout>
    <x-slot name="header">
    <h1 class="font-bold text-[32px] left-[135px] py-2">Bài viết đã đăng</h1>
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
    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-y-4">

                <a class="cursor-pointer max-w-[780px] w-full flex justify-center" href="">
                    <div class="flex items-start py-5 px-5 bg-white rounded-2xl border border-[#897272] max-w-[780px] w-full">
                        <div class="w-[174px] h-[156px] flex items-center">
                            <img class="max-w-full max-h-full mx-auto my-auto" 
                            src="https://hondadoanhthu.com.vn/wp-content/uploads/2022/01/eOrVrOLAOD0Fvshzhu3G.jpg"/>
                        </div>
                        <div class="flex ml-2 flex-col">
                            <span class="text-2xl block">Xe wave RSX</span>
                            <span class="text-lg text-[#EC1B1B]">5.000.000đ</span>
                            <span class="text-lg text-black">Loại xe: Xe số</span>
                            <span class="text-lg text-black">Thời gian sử dụng: 3 năm</span>
                        </div>
                        <div class=" flex ml-24 flex-col items-center py-3  w-[172px] gap-y-6">
                            <button class="bg-[#4ECB71] text-white w-full px-2 py-2 rounded-md">
                                <span ><i class="i fi-rs-check-circle px-2 text-lg"></i>Đã bán</span>
                            </button>
                            <button class="bg-[#EC1B1B] text-white w-full px-2 py-2 rounded-md">
                                <span><i class="fi fi-rr-trash px-2 text-lg"></i>Xóa</span>
                            </button>
                        </div>
                    </div>
                </a> 
               
            </div>
        </div>
    </div>
</x-app-layout>
