<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class OrderPageQuery extends Model
{
    /**
     * @var string[]
     */
    public $orderIdList;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
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
        if (\is_array($this->orderIdList)) {
            Model::validateArray($this->orderIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orderIdList) {
            if (\is_array($this->orderIdList)) {
                $res['orderIdList'] = [];
                $n1                 = 0;
                foreach ($this->orderIdList as $item1) {
                    $res['orderIdList'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['orderIdList'])) {
            if (!empty($map['orderIdList'])) {
                $model->orderIdList = [];
                $n1                 = 0;
                foreach ($map['orderIdList'] as $item1) {
                    $model->orderIdList[$n1++] = $item1;
                }
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
