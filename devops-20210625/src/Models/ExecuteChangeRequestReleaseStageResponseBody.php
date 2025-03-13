<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ExecuteChangeRequestReleaseStageResponseBody extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $object;

    /**
     * @example 3259***
     *
     * @var int
     */
    public $pipelineId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pipelineRunId;
    protected $_name = [
        'object'        => 'object',
        'pipelineId'    => 'pipelineId',
        'pipelineRunId' => 'pipelineRunId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->object) {
            $res['object'] = $this->object;
        }
        if (null !== $this->pipelineId) {
            $res['pipelineId'] = $this->pipelineId;
        }
        if (null !== $this->pipelineRunId) {
            $res['pipelineRunId'] = $this->pipelineRunId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecuteChangeRequestReleaseStageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['object'])) {
            $model->object = $map['object'];
        }
        if (isset($map['pipelineId'])) {
            $model->pipelineId = $map['pipelineId'];
        }
        if (isset($map['pipelineRunId'])) {
            $model->pipelineRunId = $map['pipelineRunId'];
        }

        return $model;
    }
}
