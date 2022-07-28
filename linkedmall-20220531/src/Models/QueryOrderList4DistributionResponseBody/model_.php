<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryOrderList4DistributionResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryOrderList4DistributionResponseBody\model\subOrderList;
use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @var string
     */
    public $createDate;

    /**
     * @var string
     */
    public $distributionOrderId;

    /**
     * @var string
     */
    public $distributorId;

    /**
     * @var string
     */
    public $logisticsStatus;

    /**
     * @var string
     */
    public $orderAmount;

    /**
     * @var string
     */
    public $orderStatus;

    /**
     * @var subOrderList[]
     */
    public $subOrderList;
    protected $_name = [
        'createDate'          => 'CreateDate',
        'distributionOrderId' => 'DistributionOrderId',
        'distributorId'       => 'DistributorId',
        'logisticsStatus'     => 'LogisticsStatus',
        'orderAmount'         => 'OrderAmount',
        'orderStatus'         => 'OrderStatus',
        'subOrderList'        => 'SubOrderList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->distributionOrderId) {
            $res['DistributionOrderId'] = $this->distributionOrderId;
        }
        if (null !== $this->distributorId) {
            $res['DistributorId'] = $this->distributorId;
        }
        if (null !== $this->logisticsStatus) {
            $res['LogisticsStatus'] = $this->logisticsStatus;
        }
        if (null !== $this->orderAmount) {
            $res['OrderAmount'] = $this->orderAmount;
        }
        if (null !== $this->orderStatus) {
            $res['OrderStatus'] = $this->orderStatus;
        }
        if (null !== $this->subOrderList) {
            $res['SubOrderList'] = [];
            if (null !== $this->subOrderList && \is_array($this->subOrderList)) {
                $n = 0;
                foreach ($this->subOrderList as $item) {
                    $res['SubOrderList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['DistributionOrderId'])) {
            $model->distributionOrderId = $map['DistributionOrderId'];
        }
        if (isset($map['DistributorId'])) {
            $model->distributorId = $map['DistributorId'];
        }
        if (isset($map['LogisticsStatus'])) {
            $model->logisticsStatus = $map['LogisticsStatus'];
        }
        if (isset($map['OrderAmount'])) {
            $model->orderAmount = $map['OrderAmount'];
        }
        if (isset($map['OrderStatus'])) {
            $model->orderStatus = $map['OrderStatus'];
        }
        if (isset($map['SubOrderList'])) {
            if (!empty($map['SubOrderList'])) {
                $model->subOrderList = [];
                $n                   = 0;
                foreach ($map['SubOrderList'] as $item) {
                    $model->subOrderList[$n++] = null !== $item ? subOrderList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
