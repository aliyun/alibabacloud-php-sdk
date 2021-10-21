<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeProduceDetailResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $thirdCode;

    /**
     * @var string
     */
    public $share;

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
     * @var float
     */
    public $refundAmount;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var int
     */
    public $buyerStatus;

    /**
     * @var int
     */
    public $source;

    /**
     * @var float
     */
    public $confiscateAmount;

    /**
     * @var string
     */
    public $operateNote;

    /**
     * @var string
     */
    public $preOrderId;

    /**
     * @var mixed[]
     */
    public $extend;

    /**
     * @var string
     */
    public $tmName;

    /**
     * @var string
     */
    public $exclusiveDateLimit;

    /**
     * @var bool
     */
    public $allowCancel;

    /**
     * @var string
     */
    public $registerNumber;

    /**
     * @var float
     */
    public $finalAmount;

    /**
     * @var string
     */
    public $classification;

    /**
     * @var float
     */
    public $paidAmount;
    protected $_name = [
        'updateTime'         => 'UpdateTime',
        'thirdCode'          => 'ThirdCode',
        'share'              => 'Share',
        'preAmount'          => 'PreAmount',
        'createTime'         => 'CreateTime',
        'userId'             => 'UserId',
        'refundAmount'       => 'RefundAmount',
        'icon'               => 'Icon',
        'bizId'              => 'BizId',
        'buyerStatus'        => 'BuyerStatus',
        'source'             => 'Source',
        'confiscateAmount'   => 'ConfiscateAmount',
        'operateNote'        => 'OperateNote',
        'preOrderId'         => 'PreOrderId',
        'extend'             => 'Extend',
        'tmName'             => 'TmName',
        'exclusiveDateLimit' => 'ExclusiveDateLimit',
        'allowCancel'        => 'AllowCancel',
        'registerNumber'     => 'RegisterNumber',
        'finalAmount'        => 'FinalAmount',
        'classification'     => 'Classification',
        'paidAmount'         => 'PaidAmount',
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
        if (null !== $this->thirdCode) {
            $res['ThirdCode'] = $this->thirdCode;
        }
        if (null !== $this->share) {
            $res['Share'] = $this->share;
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
        if (null !== $this->refundAmount) {
            $res['RefundAmount'] = $this->refundAmount;
        }
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->buyerStatus) {
            $res['BuyerStatus'] = $this->buyerStatus;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->confiscateAmount) {
            $res['ConfiscateAmount'] = $this->confiscateAmount;
        }
        if (null !== $this->operateNote) {
            $res['OperateNote'] = $this->operateNote;
        }
        if (null !== $this->preOrderId) {
            $res['PreOrderId'] = $this->preOrderId;
        }
        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }
        if (null !== $this->tmName) {
            $res['TmName'] = $this->tmName;
        }
        if (null !== $this->exclusiveDateLimit) {
            $res['ExclusiveDateLimit'] = $this->exclusiveDateLimit;
        }
        if (null !== $this->allowCancel) {
            $res['AllowCancel'] = $this->allowCancel;
        }
        if (null !== $this->registerNumber) {
            $res['RegisterNumber'] = $this->registerNumber;
        }
        if (null !== $this->finalAmount) {
            $res['FinalAmount'] = $this->finalAmount;
        }
        if (null !== $this->classification) {
            $res['Classification'] = $this->classification;
        }
        if (null !== $this->paidAmount) {
            $res['PaidAmount'] = $this->paidAmount;
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
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['ThirdCode'])) {
            $model->thirdCode = $map['ThirdCode'];
        }
        if (isset($map['Share'])) {
            $model->share = $map['Share'];
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
        if (isset($map['RefundAmount'])) {
            $model->refundAmount = $map['RefundAmount'];
        }
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['BuyerStatus'])) {
            $model->buyerStatus = $map['BuyerStatus'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['ConfiscateAmount'])) {
            $model->confiscateAmount = $map['ConfiscateAmount'];
        }
        if (isset($map['OperateNote'])) {
            $model->operateNote = $map['OperateNote'];
        }
        if (isset($map['PreOrderId'])) {
            $model->preOrderId = $map['PreOrderId'];
        }
        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }
        if (isset($map['TmName'])) {
            $model->tmName = $map['TmName'];
        }
        if (isset($map['ExclusiveDateLimit'])) {
            $model->exclusiveDateLimit = $map['ExclusiveDateLimit'];
        }
        if (isset($map['AllowCancel'])) {
            $model->allowCancel = $map['AllowCancel'];
        }
        if (isset($map['RegisterNumber'])) {
            $model->registerNumber = $map['RegisterNumber'];
        }
        if (isset($map['FinalAmount'])) {
            $model->finalAmount = $map['FinalAmount'];
        }
        if (isset($map['Classification'])) {
            $model->classification = $map['Classification'];
        }
        if (isset($map['PaidAmount'])) {
            $model->paidAmount = $map['PaidAmount'];
        }

        return $model;
    }
}
