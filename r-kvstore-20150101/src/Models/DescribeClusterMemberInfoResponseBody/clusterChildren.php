<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeClusterMemberInfoResponseBody;

use AlibabaCloud\Dara\Model;

class clusterChildren extends Model
{
    /**
     * @var int
     */
    public $bandWidth;

    /**
     * @var int
     */
    public $binlogRetentionDays;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var int
     */
    public $capacity;

    /**
     * @var string
     */
    public $classCode;

    /**
     * @var int
     */
    public $connections;

    /**
     * @var int
     */
    public $currentBandWidth;

    /**
     * @var int
     */
    public $diskSizeMB;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $replicaSize;

    /**
     * @var string
     */
    public $resourceGroupName;

    /**
     * @var string
     */
    public $service;

    /**
     * @var string
     */
    public $serviceVersion;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'bandWidth' => 'BandWidth',
        'binlogRetentionDays' => 'BinlogRetentionDays',
        'bizType' => 'BizType',
        'capacity' => 'Capacity',
        'classCode' => 'ClassCode',
        'connections' => 'Connections',
        'currentBandWidth' => 'CurrentBandWidth',
        'diskSizeMB' => 'DiskSizeMB',
        'id' => 'Id',
        'name' => 'Name',
        'replicaSize' => 'ReplicaSize',
        'resourceGroupName' => 'ResourceGroupName',
        'service' => 'Service',
        'serviceVersion' => 'ServiceVersion',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandWidth) {
            $res['BandWidth'] = $this->bandWidth;
        }

        if (null !== $this->binlogRetentionDays) {
            $res['BinlogRetentionDays'] = $this->binlogRetentionDays;
        }

        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }

        if (null !== $this->classCode) {
            $res['ClassCode'] = $this->classCode;
        }

        if (null !== $this->connections) {
            $res['Connections'] = $this->connections;
        }

        if (null !== $this->currentBandWidth) {
            $res['CurrentBandWidth'] = $this->currentBandWidth;
        }

        if (null !== $this->diskSizeMB) {
            $res['DiskSizeMB'] = $this->diskSizeMB;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->replicaSize) {
            $res['ReplicaSize'] = $this->replicaSize;
        }

        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
        }

        if (null !== $this->service) {
            $res['Service'] = $this->service;
        }

        if (null !== $this->serviceVersion) {
            $res['ServiceVersion'] = $this->serviceVersion;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['BandWidth'])) {
            $model->bandWidth = $map['BandWidth'];
        }

        if (isset($map['BinlogRetentionDays'])) {
            $model->binlogRetentionDays = $map['BinlogRetentionDays'];
        }

        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }

        if (isset($map['ClassCode'])) {
            $model->classCode = $map['ClassCode'];
        }

        if (isset($map['Connections'])) {
            $model->connections = $map['Connections'];
        }

        if (isset($map['CurrentBandWidth'])) {
            $model->currentBandWidth = $map['CurrentBandWidth'];
        }

        if (isset($map['DiskSizeMB'])) {
            $model->diskSizeMB = $map['DiskSizeMB'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ReplicaSize'])) {
            $model->replicaSize = $map['ReplicaSize'];
        }

        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }

        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }

        if (isset($map['ServiceVersion'])) {
            $model->serviceVersion = $map['ServiceVersion'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
