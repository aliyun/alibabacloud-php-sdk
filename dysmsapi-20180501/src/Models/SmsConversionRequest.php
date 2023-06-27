<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20180501\Models;

use AlibabaCloud\Tea\Model;

class SmsConversionRequest extends Model
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
     * @example true
     *
     * @var bool
     */
    public $delivered;

    /**
     * @description The ID of the OTP message.
     *
     * @example 1008030300****
     *
     * @var string
     */
    public $messageId;
    protected $_name = [
        'conversionTime' => 'ConversionTime',
        'delivered'      => 'Delivered',
        'messageId'      => 'MessageId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SmsConversionRequest
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

        return $model;
    }
}
