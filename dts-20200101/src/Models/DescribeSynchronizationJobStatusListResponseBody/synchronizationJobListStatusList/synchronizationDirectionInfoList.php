<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobStatusListResponseBody\synchronizationJobListStatusList;

use AlibabaCloud\Tea\Model;

class synchronizationDirectionInfoList extends Model
{
    /**
     * @description The UNIX timestamp generated when the latest data record was synchronized.
     *
     * >  You can use a search engine to obtain a UNIX timestamp converter.
     * @example 1610524452
     *
     * @var string
     */
    public $checkpoint;

    /**
     * @description The status of the data synchronization task in this direction. Valid values:
     *
     *   **NotStarted**: The task is not started.
     *   **Prechecking**: The task is being prechecked.
     *   **PrecheckFailed**: The task failed to pass the precheck.
     *   **Initializing**: The task is performing initial synchronization.
     *   **InitializeFailed**: Initial synchronization failed.
     *   **Synchronizing**: The task is synchronizing data.
     *   **Failed**: The task failed to synchronize data.
     *   **Suspending**: The task is paused.
     *   **Modifying**: The objects in the task are being modified.
     *   **Finished**: The task is completed.
     *
     * @example InitializeFailed
     *
     * @var string
     */
    public $status;

    /**
     * @description The synchronization direction. Valid values:
     *
     *   **Forward**
     *   **Reverse**
     *
     * @example Forward
     *
     * @var string
     */
    public $synchronizationDirection;
    protected $_name = [
        'checkpoint'               => 'Checkpoint',
        'status'                   => 'Status',
        'synchronizationDirection' => 'SynchronizationDirection',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkpoint) {
            $res['Checkpoint'] = $this->checkpoint;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->synchronizationDirection) {
            $res['SynchronizationDirection'] = $this->synchronizationDirection;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return synchronizationDirectionInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Checkpoint'])) {
            $model->checkpoint = $map['Checkpoint'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SynchronizationDirection'])) {
            $model->synchronizationDirection = $map['SynchronizationDirection'];
        }

        return $model;
    }
}
