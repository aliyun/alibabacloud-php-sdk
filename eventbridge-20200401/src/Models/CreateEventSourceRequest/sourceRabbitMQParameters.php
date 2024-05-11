<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventSourceRequest;

use AlibabaCloud\Tea\Model;

class sourceRabbitMQParameters extends Model
{
    /**
     * @description The ID of the Message Queue for RabbitMQ instance. For more information, see Limits.
     *
     * @example amqp-cn-nif22u74****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the queue on the Message Queue for RabbitMQ instance. For more information, see [Limits](https://help.aliyun.com/document_detail/163289.html).
     *
     * @example demo
     *
     * @var string
     */
    public $queueName;

    /**
     * @description The ID of the region where the Message Queue for RabbitMQ instance resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the vhost of the Message Queue for RabbitMQ instance. For more information, see [Limits](https://help.aliyun.com/document_detail/163289.html).
     *
     * @example eb-connect
     *
     * @var string
     */
    public $virtualHostName;
    protected $_name = [
        'instanceId'      => 'InstanceId',
        'queueName'       => 'QueueName',
        'regionId'        => 'RegionId',
        'virtualHostName' => 'VirtualHostName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->virtualHostName) {
            $res['VirtualHostName'] = $this->virtualHostName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceRabbitMQParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VirtualHostName'])) {
            $model->virtualHostName = $map['VirtualHostName'];
        }

        return $model;
    }
}
