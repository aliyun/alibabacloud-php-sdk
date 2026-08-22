<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeOpenSearchInfoResponseBody\data;

use AlibabaCloud\Dara\Model;

class spec extends Model
{
    /**
     * @var int
     */
    public $coordinatorNodeCount;

    /**
     * @var int
     */
    public $coordinatorNodeCpu;

    /**
     * @var bool
     */
    public $coordinatorNodeEnabled;

    /**
     * @var int
     */
    public $coordinatorNodeMemoryGB;

    /**
     * @var int
     */
    public $dataNodeCount;

    /**
     * @var int
     */
    public $dataNodeCpu;

    /**
     * @var int
     */
    public $dataNodeMemoryGB;

    /**
     * @var int
     */
    public $masterNodeCount;

    /**
     * @var int
     */
    public $masterNodeCpu;

    /**
     * @var bool
     */
    public $masterNodeEnabled;

    /**
     * @var int
     */
    public $masterNodeMemoryGB;

    /**
     * @var int
     */
    public $replicaCount;

    /**
     * @var int
     */
    public $storageSizeGB;

    /**
     * @var string
     */
    public $storageType;
    protected $_name = [
        'coordinatorNodeCount' => 'CoordinatorNodeCount',
        'coordinatorNodeCpu' => 'CoordinatorNodeCpu',
        'coordinatorNodeEnabled' => 'CoordinatorNodeEnabled',
        'coordinatorNodeMemoryGB' => 'CoordinatorNodeMemoryGB',
        'dataNodeCount' => 'DataNodeCount',
        'dataNodeCpu' => 'DataNodeCpu',
        'dataNodeMemoryGB' => 'DataNodeMemoryGB',
        'masterNodeCount' => 'MasterNodeCount',
        'masterNodeCpu' => 'MasterNodeCpu',
        'masterNodeEnabled' => 'MasterNodeEnabled',
        'masterNodeMemoryGB' => 'MasterNodeMemoryGB',
        'replicaCount' => 'ReplicaCount',
        'storageSizeGB' => 'StorageSizeGB',
        'storageType' => 'StorageType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->coordinatorNodeCount) {
            $res['CoordinatorNodeCount'] = $this->coordinatorNodeCount;
        }

        if (null !== $this->coordinatorNodeCpu) {
            $res['CoordinatorNodeCpu'] = $this->coordinatorNodeCpu;
        }

        if (null !== $this->coordinatorNodeEnabled) {
            $res['CoordinatorNodeEnabled'] = $this->coordinatorNodeEnabled;
        }

        if (null !== $this->coordinatorNodeMemoryGB) {
            $res['CoordinatorNodeMemoryGB'] = $this->coordinatorNodeMemoryGB;
        }

        if (null !== $this->dataNodeCount) {
            $res['DataNodeCount'] = $this->dataNodeCount;
        }

        if (null !== $this->dataNodeCpu) {
            $res['DataNodeCpu'] = $this->dataNodeCpu;
        }

        if (null !== $this->dataNodeMemoryGB) {
            $res['DataNodeMemoryGB'] = $this->dataNodeMemoryGB;
        }

        if (null !== $this->masterNodeCount) {
            $res['MasterNodeCount'] = $this->masterNodeCount;
        }

        if (null !== $this->masterNodeCpu) {
            $res['MasterNodeCpu'] = $this->masterNodeCpu;
        }

        if (null !== $this->masterNodeEnabled) {
            $res['MasterNodeEnabled'] = $this->masterNodeEnabled;
        }

        if (null !== $this->masterNodeMemoryGB) {
            $res['MasterNodeMemoryGB'] = $this->masterNodeMemoryGB;
        }

        if (null !== $this->replicaCount) {
            $res['ReplicaCount'] = $this->replicaCount;
        }

        if (null !== $this->storageSizeGB) {
            $res['StorageSizeGB'] = $this->storageSizeGB;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
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
        if (isset($map['CoordinatorNodeCount'])) {
            $model->coordinatorNodeCount = $map['CoordinatorNodeCount'];
        }

        if (isset($map['CoordinatorNodeCpu'])) {
            $model->coordinatorNodeCpu = $map['CoordinatorNodeCpu'];
        }

        if (isset($map['CoordinatorNodeEnabled'])) {
            $model->coordinatorNodeEnabled = $map['CoordinatorNodeEnabled'];
        }

        if (isset($map['CoordinatorNodeMemoryGB'])) {
            $model->coordinatorNodeMemoryGB = $map['CoordinatorNodeMemoryGB'];
        }

        if (isset($map['DataNodeCount'])) {
            $model->dataNodeCount = $map['DataNodeCount'];
        }

        if (isset($map['DataNodeCpu'])) {
            $model->dataNodeCpu = $map['DataNodeCpu'];
        }

        if (isset($map['DataNodeMemoryGB'])) {
            $model->dataNodeMemoryGB = $map['DataNodeMemoryGB'];
        }

        if (isset($map['MasterNodeCount'])) {
            $model->masterNodeCount = $map['MasterNodeCount'];
        }

        if (isset($map['MasterNodeCpu'])) {
            $model->masterNodeCpu = $map['MasterNodeCpu'];
        }

        if (isset($map['MasterNodeEnabled'])) {
            $model->masterNodeEnabled = $map['MasterNodeEnabled'];
        }

        if (isset($map['MasterNodeMemoryGB'])) {
            $model->masterNodeMemoryGB = $map['MasterNodeMemoryGB'];
        }

        if (isset($map['ReplicaCount'])) {
            $model->replicaCount = $map['ReplicaCount'];
        }

        if (isset($map['StorageSizeGB'])) {
            $model->storageSizeGB = $map['StorageSizeGB'];
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        return $model;
    }
}
