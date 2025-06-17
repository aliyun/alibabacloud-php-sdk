<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecLogDeliveriesResponseBody\deliveryConfigs;

class DescribeApisecLogDeliveriesResponseBody extends Model
{
    /**
     * @var deliveryConfigs[]
     */
    public $deliveryConfigs;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deliveryConfigs' => 'DeliveryConfigs',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->deliveryConfigs)) {
            Model::validateArray($this->deliveryConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deliveryConfigs) {
            if (\is_array($this->deliveryConfigs)) {
                $res['DeliveryConfigs'] = [];
                $n1 = 0;
                foreach ($this->deliveryConfigs as $item1) {
                    $res['DeliveryConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['DeliveryConfigs'])) {
            if (!empty($map['DeliveryConfigs'])) {
                $model->deliveryConfigs = [];
                $n1 = 0;
                foreach ($map['DeliveryConfigs'] as $item1) {
                    $model->deliveryConfigs[$n1] = deliveryConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
