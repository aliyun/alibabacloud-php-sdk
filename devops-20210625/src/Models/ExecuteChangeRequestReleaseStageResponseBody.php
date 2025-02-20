<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class ExecuteChangeRequestReleaseStageResponseBody extends Model
{
    /**
     * @var int
     */
    public $object;
    /**
     * @var int
     */
    public $pipelineId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
