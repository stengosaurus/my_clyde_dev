<?php
    $newsId = $_GET['news_id'];
    include '../../config/config.php';
    include '../../partials/Header.php';
    ?>
<!-- comment form -->
<div class="flex mx-auto items-center justify-center shadow-lg mt-56 mx-8 mb-4 max-w-lg">
   <form action="<?= BASE_PATH ?>queries/student_comment.php" method="post"  class="w-full max-w-xl bg-white rounded-lg px-4 pt-2">
    <input type="hidden" name="student_num" value="<?= $_SESSION['student_num'] ?>" />
    <input type="hidden" name="fk_news_id" value="<?= $newsId ?>" />
      <div class="flex flex-wrap -mx-3 mb-6">
         <h2 class="px-4 pt-3 pb-2 text-gray-800 text-lg">Add a new comment</h2>
         <div class="w-full md:w-full px-3 mb-2 mt-2">
            <textarea class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" name="comment" placeholder='Type Your Comment' required></textarea>
         </div>
         <div class="w-full md:w-full flex items-start md:w-full px-3">
            <div class="flex items-start w-1/2 text-gray-700 px-2 mr-auto">
               <svg fill="none" class="w-5 h-5 text-gray-600 mr-1" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
               </svg>
               <p class="text-xs md:text-sm pt-px">Your comment will be shown once approved.</p>
            </div>
            <div class="-mr-1">
               <input type='submit' class="bg-white text-gray-700 font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-gray-100" value='Post Comment'>
            </div>
         </div>
      </form>
   </div>
</div>
