<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\subDistributedJob;

use AlibabaCloud\Tea\Model;

class dataInitializationStatus extends Model
{
    /**
     * @description The error message returned if full data migration or initial full data synchronization failed.
     *
     * @example DTS-070211: Connect Source DB failed. cause by ****
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description Indicates whether the instance class needs to be upgraded. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $needUpgrade;

    /**
     * @description The progress of full data migration or initial full data synchronization. Unit: percentage.
     *
     * @example 100
     *
     * @var string
     */
    public $percent;

    /**
     * @description The number of entries that are migrated or synchronized during full data migration or initial full data synchronization.
     *
     * @example 16
     *
     * @var string
     */
    public $progress;

    /**
     * @description The state of full data migration or initial full data synchronization. Valid values:
     *
     *   **NotStarted**: The task is not started.
     *   **Migrating**: The task is in progress.
     *   **Failed**: The task failed.
     *   **Finished**: The task is complete.
     *
     * @example Finished
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
     * @return dataInitializationStatus
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
