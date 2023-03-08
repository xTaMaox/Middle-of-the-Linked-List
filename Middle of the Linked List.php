/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    function middleNode($head) {       
        $slow = $head;
        while ($head != null && $head->next != null) {
            $slow = $slow->next;          
            $head = $head->next->next;
        }
        return $slow;
    }
}
