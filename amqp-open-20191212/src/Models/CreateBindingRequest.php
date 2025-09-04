<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models;

use AlibabaCloud\Dara\Model;

class CreateBindingRequest extends Model
{
    /**
     * @var string
     */
    public $argument;

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
    public $destinationName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $sourceExchange;

    /**
     * @var string
     */
    public $virtualHost;
    protected $_name = [
        'argument' => 'Argument',
        'bindingKey' => 'BindingKey',
        'bindingType' => 'BindingType',
        'destinationName' => 'DestinationName',
        'instanceId' => 'InstanceId',
        'sourceExchange' => 'SourceExchange',
        'virtualHost' => 'VirtualHost',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->argument) {
            $res['Argument'] = $this->argument;
        }

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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Argument'])) {
            $model->argument = $map['Argument'];
        }

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
