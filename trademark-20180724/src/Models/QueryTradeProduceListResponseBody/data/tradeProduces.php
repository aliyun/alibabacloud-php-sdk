<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeProduceListResponseBody\data;

use AlibabaCloud\Tea\Model;

class tradeProduces extends Model
{
    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var float
     */
    public $preAmount;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var int
     */
    public $buyerStatus;

    /**
     * @var int
     */
    public $source;

    /**
     * @var string
     */
    public $operateNote;

    /**
     * @var string
     */
    public $preOrderId;

    /**
     * @var bool
     */
    public $allowCancel;

    /**
     * @var string
     */
    public $registerNumber;

    /**
     * @var string
     */
    public $classification;

    /**
     * @var float
     */
    public $finalAmount;

    /**
     * @var int
     */
    public $failReason;
    protected $_name = [
        'updateTime'     => 'UpdateTime',
        'preAmount'      => 'PreAmount',
        'createTime'     => 'CreateTime',
        'userId'         => 'UserId',
        'bizId'          => 'BizId',
        'icon'           => 'Icon',
        'buyerStatus'    => 'BuyerStatus',
        'source'         => 'Source',
        'operateNote'    => 'OperateNote',
        'preOrderId'     => 'PreOrderId',
        'allowCancel'    => 'AllowCancel',
        'registerNumber' => 'RegisterNumber',
        'classification' => 'Classification',
        'finalAmount'    => 'FinalAmount',
        'failReason'     => 'FailReason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->preAmount) {
            $res['PreAmount'] = $this->preAmount;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }
        if (null !== $this->buyerStatus) {
            $res['BuyerStatus'] = $this->buyerStatus;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->operateNote) {
            $res['OperateNote'] = $this->operateNote;
        }
        if (null !== $this->preOrderId) {
            $res['PreOrderId'] = $this->preOrderId;
        }
        if (null !== $this->allowCancel) {
            $res['AllowCancel'] = $this->allowCancel;
        }
        if (null !== $this->registerNumber) {
            $res['RegisterNumber'] = $this->registerNumber;
        }
        if (null !== $this->classification) {
            $res['Classification'] = $this->classification;
        }
        if (null !== $this->finalAmount) {
            $res['FinalAmount'] = $this->finalAmount;
        }
        if (null !== $this->failReason) {
            $res['FailReason'] = $this->failReason;
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
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['PreAmount'])) {
            $model->preAmount = $map['PreAmount'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['BuyerStatus'])) {
            $model->buyerStatus = $map['BuyerStatus'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['OperateNote'])) {
            $model->operateNote = $map['OperateNote'];
        }
        if (isset($map['PreOrderId'])) {
            $model->preOrderId = $map['PreOrderId'];
        }
        if (isset($map['AllowCancel'])) {
            $model->allowCancel = $map['AllowCancel'];
        }
        if (isset($map['RegisterNumber'])) {
            $model->registerNumber = $map['RegisterNumber'];
        }
        if (isset($map['Classification'])) {
            $model->classification = $map['Classification'];
        }
        if (isset($map['FinalAmount'])) {
            $model->finalAmount = $map['FinalAmount'];
        }
        if (isset($map['FailReason'])) {
            $model->failReason = $map['FailReason'];
        }

        return $model;
    }
}
