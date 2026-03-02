<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<nav class="bg-white py-1   w-full z-20 top-0 start-0 border-b border-gray-300 ">
        <div class="w-full md:max-w-7xl flex flex-wrap items-center justify-between mx-auto px-1 md:px-4 py-2">
        <a href="#" class="flex items-center justify-center space-x-3 rtl:space-x-reverse">
            <!-- <img src="#docs/images/logo.svg" class="h-8" alt="Flowbite Logo"> -->
            <img src="images/logo.png" class="h-14" alt="Logo">
            <!-- <span class="self-center text-2xl font-semibold whitespace-nowrap ">Datahub</span> -->
        </a>
        <div class="flex items-center justify-between mt-2 md:mt-0 md:order-2 space-x-8 md:space-x-0 rtl:space-x-reverse">
            <a href="contact.php" class="text-gray-900 hover:bg-[#00DBC5] focus:ring-4 focus:outline-none focus:ring-[#022B69] font-medium rounded-lg text-sm px-4 md:px-8 py-2 md:py-3 mr-0 md:mr-4 text-center ">Contact Us</a>
            <a href="https://app.zennalfinance.com/quick_loan.php" class="text-white bg-[#00DBC5] hover:bg-[#00DBC5] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 md:px-8 py-2  md:py-3 text-center ">Apply Now</a>
            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm  rounded-lg md:hidden  focus:outline-none focus:ring-2 focus:ring-[#00DBC5] hover:bg-[#00DBC5] " aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>
        <div class="items-center hidden w-full  md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col  p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-12 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white ">
            
            <li>
                <?php if($current_page == 'index.php'){
                    echo '<a href="index.php" class="block font-normal text-md py-2 px-3 text-white bg-[#00DBC5] rounded-sm md:bg-transparent md:text-[#00DBC5] md:p-0" aria-current="page">Home</a>';
                    
                }else{
                    echo '<a href="index.php" class="block font-normal text-md py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#00DBC5] md:p-0 ">Home</a>';

                }?>
            </li>
            <li>
                <?php if($current_page == 'about.php'){
                    echo '<a href="about.php" class="block font-normal text-md py-2 px-3 text-white bg-[#00DBC5] rounded-sm md:bg-transparent md:text-[#00DBC5] md:p-0" aria-current="page">About Us</a>';
                    
                }else{
                    echo '<a href="about.php" class="block font-normal text-md py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#00DBC5] md:p-0 ">About Us</a>';

                }?>
            </li>
            <li>
                <?php if($current_page == 'faqs.php'){
                    echo '<a href="faqs.php" class="block font-normal text-md py-2 px-3 text-white bg-[#00DBC5] rounded-sm md:bg-transparent md:text-[#00DBC5] md:p-0" aria-current="page">FAQs</a>';
                    
                }else{
                    echo '<a href="faqs.php" class="block font-normal text-md py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#00DBC5] md:p-0 ">FAQs</a>';

                }?>
            </li>
            </ul>
        </div>
        </div>
        </nav>