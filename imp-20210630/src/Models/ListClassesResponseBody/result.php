<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\ListClassesResponseBody;

use AlibabaCloud\SDK\Imp\V20210630\Models\ListClassesResponseBody\result\classList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 课程列表信息。
     *
     * @var classList[]
     */
    public $classList;

    /**
     * @description 是否还有下一页。
     *
     * @var bool
     */
    public $hasMore;

    /**
     * @description 课程总页数。
     *
     * @var int
     */
    public $pageTotal;

    /**
     * @description 课程总数。
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'classList'  => 'ClassList',
        'hasMore'    => 'HasMore',
        'pageTotal'  => 'PageTotal',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classList) {
            $res['ClassList'] = [];
            if (null !== $this->classList && \is_array($this->classList)) {
                $n = 0;
                foreach ($this->classList as $item) {
                    $res['ClassList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hasMore) {
            $res['HasMore'] = $this->hasMore;
        }
        if (null !== $this->pageTotal) {
            $res['PageTotal'] = $this->pageTotal;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['ClassList'])) {
            if (!empty($map['ClassList'])) {
                $model->classList = [];
                $n                = 0;
                foreach ($map['ClassList'] as $item) {
                    $model->classList[$n++] = null !== $item ? classList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HasMore'])) {
            $model->hasMore = $map['HasMore'];
        }
        if (isset($map['PageTotal'])) {
            $model->pageTotal = $map['PageTotal'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
