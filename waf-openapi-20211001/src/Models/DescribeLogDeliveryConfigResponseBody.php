<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeLogDeliveryConfigResponseBody\deliveryConfig;

class DescribeLogDeliveryConfigResponseBody extends Model
{
    /**
     * @var deliveryConfig
     */
    public $deliveryConfig;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deliveryConfig' => 'DeliveryConfig',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->deliveryConfig) {
            $this->deliveryConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deliveryConfig) {
            $res['DeliveryConfig'] = null !== $this->deliveryConfig ? $this->deliveryConfig->toArray($noStream) : $this->deliveryConfig;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DeliveryConfig'])) {
            $model->deliveryConfig = deliveryConfig::fromMap($map['DeliveryConfig']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
