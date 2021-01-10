<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCastersResponseBody\casterList;

use AlibabaCloud\Tea\Model;

class caster extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $purchaseTime;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $casterTemplate;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $casterName;

    /**
     * @var int
     */
    public $normType;

    /**
     * @var string
     */
    public $casterId;

    /**
     * @var int
     */
    public $channelEnable;
    protected $_name = [
        'status'         => 'Status',
        'startTime'      => 'StartTime',
        'purchaseTime'   => 'PurchaseTime',
        'expireTime'     => 'ExpireTime',
        'createTime'     => 'CreateTime',
        'casterTemplate' => 'CasterTemplate',
        'chargeType'     => 'ChargeType',
        'casterName'     => 'CasterName',
        'normType'       => 'NormType',
        'casterId'       => 'CasterId',
        'channelEnable'  => 'ChannelEnable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->purchaseTime) {
            $res['PurchaseTime'] = $this->purchaseTime;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->casterTemplate) {
            $res['CasterTemplate'] = $this->casterTemplate;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->casterName) {
            $res['CasterName'] = $this->casterName;
        }
        if (null !== $this->normType) {
            $res['NormType'] = $this->normType;
        }
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->channelEnable) {
            $res['ChannelEnable'] = $this->channelEnable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return caster
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['PurchaseTime'])) {
            $model->purchaseTime = $map['PurchaseTime'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CasterTemplate'])) {
            $model->casterTemplate = $map['CasterTemplate'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['CasterName'])) {
            $model->casterName = $map['CasterName'];
        }
        if (isset($map['NormType'])) {
            $model->normType = $map['NormType'];
        }
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['ChannelEnable'])) {
            $model->channelEnable = $map['ChannelEnable'];
        }

        return $model;
    }
}
