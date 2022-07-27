<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineRunResponseBody\pipelineRun\stages;

use AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineRunResponseBody\pipelineRun\stages\stageInfo\jobs;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->jobs) {
            $res['jobs'] = [];
            if (null !== $this->jobs && \is_array($this->jobs)) {
                $n = 0;
                foreach ($this->jobs as $item) {
                    $res['jobs'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return stageInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['jobs'])) {
            if (!empty($map['jobs'])) {
                $model->jobs = [];
                $n           = 0;
                foreach ($map['jobs'] as $item) {
                    $model->jobs[$n++] = null !== $item ? jobs::fromMap($item) : $item;
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
