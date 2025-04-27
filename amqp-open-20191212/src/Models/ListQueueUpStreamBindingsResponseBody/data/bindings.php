<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListQueueUpStreamBindingsResponseBody\data;

use AlibabaCloud\Dara\Model;

class bindings extends Model
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
    public $sourceExchange;
    protected $_name = [
        'argument' => 'Argument',
        'bindingKey' => 'BindingKey',
        'bindingType' => 'BindingType',
        'destinationName' => 'DestinationName',
        'sourceExchange' => 'SourceExchange',
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

        if (null !== $this->sourceExchange) {
            $res['SourceExchange'] = $this->sourceExchange;
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

        if (isset($map['SourceExchange'])) {
            $model->sourceExchange = $map['SourceExchange'];
        }

        return $model;
    }
}
