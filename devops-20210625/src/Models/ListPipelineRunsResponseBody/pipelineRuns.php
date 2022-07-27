<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelineRunsResponseBody;

use AlibabaCloud\Tea\Model;

class pipelineRuns extends Model
{
    /**
     * @var string
     */
    public $creatorAccountId;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $pipelineId;

    /**
     * @var int
     */
    public $pipelineRunId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $triggerMode;
    protected $_name = [
        'creatorAccountId' => 'creatorAccountId',
        'endTime'          => 'endTime',
        'pipelineId'       => 'pipelineId',
        'pipelineRunId'    => 'pipelineRunId',
        'startTime'        => 'startTime',
        'status'           => 'status',
        'triggerMode'      => 'triggerMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creatorAccountId) {
            $res['creatorAccountId'] = $this->creatorAccountId;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->pipelineId) {
            $res['pipelineId'] = $this->pipelineId;
        }
        if (null !== $this->pipelineRunId) {
            $res['pipelineRunId'] = $this->pipelineRunId;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->triggerMode) {
            $res['triggerMode'] = $this->triggerMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pipelineRuns
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['creatorAccountId'])) {
            $model->creatorAccountId = $map['creatorAccountId'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['pipelineId'])) {
            $model->pipelineId = $map['pipelineId'];
        }
        if (isset($map['pipelineRunId'])) {
            $model->pipelineRunId = $map['pipelineRunId'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['triggerMode'])) {
            $model->triggerMode = $map['triggerMode'];
        }

        return $model;
    }
}
