<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\input;
use AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters;

class CreateTaskRequest extends Model
{
    /**
     * @var string
     */
    public $appKey;
    /**
     * @var input
     */
    public $input;
    /**
     * @var parameters
     */
    public $parameters;
    /**
     * @var string
     */
    public $operation;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'appKey'     => 'AppKey',
        'input'      => 'Input',
        'parameters' => 'Parameters',
        'operation'  => 'operation',
        'type'       => 'type',
    ];

    public function validate()
    {
        if (null !== $this->input) {
            $this->input->validate();
        }
        if (null !== $this->parameters) {
            $this->parameters->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }

        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toArray($noStream) : $this->input;
        }

        if (null !== $this->parameters) {
            $res['Parameters'] = null !== $this->parameters ? $this->parameters->toArray($noStream) : $this->parameters;
        }

        if (null !== $this->operation) {
            $res['operation'] = $this->operation;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }

        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }

        if (isset($map['Parameters'])) {
            $model->parameters = parameters::fromMap($map['Parameters']);
        }

        if (isset($map['operation'])) {
            $model->operation = $map['operation'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
