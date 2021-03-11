<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeClusterMemberInfoResponseBody;

use AlibabaCloud\Tea\Model;

class clusterChildren extends Model
{
    /**
     * @var int
     */
    public $capacity;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var int
     */
    public $diskSizeMB;

    /**
     * @var int
     */
    public $bandWidth;

    /**
     * @var int
     */
    public $currentBandWidth;

    /**
     * @var string
     */
    public $classCode;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $service;

    /**
     * @var int
     */
    public $binlogRetentionDays;

    /**
     * @var int
     */
    public $connections;

    /**
     * @var string
     */
    public $resourceGroupName;

    /**
     * @var string
     */
    public $serviceVersion;

    /**
     * @var int
     */
    public $replicaSize;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'capacity'            => 'Capacity',
        'userId'              => 'UserId',
        'diskSizeMB'          => 'DiskSizeMB',
        'bandWidth'           => 'BandWidth',
        'currentBandWidth'    => 'CurrentBandWidth',
        'classCode'           => 'ClassCode',
        'bizType'             => 'BizType',
        'service'             => 'Service',
        'binlogRetentionDays' => 'BinlogRetentionDays',
        'connections'         => 'Connections',
        'resourceGroupName'   => 'ResourceGroupName',
        'serviceVersion'      => 'ServiceVersion',
        'replicaSize'         => 'ReplicaSize',
        'name'                => 'Name',
        'id'                  => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->diskSizeMB) {
            $res['DiskSizeMB'] = $this->diskSizeMB;
        }
        if (null !== $this->bandWidth) {
            $res['BandWidth'] = $this->bandWidth;
        }
        if (null !== $this->currentBandWidth) {
            $res['CurrentBandWidth'] = $this->currentBandWidth;
        }
        if (null !== $this->classCode) {
            $res['ClassCode'] = $this->classCode;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->service) {
            $res['Service'] = $this->service;
        }
        if (null !== $this->binlogRetentionDays) {
            $res['BinlogRetentionDays'] = $this->binlogRetentionDays;
        }
        if (null !== $this->connections) {
            $res['Connections'] = $this->connections;
        }
        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
        }
        if (null !== $this->serviceVersion) {
            $res['ServiceVersion'] = $this->serviceVersion;
        }
        if (null !== $this->replicaSize) {
            $res['ReplicaSize'] = $this->replicaSize;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterChildren
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['DiskSizeMB'])) {
            $model->diskSizeMB = $map['DiskSizeMB'];
        }
        if (isset($map['BandWidth'])) {
            $model->bandWidth = $map['BandWidth'];
        }
        if (isset($map['CurrentBandWidth'])) {
            $model->currentBandWidth = $map['CurrentBandWidth'];
        }
        if (isset($map['ClassCode'])) {
            $model->classCode = $map['ClassCode'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }
        if (isset($map['BinlogRetentionDays'])) {
            $model->binlogRetentionDays = $map['BinlogRetentionDays'];
        }
        if (isset($map['Connections'])) {
            $model->connections = $map['Connections'];
        }
        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }
        if (isset($map['ServiceVersion'])) {
            $model->serviceVersion = $map['ServiceVersion'];
        }
        if (isset($map['ReplicaSize'])) {
            $model->replicaSize = $map['ReplicaSize'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
