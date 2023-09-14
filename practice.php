<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?><!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Practice</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   

   <style>
    body{
      
        
      background-color: white;
      color: black;
      font-size: 25px;
    }
    
    
    .dark-mode {
      background-color: black;
      color: white;
    }
    table{
        width: 100%;
       
    }
    tr:nth-child(even){
        background-color:#efe2f6;
       
    }
    table{
        margin:10px;
        text-align: left;
        box-shadow: 1px 1px 1px grey;
    }
    table,tr,td,th{
        border: 1px solid black;
        border-collapse: collapse;
        padding-left: 10px;

    } #dsa_sheets_problems_table_row_details #dsa_sheets_problems_table_row_summary:after {
               
                color: #000;
                position: absolute;
                font-size: 1.75rem;
                line-height: 0;
                right: .25em;
                font-weight: 200;
                transform-origin: center;
                transition: 200ms linear
            }

            #dsa_sheets_problems_table_row_details[open] #dsa_sheets_problems_table_row_details #dsa_sheets_problems_table_row_summary::after {
                margin-top: 0;
                margin-right: 5px;
                margin-left: 3px
            }

            #dsa_sheets_problems_table_row_details[open] #dsa_sheets_problems_table_row_summary:after {
                transform: rotate(45deg);
                font-size: 2rem;
                color: #000
            } .detailsTable {
                overflow-x: scroll
            }
            details{
                border:1px solid #8e44ad;
                width:100%;
                padding:8px;
                box-shadow: 2px 2px 1px grey;
                font-size: small; 

                font-size: 17px;
            }
            details{
                list-style-type: circle;

            }
    
   
   </style>
</head>
<body>

<?php include 'components/user_header.php'; ?>
<body>
<section class="teachers">

<h2 style="text-align: center;color: #8e44ad;"> Practice Top Interview Questions</h2>
<p style="font-size:medium; ">(This Sheet contains very handily crafted and picked top coding interview questions from different topics of Data Structures & Algorithms. These questions are one of the most asked coding interview questions in coding interviews of companies like Amazon, Microsoft, Media.net, Flipkart, etc, and cover almost all of the concepts related to Data Structure & Algorithms.)<p>
   <details id="dsa_sheets_problems_table_row_details">
      <summary id="dsa_sheets_problems_table_row_summary">
          Arrays
      </summary>
      <table class="detailsTable">
          <tbody>
              <tr>
                 
                  <th>
                      <strong>Problem</strong>
                  </th>
                  <th>
                      <strong>Practice Link 1</strong>
                  </th>
                 
                  <th>
                      <strong>Practice Link 2</strong>
                  </th>
              </tr>
              <tr>
                 
                  <td>
                      <a href="https://takeuforward.org/data-structure/set-matrix-zero/" target="_blank" rel="noopener">Set Matrix Zeroes</a>
                  </td>
                  <td>
                      <a href="https://www.codingninjas.com/codestudio/problems/set-matrix-zeros_3846774?topList=striver-sde-sheet-problems&amp;utm_source=striver&amp;utm_medium=website" target="_blank" rel="noopener">Link 1</a>
                  </td>
                 
                  <td>
                      <a href="https://leetcode.com/problems/set-matrix-zeroes/" target="_blank" rel="nofollow noopener">Link 2</a>
                  </td>
              </tr>
              <tr>
                 
                  <td>
                      <a href="https://takeuforward.org/data-structure/program-to-generate-pascals-triangle/" target="_blank" rel="noopener">Pascal &#8217;s Triangle</a>
                  </td>
                  <td>
                      <a href="https://bit.ly/3rhv153" target="_blank" rel="nofollow noopener">Link 1</a>
                  </td>
                 
                  <td>
                      <a href="https://leetcode.com/problems/pascals-triangle/" target="_blank" rel="nofollow noopener">Link 2</a>
                  </td>
              </tr>
              <tr>
                 
                  <td>
                      <a href="https://takeuforward.org/data-structure/next_permutation-find-next-lexicographically-greater-permutation/" target="_blank" rel="noopener">Next Permutation</a>
                  </td>
                  <td>
                      <a href="https://bit.ly/3qoj5iQ" target="_blank" rel="nofollow noopener">Link 1</a>
                  </td>
                 
                  <td>
                      <a href="https://leetcode.com/problems/next-permutation/" target="_blank" rel="nofollow noopener">Link 2</a>
                  </td>
              </tr>
              <tr>
                 
                  <td>
                      <a href="https://takeuforward.org/data-structure/kadanes-algorithm-maximum-subarray-sum-in-an-array/" target="_blank" rel="noopener">Kadane &#8217;s Algorithm</a>
                  </td>
                  <td>
                      <a href="https://bit.ly/3HZltTa" target="_blank" rel="nofollow noopener">Link 1</a>
                  </td>
                 
                  <td>
                      <a href="https://leetcode.com/problems/maximum-subarray/" target="_blank" rel="nofollow noopener">Link 2</a>
                  </td>
              </tr>
              <tr>
                 
                  <td>
                      <a href="https://www.youtube.com/watch?v=tp8JIuCXBaU&amp;list=PLgUwDviBIf0oF6QL8m22w1hIDC1vJ_BHz&amp;index=20" target="_blank" rel="noopener">Sort an array of 0’s 1’s 2’s</a>
                  </td>
                  <td>
                      <a href="https://bit.ly/3tlM60B" target="_blank" rel="nofollow noopener">Link 1</a>
                  </td>
                 
                  <td>
                      <a href="https://leetcode.com/problems/sort-colors/" target="_blank" rel="nofollow noopener">Link 2</a>
                  </td>
              </tr>
              <tr>
                 
                  <td>
                      <a href="https://takeuforward.org/data-structure/stock-buy-and-sell/" target="_blank" rel="noopener">Stock buy and Sell</a>
                  </td>
                  <td>
                      <a href="https://bit.ly/3GsANaD" target="_blank" rel="nofollow noopener">Link 1</a>
                  </td>
                 
                  <td>
                      <a href="https://leetcode.com/problems/best-time-to-buy-and-sell-stock/" target="_blank" rel="nofollow noopener">Link 2</a>
                  </td>
              </tr>
          </tbody>
      </table>
  </details>
  <details id="dsa_sheets_problems_table_row_details">
      <summary id="dsa_sheets_problems_table_row_summary">
         
         Arrays Part-II
      </summary>
      <table>
          <tbody>
              <tr>
                 
                  <th>
                      <strong>Problem</strong>
                  </th>
                  <th>
                      <strong>Practice Link 1</strong>
                  </th>
                 
                  <th>
                      <strong>Practice Link 2</strong>
                  </th>
              </tr>
              <tr>
                 
                  <td>
                      <a href="https://takeuforward.org/data-structure/rotate-image-by-90-degree/" target="_blank" rel="noopener">Rotate Matrix</a>
                  </td>
                  <td>
                      <a href="https://bit.ly/3rhVUWx" target="_blank" rel="nofollow noopener">Link 1</a>
                  </td>
                 
                  <td>
                      <a href="https://leetcode.com/problems/rotate-image/" target="_blank" rel="nofollow noopener">Link 2</a>
                  </td>
              </tr>
              <tr>
                 
                  <td>
                      <a href="https://takeuforward.org/data-structure/merge-overlapping-sub-intervals/" target="_blank" rel="noopener">Merge Overlapping Subintervals</a>
                  </td>
                  <td>
                      <a href="https://bit.ly/3rj9LvO" target="_blank" rel="nofollow noopener">Link 1</a>
                  </td>
                 
                  <td>
                      <a href="https://leetcode.com/problems/merge-intervals/">Link 2</a>
                  </td>
              </tr>
              <tr>
                 
                  <td>
                      <a href="https://takeuforward.org/data-structure/merge-two-sorted-arrays-without-extra-space/" target="_blank" rel="noopener">Merge two sorted Arrays without extra space</a>
                  </td>
                  <td>
                      <a href="https://bit.ly/33umm7e" target="_blank" rel="nofollow noopener">Link 1</a>
                  </td>
                 
                  <td>
                      <a href="https://leetcode.com/problems/merge-sorted-array/" target="_blank" rel="nofollow noopener">Link 2</a>
                  </td>
              </tr>
              <tr>
                 
                  <td>
                      <a href="https://takeuforward.org/data-structure/find-the-duplicate-in-an-array-of-n1-integers/" target="_blank" rel="noopener">Find the duplicate in an array of N+1 integers</a>
                      .
                  </td>
                  <td>
                      <a href="https://bit.ly/3GtKDJb" target="_blank" rel="nofollow noopener">Link 1</a>
                  </td>
                 
                  <td>
                      <a href="https://leetcode.com/problems/find-the-duplicate-number/" target="_blank" rel="nofollow noopener">Link 2</a>
                  </td>
              </tr>
              <tr>
                 
                  <td>
                      <a href="https://takeuforward.org/data-structure/find-the-repeating-and-missing-numbers/" target="_blank" rel="noopener">Repeat and Missing Number</a>
                  </td>
                  <td>
                      <a href="https://bit.ly/3Gs6wZu" target="_blank" rel="nofollow noopener">Link 1</a>
                  </td>
                 
                  <td>
                      <a href="https://www.interviewbit.com/problems/repeat-and-missing-number-array/" target="_blank" rel="nofollow noopener">Link 2</a>
                  </td>
              </tr>
              <tr>
                 
                  <td>
                      <a href="https://takeuforward.org/data-structure/count-inversions-in-an-array/" target="_blank" rel="noopener">Inversion of Array (Pre-req: Merge Sort)</a>
                  </td>
                  <td>
                      <a href="https://bit.ly/339fFb7" target="_blank" rel="nofollow noopener">Link 1</a>
                  </td>
