<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeDtsJobDetailRequest extends Model
{
    /**
     * @description The ID of the data migration, data synchronization, or change tracking instance.
     *
     * @example dtsta7w132u12h****
     *
     * @var string
     */
    public $dtsInstanceID;

    /**
     * @description The ID of the data migration, data synchronization, or change tracking task.
     *
     * @example ta7w132u12h****
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @description The ID of the region in which the Data Transmission Service (DTS) instance resides. For more information, see [Supported regions](https://help.aliyun.com/document_detail/141033.html).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfmzawhxxc****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Specifies whether to return the information about all data synchronization subtasks. Default value: **false**. A value of false indicates that the system returns only the information about a data synchronization subtask that is running or was most recently run.
     *
     * @example false
     *
     * @var bool
     */
    public $syncSubJobHistory;

    /**
     * @description The synchronization direction. Valid values:
     *
     *   **Forward**
     *   **Reverse**
     *
     * >
     *
     *   The default value is **Forward**.
     *   The value **Reverse** takes effect only if the topology of the data synchronization instance is two-way synchronization.
     *
     * @example Forward
     *
     * @var string
     */
    public $synchronizationDirection;

    /**
     * @description Specifies whether to query only zero-extract, transform, load (ETL) integration tasks. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $zeroEtlJob;
    protected $_name = [
        'dtsInstanceID'            => 'DtsInstanceID',
        'dtsJobId'                 => 'DtsJobId',
        'regionId'                 => 'RegionId',
        'resourceGroupId'          => 'ResourceGroupId',
        'syncSubJobHistory'        => 'SyncSubJobHistory',
        'synchronizationDirection' => 'SynchronizationDirection',
        'zeroEtlJob'               => 'ZeroEtlJob',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dtsInstanceID) {
            $res['DtsInstanceID'] = $this->dtsInstanceID;
        }
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->syncSubJobHistory) {
            $res['SyncSubJobHistory'] = $this->syncSubJobHistory;
        }
        if (null !== $this->synchronizationDirection) {
            $res['SynchronizationDirection'] = $this->synchronizationDirection;
        }
        if (null !== $this->zeroEtlJob) {
            $res['ZeroEtlJob'] = $this->zeroEtlJob;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDtsJobDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DtsInstanceID'])) {
            $model->dtsInstanceID = $map['DtsInstanceID'];
        }
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SyncSubJobHistory'])) {
            $model->syncSubJobHistory = $map['SyncSubJobHistory'];
        }
        if (isset($map['SynchronizationDirection'])) {
            $model->synchronizationDirection = $map['SynchronizationDirection'];
        }
        if (isset($map['ZeroEtlJob'])) {
            $model->zeroEtlJob = $map['ZeroEtlJob'];
        }

        return $model;
    }
}
