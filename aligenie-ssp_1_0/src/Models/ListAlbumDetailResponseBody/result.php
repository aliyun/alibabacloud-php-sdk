<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListAlbumDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListAlbumDetailResponseBody\result\openDataItemList;

class result extends Model
{
    /**
     * @var int
     */
    public $currentPageNum;

    /**
     * @var openDataItemList[]
     */
    public $openDataItemList;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'currentPageNum' => 'CurrentPageNum',
        'openDataItemList' => 'OpenDataItemList',
        'pageSize' => 'PageSize',
        'totalSize' => 'TotalSize',
    ];

    public function validate()
    {
        if (\is_array($this->openDataItemList)) {
            Model::validateArray($this->openDataItemList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPageNum) {
            $res['CurrentPageNum'] = $this->currentPageNum;
        }

        if (null !== $this->openDataItemList) {
            if (\is_array($this->openDataItemList)) {
                $res['OpenDataItemList'] = [];
                $n1 = 0;
                foreach ($this->openDataItemList as $item1) {
                    $res['OpenDataItemList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPageNum'])) {
            $model->currentPageNum = $map['CurrentPageNum'];
        }

        if (isset($map['OpenDataItemList'])) {
            if (!empty($map['OpenDataItemList'])) {
                $model->openDataItemList = [];
                $n1 = 0;
                foreach ($map['OpenDataItemList'] as $item1) {
                    $model->openDataItemList[$n1] = openDataItemList::fromMap($item1);
                    ++$n1;
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
