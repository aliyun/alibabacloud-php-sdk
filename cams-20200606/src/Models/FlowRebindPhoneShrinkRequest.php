<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class FlowRebindPhoneShrinkRequest extends Model
{
    /**
     * @description Message channel code
     *
     * This parameter is required.
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $channelCode;

    /**
     * @description Message channel type
     *
     * This parameter is required.
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $channelType;

    /**
     * @description Flow code.
     *
     * This parameter is required.
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $flowCode;

    /**
     * @description Flow version
     *
     * @example 示例值
     *
     * @var string
     */
    public $flowVersion;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description Phone numbers or PageIds under the channel instance, etc.
     *
     * @var string
     */
    public $phoneNumbersShrink;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description WABA account ID, or PageId for other channel types, etc.
     *
     * This parameter is required.
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $wabaId;
    protected $_name = [
        'channelCode' => 'ChannelCode',
        'channelType' => 'ChannelType',
        'flowCode' => 'FlowCode',
        'flowVersion' => 'FlowVersion',
        'ownerId' => 'OwnerId',
        'phoneNumbersShrink' => 'PhoneNumbers',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'wabaId' => 'WabaId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelCode) {
            $res['ChannelCode'] = $this->channelCode;
        }
        if (null !== $this->channelType) {
            $res['ChannelType'] = $this->channelType;
        }
        if (null !== $this->flowCode) {
            $res['FlowCode'] = $this->flowCode;
        }
        if (null !== $this->flowVersion) {
            $res['FlowVersion'] = $this->flowVersion;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->phoneNumbersShrink) {
            $res['PhoneNumbers'] = $this->phoneNumbersShrink;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->wabaId) {
            $res['WabaId'] = $this->wabaId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FlowRebindPhoneShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelCode'])) {
            $model->channelCode = $map['ChannelCode'];
        }
        if (isset($map['ChannelType'])) {
            $model->channelType = $map['ChannelType'];
        }
        if (isset($map['FlowCode'])) {
            $model->flowCode = $map['FlowCode'];
        }
        if (isset($map['FlowVersion'])) {
            $model->flowVersion = $map['FlowVersion'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PhoneNumbers'])) {
            $model->phoneNumbersShrink = $map['PhoneNumbers'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['WabaId'])) {
            $model->wabaId = $map['WabaId'];
        }

        return $model;
    }
}
