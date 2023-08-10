<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationObjectModifyStatusResponseBody;

use AlibabaCloud\Tea\Model;

class dataInitializationStatus extends Model
{
    /**
     * @description The error message returned if full data synchronization failed.
     *
     * @example java.lang.NumberFormatException: For input string: ""
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The progress of full data synchronization. Unit: %.
     *
     * @example 100
     *
     * @var string
     */
    public $percent;

    /**
     * @description The number of records that have been synchronized during full data synchronization.
     *
     * @example 39754
     *
     * @var string
     */
    public $progress;

    /**
     * @description The status of full data synchronization. Valid values:
     *
     *   **NotStarted**: Full data synchronization is not started.
     *   **Migrating**: Full data synchronization is in progress.
     *   **Failed**: Full data synchronization failed.
     *   **Finished**: Full data synchronization is completed.
     *
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
     * @return dataInitializationStatus
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
