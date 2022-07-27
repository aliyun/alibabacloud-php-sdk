<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineRunResponseBody\pipelineRun\stages\stageInfo\jobs;

use AlibabaCloud\Tea\Model;

class actions extends Model
{
    /**
     * @var bool
     */
    public $disable;

    /**
     * @var mixed
     */
    public $params;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'disable' => 'disable',
        'params'  => 'params',
        'type'    => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->disable) {
            $res['disable'] = $this->disable;
        }
        if (null !== $this->params) {
            $res['params'] = $this->params;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return actions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['disable'])) {
            $model->disable = $map['disable'];
        }
        if (isset($map['params'])) {
            $model->params = $map['params'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
