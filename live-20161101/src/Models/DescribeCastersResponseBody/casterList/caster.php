<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCastersResponseBody\casterList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCastersResponseBody\casterList\caster\tags;

class caster extends Model
{
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
    public $casterTemplate;

    /**
     * @var int
     */
    public $channelEnable;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $clientTokenId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $lastModified;

    /**
     * @var int
     */
    public $normType;

    /**
     * @var string
     */
    public $purchaseTime;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $status;

    /**
     * @var tags
     */
    public $tags;
    protected $_name = [
        'casterId' => 'CasterId',
        'casterName' => 'CasterName',
        'casterTemplate' => 'CasterTemplate',
        'channelEnable' => 'ChannelEnable',
        'chargeType' => 'ChargeType',
        'clientTokenId' => 'ClientTokenId',
        'createTime' => 'CreateTime',
        'duration' => 'Duration',
        'expireTime' => 'ExpireTime',
        'lastModified' => 'LastModified',
        'normType' => 'NormType',
        'purchaseTime' => 'PurchaseTime',
        'resourceGroupId' => 'ResourceGroupId',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }

        if (null !== $this->casterName) {
            $res['CasterName'] = $this->casterName;
        }

        if (null !== $this->casterTemplate) {
            $res['CasterTemplate'] = $this->casterTemplate;
        }

        if (null !== $this->channelEnable) {
            $res['ChannelEnable'] = $this->channelEnable;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->clientTokenId) {
            $res['ClientTokenId'] = $this->clientTokenId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->lastModified) {
            $res['LastModified'] = $this->lastModified;
        }

        if (null !== $this->normType) {
            $res['NormType'] = $this->normType;
        }

        if (null !== $this->purchaseTime) {
            $res['PurchaseTime'] = $this->purchaseTime;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
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
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }

        if (isset($map['CasterName'])) {
            $model->casterName = $map['CasterName'];
        }

        if (isset($map['CasterTemplate'])) {
            $model->casterTemplate = $map['CasterTemplate'];
        }

        if (isset($map['ChannelEnable'])) {
            $model->channelEnable = $map['ChannelEnable'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['ClientTokenId'])) {
            $model->clientTokenId = $map['ClientTokenId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['LastModified'])) {
            $model->lastModified = $map['LastModified'];
        }

        if (isset($map['NormType'])) {
            $model->normType = $map['NormType'];
        }

        if (isset($map['PurchaseTime'])) {
            $model->purchaseTime = $map['PurchaseTime'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
