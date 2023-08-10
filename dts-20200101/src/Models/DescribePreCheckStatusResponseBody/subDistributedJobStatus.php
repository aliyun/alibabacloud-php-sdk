<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckStatusResponseBody;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckStatusResponseBody\subDistributedJobStatus\jobProgress;
use AlibabaCloud\Tea\Model;

class subDistributedJobStatus extends Model
{
    /**
     * @description The task code that indicates the subtask type. Valid values:
     *
     *   **01**: precheck
     *   **02**: schema migration or initial schema synchronization
     *   **03**: full data migration or initial full data synchronization
     *   **04**: incremental data migration or synchronization
     *
     * @example 02
     *
     * @var string
     */
    public $code;

    /**
     * @description The number of subtasks that failed.
     *
     * @example 0
     *
     * @var int
     */
    public $errorItem;

    /**
     * @description The ID of the subtask.
     *
     * @example n0gm1682j6563np
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The name of distributed subtasks associated with the subtask.
     *
     * @example dts.step.struct.load
     *
     * @var string
     */
    public $jobName;

    /**
     * @description The list of subtasks and the progress of each subtask.
     *
     * @var jobProgress[]
     */
    public $jobProgress;

    /**
     * @description The status of the subtask. Valid values:
     *
     *   **NotStarted**: The subtask is not started.
     *   **Suspending**: The subtask is paused.
     *   **Checking**: The subtask is being checked.
     *   **Migrating**: The subtask is in progress. Data is being migrated.
     *   **Failed**: The subtask failed.
     *   **Catched**: The subtask is in progress. Incremental data is being migrated or synchronized.
     *   **Finished**: The subtask is complete.
     *
     * @example Finished
     *
     * @var string
     */
    public $state;

    /**
     * @description The total number of returned entries.
     *
     * @example 11
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'code'        => 'Code',
        'errorItem'   => 'ErrorItem',
        'jobId'       => 'JobId',
        'jobName'     => 'JobName',
        'jobProgress' => 'JobProgress',
        'state'       => 'State',
        'total'       => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->errorItem) {
            $res['ErrorItem'] = $this->errorItem;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->jobProgress) {
            $res['JobProgress'] = [];
            if (null !== $this->jobProgress && \is_array($this->jobProgress)) {
                $n = 0;
                foreach ($this->jobProgress as $item) {
                    $res['JobProgress'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subDistributedJobStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ErrorItem'])) {
            $model->errorItem = $map['ErrorItem'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['JobProgress'])) {
            if (!empty($map['JobProgress'])) {
                $model->jobProgress = [];
                $n                  = 0;
                foreach ($map['JobProgress'] as $item) {
                    $model->jobProgress[$n++] = null !== $item ? jobProgress::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
