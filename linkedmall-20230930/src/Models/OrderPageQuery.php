<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class OrderPageQuery extends Model
{
    /**
     * @var string[]
     */
    public $orderIdList;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 6692****5696
     *
     * @var string
     */
    public $purchaseOrderId;
    protected $_name = [
        'orderIdList'     => 'orderIdList',
        'pageNumber'      => 'pageNumber',
        'pageSize'        => 'pageSize',
        'purchaseOrderId' => 'purchaseOrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderIdList) {
            $res['orderIdList'] = $this->orderIdList;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->purchaseOrderId) {
            $res['purchaseOrderId'] = $this->purchaseOrderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OrderPageQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['orderIdList'])) {
            if (!empty($map['orderIdList'])) {
                $model->orderIdList = $map['orderIdList'];
            }
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['purchaseOrderId'])) {
            $model->purchaseOrderId = $map['purchaseOrderId'];
        }

        return $model;
    }
}
