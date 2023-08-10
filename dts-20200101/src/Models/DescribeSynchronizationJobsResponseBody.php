<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobsResponseBody\synchronizationInstances;
use AlibabaCloud\Tea\Model;

class DescribeSynchronizationJobsResponseBody extends Model
{
    /**
     * @description The total number of data synchronization instances that belong to your Alibaba Cloud account.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description Indicates whether full data synchronization is performed. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example 30
     *
     * @var int
     */
    public $pageRecordCount;

    /**
     * @description The list of data synchronization instances and the details of each instance.
     *
     * @example 92E1E99D-5224-4AD3-8C94-23A3516B****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The name of the data synchronization task.
     *
     * @var synchronizationInstances[]
     */
    public $synchronizationInstances;

    /**
     * @description The status of the data synchronization task. Valid values:
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
     * @example 100
     *
     * @var int
     */
    public $totalRecordCount;
    protected $_name = [
        'pageNumber'               => 'PageNumber',
        'pageRecordCount'          => 'PageRecordCount',
        'requestId'                => 'RequestId',
        'synchronizationInstances' => 'SynchronizationInstances',
        'totalRecordCount'         => 'TotalRecordCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageRecordCount) {
            $res['PageRecordCount'] = $this->pageRecordCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->synchronizationInstances) {
            $res['SynchronizationInstances'] = [];
            if (null !== $this->synchronizationInstances && \is_array($this->synchronizationInstances)) {
                $n = 0;
                foreach ($this->synchronizationInstances as $item) {
                    $res['SynchronizationInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSynchronizationJobsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageRecordCount'])) {
            $model->pageRecordCount = $map['PageRecordCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SynchronizationInstances'])) {
            if (!empty($map['SynchronizationInstances'])) {
                $model->synchronizationInstances = [];
                $n                               = 0;
                foreach ($map['SynchronizationInstances'] as $item) {
                    $model->synchronizationInstances[$n++] = null !== $item ? synchronizationInstances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }

        return $model;
    }
}
