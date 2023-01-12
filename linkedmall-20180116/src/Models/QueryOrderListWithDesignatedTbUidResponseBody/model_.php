<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderListWithDesignatedTbUidResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderListWithDesignatedTbUidResponseBody\model\fundStructureModels;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderListWithDesignatedTbUidResponseBody\model\postFee;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderListWithDesignatedTbUidResponseBody\model\subOrderList;
use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $enableStatus;

    /**
     * @var string
     */
    public $extJson;

    /**
     * @var fundStructureModels[]
     */
    public $fundStructureModels;

    /**
     * @var int
     */
    public $lmOrderId;

    /**
     * @var int
     */
    public $logisticsStatus;

    /**
     * @var int
     */
    public $orderAmount;

    /**
     * @var int
     */
    public $orderStatus;

    /**
     * @var postFee
     */
    public $postFee;

    /**
     * @var string
     */
    public $shopName;

    /**
     * @var subOrderList[]
     */
    public $subOrderList;

    /**
     * @var int
     */
    public $tbOrderId;
    protected $_name = [
        'createTime'          => 'CreateTime',
        'enableStatus'        => 'EnableStatus',
        'extJson'             => 'ExtJson',
        'fundStructureModels' => 'FundStructureModels',
        'lmOrderId'           => 'LmOrderId',
        'logisticsStatus'     => 'LogisticsStatus',
        'orderAmount'         => 'OrderAmount',
        'orderStatus'         => 'OrderStatus',
        'postFee'             => 'PostFee',
        'shopName'            => 'ShopName',
        'subOrderList'        => 'SubOrderList',
        'tbOrderId'           => 'TbOrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->enableStatus) {
            $res['EnableStatus'] = $this->enableStatus;
        }
        if (null !== $this->extJson) {
            $res['ExtJson'] = $this->extJson;
        }
        if (null !== $this->fundStructureModels) {
            $res['FundStructureModels'] = [];
            if (null !== $this->fundStructureModels && \is_array($this->fundStructureModels)) {
                $n = 0;
                foreach ($this->fundStructureModels as $item) {
                    $res['FundStructureModels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->lmOrderId) {
            $res['LmOrderId'] = $this->lmOrderId;
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
        if (null !== $this->postFee) {
            $res['PostFee'] = null !== $this->postFee ? $this->postFee->toMap() : null;
        }
        if (null !== $this->shopName) {
            $res['ShopName'] = $this->shopName;
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
        if (null !== $this->tbOrderId) {
            $res['TbOrderId'] = $this->tbOrderId;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EnableStatus'])) {
            $model->enableStatus = $map['EnableStatus'];
        }
        if (isset($map['ExtJson'])) {
            $model->extJson = $map['ExtJson'];
        }
        if (isset($map['FundStructureModels'])) {
            if (!empty($map['FundStructureModels'])) {
                $model->fundStructureModels = [];
                $n                          = 0;
                foreach ($map['FundStructureModels'] as $item) {
                    $model->fundStructureModels[$n++] = null !== $item ? fundStructureModels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LmOrderId'])) {
            $model->lmOrderId = $map['LmOrderId'];
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
        if (isset($map['PostFee'])) {
            $model->postFee = postFee::fromMap($map['PostFee']);
        }
        if (isset($map['ShopName'])) {
            $model->shopName = $map['ShopName'];
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
        if (isset($map['TbOrderId'])) {
            $model->tbOrderId = $map['TbOrderId'];
        }

        return $model;
    }
}
