<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20180501\Models;

use AlibabaCloud\Tea\Model;

class SmsConversionRequest extends Model
{
    /**
     * @var string
     */
    public $messageId;

    /**
     * @var bool
     */
    public $delivered;

    /**
     * @var int
     */
    public $conversionTime;
    protected $_name = [
        'messageId'      => 'MessageId',
        'delivered'      => 'Delivered',
        'conversionTime' => 'ConversionTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }
        if (null !== $this->delivered) {
            $res['Delivered'] = $this->delivered;
        }
        if (null !== $this->conversionTime) {
            $res['ConversionTime'] = $this->conversionTime;
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
        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }
        if (isset($map['Delivered'])) {
            $model->delivered = $map['Delivered'];
        }
        if (isset($map['ConversionTime'])) {
            $model->conversionTime = $map['ConversionTime'];
        }

        return $model;
    }
}
