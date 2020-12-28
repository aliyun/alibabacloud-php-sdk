<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models;

use AlibabaCloud\Tea\Model;

class DeleteBindingRequest extends Model
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
    public $bindingType;

    /**
     * @var string
     */
    public $bindingKey;
    protected $_name = [
        'instanceId'      => 'InstanceId',
        'virtualHost'     => 'VirtualHost',
        'sourceExchange'  => 'SourceExchange',
        'destinationName' => 'DestinationName',
        'bindingType'     => 'BindingType',
        'bindingKey'      => 'BindingKey',
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
        if (null !== $this->bindingType) {
            $res['BindingType'] = $this->bindingType;
        }
        if (null !== $this->bindingKey) {
            $res['BindingKey'] = $this->bindingKey;
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
        if (isset($map['BindingType'])) {
            $model->bindingType = $map['BindingType'];
        }
        if (isset($map['BindingKey'])) {
            $model->bindingKey = $map['BindingKey'];
        }

        return $model;
    }
}
