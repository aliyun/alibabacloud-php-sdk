<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models;

use AlibabaCloud\Tea\Model;

class CreateBindingRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $virtualHost;

    /**
     * @var string
     */
    public $sourceExchange;

    /**
     * @var string
     */
    public $destinationName;

    /**
     * @var string
     */
    public $bindingKey;

    /**
     * @var string
     */
    public $bindingType;

    /**
     * @var string
     */
    public $argument;
    protected $_name = [
        'instanceId'      => 'InstanceId',
        'virtualHost'     => 'VirtualHost',
        'sourceExchange'  => 'SourceExchange',
        'destinationName' => 'DestinationName',
        'bindingKey'      => 'BindingKey',
        'bindingType'     => 'BindingType',
        'argument'        => 'Argument',
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
        if (null !== $this->virtualHost) {
            $res['VirtualHost'] = $this->virtualHost;
        }
        if (null !== $this->sourceExchange) {
            $res['SourceExchange'] = $this->sourceExchange;
        }
        if (null !== $this->destinationName) {
            $res['DestinationName'] = $this->destinationName;
        }
        if (null !== $this->bindingKey) {
            $res['BindingKey'] = $this->bindingKey;
        }
        if (null !== $this->bindingType) {
            $res['BindingType'] = $this->bindingType;
        }
        if (null !== $this->argument) {
            $res['Argument'] = $this->argument;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBindingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['VirtualHost'])) {
            $model->virtualHost = $map['VirtualHost'];
        }
        if (isset($map['SourceExchange'])) {
            $model->sourceExchange = $map['SourceExchange'];
        }
        if (isset($map['DestinationName'])) {
            $model->destinationName = $map['DestinationName'];
        }
        if (isset($map['BindingKey'])) {
            $model->bindingKey = $map['BindingKey'];
        }
        if (isset($map['BindingType'])) {
            $model->bindingType = $map['BindingType'];
        }
        if (isset($map['Argument'])) {
            $model->argument = $map['Argument'];
        }

        return $model;
    }
}
