<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListCateContentResponseBody;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListCateContentResponseBody\result\openDataItemList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $currentPageNum;

    /**
     * @var openDataItemList[]
     */
    public $openDataItemList;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 12002
     *
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'currentPageNum'   => 'CurrentPageNum',
        'openDataItemList' => 'OpenDataItemList',
        'pageSize'         => 'PageSize',
        'totalSize'        => 'TotalSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPageNum) {
            $res['CurrentPageNum'] = $this->currentPageNum;
        }
        if (null !== $this->openDataItemList) {
            $res['OpenDataItemList'] = [];
            if (null !== $this->openDataItemList && \is_array($this->openDataItemList)) {
                $n = 0;
                foreach ($this->openDataItemList as $item) {
                    $res['OpenDataItemList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
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
        if (isset($map['CurrentPageNum'])) {
            $model->currentPageNum = $map['CurrentPageNum'];
        }
        if (isset($map['OpenDataItemList'])) {
            if (!empty($map['OpenDataItemList'])) {
                $model->openDataItemList = [];
                $n                       = 0;
                foreach ($map['OpenDataItemList'] as $item) {
                    $model->openDataItemList[$n++] = null !== $item ? openDataItemList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }

        return $model;
    }
}
