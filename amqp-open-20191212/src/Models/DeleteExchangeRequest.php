<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models;

use AlibabaCloud\Tea\Model;

class DeleteExchangeRequest extends Model
{
    /**
     * @description The name of the exchange that you want to delete.
     *
     * This parameter is required.
     * @example DemoExchange
     *
     * @var string
     */
    public $exchangeName;

    /**
     * @description The ID of the ApsaraMQ for RabbitMQ instance whose exchange you want to delete.
     *
     * This parameter is required.
     * @example amqp-cn-v0h1kb9nu***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The vhost to which the exchange that you want to delete belongs.
     *
     * This parameter is required.
     * @example test
     *
     * @var string
     */
    public $virtualHost;
    protected $_name = [
        'exchangeName' => 'ExchangeName',
        'instanceId'   => 'InstanceId',
        'virtualHost'  => 'VirtualHost',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exchangeName) {
            $res['ExchangeName'] = $this->exchangeName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->virtualHost) {
            $res['VirtualHost'] = $this->virtualHost;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteExchangeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExchangeName'])) {
            $model->exchangeName = $map['ExchangeName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['VirtualHost'])) {
            $model->virtualHost = $map['VirtualHost'];
        }

        return $model;
    }
}
