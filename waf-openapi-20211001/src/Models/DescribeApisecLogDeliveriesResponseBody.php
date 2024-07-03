<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecLogDeliveriesResponseBody\deliveryConfigs;
use AlibabaCloud\Tea\Model;

class DescribeApisecLogDeliveriesResponseBody extends Model
{
    /**
     * @description The configurations of API security log subscription.
     *
     * @var deliveryConfigs[]
     */
    public $deliveryConfigs;

    /**
     * @description The ID of the request.
     *
     * @example 2EFCFE18-78F8-5079-B312-07***48B
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deliveryConfigs' => 'DeliveryConfigs',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deliveryConfigs) {
            $res['DeliveryConfigs'] = [];
            if (null !== $this->deliveryConfigs && \is_array($this->deliveryConfigs)) {
                $n = 0;
                foreach ($this->deliveryConfigs as $item) {
                    $res['DeliveryConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApisecLogDeliveriesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeliveryConfigs'])) {
            if (!empty($map['DeliveryConfigs'])) {
                $model->deliveryConfigs = [];
                $n                      = 0;
                foreach ($map['DeliveryConfigs'] as $item) {
                    $model->deliveryConfigs[$n++] = null !== $item ? deliveryConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
