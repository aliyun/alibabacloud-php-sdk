<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListMessageAppResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\ListMessageAppResponseBody\result\appList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description Details about the applications.
     *
     * @var appList[]
     */
    public $appList;

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
     * @description The total number of interactive message applications.
     *
     * @example 15
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'appList' => 'AppList',
        'hasMore' => 'HasMore',
        'total' => 'Total',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appList) {
            $res['AppList'] = [];
            if (null !== $this->appList && \is_array($this->appList)) {
                $n = 0;
                foreach ($this->appList as $item) {
                    $res['AppList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['AppList'])) {
            if (!empty($map['AppList'])) {
                $model->appList = [];
                $n = 0;
                foreach ($map['AppList'] as $item) {
                    $model->appList[$n++] = null !== $item ? appList::fromMap($item) : $item;
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
