<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClustersResponseBody\items\DBCluster;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClustersResponseBody\items\DBCluster\taskInfo\stepList;
use AlibabaCloud\Tea\Model;

class taskInfo extends Model
{
    /**
     * @description The name of the job.
     *
     * @example analyticDBFlexibleScaleOut
     *
     * @var string
     */
    public $name;

    /**
     * @description The progress of the job. Unit: %.
     *
     * @example 10
     *
     * @var string
     */
    public $progress;

    /**
     * @description The status of the job. Valid values:
     *
     *   **NOT_RUN**
     *   **RUNNING**
     *   **SUCCEED**
     *
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @description The job steps.
     *
     * @var stepList
     */
    public $stepList;
    protected $_name = [
        'name'     => 'Name',
        'progress' => 'Progress',
        'status'   => 'Status',
        'stepList' => 'StepList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->stepList) {
            $res['StepList'] = null !== $this->stepList ? $this->stepList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StepList'])) {
            $model->stepList = stepList::fromMap($map['StepList']);
        }

        return $model;
    }
}
