<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListPermissionApplyOrdersResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListPermissionApplyOrdersResponseBody\applyOrders\applyOrder;
use AlibabaCloud\Tea\Model;

class applyOrders extends Model
{
    /**
     * @var applyOrder[]
     */
    public $applyOrder;

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
    public $totalCount;
    protected $_name = [
        'applyOrder' => 'ApplyOrder',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyOrder) {
            $res['ApplyOrder'] = [];
            if (null !== $this->applyOrder && \is_array($this->applyOrder)) {
                $n = 0;
                foreach ($this->applyOrder as $item) {
                    $res['ApplyOrder'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
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
     * @return applyOrders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplyOrder'])) {
            if (!empty($map['ApplyOrder'])) {
                $model->applyOrder = [];
                $n                 = 0;
                foreach ($map['ApplyOrder'] as $item) {
                    $model->applyOrder[$n++] = null !== $item ? applyOrder::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
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
