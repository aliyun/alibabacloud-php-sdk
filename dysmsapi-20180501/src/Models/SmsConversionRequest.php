<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20180501\Models;

use AlibabaCloud\Tea\Model;

class SmsConversionRequest extends Model
{
    /**
     * @var int
     */
    public $conversionTime;

    /**
     * @var bool
     */
    public $delivered;

    /**
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
