<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderListResponseBody\lmOrderList;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderListResponseBody\lmOrderList\lmOrderList\fundStructureModels;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderListResponseBody\lmOrderList\lmOrderList\postFee;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderListResponseBody\lmOrderList\lmOrderList\subOrderList;
use AlibabaCloud\Tea\Model;

class lmOrderList extends Model
{
    /**
     * @var int
     */
    public $lmOrderId;

    /**
     * @var int
     */
    public $enableStatus;

    /**
     * @var string
     */
    public $extJson;

    /**
     * @var int
     */
    public $orderStatus;

    /**
     * @var string
     */
    public $shopName;

    /**
     * @var int
     */
    public $tbOrderId;

    /**
     * @var int
     */
    public $orderAmount;

    /**
     * @var int
     */
    public $logisticsStatus;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var fundStructureModels
     */
    public $fundStructureModels;

    /**
     * @var subOrderList
     */
    public $subOrderList;

    /**
     * @var postFee
     */
    public $postFee;
    protected $_name = [
        'lmOrderId'           => 'LmOrderId',
        'enableStatus'        => 'EnableStatus',
        'extJson'             => 'ExtJson',
        'orderStatus'         => 'OrderStatus',
        'shopName'            => 'ShopName',
        'tbOrderId'           => 'TbOrderId',
        'orderAmount'         => 'OrderAmount',
        'logisticsStatus'     => 'LogisticsStatus',
        'createDate'          => 'CreateDate',
        'fundStructureModels' => 'FundStructureModels',
        'subOrderList'        => 'SubOrderList',
        'postFee'             => 'PostFee',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lmOrderId) {
            $res['LmOrderId'] = $this->lmOrderId;
        }
        if (null !== $this->enableStatus) {
            $res['EnableStatus'] = $this->enableStatus;
        }
        if (null !== $this->extJson) {
            $res['ExtJson'] = $this->extJson;
        }
        if (null !== $this->orderStatus) {
            $res['OrderStatus'] = $this->orderStatus;
        }
        if (null !== $this->shopName) {
            $res['ShopName'] = $this->shopName;
        }
        if (null !== $this->tbOrderId) {
            $res['TbOrderId'] = $this->tbOrderId;
        }
        if (null !== $this->orderAmount) {
            $res['OrderAmount'] = $this->orderAmount;
        }
        if (null !== $this->logisticsStatus) {
            $res['LogisticsStatus'] = $this->logisticsStatus;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->fundStructureModels) {
            $res['FundStructureModels'] = null !== $this->fundStructureModels ? $this->fundStructureModels->toMap() : null;
        }
        if (null !== $this->subOrderList) {
            $res['SubOrderList'] = null !== $this->subOrderList ? $this->subOrderList->toMap() : null;
        }
        if (null !== $this->postFee) {
            $res['PostFee'] = null !== $this->postFee ? $this->postFee->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lmOrderList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LmOrderId'])) {
            $model->lmOrderId = $map['LmOrderId'];
        }
        if (isset($map['EnableStatus'])) {
            $model->enableStatus = $map['EnableStatus'];
        }
        if (isset($map['ExtJson'])) {
            $model->extJson = $map['ExtJson'];
        }
        if (isset($map['OrderStatus'])) {
            $model->orderStatus = $map['OrderStatus'];
        }
        if (isset($map['ShopName'])) {
            $model->shopName = $map['ShopName'];
        }
        if (isset($map['TbOrderId'])) {
            $model->tbOrderId = $map['TbOrderId'];
        }
        if (isset($map['OrderAmount'])) {
            $model->orderAmount = $map['OrderAmount'];
        }
        if (isset($map['LogisticsStatus'])) {
            $model->logisticsStatus = $map['LogisticsStatus'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['FundStructureModels'])) {
            $model->fundStructureModels = fundStructureModels::fromMap($map['FundStructureModels']);
        }
        if (isset($map['SubOrderList'])) {
            $model->subOrderList = subOrderList::fromMap($map['SubOrderList']);
        }
        if (isset($map['PostFee'])) {
            $model->postFee = postFee::fromMap($map['PostFee']);
        }

        return $model;
    }
}
