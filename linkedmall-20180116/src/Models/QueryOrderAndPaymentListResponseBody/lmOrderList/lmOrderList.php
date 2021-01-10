<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderAndPaymentListResponseBody\lmOrderList;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderAndPaymentListResponseBody\lmOrderList\lmOrderList\fundStructureModels;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderAndPaymentListResponseBody\lmOrderList\lmOrderList\postFee;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderAndPaymentListResponseBody\lmOrderList\lmOrderList\subOrderList;
use AlibabaCloud\Tea\Model;

class lmOrderList extends Model
{
    /**
     * @var postFee
     */
    public $postFee;

    /**
     * @var int
     */
    public $lmOrderId;

    /**
     * @var string
     */
    public $lmPaymentId;

    /**
     * @var string
     */
    public $shopName;

    /**
     * @var int
     */
    public $orderAmount;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var subOrderList
     */
    public $subOrderList;

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
     * @var int
     */
    public $tbOrderId;

    /**
     * @var fundStructureModels
     */
    public $fundStructureModels;

    /**
     * @var int
     */
    public $logisticsStatus;
    protected $_name = [
        'postFee'             => 'PostFee',
        'lmOrderId'           => 'LmOrderId',
        'lmPaymentId'         => 'LmPaymentId',
        'shopName'            => 'ShopName',
        'orderAmount'         => 'OrderAmount',
        'createDate'          => 'CreateDate',
        'subOrderList'        => 'SubOrderList',
        'enableStatus'        => 'EnableStatus',
        'extJson'             => 'ExtJson',
        'orderStatus'         => 'OrderStatus',
        'tbOrderId'           => 'TbOrderId',
        'fundStructureModels' => 'FundStructureModels',
        'logisticsStatus'     => 'LogisticsStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->postFee) {
            $res['PostFee'] = null !== $this->postFee ? $this->postFee->toMap() : null;
        }
        if (null !== $this->lmOrderId) {
            $res['LmOrderId'] = $this->lmOrderId;
        }
        if (null !== $this->lmPaymentId) {
            $res['LmPaymentId'] = $this->lmPaymentId;
        }
        if (null !== $this->shopName) {
            $res['ShopName'] = $this->shopName;
        }
        if (null !== $this->orderAmount) {
            $res['OrderAmount'] = $this->orderAmount;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->subOrderList) {
            $res['SubOrderList'] = null !== $this->subOrderList ? $this->subOrderList->toMap() : null;
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
        if (null !== $this->tbOrderId) {
            $res['TbOrderId'] = $this->tbOrderId;
        }
        if (null !== $this->fundStructureModels) {
            $res['FundStructureModels'] = null !== $this->fundStructureModels ? $this->fundStructureModels->toMap() : null;
        }
        if (null !== $this->logisticsStatus) {
            $res['LogisticsStatus'] = $this->logisticsStatus;
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
        if (isset($map['PostFee'])) {
            $model->postFee = postFee::fromMap($map['PostFee']);
        }
        if (isset($map['LmOrderId'])) {
            $model->lmOrderId = $map['LmOrderId'];
        }
        if (isset($map['LmPaymentId'])) {
            $model->lmPaymentId = $map['LmPaymentId'];
        }
        if (isset($map['ShopName'])) {
            $model->shopName = $map['ShopName'];
        }
        if (isset($map['OrderAmount'])) {
            $model->orderAmount = $map['OrderAmount'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['SubOrderList'])) {
            $model->subOrderList = subOrderList::fromMap($map['SubOrderList']);
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
        if (isset($map['TbOrderId'])) {
            $model->tbOrderId = $map['TbOrderId'];
        }
        if (isset($map['FundStructureModels'])) {
            $model->fundStructureModels = fundStructureModels::fromMap($map['FundStructureModels']);
        }
        if (isset($map['LogisticsStatus'])) {
            $model->logisticsStatus = $map['LogisticsStatus'];
        }

        return $model;
    }
}
