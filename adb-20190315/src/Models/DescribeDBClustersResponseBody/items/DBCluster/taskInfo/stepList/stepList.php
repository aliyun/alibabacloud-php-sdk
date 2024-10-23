<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClustersResponseBody\items\DBCluster\taskInfo\stepList;

use AlibabaCloud\Tea\Model;

class stepList extends Model
{
    /**
     * @description The end time of the job step. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2024-03-10T10:28:34Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The start time of the job step. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2024-03-10T09:28:34Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The description of the job step.
     *
     * @example Apply resource
     *
     * @var string
     */
    public $stepDesc;

    /**
     * @description The name of the job step.
     *
     * @example ApplyResource
     *
     * @var string
     */
    public $stepName;

    /**
     * @description The progress of the job step. Unit: %.
     *
     * @example 50
     *
     * @var string
     */
    public $stepProgress;

    /**
     * @description The status of the job step. Valid values:
     *
     *   **NOT_RUN**
     *   **RUNNING**
     *   **SUCCEED**
     *
     * @example SUCCEED
     *
     * @var string
     */
    public $stepStatus;
    protected $_name = [
        'endTime'      => 'EndTime',
        'startTime'    => 'StartTime',
        'stepDesc'     => 'StepDesc',
        'stepName'     => 'StepName',
        'stepProgress' => 'StepProgress',
        'stepStatus'   => 'StepStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->stepDesc) {
            $res['StepDesc'] = $this->stepDesc;
        }
        if (null !== $this->stepName) {
            $res['StepName'] = $this->stepName;
        }
        if (null !== $this->stepProgress) {
            $res['StepProgress'] = $this->stepProgress;
        }
        if (null !== $this->stepStatus) {
            $res['StepStatus'] = $this->stepStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stepList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StepDesc'])) {
            $model->stepDesc = $map['StepDesc'];
        }
        if (isset($map['StepName'])) {
            $model->stepName = $map['StepName'];
        }
        if (isset($map['StepProgress'])) {
            $model->stepProgress = $map['StepProgress'];
        }
        if (isset($map['StepStatus'])) {
            $model->stepStatus = $map['StepStatus'];
        }

        return $model;
    }
}
