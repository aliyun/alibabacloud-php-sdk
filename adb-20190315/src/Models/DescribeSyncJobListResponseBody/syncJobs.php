<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSyncJobListResponseBody;

use AlibabaCloud\Tea\Model;

class syncJobs extends Model
{
    /**
     * @example dts-xxxxx
     *
     * @var string
     */
    public $jobId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example test
     *
     * @var string
     */
    public $sourceDBClusterDescription;

    /**
     * @example pc-t4n766v2llx852n81
     *
     * @var string
     */
    public $sourceDBClusterId;

    /**
     * @example polardb
     *
     * @var string
     */
    public $sourceDBType;

    /**
     * @example 100
     *
     * @var int
     */
    public $sourceStorageSize;

    /**
     * @example 100
     *
     * @var int
     */
    public $sourceTableNumber;

    /**
     * @example ADB-CDC
     *
     * @var string
     */
    public $syncPlatform;
    protected $_name = [
        'jobId'                      => 'JobId',
        'regionId'                   => 'RegionId',
        'sourceDBClusterDescription' => 'SourceDBClusterDescription',
        'sourceDBClusterId'          => 'SourceDBClusterId',
        'sourceDBType'               => 'SourceDBType',
        'sourceStorageSize'          => 'SourceStorageSize',
        'sourceTableNumber'          => 'SourceTableNumber',
        'syncPlatform'               => 'SyncPlatform',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sourceDBClusterDescription) {
            $res['SourceDBClusterDescription'] = $this->sourceDBClusterDescription;
        }
        if (null !== $this->sourceDBClusterId) {
            $res['SourceDBClusterId'] = $this->sourceDBClusterId;
        }
        if (null !== $this->sourceDBType) {
            $res['SourceDBType'] = $this->sourceDBType;
        }
        if (null !== $this->sourceStorageSize) {
            $res['SourceStorageSize'] = $this->sourceStorageSize;
        }
        if (null !== $this->sourceTableNumber) {
            $res['SourceTableNumber'] = $this->sourceTableNumber;
        }
        if (null !== $this->syncPlatform) {
            $res['SyncPlatform'] = $this->syncPlatform;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return syncJobs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SourceDBClusterDescription'])) {
            $model->sourceDBClusterDescription = $map['SourceDBClusterDescription'];
        }
        if (isset($map['SourceDBClusterId'])) {
            $model->sourceDBClusterId = $map['SourceDBClusterId'];
        }
        if (isset($map['SourceDBType'])) {
            $model->sourceDBType = $map['SourceDBType'];
        }
        if (isset($map['SourceStorageSize'])) {
            $model->sourceStorageSize = $map['SourceStorageSize'];
        }
        if (isset($map['SourceTableNumber'])) {
            $model->sourceTableNumber = $map['SourceTableNumber'];
        }
        if (isset($map['SyncPlatform'])) {
            $model->syncPlatform = $map['SyncPlatform'];
        }

        return $model;
    }
}
