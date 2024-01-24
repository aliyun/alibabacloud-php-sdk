<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models;

use AlibabaCloud\Tea\Model;

class CreateBindingRequest extends Model
{
    /**
     * @description The key-value pairs that are configured for the headers attributes of a message. One or more key-value pairs can be concatenated to configure the headers attributes of a message. You must specify the x-match attribute as one of the valid values. You can specify custom values for other attributes. Valid values of the x-match attribute:
     *
     *   \*\*all: \*\*A headers exchange routes a message to a queue only if all binding attributes of the queue except for x-match match the headers attributes of the message. This value is the default value.
     *   \*\*any: \*\*A headers exchange routes a message to a queue if one or more binding attributes of the queue except for x-match match the headers attributes of the message.
     *
     * Separate the attributes with semicolons (;). Separate the key and value of an attribute with a colon (:). Example: x-match:all;type:report;format:pdf. This parameter is available for only headers exchanges. You can set this parameter to an arbitrary value for other types of exchanges.
     * @example x-match:all;type:report;format:pdf
     *
     * @var string
     */
    public $argument;

    /**
     * @description The binding key.
     *
     *   If the source exchange is not a topic exchange, the binding key must meet the following conventions:
     *
     *   The binding key can contain only letters, digits, hyphens (-), underscores (\_), periods (.), forward slashes (/), and at signs (@).
     *   The binding key must be 1 to 255 characters in length.
     *
     *   If the source exchange is a topic exchange, the binding key must meet the following conventions:
     *
     *   The binding key can contain letters, digits, hyphens (-), underscores (\_), asterisks (\*), periods (.), number signs (#), forward slashes (/), and at signs (@).
     *   The binding key cannot start or end with a period (.). If a binding key starts with a number sign (#) or an asterisk (\*), the number sign (#) or asterisk (\*) must be followed by a period (.). If the binding key ends with a number sign (#) or an asterisk (\*), the number sign (#) or asterisk (\*) must be preceded by a period (.). If a number sign (#) or an asterisk (\*) is used in the middle of a binding key, the number sign (#) or asterisk (\*) must be preceded and followed by a period (.).
     *   The binding key must be 1 to 255 characters in length.
     *
     * @example .test
     *
     * @var string
     */
    public $bindingKey;

    /**
     * @description The type of the object that you want to bind to the source exchange. Valid values:
     *
     *   \*\*0: \*\*Queue
     *   \*\*1: \*\*Exchange
     *
     * @example 0
     *
     * @var string
     */
    public $bindingType;

    /**
     * @description The name of the object that you want to bind to the source exchange. You must create the object in the ApsaraMQ for RabbitMQ console in advance. The vhost of the object is the same as the vhost to which the source exchange specified by **SourceExchange** belongs. The vhost of the source exchange is the one specified by **VirtualHost**.
     *
     * @example DemoQueue
     *
     * @var string
     */
    public $destinationName;

    /**
     * @description The ID of the ApsaraMQ for RabbitMQ instance.
     *
     * @example amqp-cn-v0h1kb9nu***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the source exchange. You must create the source exchange in the ApsaraMQ for RabbitMQ console in advance.
     *
     * @example NormalEX
     *
     * @var string
     */
    public $sourceExchange;

    /**
     * @description The virtual host (vhost) name. You must create the vhost in the ApsaraMQ for RabbitMQ console in advance. The object specified by **DestinationName** and the source exchange specified by **SourceExchange** must belong to the vhost.
     *
     * @example test
     *
     * @var string
     */
    public $virtualHost;
    protected $_name = [
        'argument'        => 'Argument',
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

    /**
     * @param array $map
     *
     * @return CreateBindingRequest
     */
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