<td><a href="https://www.codingninjas.com/codestudio/problems/count-inversions_615 " target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
</tbody>
</table>
</details>
<details id="dsa_sheets_problems_table_row_details ">
<summary id="dsa_sheets_problems_table_row_summary ">Arrays Part-III</summary>
<table>
<tbody>
<tr>
<th><strong>Problem</strong></th>
<th><strong>Practice Link 1</strong></th>
<th><strong>Practice Link 2</strong></th>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/search-in-a-sorted-2d-matrix/" target="_blank " rel="noopener ">Search in a 2d Matrix</a></td>
<td><a href="https://bit.ly/3GD7NNa " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/search-a-2d-matrix/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/implement-powxn-x-raised-to-the-power-n/" target="_blank " rel="noopener ">Pow(X,n)</a></td>
<td><a href="https://bit.ly/3Gtjwhl " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/powx-n/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/find-the-majority-element-that-occurs-more-than-n-2-times/" target="_blank " rel="noopener ">Majority Element (&gt;N/2 times)</a></td>
<td><a href="https://bit.ly/3FpfpBQ " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/majority-element/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/majority-elementsn-3-times-find-the-elements-that-appears-more-than-n-3-times-in-the-array/" target="_blank " rel="noopener ">Majority Element (&gt;N/3 times)</a></td>
<td><a href="https://bit.ly/3foYLYp " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/majority-element-ii/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/grid-unique-paths-count-paths-from-left-top-to-the-right-bottom-of-a-matrix/" target="_blank " rel="noopener ">Grid Unique Paths</a></td>
<td><a href="https://bit.ly/3fm1dyN " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/unique-paths/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/count-reverse-pairs/" target="_blank " rel="noopener ">Reverse Pairs (Leetcode)</a></td>
<td><a href="https://bit.ly/3tm5PgF " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/reverse-pairs/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
</tbody>
</table>
</details>
<details id="dsa_sheets_problems_table_row_details ">
<summary id="dsa_sheets_problems_table_row_summary ">Arrays Part-IV</summary>
<table>
<tbody>
<tr>
<th><strong>Problem</strong></th>
<th><strong>Practice Link 1</strong></th>
<th><strong>Practice Link 2</strong></th>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/two-sum-check-if-a-pair-with-given-sum-exists-in-array/" target="_blank " rel="noopener ">2-Sum-Problem</a></td>
<td><a href="https://bit.ly/3riXBmz " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/two-sum/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/4-sum-find-quads-that-add-up-to-a-target-value/" target="_blank " rel="noopener ">4-sum-Problem</a></td>
<td><a href="https://bit.ly/3qpfEsj " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/4sum/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/longest-consecutive-sequence-in-an-array/" target="_blank " rel="noopener ">Longest Consecutive Sequence</a></td>
<td><a href="https://bit.ly/34EoAS0 " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/longest-consecutive-sequence/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/length-of-the-longest-subarray-with-zero-sum/" target="_blank " rel="noopener ">Largest Subarray with K sum</a></td>
<td><a href="https://bit.ly/31UHoeM " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://practice.geeksforgeeks.org/problems/largest-subarray-with-0-sum/1 " target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/count-the-number-of-subarrays-with-given-xor-k/" target="_blank " rel="noopener ">Count number of subarrays with given Xor K</a></td>
<td><a href="https://bit.ly/3fp24yN " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://www.interviewbit.com/problems/subarray-with-given-xor/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/length-of-longest-substring-without-any-repeating-character/" target="_blank " rel="noopener ">Longest Substring without repeat</a></td>
<td><a href="https://bit.ly/3no44fb " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/longest-substring-without-repeating-characters/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
</tbody>
</table>
</details>
<details id="dsa_sheets_problems_table_row_details ">
<summary id="dsa_sheets_problems_table_row_summary ">Linked List</summary>
<table>
<tbody>
<tr>
<th><strong>Problem</strong></th>
<th>Practice Link 1</th>
<th>Practice Link 2</th>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/reverse-a-linked-list/" target="_blank " rel="noopener ">Reverse a LinkedList</a></td>
<td><a href="https://bit.ly/3qoE6K6 " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/reverse-linked-list/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/find-middle-element-in-a-linked-list/" target="_blank " rel="noopener ">Find the middle of LinkedList</a></td>
<td><a href="https://bit.ly/3KcRxoG " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/middle-of-the-linked-list/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/merge-two-sorted-linked-lists/" target="_blank " rel="noopener ">Merge two sorted Linked List (use method used in mergeSort)</a></td>
<td><a href="https://bit.ly/3qnbSj8 " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/merge-two-sorted-lists/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/remove-n-th-node-from-the-end-of-a-linked-list/" target="_blank " rel="noopener ">Remove N-th node from back of LinkedList</a></td>
<td><a href="https://bit.ly/3riZ4JB " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/remove-nth-node-from-end-of-list/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/add-two-numbers-represented-as-linked-lists/" target="_blank " rel="noopener ">Add two numbers as LinkedList</a></td>
<td><a href="https://bit.ly/3qqbgcq " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/add-two-numbers/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/delete-given-node-in-a-linked-list-o1-approach/" target="_blank " rel="noopener ">Delete a given Node when a node is given.(0(1) solution)</a></td>
<td><a href="https://bit.ly/3GqW4kN " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/delete-node-in-a-linked-list/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
</tbody>
</table>
</details>
<details id="dsa_sheets_problems_table_row_details ">
<summary id="dsa_sheets_problems_table_row_summary ">Linked List Part-II</summary>
<table>
<tbody>
<tr>
<th><strong>Problem</strong></th>
<th>Practice Link 1</th>
<th>Practice Link 2</th>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/find-intersection-of-two-linked-lists/" target="_blank " rel="noopener ">Find intersection point of Y LinkedList</a></td>
<td><a href="https://bit.ly/3fiMQeG " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/intersection-of-two-linked-lists/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/detect-a-cycle-in-a-linked-list/" target="_blank " rel="noopener ">Detect a cycle in Linked List</a></td>
<td><a href="https://bit.ly/3I2fmxh " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/linked-list-cycle/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/reverse-linked-list-in-groups-of-size-k/" target="_blank " rel="noopener ">Reverse a LinkedList in groups of size k.</a></td>
<td><a href="https://bit.ly/3Gsfk1u " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/reverse-nodes-in-k-group/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/check-if-given-linked-list-is-plaindrome/" target="_blank " rel="noopener ">Check if a LinkedList is palindrome or not.</a></td>
<td><a href="https://bit.ly/3GqRMKv " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/palindrome-linked-list/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/starting-point-of-loop-in-a-linked-list/" target="_blank " rel="noopener ">Find the starting point of the Loop of LinkedList</a></td>
<td><a href="https://bit.ly/3K32lpf " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/linked-list-cycle-ii/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/flattening-a-linked-list/" target="_blank " rel="noopener ">Flattening of a LinkedList</a></td>
<td><a href="https://bit.ly/3nqtEA1 " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://practice.geeksforgeeks.org/problems/flattening-a-linked-list/1 " target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
</tbody>
</table>
</details>
<details id="dsa_sheets_problems_table_row_details ">
<summary id='dsa_sheets_problems_table_row_summary'>Linked List and Arrays</summary>
<table>
<tbody>
<tr>
<th><strong>Problem</strong></th>
<th>Practice Link 1</th>
<th>Practice Link 2</th>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/rotate-a-linked-list/" target="_blank " rel="noopener ">Rotate a LinkedList</a></td>
<td><a href="https://bit.ly/33bNQPo " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/rotate-list/description/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>Clone a Linked List with random and next pointer</td>
<td><a href="https://bit.ly/3qnFoFg " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/copy-list-with-random-pointer/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/3-sum-find-triplets-that-add-up-to-a-zero/" target="_blank " rel="noopener ">3 sum</a></td>
<td><a href="https://bit.ly/33wlWxk " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/3sum/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/trapping-rainwater/" target="_blank " rel="noopener ">Trapping rainwater</a></td>
<td><a href="https://bit.ly/3KcxExJ " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/trapping-rain-water/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/remove-duplicates-in-place-from-sorted-array/" target="_blank " rel="noopener ">Remove Duplicate from Sorted array</a></td>
<td><a href="https://bit.ly/31Usllh " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/remove-duplicates-from-sorted-array/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/count-maximum-consecutive-ones-in-the-array/" target="_blank " rel="noopener ">Max consecutive ones</a></td>
<td><a href="https://leetcode.com/problems/max-consecutive-ones/" target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/max-consecutive-ones/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
</tbody>
</table>
</details>
<details id="dsa_sheets_problems_table_row_details ">
<summary id="dsa_sheets_problems_table_row_summary ">Greedy Algorithm</summary>
<table>
<tbody>
<tr>
<th><strong>Problem</strong></th>
<th>Practice Link 1</th>
<th>Practice Link 2</th>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/n-meetings-in-one-room/" target="_blank " rel="noopener ">N meetings in one room</a></td>
<td><a href="https://bit.ly/3zXdqn5 " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://practice.geeksforgeeks.org/problems/n-meetings-in-one-room-1587115620/1 " target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/minimum-number-of-platforms-required-for-a-railway/" target="_blank " rel="noopener ">Minimum number of platforms required for a railway</a></td>
<td><a href="https://bit.ly/3npx0mW " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://practice.geeksforgeeks.org/problems/minimum-platforms-1587115620/1#" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/job-sequencing-problem/" target="_blank " rel="noopener ">Job sequencing Problem</a></td>
<td><a href="https://bit.ly/3K9XZfV " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://practice.geeksforgeeks.org/problems/job-sequencing-problem-1587115620/1#" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/fractional-knapsack-problem-greedy-approach/" target="_blank " rel="noopener ">Fractional Knapsack Problem</a></td>
<td><a href="https://bit.ly/3I7fNXn " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://practice.geeksforgeeks.org/problems/fractional-knapsack-1587115620/1 " target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/find-minimum-number-of-coins/" target="_blank " rel="noopener ">Greedy algorithm to find minimum number of coins</a></td>
<td><a href="https://bit.ly/3nquVHj " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://www.geeksforgeeks.org/find-minimum-number-of-coins-that-make-a-change/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/n-meetings-in-one-room/" target="_blank " rel="noopener ">Activity Selection (it is the same as N meeting in one room)</a></td>
<td><a href="https://bit.ly/3I2iPvN " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://practice.geeksforgeeks.org/problems/n-meetings-in-one-room-1587115620/1 " target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
</tbody>
</table>
</details>
<details id="dsa_sheets_problems_table_row_details ">
<summary id="dsa_sheets_problems_table_row_summary ">Recursion</summary>
<table>
<tbody>
<tr>
<th><strong>Problem</strong></th>
<th>Practice Link 1</th>
<th>Practice Link 2</th>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/subset-sum-sum-of-all-subsets/" target="_blank " rel="noopener ">Subset Sums</a></td>
<td><a href="https://www.codingninjas.com/codestudio/problems/subset-sum_3843086?topList=striver-sde-sheet-problems&amp;utm_source=striver&amp;utm_medium=website " target="_blank " rel="noopener ">Link 1</a></td>
<td><a href="https://practice.geeksforgeeks.org/problems/subset-sums2234/1 " target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/subset-ii-print-all-the-unique-subsets/" target="_blank " rel="noopener ">Subset-II</a></td>
<td><a href="https://bit.ly/3qnaLjq " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/subsets-ii/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/combination-sum-1/" target="_blank " rel="noopener ">Combination sum-1</a></td>
<td><a href="https://bit.ly/3qpmDS1 " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/combination-sum/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/combination-sum-ii-find-all-unique-combinations/" target="_blank " rel="noopener ">Combination sum-2</a></td>
<td><a href="https://bit.ly/3tkbtjk " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/combination-sum-ii/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/palindrome-partitioning/" target="_blank " rel="noopener ">Palindrome Partitioning</a></td>
<td><a href="https://bit.ly/3HZPNgs " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/palindrome-partitioning/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/find-k-th-permutation-sequence/" target="_blank " rel="noopener ">K-th permutation Sequence</a></td>
<td><a href="https://bit.ly/3KcCP0D " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/permutation-sequence/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
</tbody>
</table>
</details>
<details id="dsa_sheets_problems_table_row_details ">
<summary id="dsa_sheets_problems_table_row_summary ">Recursion and Backtracking</summary>
<table>
<tbody>
<tr>
<th>Problem</th>
<th>Practice Link 1</th>
<th>Practice Link 2</th>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/print-all-permutations-of-a-string-array/" target="_blank " rel="noopener ">Print all permutations of a string/array</a></td>
<td><a href="https://bit.ly/3fmwxNV " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/permutations/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/n-queen-problem-return-all-distinct-solutions-to-the-n-queens-puzzle/" target="_blank " rel="noopener ">N queens Problem</a></td>
<td><a href="https://bit.ly/3zSZavC " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/n-queens/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/sudoku-solver/" target="_blank " rel="noopener ">Sudoku Solver</a></td>
<td><a href="https://bit.ly/31Z5Iwe " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/sudoku-solver/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/m-coloring-problem/" target="_blank " rel="noopener ">M coloring Problem</a></td>
<td><a href="https://bit.ly/3I48oI6 " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://practice.geeksforgeeks.org/problems/m-coloring-problem-1587115620/1#" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/rat-in-a-maze/" target="_blank " rel="noopener ">Rat in a Maze</a></td>
<td><a href="https://bit.ly/3fmwP7t " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://practice.geeksforgeeks.org/problems/rat-in-a-maze-problem/1 " target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>Word Break (print all ways)</td>
<td><a href="https://bit.ly/3FxgW92 " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td>Link 2</td>
</tr>
</tbody>
</table>
</details>
<details id="dsa_sheets_problems_table_row_details ">
<summary id="dsa_sheets_problems_table_row_summary ">Binary Search</summary>
<table>
<tbody>
<tr>
<th><strong>Problem</strong></th>
<th>Practice Link 1</th>
<th>Practice Link 2</th>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/nth-root-of-a-number-using-binary-search/" target="_blank " rel="noopener ">The N-th root of an integer</a></td>
<td><a href="https://bit.ly/3rj7Ib1 " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td>Link 2</td>
</tr>
<tr>
<td>Matrix Median</td>
<td><a href="https://bit.ly/33AHZTz " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://www.interviewbit.com/problems/matrix-median/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/search-single-element-in-a-sorted-array/" target="_blank " rel="noopener ">Find the element that appears once in a sorted array, and the rest element appears twice (Binary search)</a></td>
<td><a href="https://bit.ly/3rng2qC " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/single-element-in-a-sorted-array/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/search-element-in-a-rotated-sorted-array/" target="_blank " rel="noopener ">Search element in a sorted and rotated array/ find pivot where it is rotated</a></td>
<td><a href="https://bit.ly/3nnxGcm " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/search-in-rotated-sorted-array/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/median-of-two-sorted-arrays-of-different-sizes/" target="_blank " rel="noopener ">Median of 2 sorted arrays</a></td>
<td><a href="https://bit.ly/3Ka3jQr " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/median-of-two-sorted-arrays/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/k-th-element-of-two-sorted-arrays/" target="_blank " rel="noopener ">K-th element of two sorted arrays</a></td>
<td><a href="https://bit.ly/3qm0cgu " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://practice.geeksforgeeks.org/problems/k-th-element-of-two-sorted-array1317/1 " target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/allocate-minimum-number-of-pages/" target="_blank " rel="noopener ">Allocate Minimum Number of Pages</a></td>
<td><a href="https://bit.ly/3FrKxk7 " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://www.interviewbit.com/problems/allocate-books/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/aggressive-cows-detailed-solution/" target="_blank " rel="noopener ">Aggressive Cows</a></td>
<td><a href="https://bit.ly/3zV52ob " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://www.spoj.com/problems/AGGRCOW/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
</tbody>
</table>
</details>
<details id="dsa_sheets_problems_table_row_details ">
<summary id="dsa_sheets_problems_table_row_summary "> Heaps</summary>
<table>
<tbody>
<tr>
<th><strong>Problem</strong></th>
<th>Practice Link 1</th>
<th>Practice Link 2</th>
</tr>
<tr>
<td>Max heap, Min Heap Implementation (Only for interviews)</td>
<td><a href="https://www.codingninjas.com/codestudio/problems/min-heap_4691801?topList=striver-sde-sheet-problems&amp;utm_source=striver&amp;utm_medium=website " target="_blank " rel="noopener ">Link 1</a></td>
<td>NA</td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/kth-largest-smallest-element-in-an-array/" target="_blank " rel="noopener ">Kth Largest Element</a></td>
<td><a href="https://www.codingninjas.com/codestudio/problems/kth-smallest-and-largest-element-of-array_1115488?topList=striver-sde-sheet-problems&amp;utm_source=striver&amp;utm_medium=website " target="_blank " rel="noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/kth-largest-element-in-an-array/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>Maximum Sum Combination</td>
<td><a href="https://www.codingninjas.com/codestudio/problems/k-max-sum-combinations_975322?topList=striver-sde-sheet-problems&amp;utm_source=striver&amp;utm_medium=website " target="_blank " rel="noopener ">Link 1</a></td>
<td><a href="https://www.interviewbit.com/problems/maximum-sum-combinations/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>Find Median from Data Stream</td>
<td><a href="https://www.codingninjas.com/codestudio/problems/running-median_625409?topList=striver-sde-sheet-problems&amp;utm_source=striver&amp;utm_medium=website " target="_blank " rel="noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/find-median-from-data-stream/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>Merge K sorted arrays</td>
<td><a href="https://www.codingninjas.com/codestudio/problems/merge-k-sorted-arrays_975379?topList=striver-sde-sheet-problems&amp;utm_source=striver&amp;utm_medium=website " target="_blank " rel="noopener ">Link 1</a></td>
<td><a href="https://www.codingninjas.com/codestudio/problems/merge-k-sorted-arrays_975379 " target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>K most frequent elements</td>
<td><a href="https://www.codingninjas.com/codestudio/problems/k-most-frequent-elements_3167808?topList=striver-sde-sheet-problems&amp;utm_source=striver&amp;utm_medium=website " target="_blank " rel="noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/top-k-frequent-elements/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
</tbody>
</table>
</details>
<details id="dsa_sheets_problems_table_row_details ">
<summary id="dsa_sheets_problems_table_row_summary ">Stack and Queue</summary>
<table>
<tbody>
<tr>
<th><strong>Problem</strong></th>
<th>Practice Link 1</th>
<th>Practice Link 2</th>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/implement-stack-using-array/" target="_blank " rel="noopener ">Implement Stack Using Arrays</a></td>
<td><a href="https://www.codingninjas.com/codestudio/problems/stack-implementation-using-array_3210209 " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td>Link 2</td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/implement-queue-using-array/" target="_blank " rel="noopener ">Implement Queue Using Arrays</a></td>
<td><a href="https://bit.ly/3KbIjIW " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td>Link 2</td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/implement-stack-using-single-queue/" target="_blank " rel="noopener ">Implement Stack using Queue (using single queue)</a></td>
<td><a href="https://bit.ly/3reLgQs " target="_blank " rel="noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/implement-stack-using-queues/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/implement-queue-using-stack/" target="_blank " rel="noopener ">Implement Queue using Stack (0(1) amortized method)</a></td>
<td><a href="https://bit.ly/3reLeIk " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/implement-queue-using-stacks/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/check-for-balanced-parentheses/" target="_blank " rel="noopener ">Check for balanced parentheses</a></td>
<td><a href="https://bit.ly/3nr1RiO " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/valid-parentheses/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/next-greater-element-using-stack/" target="_blank " rel="noopener ">Next Greater Element</a></td>
<td><a href="https://bit.ly/3qyCjCF " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/next-greater-element-ii/description/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>Sort a Stack</td>
<td><a href="https://bit.ly/3nptF7k " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td>Link 2</td>
</tr>
</tbody>
</table>
</details>
<details id="dsa_sheets_problems_table_row_details ">
<summary id="dsa_sheets_problems_table_row_summary ">Stack and Queue Part-II</summary>
<table>
<tbody>
<tr>
<th>Problem</th>
<th>Practice Link 1</th>
<th>Practice Link 2</th>
</tr>
<tr>
<td>Next Smaller Element</td>
<td><a href="https://bit.ly/3K6WVtb " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://www.interviewbit.com/problems/nearest-smaller-element/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/implement-lru-cache/" target="_blank " rel="noopener ">LRU cache (IMPORTANT)</a></td>
<td><a href="https://bit.ly/3K7Cs7I " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/lru-cache/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>LFU Cache</td>
<td><a href="https://bit.ly/3noxuK0 " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/lfu-cache/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/area-of-largest-rectangle-in-histogram/" target="_blank " rel="noopener ">Largest rectangle in a histogram</a></td>
<td><a href="https://bit.ly/3qpxbR9 " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/largest-rectangle-in-histogram/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/sliding-window-maximum/" target="_blank " rel="noopener ">Sliding Window maximum</a></td>
<td><a href="https://bit.ly/3GmTkoC " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/sliding-window-maximum/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/implement-min-stack-o2n-and-on-space-complexity/" target="_blank " rel="noopener ">Implement Min Stack</a></td>
<td><a href="https://www.codingninjas.com/codestudio/problems/min-stack_3843991?topList=striver-sde-sheet-problems&amp;utm_source=striver&amp;utm_medium=website " target="_blank " rel="noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/min-stack/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/rotten-oranges-min-time-to-rot-all-oranges-bfs/" target="_blank " rel="noopener ">Rotten Orange (Using BFS)</a></td>
<td><a href="https://bit.ly/33zH0TC " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/rotting-oranges/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>Stock Span Problem</td>
<td><a href="https://bit.ly/3GvBtMk " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/online-stock-span/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>Find the maximum of minimums of every window size</td>
<td><a href="https://bit.ly/3zUYLZz " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td>Link 2</td>
</tr>
<tr>
<td>The Celebrity Problem</td>
<td><a href="https://bit.ly/3GuImxi " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/accounts/login/?next=/problems/find-the-celebrity/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
</tbody>
</table>
</details>
<details id="dsa_sheets_problems_table_row_details ">
<summary id="dsa_sheets_problems_table_row_summary ">String</summary>
<table>
<tbody>
<tr>
<th><strong>Problem</strong></th>
<th>Practice Link 1</th>
<th>Practice Link 2</th>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/reverse-words-in-a-string/" target="_blank " rel="noopener ">Reverse Words in a String</a></td>
<td><a href="https://bit.ly/3FmKc1X " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/reverse-words-in-a-string/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>Longest Palindrome in a string</td>
<td><a href="https://bit.ly/3Grdrlv " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/longest-palindromic-substring/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>Roman Number to Integer and vice versa</td>
<td><a href="https://bit.ly/3rkGuBb " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/roman-to-integer/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>Implement ATOI/STRSTR</td>
<td><a href="https://bit.ly/3zXpYeb " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/string-to-integer-atoi/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>Longest Common Prefix</td>
<td><a href="https://bit.ly/3GlNN1D " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/longest-common-prefix/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>Rabin Karp</td>
<td><a href="https://bit.ly/3FvnLaN " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/repeated-string-match/discuss/416144/Rabin-Karp-algorithm-C%2B%2B-implementation " target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
</tbody>
</table>
</details>
<details id="dsa_sheets_problems_table_row_details ">
<summary id="dsa_sheets_problems_table_row_summary ">String Part-II</summary>
<table>
<tbody>
<tr>
<th><strong>Problem</strong></th>
<th>Practice Link 1</th>
<th>Practice Link 2</th>
</tr>
<tr>
<td>Z-Function</td>
<td><a href="https://bit.ly/3qs24UM " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/implement-strstr/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>KMP algo / LPS(pi) array</td>
<td><a href="https://bit.ly/31VF1s6 " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/implement-strstr/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>Minimum characters needed to be inserted in the beginning to make it palindromic</td>
<td><a href="https://bit.ly/34RE855 " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://www.interviewbit.com/problems/minimum-characters-required-to-make-a-string-palindromic/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>Check for Anagrams</td>
<td><a href="https://bit.ly/3K6weoJ " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/valid-anagram/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>Count and Say</td>
<td><a href="https://bit.ly/3K8Uwyi " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/count-and-say/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>Compare version numbers</td>
<td><a href="https://bit.ly/3GwYuys " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/compare-version-numbers/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
</tbody>
</table>
</details>
<details id="dsa_sheets_problems_table_row_details ">
<summary id="dsa_sheets_problems_table_row_summary ">Binary Tree</summary>
<table>
<tbody>
<tr>
<th><strong>Problem</strong></th>
<th>Practice Link 1</th>
<th>Practice Link 2</th>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/inorder-traversal-of-binary-tree/" target="_blank " rel="noopener ">Inorder Traversal</a></td>
<td>Link 1</td>
<td><a href="https://leetcode.com/problems/binary-tree-inorder-traversal/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/preorder-traversal-of-binary-tree/" target="_blank " rel="noopener ">Preorder Traversal</a></td>
<td>Link 1</td>
<td><a href="https://leetcode.com/problems/binary-tree-preorder-traversal/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/post-order-traversal-of-binary-tree/" target="_blank " rel="noopener ">Postorder Traversal</a></td>
<td>Link 1</td>
<td><a href="https://leetcode.com/problems/binary-tree-postorder-traversal/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/morris-inorder-traversal-of-a-binary-tree/" target="_blank " rel="noopener ">Morris Inorder Traversal</a></td>
<td>Link 1</td>
<td><a href="https://leetcode.com/problems/binary-tree-inorder-traversal/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/morris-preorder-traversal-of-a-binary-tree/" target="_blank " rel="noopener ">Morris Preorder Traversal</a></td>
<td>Link 1</td>
<td>Link 2</td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/right-left-view-of-binary-tree/" target="_blank " rel="noopener ">LeftView Of Binary Tree</a></td>
<td><a href="https://bit.ly/3GtxyQa " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://practice.geeksforgeeks.org/problems/left-view-of-binary-tree/1 " target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/bottom-view-of-a-binary-tree/" target="_blank " rel="noopener ">Bottom View of Binary Tree</a></td>
<td><a href="https://bit.ly/3trqFLq " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://practice.geeksforgeeks.org/problems/bottom-view-of-binary-tree/1 " target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/top-view-of-a-binary-tree/" target="_blank " rel="noopener ">Top View of Binary Tree</a></td>
<td><a href="https://bit.ly/3Gs76WV " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://practice.geeksforgeeks.org/problems/top-view-of-binary-tree/1 " target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/preorder-inorder-postorder-traversals-in-one-traversal/" target="_blank " rel="noopener ">Preorder inorder postorder in a single traversal</a></td>
<td><a href="https://bit.ly/3rlXpTX " target="_blank " rel="nofollow noopener sponsored ">Link 1</a></td>
<td>Link 2</td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/vertical-order-traversal-of-binary-tree/" target="_blank " rel="noopener ">Vertical order traversal</a></td>
<td><a href="https://bit.ly/3KaM41v " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/vertical-order-traversal-of-a-binary-tree/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/print-root-to-node-path-in-a-binary-tree/" target="_blank " rel="noopener ">Root to node path in a Binary Tree</a></td>
<td>Link 1</td>
<td><a href="https://www.interviewbit.com/problems/path-to-given-node/">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/maximum-width-of-a-binary-tree/" target="_blank " rel="noopener ">Max width of a Binary Tree</a></td>
<td><a href="https://bit.ly/3rm014d " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/maximum-width-of-binary-tree/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
</tbody>
</table>
</details>
<details id="dsa_sheets_problems_table_row_details ">
<summary id="dsa_sheets_problems_table_row_summary ">Binary Tree part-II</summary>
<table>
<tbody>
<tr>
<th><strong>Problem</strong></th>
<th>Practice Link 1</th>
<th>Practice Link 2</th>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/level-order-traversal-of-a-binary-tree/" target="_blank " rel="noopener ">Level order Traversal / Level order traversal in spiral form</a></td>
<td><a href="https://bit.ly/3zVtSnX " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/binary-tree-level-order-traversal/" target="_blank " rel="noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/maximum-depth-of-a-binary-tree/" target="_blank " rel="noopener ">Height of a Binary Tree</a></td>
<td><a href="https://bit.ly/3qoOEco " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/maximum-depth-of-binary-tree/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/calculate-the-diameter-of-a-binary-tree/" target="_blank " rel="noopener ">Diameter of Binary Tree</a></td>
<td><a href="https://bit.ly/3I3O1uD " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/diameter-of-binary-tree/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/check-if-the-binary-tree-is-balanced-binary-tree/" target="_blank " rel="noopener ">Check if the Binary tree is height-balanced or not</a></td>
<td><a href="https://bit.ly/3fqsvnA " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/balanced-binary-tree/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/lowest-common-ancestor-for-two-given-nodes/" target="_blank " rel="noopener ">LCA in Binary Tree</a></td>
<td><a href="https://bit.ly/3tqcRko " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/lowest-common-ancestor-of-a-binary-tree/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/check-if-two-trees-are-identical/" target="_blank " rel="noopener ">Check if two trees are identical or not</a></td>
<td><a href="https://bit.ly/3GuQYnE " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/same-tree/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/zig-zag-traversal-of-binary-tree/" target="_blank " rel="noopener ">Zig Zag Traversal of Binary Tree</a></td>
<td><a href="https://bit.ly/3GrS3g7 " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/binary-tree-zigzag-level-order-traversal/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/boundary-traversal-of-a-binary-tree/" target="_blank " rel="noopener ">Boundary Traversal of Binary Tree</a></td>
<td><a href="https://bit.ly/3GxQ6yH " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/boundary-of-binary-tree/#" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
</tbody>
</table>
</details>
<details id="dsa_sheets_problems_table_row_details ">
<summary id="dsa_sheets_problems_table_row_summary ">Binary Tree part-III</summary>
<table>
<tbody>
<tr>
<th>Problem</th>
<th>Practice Link 1</th>
<th>Practice Link 2</th>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/maximum-sum-path-in-binary-tree/" target="_blank " rel="noopener ">Maximum path sum</a></td>
<td><a href="https://bit.ly/3rkQUR4 " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/binary-tree-maximum-path-sum/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/construct-a-binary-tree-from-inorder-and-preorder-traversal/" target="_blank " rel="noopener ">Construct Binary Tree from inorder and preorder</a></td>
<td><a href="https://bit.ly/3fqOif3 " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/construct-binary-tree-from-preorder-and-inorder-traversal/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>Construct Binary Tree from Inorder and Postorder</td>
<td><a href="https://bit.ly/3qrzumM " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/construct-binary-tree-from-inorder-and-postorder-traversal/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/check-for-symmetrical-binary-tree/" target="_blank " rel="noopener ">Symmetric Binary Tree</a></td>
<td><a href="https://bit.ly/3GItN9P " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/symmetric-tree/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/flatten-binary-tree-to-linked-list/" target="_blank " rel="noopener ">Flatten Binary Tree to LinkedList</a></td>
<td><a href="https://bit.ly/3qA9uWt " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/flatten-binary-tree-to-linked-list/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>Check if Binary Tree is the mirror of itself or not</td>
<td><a href="https://bit.ly/3nqSnnQ " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://practice.geeksforgeeks.org/problems/mirror-tree/1 " target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/check-for-children-sum-property-in-a-binary-tree/" target="_blank " rel="noopener ">Check for Children Sum Property</a></td>
<td><a href="https://bit.ly/33yExIQ " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td>Link 2</td>
</tr>
</tbody>
</table>
</details>
<details id="dsa_sheets_problems_table_row_details ">
<summary id="dsa_sheets_problems_table_row_summary ">Binary Search Tree</summary>
<p>Watch<a href="https://www.youtube.com/watch?v=OYqYEM1bMK8&amp;list=PLgUwDviBIf0q8Hkd7bK2Bpryj2xVJk8Vk ">this</a> playlist at first, so that you learn A-Z of Binary Trees.&nbsp;</p>
<table>
<tbody>
<tr>
<th>Problem</th>
<th>Practice Link 1</th>
<th>Practice Link 2</th>
</tr>
<tr>
<td>Populate Next Right pointers of Tree</td>
<td><a href="https://bit.ly/33Bm8uX " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/populating-next-right-pointers-in-each-node/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>Search given Key in BST</td>
<td><a href="https://bit.ly/3Ft26jR " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/search-in-a-binary-search-tree/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>Construct BST from given keys</td>
<td><a href="https://bit.ly/3qr5I1t " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/convert-sorted-array-to-binary-search-tree/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>Construct BST from preorder traversal</td>
<td><a href="https://bit.ly/3Fr7GTQ " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/construct-binary-search-tree-from-preorder-traversal/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>Check is a BT is BST or not</td>
<td><a href="https://bit.ly/3nmKek7 " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/validate-binary-search-tree/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>Find LCA of two nodes in BST</td>
<td><a href="https://bit.ly/3qqoaXM " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/lowest-common-ancestor-of-a-binary-search-tree/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>Find the inorder predecessor/successor of a given Key in BST.</td>
<td><a href="https://bit.ly/3A0hm6l " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://practice.geeksforgeeks.org/problems/predecessor-and-successor/1 " target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
</tbody>
</table>
</details>
<details id="dsa_sheets_problems_table_row_details ">
<summary id="dsa_sheets_problems_table_row_summary ">Binary Search Tree Part-II</summary>
<table>
<tbody>
<tr>
<th><strong>Problem</strong></th>
<th>Practice Link 1</th>
<th>Practice Link 2</th>
</tr>
<tr>
<td>Floor in a BST</td>
<td><a href="https://bit.ly/3nsqdbY " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://www.codingninjas.com/codestudio/problems/floor-from-bst_920457?source=youtube&amp;campaign=Striver_Tree_Videos&amp;utm_source=youtube&amp;utm_medium=affiliate&amp;utm_campaign=Striver_Tree_Videos " target="_blank " rel="noopener ">Link 2</a></td>
</tr>
<tr>
<td>Ceil in a BST</td>
<td><a href="https://bit.ly/33b9enW " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://www.codingninjas.com/codestudio/problems/ceil-from-bst_920464?source=youtube&amp;campaign=Striver_Tree_Videos&amp;utm_source=youtube&amp;utm_medium=affiliate&amp;utm_campaign=Striver_Tree_Videos " target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/kth-largest-smallest-element-in-binary-search-tree/" target="_blank " rel="noopener ">Find K-th smallest element in BST</a></td>
<td><a href="https://bit.ly/3rf0HrP " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/kth-smallest-element-in-a-bst/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/kth-largest-smallest-element-in-binary-search-tree/" target="_blank " rel="noopener ">Find K-th largest element in BST</a></td>
<td><a href="https://bit.ly/31Yjtet " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://practice.geeksforgeeks.org/problems/kth-largest-element-in-bst/1 " target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>Find a pair with a given sum in BST</td>
<td><a href="https://bit.ly/3FvDAOO " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/two-sum-iv-input-is-a-bst/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>BST iterator</td>
<td><a href="https://bit.ly/3FsH5FC " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/binary-search-tree-iterator/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>Size of the largest BST in a Binary Tree</td>
<td><a href="https://bit.ly/3fn6h5V " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/maximum-sum-bst-in-binary-tree/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/serialize-and-deserialize-a-binary-tree/" target="_blank " rel="noopener ">Serialize and deserialize Binary Tree</a></td>
<td><a href="https://bit.ly/3qr6pYD " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/serialize-and-deserialize-binary-tree/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
</tbody>
</table>
</details>
<details id="dsa_sheets_problems_table_row_details ">
<summary id="dsa_sheets_problems_table_row_summary "> Binary Trees[Miscellaneous]</summary>
<table>
<tbody>
<tr>
<th><strong>Problem</strong></th>
<th>Practice Link 1</th>
<th>Practice Link 2</th>
</tr>
<tr>
<td>Binary Tree to Double Linked List</td>
<td><a href="https://bit.ly/3HVnGz0 " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/flatten-binary-tree-to-linked-list/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>Find median in a stream of running integers.</td>
<td><a href="https://bit.ly/3rkTB58 " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/find-median-from-data-stream/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>K-th largest element in a stream.</td>
<td><a href="https://bit.ly/3KdiUPp " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/kth-largest-element-in-a-stream/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>Distinct numbers in Window.</td>
<td><a href="bit.ly/3zYWpcb " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://www.interviewbit.com/problems/distinct-numbers-in-window/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>K-th largest element in an unsorted array.</td>
<td><a href="https://bit.ly/3GvQttz " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/kth-largest-element-in-an-array/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>Flood-fill Algorithm</td>
<td><a href="https://bit.ly/3Gv1Th5 " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/flood-fill/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
</tbody>
</table>
</details>
<details id="dsa_sheets_problems_table_row_details ">
<summary id="dsa_sheets_problems_table_row_summary "> Graph</summary>
<table>
<tbody>
<tr>
<th><strong>Problem</strong></th>
<th>Practice Link 1</th>
<th>Practice Link 2</th>
</tr>
<tr>
<td>Clone a graph (Not that easy as it looks)</td>
<td><a href="https://bit.ly/33BcVmE " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/clone-graph/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/depth-first-search-dfs/" target="_blank " rel="noopener ">DFS</a></td>
<td><a href="https://bit.ly/33BcXeg " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://practice.geeksforgeeks.org/problems/depth-first-traversal-for-a-graph/1 " target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/graph/breadth-first-search-bfs-level-order-traversal/" target="_blank " rel="noopener ">BFS</a></td>
<td><a href="https://bit.ly/3rgb26U " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://practice.geeksforgeeks.org/problems/bfs-traversal-of-graph/1 " target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/detect-cycle-in-an-undirected-graph-using-bfs/" target="_blank " rel="noopener ">Detect A cycle in Undirected Graph using BFS</a></td>
<td><a href="https://bit.ly/3npFdrn " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/course-schedule/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/detect-cycle-in-an-undirected-graph-using-dfs/" target="_blank " rel="noopener ">Detect A cycle in Undirected Graph using DFS</a></td>
<td><a href="https://bit.ly/3npFdrn " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/course-schedule/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/detect-a-cycle-in-directed-graph-topological-sort-kahns-algorithm-g-23/" target="_blank " rel="noopener ">Detect A cycle in a Directed Graph using DFS</a></td>
<td><a href="https://bit.ly/3FrzaZp " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/course-schedule/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>Detect A cycle in a Directed Graph using BFS</td>
<td><a href="https://bit.ly/3FrzaZp " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/course-schedule/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/topological-sort-bfs/" target="_blank " rel="noopener ">Topological Sort BFS</a></td>
<td><a href="https://bit.ly/33bapUo " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://practice.geeksforgeeks.org/problems/topological-sort/1 " target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/topological-sort-using-dfs/" target="_blank " rel="noopener ">Topological Sort DFS</a></td>
<td><a href="https://bit.ly/33bapUo " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://practice.geeksforgeeks.org/problems/topological-sort/1 " target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/number-of-distinct-islands/" target="_blank " rel="noopener ">Number of islands(Do in Grid and Graph Both)</a></td>
<td><a href="https://bit.ly/3KaSCND " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/number-of-islands/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>Bipartite Check using BFS</td>
<td><a href="https://bit.ly/3tps98W " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/is-graph-bipartite/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/graph/bipartite-graph-dfs-implementation/" target="_blank " rel="noopener ">Bipartite Check using DFS</a></td>
<td><a href="https://bit.ly/3tps98W " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/is-graph-bipartite/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
</tbody>
</table>
</details>
<details id="dsa_sheets_problems_table_row_details ">
<summary id="dsa_sheets_problems_table_row_summary "> Graph Part-II</summary>
<table>
<tbody>
<tr>
<th>Problem</th>
<th>Practice Link 1</th>
<th>Practice Link 2</th>
</tr>
<tr>
<td><a href="https://takeuforward.org/graph/strongly-connected-components-kosarajus-algorithm-g-54/" target="_blank " rel="noopener ">Strongly Connected Component(using KosaRaju’s algo)</a></td>
<td><a href="https://bit.ly/3twUKJP " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/maximum-number-of-non-overlapping-substrings/discuss/766485/kosaraju-algorithm-on " target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/g-35-print-shortest-path-dijkstras-algorithm/" target="_blank " rel="noopener ">Dijkstra’s Algorithm</a></td>
<td><a href="https://bit.ly/3qrEHLm " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://practice.geeksforgeeks.org/problems/implementing-dijkstra-set-1-adjacency-matrix/1 " target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/bellman-ford-algorithm-g-41/" target="_blank " rel="noopener ">Bellman-Ford Algo</a></td>
<td><a href="https://bit.ly/3GwAf3A " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://practice.geeksforgeeks.org/problems/distance-from-the-source-bellman-ford-algorithm/0/?fbclid=IwAR2_lL0T84DnciLyzMTQuVTMBOi82nTWNLuXjUgahnrtBgkphKiYk6xcyJU " target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/floyd-warshall-algorithm-g-42/" target="_blank " rel="noopener ">Floyd Warshall Algorithm</a></td>
<td><a href="https://bit.ly/3Kb41Ny " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://practice.geeksforgeeks.org/problems/implementing-floyd-warshall2042/1 " target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/prims-algorithm-minimum-spanning-tree-c-and-java-g-45/" target="_blank " rel="noopener ">MST using Prim’s Algo</a></td>
<td><a href="https://bit.ly/3I5Ktbi " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://practice.geeksforgeeks.org/problems/minimum-spanning-tree/1 " target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/kruskals-algorithm-minimum-spanning-tree-g-47/" target="_blank " rel="noopener ">MST using Kruskal’s Algo</a></td>
<td><a href="https://bit.ly/3I1VqL9 " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://practice.geeksforgeeks.org/problems/minimum-spanning-tree/1 " target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
</tbody>
</table>
</details>
<details id="dsa_sheets_problems_table_row_details ">
<summary id="dsa_sheets_problems_table_row_summary ">Dynamic Programming</summary>
<table>
<tbody>
<tr>
<th></th>
<th>Practice Link 1</th>
<th>Practice Link 2</th>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/maximum-product-subarray-in-an-array/" target="_blank " rel="noopener ">Max Product Subarray</a></td>
<td><a href="https://bit.ly/3fqz6OS " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/maximum-product-subarray/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>Longest Increasing Subsequence</td>
<td><a href="https://bit.ly/3GuWGpA " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/longest-increasing-subsequence/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/longest-common-subsequence-dp-25/" target="_blank " rel="noopener ">Longest Common Subsequence</a></td>
<td><a href="https://bit.ly/3raZbqM " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/longest-common-subsequence/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/0-1-knapsack-dp-19/" target="_blank " rel="nofollow noopener ">0-1 Knapsack</a></td>
<td><a href="https://bit.ly/3FvHbMO " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://practice.geeksforgeeks.org/problems/0-1-knapsack-problem0945/1 " target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><input type="checkbox " id="ques_174 "></td>
<td><a href="https://takeuforward.org/data-structure/edit-distance-dp-33/" target="_blank " rel="nofollow noopener ">Edit Distance</a></td>
<td><a href="https://bit.ly/3qpUHgE " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/edit-distance/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>Maximum sum increasing subsequence</td>
<td><a href="https://bit.ly/3tqiS0s " target="_blank " rel="noopener ">Link 1</a></td>
<td><a href="https://practice.geeksforgeeks.org/problems/maximum-sum-increasing-subsequence4749/1 " target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>Matrix Chain Multiplication</td>
<td><a href="https://bit.ly/3qqX56T " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://practice.geeksforgeeks.org/problems/matrix-chain-multiplication0303/1 " target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
</tbody>
</table>
</details>
<details id="dsa_sheets_problems_table_row_details ">
<summary id="dsa_sheets_problems_table_row_summary ">Dynamic Programming Part-II</summary>
<table>
<tbody>
<tr>
<th>Problem</th>
<th>Practice Link 1</th>
<th>Practice Link 2</th>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/minimum-path-sum-in-a-grid-dp-10/" target="_blank " rel="nofollow noopener ">Minimum sum path in the matrix, (count paths and similar type do, also backtrack to find the Minimum path)</a></td>
<td><a href="https://bit.ly/3zWJEin " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/minimum-path-sum/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/coin-change-2-dp-22/" target="_blank " rel="nofollow noopener ">Coin change</a></td>
<td><a href="https://bit.ly/3GwBrnA " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/coin-change/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/subset-sum-equal-to-target-dp-14/" target="_blank " rel="nofollow noopener ">Subset Sum</a></td>
<td><a href="https://bit.ly/3rjUdb7 " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/partition-equal-subset-sum/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/rod-cutting-problem-dp-24/" target="_blank " rel="nofollow noopener ">Rod Cutting</a></td>
<td><a href="https://bit.ly/3GuIsoS " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/minimum-cost-to-cut-a-stick/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>Egg Dropping</td>
<td><a href="https://bit.ly/3A6id5O " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://practice.geeksforgeeks.org/problems/egg-dropping-puzzle-1587115620/1 " target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>Word Break</td>
<td><a href="https://bit.ly/3npqs7P " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://practice.geeksforgeeks.org/problems/word-break1352/1 " target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>Palindrome Partitioning (MCM Variation)</td>
<td><a href="https://bit.ly/3tq9MRn " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://practice.geeksforgeeks.org/problems/palindromic-patitioning4845/1 " target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>Maximum profit in Job scheduling</td>
<td><a href="https://bit.ly/34FoY2C " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://practice.geeksforgeeks.org/problems/job-sequencing-problem-1587115620/1 " target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
</tbody>
</table>
</details>
<details id="dsa_sheets_problems_table_row_details ">
<summary id="dsa_sheets_problems_table_row_summary ">Trie</summary>
<table>
<tbody>
<tr>
<th></th>
<th><strong>Problem</strong></th>
<th>Practice Link 1</th>
<th>Practice Link 2</th>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/implement-trie-1/" target="_blank " rel="noopener ">Implement Trie (Prefix Tree)</a></td>
<td><a href="https://bit.ly/33wIn5x " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/implement-trie-prefix-tree/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/implement-trie-ii/" target="_blank " rel="noopener ">Implement Trie – 2 (Prefix Tree)</a></td>
<td><a href="https://bit.ly/3I8Q9l7 " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://bit.ly/3qwT4OL " target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>Longest String with All Prefixes</td>
<td><a href="https://bit.ly/3qrU6vb " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://bit.ly/3n3kedU " target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/number-of-distinct-substrings-in-a-string-using-trie/" target="_blank " rel="noopener ">Number of Distinct Substrings in a String</a></td>
<td><a href="https://bit.ly/3zVV1XD " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://bit.ly/3ocRQW0 " target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/power-set-print-all-the-possible-subsequences-of-the-string/" target="_blank " rel="noopener ">Power Set (this is very important)</a></td>
<td><a href="https://bit.ly/3fmd28k " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://practice.geeksforgeeks.org/problems/power-set4302/1#" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td><a href="https://takeuforward.org/data-structure/maximum-xor-of-two-numbers-in-an-array/" target="_blank " rel="noopener ">Maximum XOR of two numbers in an array</a></td>
<td><a href="https://bit.ly/3rjEYis " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/maximum-xor-of-two-numbers-in-an-array/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
<tr>
<td>Maximum XOR With an Element From Array</td>
<td><a href="https://bit.ly/3KbHhN4 " target="_blank " rel="nofollow noopener ">Link 1</a></td>
<td><a href="https://leetcode.com/problems/maximum-xor-with-an-element-from-array/" target="_blank " rel="nofollow noopener ">Link 2</a></td>
</tr>
</tbody>
</table>
</details>
</section>














<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>