<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody\dtsJobList;

use AlibabaCloud\Tea\Model;

class dataSynchronizationStatus extends Model
{
    /**
     * @description The error message returned if incremental data migration or synchronization failed.
     *
     * @example The task has failed for a long time and cannot be recovered.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description Indicates whether the instance needs to be upgraded. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * >  To upgrade a DTS instance, call the [TransferInstanceClass](~~281093~~) operation.
     * @example true
     *
     * @var bool
     */
    public $needUpgrade;

    /**
     * @description The progress of incremental data migration or synchronization.
     *
     * @example 95
     *
     * @var string
     */
    public $percent;

    /**
     * @description The number of records that have been migrated or synchronized during incremental data migration or synchronization.
     *
     * @example 0/0
     *
     * @var string
     */
    public $progress;

    /**
     * @description The state of incremental data migration or synchronization. Valid values:
     *
     *   **NotStarted**: The task is not started.
     *   **Migrating**: The task is in progress.
     *   **Failed**: The task failed.
     *   **Finished**: The task is complete.
     *   **Catched**: The task is not delayed.
     *
     * @example Catched
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'errorMessage' => 'ErrorMessage',
        'needUpgrade'  => 'NeedUpgrade',
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
        if (null !== $this->needUpgrade) {
            $res['NeedUpgrade'] = $this->needUpgrade;
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
     * @return dataSynchronizationStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['NeedUpgrade'])) {
            $model->needUpgrade = $map['NeedUpgrade'];
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
