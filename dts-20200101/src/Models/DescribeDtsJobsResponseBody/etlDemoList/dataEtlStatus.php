<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody\etlDemoList;

use AlibabaCloud\Tea\Model;

class dataEtlStatus extends Model
{
    /**
     * @description The error message returned if the ETL task failed.
     *
     * @example The task has failed for a long time and cannot be recovered.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The progress of the ETL task. Unit: percentage.
     *
     * @example 95
     *
     * @var string
     */
    public $percent;

    /**
     * @description The number of entries that have been processed by the ETL task.
     *
     * @example 0/0
     *
     * @var string
     */
    public $progress;

    /**
     * @description The state of the ETL task. Valid values:
     *
     * - **NotStarted**: The task is not started.
     * - **Migrating**: The task is in progress.
     * - **Failed**: The task failed.
     * - **Finished**: The task is complete.
     * - **Catched**: The task is not delayed.
     * @example Finished
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
     * @return dataEtlStatus
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
