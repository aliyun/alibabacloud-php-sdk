<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models;

use AlibabaCloud\Tea\Model;

class DeleteBindingRequest extends Model
{
    /**
     * @description The binding key.
     *
     * @example .test.
     *
     * @var string
     */
    public $bindingKey;

    /**
     * @description The type of the object that you want to unbind from the source exchange. Valid values:
     *
     *   **QUEUE**
     *   **EXCHANGE**
     *
     * @example QUEUE
     *
     * @var string
     */
    public $bindingType;

    /**
     * @description The name of the object that you want to unbind from the source exchange.
     *
     * @example DemoQueue
     *
     * @var string
     */
    public $destinationName;

    /**
     * @description The instance ID.
     *
     * @example amqp-cn-v0h1kb9nu***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the source exchange.
     *
     * @example NormalEX
     *
     * @var string
     */
    public $sourceExchange;

    /**
     * @description The vhost name.
     *
     * @example test
     *
     * @var string
     */
    public $virtualHost;
    protected $_name = [
        'bindingKey'      => 'BindingKey',
        'bindingType'     => 'BindingType',
        'destinationName' => 'DestinationName',
        'instanceId'      => 'InstanceId',
        'sourceExchange'  => 'SourceExchange',
        'virtualHost'     => 'VirtualHost',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindingKey) {
            $res['BindingKey'] = $this->bindingKey;
        }
        if (null !== $this->bindingType) {
            $res['BindingType'] = $this->bindingType;
        }
        if (null !== $this->destinationName) {
            $res['DestinationName'] = $this->destinationName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->sourceExchange) {
            $res['SourceExchange'] = $this->sourceExchange;
        }
        if (null !== $this->virtualHost) {
            $res['VirtualHost'] = $this->virtualHost;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteBindingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindingKey'])) {
            $model->bindingKey = $map['BindingKey'];
        }
        if (isset($map['BindingType'])) {
            $model->bindingType = $map['BindingType'];
        }
        if (isset($map['DestinationName'])) {
            $model->destinationName = $map['DestinationName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SourceExchange'])) {
            $model->sourceExchange = $map['SourceExchange'];
        }
        if (isset($map['VirtualHost'])) {
            $model->virtualHost = $map['VirtualHost'];
        }

        return $model;
    }
}
