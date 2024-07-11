<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListExchangeUpStreamBindingsResponseBody\data;

use AlibabaCloud\Tea\Model;

class bindings extends Model
{
    /**
     * @description The x-match attribute. Valid values:
     *
     *   **all:** A headers exchange routes a message to a queue only if all binding attributes of the queue except for x-match match the headers attributes of the message. This value is the default value.
     *   **any:** A headers exchange routes a message to a queue if one or more binding attributes of the queue except for x-match match the headers attributes of the message.
     *
     * This parameter is available only for headers exchanges.
     * @example all
     *
     * @var string
     */
    public $argument;

    /**
     * @description The binding key.
     *
     *   If the source exchange is not a topic exchange, the binding key must meet the following conventions:
     *
     *   The binding key can contain only letters, digits, hyphens (-), underscores (_), periods (.), forward slashes (/), and at signs (@).
     *   The binding key must be 1 to 255 characters in length.
     *
     *   If the source exchange is a topic exchange, the binding key must meet the following conventions:
     *
     *   The binding key can contain letters, digits, hyphens (-), underscores (_), periods (.), number signs (#), forward slashes (/), and at signs (@).
     *   The binding key cannot start or end with a period (.). If a binding key starts with a number sign (#) or an asterisk (\\*), the number sign (#) or asterisk (\\*) must be followed by a period (.). If the binding key ends with a number sign (#) or an asterisk (\\*), the number sign (#) or asterisk (\\*) must be preceded by a period (.). If a number sign (#) or an asterisk (\\*) is used in the middle of a binding key, the number sign (#) or asterisk (\\*) must be preceded and followed by a period (.).
     *   The binding key must be 1 to 255 characters in length.
     *
     * @example amq.dle.test
     *
     * @var string
     */
    public $bindingKey;

    /**
     * @description The type of the object to which the source exchange is bound. Valid values:
     *
     *   **QUEUE**
     *   **EXCHANGE**
     *
     * @example EXCHANGE
     *
     * @var string
     */
    public $bindingType;

    /**
     * @description The name of the object to which the source exchange is bound.
     *
     * @example test
     *
     * @var string
     */
    public $destinationName;

    /**
     * @description The name of the source exchange.
     *
     * @example dle
     *
     * @var string
     */
    public $sourceExchange;
    protected $_name = [
        'argument'        => 'Argument',
        'bindingKey'      => 'BindingKey',
        'bindingType'     => 'BindingType',
        'destinationName' => 'DestinationName',
        'sourceExchange'  => 'SourceExchange',
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
        if (null !== $this->sourceExchange) {
            $res['SourceExchange'] = $this->sourceExchange;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bindings
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
        if (isset($map['SourceExchange'])) {
            $model->sourceExchange = $map['SourceExchange'];
        }

        return $model;
    }
}
