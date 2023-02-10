<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class DeleteConsumerGroupSubscribeRelationRequest extends Model
{
    /**
     * @example nJRaJPn5U1JITGfjBO9l00****
     *
     * @var string
     */
    public $consumerGroupId;

    /**
     * @example iot-cn-0pp1n8t****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example a1fyXVF****
     *
     * @var string
     */
    public $productKey;
    protected $_name = [
        'consumerGroupId' => 'ConsumerGroupId',
        'iotInstanceId'   => 'IotInstanceId',
        'productKey'      => 'ProductKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumerGroupId) {
            $res['ConsumerGroupId'] = $this->consumerGroupId;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteConsumerGroupSubscribeRelationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsumerGroupId'])) {
            $model->consumerGroupId = $map['ConsumerGroupId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        return $model;
    }
}
