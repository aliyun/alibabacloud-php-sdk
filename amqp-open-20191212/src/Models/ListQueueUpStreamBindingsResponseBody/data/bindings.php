<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListQueueUpStreamBindingsResponseBody\data;

use AlibabaCloud\Tea\Model;

class bindings extends Model
{
    /**
     * @var string
     */
    public $sourceExchange;

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

    /**
     * @var string
     */
    public $destinationName;
    protected $_name = [
        'sourceExchange'  => 'SourceExchange',
        'bindingKey'      => 'BindingKey',
        'bindingType'     => 'BindingType',
        'argument'        => 'Argument',
        'destinationName' => 'DestinationName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceExchange) {
            $res['SourceExchange'] = $this->sourceExchange;
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
        if (null !== $this->destinationName) {
            $res['DestinationName'] = $this->destinationName;
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
        if (isset($map['SourceExchange'])) {
            $model->sourceExchange = $map['SourceExchange'];
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
        if (isset($map['DestinationName'])) {
            $model->destinationName = $map['DestinationName'];
        }

        return $model;
    }
}
