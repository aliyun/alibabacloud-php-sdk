<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\GetAutoScaleConfigResponseBody\queues;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetAutoScaleConfigResponseBody\queues\queueInfo\dataDisks;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetAutoScaleConfigResponseBody\queues\queueInfo\instanceTypes;

class queueInfo extends Model
{
    /**
     * @var bool
     */
    public $autoMinNodesPerCycle;

    /**
     * @var dataDisks
     */
    public $dataDisks;

    /**
     * @var bool
     */
    public $enableAutoGrow;

    /**
     * @var bool
     */
    public $enableAutoShrink;

    /**
     * @var string
     */
    public $hostNamePrefix;

    /**
     * @var string
     */
    public $hostNameSuffix;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var instanceTypes
     */
    public $instanceTypes;

    /**
     * @var int
     */
    public $maxNodesInQueue;

    /**
     * @var int
     */
    public $maxNodesPerCycle;

    /**
     * @var int
     */
    public $minNodesInQueue;

    /**
     * @var int
     */
    public $minNodesPerCycle;

    /**
     * @var string
     */
    public $queueImageId;

    /**
     * @var string
     */
    public $queueName;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var bool
     */
    public $sortedByInventory;

    /**
     * @var float
     */
    public $spotPriceLimit;

    /**
     * @var string
     */
    public $spotStrategy;

    /**
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @var string
     */
    public $systemDiskLevel;

    /**
     * @var int
     */
    public $systemDiskSize;
    protected $_name = [
        'autoMinNodesPerCycle' => 'AutoMinNodesPerCycle',
        'dataDisks' => 'DataDisks',
        'enableAutoGrow' => 'EnableAutoGrow',
        'enableAutoShrink' => 'EnableAutoShrink',
        'hostNamePrefix' => 'HostNamePrefix',
        'hostNameSuffix' => 'HostNameSuffix',
        'instanceType' => 'InstanceType',
        'instanceTypes' => 'InstanceTypes',
        'maxNodesInQueue' => 'MaxNodesInQueue',
        'maxNodesPerCycle' => 'MaxNodesPerCycle',
        'minNodesInQueue' => 'MinNodesInQueue',
        'minNodesPerCycle' => 'MinNodesPerCycle',
        'queueImageId' => 'QueueImageId',
        'queueName' => 'QueueName',
        'resourceGroupId' => 'ResourceGroupId',
        'sortedByInventory' => 'SortedByInventory',
        'spotPriceLimit' => 'SpotPriceLimit',
        'spotStrategy' => 'SpotStrategy',
        'systemDiskCategory' => 'SystemDiskCategory',
        'systemDiskLevel' => 'SystemDiskLevel',
        'systemDiskSize' => 'SystemDiskSize',
    ];

    public function validate()
    {
        if (null !== $this->dataDisks) {
            $this->dataDisks->validate();
        }
        if (null !== $this->instanceTypes) {
            $this->instanceTypes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoMinNodesPerCycle) {
            $res['AutoMinNodesPerCycle'] = $this->autoMinNodesPerCycle;
        }

        if (null !== $this->dataDisks) {
            $res['DataDisks'] = null !== $this->dataDisks ? $this->dataDisks->toArray($noStream) : $this->dataDisks;
        }

        if (null !== $this->enableAutoGrow) {
            $res['EnableAutoGrow'] = $this->enableAutoGrow;
        }

        if (null !== $this->enableAutoShrink) {
            $res['EnableAutoShrink'] = $this->enableAutoShrink;
        }

        if (null !== $this->hostNamePrefix) {
            $res['HostNamePrefix'] = $this->hostNamePrefix;
        }

        if (null !== $this->hostNameSuffix) {
            $res['HostNameSuffix'] = $this->hostNameSuffix;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->instanceTypes) {
            $res['InstanceTypes'] = null !== $this->instanceTypes ? $this->instanceTypes->toArray($noStream) : $this->instanceTypes;
        }

        if (null !== $this->maxNodesInQueue) {
            $res['MaxNodesInQueue'] = $this->maxNodesInQueue;
        }

        if (null !== $this->maxNodesPerCycle) {
            $res['MaxNodesPerCycle'] = $this->maxNodesPerCycle;
        }

        if (null !== $this->minNodesInQueue) {
            $res['MinNodesInQueue'] = $this->minNodesInQueue;
        }

        if (null !== $this->minNodesPerCycle) {
            $res['MinNodesPerCycle'] = $this->minNodesPerCycle;
        }

        if (null !== $this->queueImageId) {
            $res['QueueImageId'] = $this->queueImageId;
        }

        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->sortedByInventory) {
            $res['SortedByInventory'] = $this->sortedByInventory;
        }

        if (null !== $this->spotPriceLimit) {
            $res['SpotPriceLimit'] = $this->spotPriceLimit;
        }

        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }

        if (null !== $this->systemDiskCategory) {
            $res['SystemDiskCategory'] = $this->systemDiskCategory;
        }

        if (null !== $this->systemDiskLevel) {
            $res['SystemDiskLevel'] = $this->systemDiskLevel;
        }

        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
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
        if (isset($map['AutoMinNodesPerCycle'])) {
            $model->autoMinNodesPerCycle = $map['AutoMinNodesPerCycle'];
        }

        if (isset($map['DataDisks'])) {
            $model->dataDisks = dataDisks::fromMap($map['DataDisks']);
        }

        if (isset($map['EnableAutoGrow'])) {
            $model->enableAutoGrow = $map['EnableAutoGrow'];
        }

        if (isset($map['EnableAutoShrink'])) {
            $model->enableAutoShrink = $map['EnableAutoShrink'];
        }

        if (isset($map['HostNamePrefix'])) {
            $model->hostNamePrefix = $map['HostNamePrefix'];
        }

        if (isset($map['HostNameSuffix'])) {
            $model->hostNameSuffix = $map['HostNameSuffix'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['InstanceTypes'])) {
            $model->instanceTypes = instanceTypes::fromMap($map['InstanceTypes']);
        }

        if (isset($map['MaxNodesInQueue'])) {
            $model->maxNodesInQueue = $map['MaxNodesInQueue'];
        }

        if (isset($map['MaxNodesPerCycle'])) {
            $model->maxNodesPerCycle = $map['MaxNodesPerCycle'];
        }

        if (isset($map['MinNodesInQueue'])) {
            $model->minNodesInQueue = $map['MinNodesInQueue'];
        }

        if (isset($map['MinNodesPerCycle'])) {
            $model->minNodesPerCycle = $map['MinNodesPerCycle'];
        }

        if (isset($map['QueueImageId'])) {
            $model->queueImageId = $map['QueueImageId'];
        }

        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['SortedByInventory'])) {
            $model->sortedByInventory = $map['SortedByInventory'];
        }

        if (isset($map['SpotPriceLimit'])) {
            $model->spotPriceLimit = $map['SpotPriceLimit'];
        }

        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }

        if (isset($map['SystemDiskCategory'])) {
            $model->systemDiskCategory = $map['SystemDiskCategory'];
        }

        if (isset($map['SystemDiskLevel'])) {
            $model->systemDiskLevel = $map['SystemDiskLevel'];
        }

        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        return $model;
    }
}
