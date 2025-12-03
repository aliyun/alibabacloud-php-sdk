<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20180501\Models;

use AlibabaCloud\Dara\Model;

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

    /**
     * @var string
     */
    public $to;
    protected $_name = [
        'conversionTime' => 'ConversionTime',
        'delivered' => 'Delivered',
        'messageId' => 'MessageId',
        'to' => 'To',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->to) {
            $res['To'] = $this->to;
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
        if (isset($map['ConversionTime'])) {
            $model->conversionTime = $map['ConversionTime'];
        }

        if (isset($map['Delivered'])) {
            $model->delivered = $map['Delivered'];
        }

        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }

        if (isset($map['To'])) {
            $model->to = $map['To'];
        }

        return $model;
    }
}
