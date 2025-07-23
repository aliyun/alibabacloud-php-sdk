<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\Tea\Model;

class CreateFileSystemRequest extends Model
{
    /**
     * @example LRS
     *
     * @var string
     */
    public $dataRedundancyType;

    /**
     * @var string
     */
    public $dedicatedClusterId;

    /**
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example MyFirstHDFS
     *
     * @var string
     */
    public $fileSystemName;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $inputRegionId;

    /**
     * @example 0
     *
     * @var int
     */
    public $partitionNumber;

    /**
     * @description This parameter is required.
     *
     * @example HDFS
     *
     * @var string
     */
    public $protocolType;

    /**
     * @example 1024
     *
     * @var int
     */
    public $provisionedThroughputInMiBps;

    /**
     * @description This parameter is required.
     *
     * @example 1024
     *
     * @var int
     */
    public $spaceCapacity;

    /**
     * @example AligroupStorageSet
     *
     * @var string
     */
    public $storageSetName;

    /**
     * @description This parameter is required.
     *
     * @example STANDARD
     *
     * @var string
     */
    public $storageType;

    /**
     * @example Standard
     *
     * @var string
     */
    public $throughputMode;

    /**
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'dataRedundancyType' => 'DataRedundancyType',
        'dedicatedClusterId' => 'DedicatedClusterId',
        'description' => 'Description',
        'fileSystemName' => 'FileSystemName',
        'inputRegionId' => 'InputRegionId',
        'partitionNumber' => 'PartitionNumber',
        'protocolType' => 'ProtocolType',
        'provisionedThroughputInMiBps' => 'ProvisionedThroughputInMiBps',
        'spaceCapacity' => 'SpaceCapacity',
        'storageSetName' => 'StorageSetName',
        'storageType' => 'StorageType',
        'throughputMode' => 'ThroughputMode',
        'zoneId' => 'ZoneId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataRedundancyType) {
            $res['DataRedundancyType'] = $this->dataRedundancyType;
        }
        if (null !== $this->dedicatedClusterId) {
            $res['DedicatedClusterId'] = $this->dedicatedClusterId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->fileSystemName) {
            $res['FileSystemName'] = $this->fileSystemName;
        }
        if (null !== $this->inputRegionId) {
            $res['InputRegionId'] = $this->inputRegionId;
        }
        if (null !== $this->partitionNumber) {
            $res['PartitionNumber'] = $this->partitionNumber;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->provisionedThroughputInMiBps) {
            $res['ProvisionedThroughputInMiBps'] = $this->provisionedThroughputInMiBps;
        }
        if (null !== $this->spaceCapacity) {
            $res['SpaceCapacity'] = $this->spaceCapacity;
        }
        if (null !== $this->storageSetName) {
            $res['StorageSetName'] = $this->storageSetName;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->throughputMode) {
            $res['ThroughputMode'] = $this->throughputMode;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFileSystemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataRedundancyType'])) {
            $model->dataRedundancyType = $map['DataRedundancyType'];
        }
        if (isset($map['DedicatedClusterId'])) {
            $model->dedicatedClusterId = $map['DedicatedClusterId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FileSystemName'])) {
            $model->fileSystemName = $map['FileSystemName'];
        }
        if (isset($map['InputRegionId'])) {
            $model->inputRegionId = $map['InputRegionId'];
        }
        if (isset($map['PartitionNumber'])) {
            $model->partitionNumber = $map['PartitionNumber'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['ProvisionedThroughputInMiBps'])) {
            $model->provisionedThroughputInMiBps = $map['ProvisionedThroughputInMiBps'];
        }
        if (isset($map['SpaceCapacity'])) {
            $model->spaceCapacity = $map['SpaceCapacity'];
        }
        if (isset($map['StorageSetName'])) {
            $model->storageSetName = $map['StorageSetName'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['ThroughputMode'])) {
            $model->throughputMode = $map['ThroughputMode'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
