<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class DeleteConsumerGroupSubscribeRelationRequest extends Model
{
    /**
     * @description The ID of the consumer group. You can call the [QuerySubscribeRelation](~~170352~~) operation to query the consumer group ID in an AMQP subscription. You can also go to the IoT Platform console,and choose **Rules** > **Server-side Subscription** to view the consumer group ID.
     *
     * @example nJRaJPn5U1JITGfjBO9l00****
     *
     * @var string
     */
    public $consumerGroupId;

    /**
     * @description The ID of the instance. You can view the instance **ID** on the **Overview** page in the IoT Platform console.
     *
     * >*   If your instance has an ID, you must configure this parameter. If you do not set this parameter, the call fails.
     * >*   If your instance has no **Overview** page or ID, you do not need to set this parameter.
     *
     * For more information, see [Overview](~~356505~~).
     * @example iot-cn-0pp1n8t****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The **ProductKey** of the product that is specified for the subscription.
     *
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
