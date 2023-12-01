<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20230930\Models;

use AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\input;
use AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters;
use AlibabaCloud\Tea\Model;

class CreateTaskRequest extends Model
{
    /**
     * @example JV1sRTisRMi****
     *
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
     * @example stop
     *
     * @var string
     */
    public $operation;

    /**
     * @example offline
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = null !== $this->parameters ? $this->parameters->toMap() : null;
        }
        if (null !== $this->operation) {
            $res['operation'] = $this->operation;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTaskRequest
     */
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
