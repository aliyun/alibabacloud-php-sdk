<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeProduceListResponseBody\data;

use AlibabaCloud\Tea\Model;

class tradeProduces extends Model
{
    /**
     * @var bool
     */
    public $allowCancel;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var int
     */
    public $buyerStatus;

    /**
     * @var string
     */
    public $classification;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $failReason;

    /**
     * @var float
     */
    public $finalAmount;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var string
     */
    public $operateNote;

    /**
     * @var float
     */
    public $preAmount;

    /**
     * @var string
     */
    public $preOrderId;

    /**
     * @var string
     */
    public $registerNumber;

    /**
     * @var int
     */
    public $source;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'allowCancel'    => 'AllowCancel',
        'bizId'          => 'BizId',
        'buyerStatus'    => 'BuyerStatus',
        'classification' => 'Classification',
        'createTime'     => 'CreateTime',
        'failReason'     => 'FailReason',
        'finalAmount'    => 'FinalAmount',
        'icon'           => 'Icon',
        'operateNote'    => 'OperateNote',
        'preAmount'      => 'PreAmount',
        'preOrderId'     => 'PreOrderId',
        'registerNumber' => 'RegisterNumber',
        'source'         => 'Source',
        'updateTime'     => 'UpdateTime',
        'userId'         => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowCancel) {
            $res['AllowCancel'] = $this->allowCancel;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->buyerStatus) {
            $res['BuyerStatus'] = $this->buyerStatus;
        }
        if (null !== $this->classification) {
            $res['Classification'] = $this->classification;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->failReason) {
            $res['FailReason'] = $this->failReason;
        }
        if (null !== $this->finalAmount) {
            $res['FinalAmount'] = $this->finalAmount;
        }
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }
        if (null !== $this->operateNote) {
            $res['OperateNote'] = $this->operateNote;
        }
        if (null !== $this->preAmount) {
            $res['PreAmount'] = $this->preAmount;
        }
        if (null !== $this->preOrderId) {
            $res['PreOrderId'] = $this->preOrderId;
        }
        if (null !== $this->registerNumber) {
            $res['RegisterNumber'] = $this->registerNumber;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tradeProduces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowCancel'])) {
            $model->allowCancel = $map['AllowCancel'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['BuyerStatus'])) {
            $model->buyerStatus = $map['BuyerStatus'];
        }
        if (isset($map['Classification'])) {
            $model->classification = $map['Classification'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['FailReason'])) {
            $model->failReason = $map['FailReason'];
        }
        if (isset($map['FinalAmount'])) {
            $model->finalAmount = $map['FinalAmount'];
        }
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['OperateNote'])) {
            $model->operateNote = $map['OperateNote'];
        }
        if (isset($map['PreAmount'])) {
            $model->preAmount = $map['PreAmount'];
        }
        if (isset($map['PreOrderId'])) {
            $model->preOrderId = $map['PreOrderId'];
        }
        if (isset($map['RegisterNumber'])) {
            $model->registerNumber = $map['RegisterNumber'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
