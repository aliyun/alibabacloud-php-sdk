<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSyncJobListResponseBody;

use AlibabaCloud\Dara\Model;

class syncJobs extends Model
{
    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sourceDBClusterDescription;

    /**
     * @var string
     */
    public $sourceDBClusterId;

    /**
     * @var string
     */
    public $sourceDBType;

    /**
     * @var int
     */
    public $sourceStorageSize;

    /**
     * @var int
     */
    public $sourceTableNumber;

    /**
     * @var string
     */
    public $syncPlatform;
    protected $_name = [
        'jobId' => 'JobId',
        'regionId' => 'RegionId',
        'sourceDBClusterDescription' => 'SourceDBClusterDescription',
        'sourceDBClusterId' => 'SourceDBClusterId',
        'sourceDBType' => 'SourceDBType',
        'sourceStorageSize' => 'SourceStorageSize',
        'sourceTableNumber' => 'SourceTableNumber',
        'syncPlatform' => 'SyncPlatform',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
