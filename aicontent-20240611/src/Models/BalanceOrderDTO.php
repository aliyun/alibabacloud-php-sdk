<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class BalanceOrderDTO extends Model
{
    /**
     * @var float
     */
    public $amount;

    /**
     * @var float
     */
    public $balanceAfter;

    /**
     * @var float
     */
    public $balanceBefore;

    /**
     * @var string
     */
    public $balanceType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $modelCode;

    /**
     * @var string
     */
    public $operatorId;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $source;

    /**
     * @var float
     */
    public $totalAfter;

    /**
     * @var float
     */
    public $totalBefore;
    protected $_name = [
        'amount' => 'amount',
        'balanceAfter' => 'balanceAfter',
        'balanceBefore' => 'balanceBefore',
        'balanceType' => 'balanceType',
        'createTime' => 'createTime',
        'direction' => 'direction',
        'modelCode' => 'modelCode',
        'operatorId' => 'operatorId',
        'orderId' => 'orderId',
        'orderType' => 'orderType',
        'remark' => 'remark',
        'source' => 'source',
        'totalAfter' => 'totalAfter',
        'totalBefore' => 'totalBefore',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amount) {
            $res['amount'] = $this->amount;
        }

        if (null !== $this->balanceAfter) {
            $res['balanceAfter'] = $this->balanceAfter;
        }

        if (null !== $this->balanceBefore) {
            $res['balanceBefore'] = $this->balanceBefore;
        }

        if (null !== $this->balanceType) {
            $res['balanceType'] = $this->balanceType;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->direction) {
            $res['direction'] = $this->direction;
        }

        if (null !== $this->modelCode) {
            $res['modelCode'] = $this->modelCode;
        }

        if (null !== $this->operatorId) {
            $res['operatorId'] = $this->operatorId;
        }

        if (null !== $this->orderId) {
            $res['orderId'] = $this->orderId;
        }

        if (null !== $this->orderType) {
            $res['orderType'] = $this->orderType;
        }

        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->totalAfter) {
            $res['totalAfter'] = $this->totalAfter;
        }

        if (null !== $this->totalBefore) {
            $res['totalBefore'] = $this->totalBefore;
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
        if (isset($map['amount'])) {
            $model->amount = $map['amount'];
        }

        if (isset($map['balanceAfter'])) {
            $model->balanceAfter = $map['balanceAfter'];
        }

        if (isset($map['balanceBefore'])) {
            $model->balanceBefore = $map['balanceBefore'];
        }

        if (isset($map['balanceType'])) {
            $model->balanceType = $map['balanceType'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['direction'])) {
            $model->direction = $map['direction'];
        }

        if (isset($map['modelCode'])) {
            $model->modelCode = $map['modelCode'];
        }

        if (isset($map['operatorId'])) {
            $model->operatorId = $map['operatorId'];
        }

        if (isset($map['orderId'])) {
            $model->orderId = $map['orderId'];
        }

        if (isset($map['orderType'])) {
            $model->orderType = $map['orderType'];
        }

        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['totalAfter'])) {
            $model->totalAfter = $map['totalAfter'];
        }

        if (isset($map['totalBefore'])) {
            $model->totalBefore = $map['totalBefore'];
        }

        return $model;
    }
}
