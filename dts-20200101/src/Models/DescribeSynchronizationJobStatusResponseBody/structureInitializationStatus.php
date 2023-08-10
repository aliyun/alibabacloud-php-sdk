<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobStatusResponseBody;

use AlibabaCloud\Tea\Model;

class structureInitializationStatus extends Model
{
    /**
     * @description The error message returned if schema synchronization failed.
     *
     * @example DTS-1020042 Execute sql error sql: ERROR: type "geometry" does not exist;
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The progress of schema synchronization. Unit: %.
     *
     * @example 100
     *
     * @var string
     */
    public $percent;

    /**
     * @description The number of tables whose schemas have been synchronized.
     *
     * @example 1
     *
     * @var string
     */
    public $progress;

    /**
     * @description The status of schema synchronization. Valid values:
     *
     *   **NotStarted**: Schema synchronization is not started.
     *   **Migrating**: Schema synchronization is in progress.
     *   **Failed**: Schema synchronization failed.
     *   **Finished**: Schema synchronization is completed.
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
     * @return structureInitializationStatus
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
