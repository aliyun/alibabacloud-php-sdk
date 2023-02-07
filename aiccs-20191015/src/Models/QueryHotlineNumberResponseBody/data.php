<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryHotlineNumberResponseBody;

use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryHotlineNumberResponseBody\data\hotlineNumList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @var hotlineNumList[]
     */
    public $hotlineNumList;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 123
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'currentPage'    => 'CurrentPage',
        'hotlineNumList' => 'HotlineNumList',
        'pageSize'       => 'PageSize',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->hotlineNumList) {
            $res['HotlineNumList'] = [];
            if (null !== $this->hotlineNumList && \is_array($this->hotlineNumList)) {
                $n = 0;
                foreach ($this->hotlineNumList as $item) {
                    $res['HotlineNumList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['HotlineNumList'])) {
            if (!empty($map['HotlineNumList'])) {
                $model->hotlineNumList = [];
                $n                     = 0;
                foreach ($map['HotlineNumList'] as $item) {
                    $model->hotlineNumList[$n++] = null !== $item ? hotlineNumList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
