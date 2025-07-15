<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCastersResponseBody\casterList;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCastersResponseBody\casterList\caster\tags;
use AlibabaCloud\Tea\Model;

class caster extends Model
{
    /**
     * @description The ID of the production studio. You can specify the ID in a request to query the streaming URLs of the production studio, start the production studio, add a video resource, a layout, a component, or a playlist to the production studio, or query layouts of the production studio.
     *
     * @example LIVEPRODUCER_POST-cn-0pp1czt****
     *
     * @var string
     */
    public $casterId;

    /**
     * @description The name of the production studio.
     *
     * @example liveCaster****
     *
     * @var string
     */
    public $casterName;

    /**
     * @description The resolution in which the production studio plays videos. This parameter is returned if the subscription billing method is used. Valid values:
     *
     *   lp_ld: low definition
     *   lp_sd: standard definition
     *   lp_hd: high definition
     *   lp_ud: ultra high definition.
     *   lp_ld_v: low definition (portrait mode)
     *   lp_sd_v: standard definition (portrait mode)
     *   lp_hd_v: high definition (portrait mode)
     *   lp_ud_v: ultra high definition (portrait mode)
     *
     * @example lp_ld
     *
     * @var string
     */
    public $casterTemplate;

    /**
     * @description Indicates whether the channel is enabled for the production studio.
     *
     *   0: The channel is disabled.
     *   1: The channel is enabled.
     *
     * @example 1
     *
     * @var int
     */
    public $channelEnable;

    /**
     * @description The billing method. Valid values:
     *
     *   PrePaid: the subscription billing method
     *   PostPaid: the pay-as-you-go billing method
     *
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * @example 53200b81-b761-4c10-842a-a0726d97****
     *
     * @var string
     */
    public $clientTokenId;

    /**
     * @description The time when the production studio was created.
     *
     * @example 2017-08-30 12:02:57.0
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The streaming duration. Format: hh:mm:ss.
     *
     * @example 1:02:33
     *
     * @var string
     */
    public $duration;

    /**
     * @description The time when the production studio expires.
     *
     * @example 2018-08-30 12:02:57.0
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The time when the production studio was last modified. For example, the time when the production studio was last started, stopped, or modified is returned.
     *
     * @example 2021-12-01T05:08:45Z
     *
     * @var string
     */
    public $lastModified;

    /**
     * @description The type of the production studio. Valid values:
     *
     *   0: playlist mode
     *   1: general mode
     *
     * @example 1
     *
     * @var int
     */
    public $normType;

    /**
     * @description The time when the production studio was purchased.
     *
     * @example 2017-08-30 12:02:57.0
     *
     * @var string
     */
    public $purchaseTime;

    /**
     * @description The resource group ID. For more information about resource groups, see [Resource groups](https://help.aliyun.com/document_detail/2381067.html).
     *
     * @example rg-aekzw******
     *
     * @var int
     */
    public $resourceGroupId;

    /**
     * @description The time when the production studio was started. This parameter is returned if the production studio is in the streaming status.
     *
     * @example 2017-08-30 18:02:57.0
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the production studio. Valid values:
     *
     *   0: idle
     *   1: streaming
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The tags.
     *
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

    public function validate() {}

    public function toMap()
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
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
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
