<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCastersResponse\casterList;

use AlibabaCloud\Tea\Model;

class caster extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $normType;

    /**
     * @var string
     */
    public $casterId;

    /**
     * @var string
     */
    public $casterName;

    /**
     * @var string
     */
    public $createTime;

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
    public $chargeType;

    /**
     * @var string
     */
    public $casterTemplate;

    /**
     * @var int
     */
    public $channelEnable;
    protected $_name = [
        'status'         => 'Status',
        'normType'       => 'NormType',
        'casterId'       => 'CasterId',
        'casterName'     => 'CasterName',
        'createTime'     => 'CreateTime',
        'startTime'      => 'StartTime',
        'purchaseTime'   => 'PurchaseTime',
        'expireTime'     => 'ExpireTime',
        'chargeType'     => 'ChargeType',
        'casterTemplate' => 'CasterTemplate',
        'channelEnable'  => 'ChannelEnable',
    ];

    public function validate()
    {
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('normType', $this->normType, true);
        Model::validateRequired('casterId', $this->casterId, true);
        Model::validateRequired('casterName', $this->casterName, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('purchaseTime', $this->purchaseTime, true);
        Model::validateRequired('expireTime', $this->expireTime, true);
        Model::validateRequired('chargeType', $this->chargeType, true);
        Model::validateRequired('casterTemplate', $this->casterTemplate, true);
        Model::validateRequired('channelEnable', $this->channelEnable, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->normType) {
            $res['NormType'] = $this->normType;
        }
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->casterName) {
            $res['CasterName'] = $this->casterName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->casterTemplate) {
            $res['CasterTemplate'] = $this->casterTemplate;
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
        if (isset($map['NormType'])) {
            $model->normType = $map['NormType'];
        }
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['CasterName'])) {
            $model->casterName = $map['CasterName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['CasterTemplate'])) {
            $model->casterTemplate = $map['CasterTemplate'];
        }
        if (isset($map['ChannelEnable'])) {
            $model->channelEnable = $map['ChannelEnable'];
        }

        return $model;
    }
}
