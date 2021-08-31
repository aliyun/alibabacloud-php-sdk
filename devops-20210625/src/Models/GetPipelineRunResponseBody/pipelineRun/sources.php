<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineRunResponseBody\pipelineRun;

use AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineRunResponseBody\pipelineRun\sources\data;
use AlibabaCloud\Tea\Model;

class sources extends Model
{
    /**
     * @description 代码源唯一标识
     *
     * @var string
     */
    public $sign;

    /**
     * @description 代码库类型
     *
     * @var string
     */
    public $type;

    /**
     * @description 代码源信息
     *
     * @var data
     */
    public $data;
    protected $_name = [
        'sign' => 'sign',
        'type' => 'type',
        'data' => 'data',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sign) {
            $res['sign'] = $this->sign;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['sign'])) {
            $model->sign = $map['sign'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['data'])) {
            $model->data = data::fromMap($map['data']);
        }

        return $model;
    }
}
