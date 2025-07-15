<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListMessageGroupResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\ListMessageGroupResponseBody\result\groupList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The list of message groups.
     *
     * @var groupList[]
     */
    public $groupList;

    /**
     * @description Indicates whether the current page is followed by another page. Valid values:
     *
     *   true: The current page is followed by another page.
     *   false: The current page is not followed by another page.
     *
     * @example false
     *
     * @var bool
     */
    public $hasMore;

    /**
     * @description The total number of message groups.
     *
     * @example 5
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'groupList' => 'GroupList',
        'hasMore' => 'HasMore',
        'total' => 'Total',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupList) {
            $res['GroupList'] = [];
            if (null !== $this->groupList && \is_array($this->groupList)) {
                $n = 0;
                foreach ($this->groupList as $item) {
                    $res['GroupList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hasMore) {
            $res['HasMore'] = $this->hasMore;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupList'])) {
            if (!empty($map['GroupList'])) {
                $model->groupList = [];
                $n = 0;
                foreach ($map['GroupList'] as $item) {
                    $model->groupList[$n++] = null !== $item ? groupList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HasMore'])) {
            $model->hasMore = $map['HasMore'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
