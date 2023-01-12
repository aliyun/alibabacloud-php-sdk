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
     * @example 2022-04-01 12:00:00
     *
     * @var string
     */
    public $createDate;

    /**
     * @example 0
     *
     * @var int
     */
    public $enableStatus;

    /**
     * @var string
     */
    public $extJson;

    /**
     * @var fundStructureModels
     */
    public $fundStructureModels;

    /**
     * @example 41******03
     *
     * @var int
     */
    public $lmOrderId;

    /**
     * @example 3
     *
     * @var int
     */
    public $logisticsStatus;

    /**
     * @example 100
     *
     * @var int
     */
    public $orderAmount;

    /**
     * @example 6
     *
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
     * @var subOrderList
     */
    public $subOrderList;

    /**
     * @example 12******41253
     *
     * @var int
     */
    public $tbOrderId;
    protected $_name = [
        'createDate'          => 'CreateDate',
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
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->enableStatus) {
            $res['EnableStatus'] = $this->enableStatus;
        }
        if (null !== $this->extJson) {
            $res['ExtJson'] = $this->extJson;
        }
        if (null !== $this->fundStructureModels) {
            $res['FundStructureModels'] = null !== $this->fundStructureModels ? $this->fundStructureModels->toMap() : null;
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
            $res['SubOrderList'] = null !== $this->subOrderList ? $this->subOrderList->toMap() : null;
        }
        if (null !== $this->tbOrderId) {
            $res['TbOrderId'] = $this->tbOrderId;
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
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['EnableStatus'])) {
            $model->enableStatus = $map['EnableStatus'];
        }
        if (isset($map['ExtJson'])) {
            $model->extJson = $map['ExtJson'];
        }
        if (isset($map['FundStructureModels'])) {
            $model->fundStructureModels = fundStructureModels::fromMap($map['FundStructureModels']);
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
            $model->subOrderList = subOrderList::fromMap($map['SubOrderList']);
        }
        if (isset($map['TbOrderId'])) {
            $model->tbOrderId = $map['TbOrderId'];
        }

        return $model;
    }
}
