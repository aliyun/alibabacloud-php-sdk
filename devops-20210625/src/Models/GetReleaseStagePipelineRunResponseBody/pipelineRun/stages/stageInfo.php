<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetReleaseStagePipelineRunResponseBody\pipelineRun\stages;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetReleaseStagePipelineRunResponseBody\pipelineRun\stages\stageInfo\jobs;

class stageInfo extends Model
{
    /**
     * @var int
     */
    public $endTime;
    /**
     * @var jobs[]
     */
    public $jobs;
    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $startTime;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'endTime'   => 'endTime',
        'jobs'      => 'jobs',
        'name'      => 'name',
        'startTime' => 'startTime',
        'status'    => 'status',
    ];

    public function validate()
    {
        if (\is_array($this->jobs)) {
            Model::validateArray($this->jobs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->jobs) {
            if (\is_array($this->jobs)) {
                $res['jobs'] = [];
                $n1          = 0;
                foreach ($this->jobs as $item1) {
                    $res['jobs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['jobs'])) {
            if (!empty($map['jobs'])) {
                $model->jobs = [];
                $n1          = 0;
                foreach ($map['jobs'] as $item1) {
                    $model->jobs[$n1++] = jobs::fromMap($item1);
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
