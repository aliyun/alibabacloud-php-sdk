<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMemoryTaskResponseBody\data\input\events\data;

use AlibabaCloud\Dara\Model;

class content extends Model
{
    /**
     * @var mixed
     */
    public $arguments;

    /**
     * @var string
     */
    public $callId;

    /**
     * @var string
     */
    public $format;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $type;

    /**
     * @var mixed
     */
    public $value;
    protected $_name = [
        'arguments' => 'arguments',
        'callId' => 'callId',
        'format' => 'format',
        'name' => 'name',
        'text' => 'text',
        'type' => 'type',
        'value' => 'value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arguments) {
            $res['arguments'] = $this->arguments;
        }

        if (null !== $this->callId) {
            $res['callId'] = $this->callId;
        }

        if (null !== $this->format) {
            $res['format'] = $this->format;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->text) {
            $res['text'] = $this->text;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->value) {
            $res['value'] = $this->value;
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
        if (isset($map['arguments'])) {
            $model->arguments = $map['arguments'];
        }

        if (isset($map['callId'])) {
            $model->callId = $map['callId'];
        }

        if (isset($map['format'])) {
            $model->format = $map['format'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
