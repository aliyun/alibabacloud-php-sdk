<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\QueryNotifyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\QueryNotifyResponseBody\data\notifyItemList;

class data extends Model
{
    /**
     * @var notifyItemList[]
     */
    public $notifyItemList;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalRecordCount;
    protected $_name = [
        'notifyItemList' => 'NotifyItemList',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalRecordCount' => 'TotalRecordCount',
    ];

    public function validate()
    {
        if (\is_array($this->notifyItemList)) {
            Model::validateArray($this->notifyItemList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->notifyItemList) {
            if (\is_array($this->notifyItemList)) {
                $res['NotifyItemList'] = [];
                $n1 = 0;
                foreach ($this->notifyItemList as $item1) {
                    $res['NotifyItemList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
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
        if (isset($map['NotifyItemList'])) {
            if (!empty($map['NotifyItemList'])) {
                $model->notifyItemList = [];
                $n1 = 0;
                foreach ($map['NotifyItemList'] as $item1) {
                    $model->notifyItemList[$n1++] = notifyItemList::fromMap($item1);
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }

        return $model;
    }
}
