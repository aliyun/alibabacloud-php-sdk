<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20210101\Models;

use AlibabaCloud\Dara\Model;

class CreateDownloadRequest extends Model
{
    /**
     * @var string
     */
    public $adminDatabase;

    /**
     * @var string
     */
    public $bakSetId;

    /**
     * @var string
     */
    public $bakSetSize;

    /**
     * @var string
     */
    public $bakSetType;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $downloadPointInTime;

    /**
     * @var string
     */
    public $formatType;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $isCluster;

    /**
     * @var bool
     */
    public $isPhysical;

    /**
     * @var string
     */
    public $primaryKeyTypeOnly;

    /**
     * @var string
     */
    public $regionCode;

    /**
     * @var string
     */
    public $targetBucket;

    /**
     * @var string
     */
    public $targetOssRegion;

    /**
     * @var string
     */
    public $targetPath;

    /**
     * @var string
     */
    public $targetType;

    /**
     * @var string
     */
    public $useZstd;
    protected $_name = [
        'adminDatabase' => 'AdminDatabase',
        'bakSetId' => 'BakSetId',
        'bakSetSize' => 'BakSetSize',
        'bakSetType' => 'BakSetType',
        'clusterName' => 'ClusterName',
        'downloadPointInTime' => 'DownloadPointInTime',
        'formatType' => 'FormatType',
        'instanceName' => 'InstanceName',
        'isCluster' => 'IsCluster',
        'isPhysical' => 'IsPhysical',
        'primaryKeyTypeOnly' => 'PrimaryKeyTypeOnly',
        'regionCode' => 'RegionCode',
        'targetBucket' => 'TargetBucket',
        'targetOssRegion' => 'TargetOssRegion',
        'targetPath' => 'TargetPath',
        'targetType' => 'TargetType',
        'useZstd' => 'UseZstd',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adminDatabase) {
            $res['AdminDatabase'] = $this->adminDatabase;
        }

        if (null !== $this->bakSetId) {
            $res['BakSetId'] = $this->bakSetId;
        }

        if (null !== $this->bakSetSize) {
            $res['BakSetSize'] = $this->bakSetSize;
        }

        if (null !== $this->bakSetType) {
            $res['BakSetType'] = $this->bakSetType;
        }

        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }

        if (null !== $this->downloadPointInTime) {
            $res['DownloadPointInTime'] = $this->downloadPointInTime;
        }

        if (null !== $this->formatType) {
            $res['FormatType'] = $this->formatType;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->isCluster) {
            $res['IsCluster'] = $this->isCluster;
        }

        if (null !== $this->isPhysical) {
            $res['IsPhysical'] = $this->isPhysical;
        }

        if (null !== $this->primaryKeyTypeOnly) {
            $res['PrimaryKeyTypeOnly'] = $this->primaryKeyTypeOnly;
        }

        if (null !== $this->regionCode) {
            $res['RegionCode'] = $this->regionCode;
        }

        if (null !== $this->targetBucket) {
            $res['TargetBucket'] = $this->targetBucket;
        }

        if (null !== $this->targetOssRegion) {
            $res['TargetOssRegion'] = $this->targetOssRegion;
        }

        if (null !== $this->targetPath) {
            $res['TargetPath'] = $this->targetPath;
        }

        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        if (null !== $this->useZstd) {
            $res['UseZstd'] = $this->useZstd;
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
        if (isset($map['AdminDatabase'])) {
            $model->adminDatabase = $map['AdminDatabase'];
        }

        if (isset($map['BakSetId'])) {
            $model->bakSetId = $map['BakSetId'];
        }

        if (isset($map['BakSetSize'])) {
            $model->bakSetSize = $map['BakSetSize'];
        }

        if (isset($map['BakSetType'])) {
            $model->bakSetType = $map['BakSetType'];
        }

        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }

        if (isset($map['DownloadPointInTime'])) {
            $model->downloadPointInTime = $map['DownloadPointInTime'];
        }

        if (isset($map['FormatType'])) {
            $model->formatType = $map['FormatType'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['IsCluster'])) {
            $model->isCluster = $map['IsCluster'];
        }

        if (isset($map['IsPhysical'])) {
            $model->isPhysical = $map['IsPhysical'];
        }

        if (isset($map['PrimaryKeyTypeOnly'])) {
            $model->primaryKeyTypeOnly = $map['PrimaryKeyTypeOnly'];
        }

        if (isset($map['RegionCode'])) {
            $model->regionCode = $map['RegionCode'];
        }

        if (isset($map['TargetBucket'])) {
            $model->targetBucket = $map['TargetBucket'];
        }

        if (isset($map['TargetOssRegion'])) {
            $model->targetOssRegion = $map['TargetOssRegion'];
        }

        if (isset($map['TargetPath'])) {
            $model->targetPath = $map['TargetPath'];
        }

        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        if (isset($map['UseZstd'])) {
            $model->useZstd = $map['UseZstd'];
        }

        return $model;
    }
}
