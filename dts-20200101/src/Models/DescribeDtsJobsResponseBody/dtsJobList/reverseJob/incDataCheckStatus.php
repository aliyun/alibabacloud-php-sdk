<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody\dtsJobList\reverseJob;

use AlibabaCloud\Tea\Model;

class incDataCheckStatus extends Model
{
    /**
     * @description The error message returned if the task failed.
     *
     * @example java.lang.NumberFormatException: For input string: ""
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The progress of the incremental data verification task. Unit: percentage.
     *
     * @example 95
     *
     * @var string
     */
    public $percent;

    /**
     * @description The progress of the incremental data verification task.
     *
     * @example 1 rows/s (row: 5/5, table: 1/1)
     *
     * @var string
     */
    public $progress;

    /**
     * @description The state of the incremental data verification task. Valid values:
     *
     * - **Catched**: The verification is delayed.
     * - **NotStarted**: The verification is not started.
     * - **Checking**: The verification is in progress.
     * - **Failed**: The verification failed.
     * @example Checking
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'errorMessage' => 'ErrorMessage',
        'percent'      => 'Percent',
        'progress'     => 'Progress',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->percent) {
            $res['Percent'] = $this->percent;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return incDataCheckStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Percent'])) {
            $model->percent = $map['Percent'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
