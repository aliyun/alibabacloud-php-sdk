<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetReleaseStagePipelineRunResponseBody\pipelineRun;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetReleaseStagePipelineRunResponseBody\pipelineRun\sources\data;

class sources extends Model
{
    /**
     * @var data
     */
    public $data;

    /**
     * @var string
     */
    public $sign;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'data' => 'data',
        'sign' => 'sign',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->data) {
            $this->data->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toArray($noStream) : $this->data;
        }

        if (null !== $this->sign) {
            $res['sign'] = $this->sign;
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
        if (isset($map['data'])) {
            $model->data = data::fromMap($map['data']);
        }

        if (isset($map['sign'])) {
            $model->sign = $map['sign'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
