<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeProduceDetailResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
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
     * @var float
     */
    public $confiscateAmount;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $exclusiveDateLimit;

    /**
     * @var mixed[]
     */
    public $extend;

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
    public $paidAmount;

    /**
     * @var float
     */
    public $preAmount;

    /**
     * @var string
     */
    public $preOrderId;

    /**
     * @var float
     */
    public $refundAmount;

    /**
     * @var string
     */
    public $registerNumber;

    /**
     * @var string
     */
    public $share;

    /**
     * @var int
     */
    public $source;

    /**
     * @var string
     */
    public $thirdCode;

    /**
     * @var string
     */
    public $tmName;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'allowCancel'        => 'AllowCancel',
        'bizId'              => 'BizId',
        'buyerStatus'        => 'BuyerStatus',
        'classification'     => 'Classification',
        'confiscateAmount'   => 'ConfiscateAmount',
        'createTime'         => 'CreateTime',
        'exclusiveDateLimit' => 'ExclusiveDateLimit',
        'extend'             => 'Extend',
        'finalAmount'        => 'FinalAmount',
        'icon'               => 'Icon',
        'operateNote'        => 'OperateNote',
        'paidAmount'         => 'PaidAmount',
        'preAmount'          => 'PreAmount',
        'preOrderId'         => 'PreOrderId',
        'refundAmount'       => 'RefundAmount',
        'registerNumber'     => 'RegisterNumber',
        'share'              => 'Share',
        'source'             => 'Source',
        'thirdCode'          => 'ThirdCode',
        'tmName'             => 'TmName',
        'updateTime'         => 'UpdateTime',
        'userId'             => 'UserId',
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
        if (null !== $this->confiscateAmount) {
            $res['ConfiscateAmount'] = $this->confiscateAmount;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->exclusiveDateLimit) {
            $res['ExclusiveDateLimit'] = $this->exclusiveDateLimit;
        }
        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
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
        if (null !== $this->paidAmount) {
            $res['PaidAmount'] = $this->paidAmount;
        }
        if (null !== $this->preAmount) {
            $res['PreAmount'] = $this->preAmount;
        }
        if (null !== $this->preOrderId) {
            $res['PreOrderId'] = $this->preOrderId;
        }
        if (null !== $this->refundAmount) {
            $res['RefundAmount'] = $this->refundAmount;
        }
        if (null !== $this->registerNumber) {
            $res['RegisterNumber'] = $this->registerNumber;
        }
        if (null !== $this->share) {
            $res['Share'] = $this->share;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->thirdCode) {
            $res['ThirdCode'] = $this->thirdCode;
        }
        if (null !== $this->tmName) {
            $res['TmName'] = $this->tmName;
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
     * @return data
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
        if (isset($map['ConfiscateAmount'])) {
            $model->confiscateAmount = $map['ConfiscateAmount'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExclusiveDateLimit'])) {
            $model->exclusiveDateLimit = $map['ExclusiveDateLimit'];
        }
        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
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
        if (isset($map['PaidAmount'])) {
            $model->paidAmount = $map['PaidAmount'];
        }
        if (isset($map['PreAmount'])) {
            $model->preAmount = $map['PreAmount'];
        }
        if (isset($map['PreOrderId'])) {
            $model->preOrderId = $map['PreOrderId'];
        }
        if (isset($map['RefundAmount'])) {
            $model->refundAmount = $map['RefundAmount'];
        }
        if (isset($map['RegisterNumber'])) {
            $model->registerNumber = $map['RegisterNumber'];
        }
        if (isset($map['Share'])) {
            $model->share = $map['Share'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['ThirdCode'])) {
            $model->thirdCode = $map['ThirdCode'];
        }
        if (isset($map['TmName'])) {
            $model->tmName = $map['TmName'];
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
