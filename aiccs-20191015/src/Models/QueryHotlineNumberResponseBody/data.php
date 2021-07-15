<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryHotlineNumberResponseBody;

use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryHotlineNumberResponseBody\data\hotlineNumList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 数据总量
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description 当前页面
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description 每页大小
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 号码列表
     *
     * @var hotlineNumList[]
     */
    public $hotlineNumList;
    protected $_name = [
        'totalCount'     => 'TotalCount',
        'currentPage'    => 'CurrentPage',
        'pageSize'       => 'PageSize',
        'hotlineNumList' => 'HotlineNumList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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

        return $model;
    }
}
