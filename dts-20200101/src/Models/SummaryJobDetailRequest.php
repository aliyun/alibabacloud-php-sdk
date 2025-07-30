<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class SummaryJobDetailRequest extends Model
{
    /**
     * @description The ID of the data migration or data synchronization instance.
     *
     * >  You must specify at least one of the DtsJobId and DtsInstanceId parameters.
     *
     * @example dtsl3m1213ye7l****
     *
     * @var string
     */
    public $dtsInstanceId;

    /**
     * @description The ID of the data migration or data synchronization task.
     *
     * >  You must specify at least one of the DtsJobId and DtsInstanceId parameters.
     *
     * This parameter is required.
     *
     * @example l3m1213ye7l****
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @description The phase of the data migration task. Valid values:
     *
     *   **02**: The task is in the schema migration phase.
     *   **03**: The task is in the incremental migration phase.
     *
     * This parameter is required.
     *
     * @example 02
     *
     * @var string
     */
    public $jobCode;

    /**
     * @description The region ID of the DTS instance. For more information, see [List of supported regions](https://help.aliyun.com/document_detail/141033.html).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Resource group ID.
     *
     * @example rg-aek25bwhtt22cjq
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The type of schema definition. Valid values:
     *
     *   **before**: schema migration or initial schema synchronization
     *   **after**: DDL operations performed during incremental data migration or synchronization
     *
     * @example before
     *
     * @var string
     */
    public $structType;

    /**
     * @description The synchronization direction of the data synchronization task. Valid values:
     *
     *   **Forward**: Data is synchronized from the source database to the destination database.
     *   **Reverse**: Data is synchronized from the destination database to the source database.
     *
     * >
     *   Default value: **Forward**.
     *   You can set this parameter to **Reverse** to delete the reverse synchronization task only if the topology is two-way synchronization.
     *
     * @example Forward
     *
     * @var string
     */
    public $synchronizationDirection;

    /**
     * @description Whether it is a seamless integration (Zero-ETL) task, the value can be:
     * - **false**: No. - **true**: Yes.
     *
     * @example true
     *
     * @var bool
     */
    public $zeroEtlJob;
    protected $_name = [
        'dtsInstanceId' => 'DtsInstanceId',
        'dtsJobId' => 'DtsJobId',
        'jobCode' => 'JobCode',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'structType' => 'StructType',
        'synchronizationDirection' => 'SynchronizationDirection',
        'zeroEtlJob' => 'ZeroEtlJob',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dtsInstanceId) {
            $res['DtsInstanceId'] = $this->dtsInstanceId;
        }
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->jobCode) {
            $res['JobCode'] = $this->jobCode;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->structType) {
            $res['StructType'] = $this->structType;
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
     * @return SummaryJobDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DtsInstanceId'])) {
            $model->dtsInstanceId = $map['DtsInstanceId'];
        }
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['JobCode'])) {
            $model->jobCode = $map['JobCode'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['StructType'])) {
            $model->structType = $map['StructType'];
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
