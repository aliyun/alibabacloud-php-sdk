<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class SmsConversionIntlRequest extends Model
{
    /**
     * @description The time when the OTP message was delivered. The value is a UNIX timestamp. Unit: milliseconds.
     *
     *   If you leave the parameter empty, the current timestamp is specified by default.
     *   If you specify the parameter, the timestamp must be greater than the message sending time and less than the current timestamp.
     *
     * @example 1349055900000
     *
     * @var int
     */
    public $conversionTime;

    /**
     * @description Specifies whether customers replied to the OTP message. Valid values: true and false.
     *
     * This parameter is required.
     * @example true
     *
     * @var bool
     */
    public $delivered;

    /**
     * @description The ID of the message.
     *
     * This parameter is required.
     * @example 1008030300****
     *
     * @var string
     */
    public $messageId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'conversionTime'       => 'ConversionTime',
        'delivered'            => 'Delivered',
        'messageId'            => 'MessageId',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conversionTime) {
            $res['ConversionTime'] = $this->conversionTime;
        }
        if (null !== $this->delivered) {
            $res['Delivered'] = $this->delivered;
        }
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SmsConversionIntlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConversionTime'])) {
            $model->conversionTime = $map['ConversionTime'];
        }
        if (isset($map['Delivered'])) {
            $model->delivered = $map['Delivered'];
        }
        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
