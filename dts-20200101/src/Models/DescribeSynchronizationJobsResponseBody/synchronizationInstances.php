<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobsResponseBody\synchronizationInstances\dataInitializationStatus;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobsResponseBody\synchronizationInstances\dataSynchronizationStatus;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobsResponseBody\synchronizationInstances\destinationEndpoint;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobsResponseBody\synchronizationInstances\performance;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobsResponseBody\synchronizationInstances\precheckStatus;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobsResponseBody\synchronizationInstances\sourceEndpoint;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobsResponseBody\synchronizationInstances\structureInitializationStatus;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobsResponseBody\synchronizationInstances\synchronizationObjects;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobsResponseBody\synchronizationInstances\tags;

class synchronizationInstances extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $dataInitialization;

    /**
     * @var dataInitializationStatus
     */
    public $dataInitializationStatus;

    /**
     * @var dataSynchronizationStatus
     */
    public $dataSynchronizationStatus;

    /**
     * @var string
     */
    public $delay;

    /**
     * @var destinationEndpoint
     */
    public $destinationEndpoint;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $instanceCreateTime;

    /**
     * @var string
     */
    public $jobCreateTime;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var performance
     */
    public $performance;

    /**
     * @var precheckStatus
     */
    public $precheckStatus;

    /**
     * @var sourceEndpoint
     */
    public $sourceEndpoint;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $structureInitialization;

    /**
     * @var structureInitializationStatus
     */
    public $structureInitializationStatus;

    /**
     * @var string
     */
    public $synchronizationDirection;

    /**
     * @var string
     */
    public $synchronizationJobClass;

    /**
     * @var string
     */
    public $synchronizationJobId;

    /**
     * @var string
     */
    public $synchronizationJobName;

    /**
     * @var synchronizationObjects[]
     */
    public $synchronizationObjects;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'createTime' => 'CreateTime',
        'dataInitialization' => 'DataInitialization',
        'dataInitializationStatus' => 'DataInitializationStatus',
        'dataSynchronizationStatus' => 'DataSynchronizationStatus',
        'delay' => 'Delay',
        'destinationEndpoint' => 'DestinationEndpoint',
        'errorMessage' => 'ErrorMessage',
        'expireTime' => 'ExpireTime',
        'instanceCreateTime' => 'InstanceCreateTime',
        'jobCreateTime' => 'JobCreateTime',
        'payType' => 'PayType',
        'performance' => 'Performance',
        'precheckStatus' => 'PrecheckStatus',
        'sourceEndpoint' => 'SourceEndpoint',
        'status' => 'Status',
        'structureInitialization' => 'StructureInitialization',
        'structureInitializationStatus' => 'StructureInitializationStatus',
        'synchronizationDirection' => 'SynchronizationDirection',
        'synchronizationJobClass' => 'SynchronizationJobClass',
        'synchronizationJobId' => 'SynchronizationJobId',
        'synchronizationJobName' => 'SynchronizationJobName',
        'synchronizationObjects' => 'SynchronizationObjects',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (null !== $this->dataInitializationStatus) {
            $this->dataInitializationStatus->validate();
        }
        if (null !== $this->dataSynchronizationStatus) {
            $this->dataSynchronizationStatus->validate();
        }
        if (null !== $this->destinationEndpoint) {
            $this->destinationEndpoint->validate();
        }
        if (null !== $this->performance) {
            $this->performance->validate();
        }
        if (null !== $this->precheckStatus) {
            $this->precheckStatus->validate();
        }
        if (null !== $this->sourceEndpoint) {
            $this->sourceEndpoint->validate();
        }
        if (null !== $this->structureInitializationStatus) {
            $this->structureInitializationStatus->validate();
        }
        if (\is_array($this->synchronizationObjects)) {
            Model::validateArray($this->synchronizationObjects);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->dataInitialization) {
            $res['DataInitialization'] = $this->dataInitialization;
        }

        if (null !== $this->dataInitializationStatus) {
            $res['DataInitializationStatus'] = null !== $this->dataInitializationStatus ? $this->dataInitializationStatus->toArray($noStream) : $this->dataInitializationStatus;
        }

        if (null !== $this->dataSynchronizationStatus) {
            $res['DataSynchronizationStatus'] = null !== $this->dataSynchronizationStatus ? $this->dataSynchronizationStatus->toArray($noStream) : $this->dataSynchronizationStatus;
        }

        if (null !== $this->delay) {
            $res['Delay'] = $this->delay;
        }

        if (null !== $this->destinationEndpoint) {
            $res['DestinationEndpoint'] = null !== $this->destinationEndpoint ? $this->destinationEndpoint->toArray($noStream) : $this->destinationEndpoint;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->instanceCreateTime) {
            $res['InstanceCreateTime'] = $this->instanceCreateTime;
        }

        if (null !== $this->jobCreateTime) {
            $res['JobCreateTime'] = $this->jobCreateTime;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->performance) {
            $res['Performance'] = null !== $this->performance ? $this->performance->toArray($noStream) : $this->performance;
        }

        if (null !== $this->precheckStatus) {
            $res['PrecheckStatus'] = null !== $this->precheckStatus ? $this->precheckStatus->toArray($noStream) : $this->precheckStatus;
        }

        if (null !== $this->sourceEndpoint) {
            $res['SourceEndpoint'] = null !== $this->sourceEndpoint ? $this->sourceEndpoint->toArray($noStream) : $this->sourceEndpoint;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->structureInitialization) {
            $res['StructureInitialization'] = $this->structureInitialization;
        }

        if (null !== $this->structureInitializationStatus) {
            $res['StructureInitializationStatus'] = null !== $this->structureInitializationStatus ? $this->structureInitializationStatus->toArray($noStream) : $this->structureInitializationStatus;
        }

        if (null !== $this->synchronizationDirection) {
            $res['SynchronizationDirection'] = $this->synchronizationDirection;
        }

        if (null !== $this->synchronizationJobClass) {
            $res['SynchronizationJobClass'] = $this->synchronizationJobClass;
        }

        if (null !== $this->synchronizationJobId) {
            $res['SynchronizationJobId'] = $this->synchronizationJobId;
        }

        if (null !== $this->synchronizationJobName) {
            $res['SynchronizationJobName'] = $this->synchronizationJobName;
        }

        if (null !== $this->synchronizationObjects) {
            if (\is_array($this->synchronizationObjects)) {
                $res['SynchronizationObjects'] = [];
                $n1 = 0;
                foreach ($this->synchronizationObjects as $item1) {
                    $res['SynchronizationObjects'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DataInitialization'])) {
            $model->dataInitialization = $map['DataInitialization'];
        }

        if (isset($map['DataInitializationStatus'])) {
            $model->dataInitializationStatus = dataInitializationStatus::fromMap($map['DataInitializationStatus']);
        }

        if (isset($map['DataSynchronizationStatus'])) {
            $model->dataSynchronizationStatus = dataSynchronizationStatus::fromMap($map['DataSynchronizationStatus']);
        }

        if (isset($map['Delay'])) {
            $model->delay = $map['Delay'];
        }

        if (isset($map['DestinationEndpoint'])) {
            $model->destinationEndpoint = destinationEndpoint::fromMap($map['DestinationEndpoint']);
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['InstanceCreateTime'])) {
            $model->instanceCreateTime = $map['InstanceCreateTime'];
        }

        if (isset($map['JobCreateTime'])) {
            $model->jobCreateTime = $map['JobCreateTime'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['Performance'])) {
            $model->performance = performance::fromMap($map['Performance']);
        }

        if (isset($map['PrecheckStatus'])) {
            $model->precheckStatus = precheckStatus::fromMap($map['PrecheckStatus']);
        }

        if (isset($map['SourceEndpoint'])) {
            $model->sourceEndpoint = sourceEndpoint::fromMap($map['SourceEndpoint']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StructureInitialization'])) {
            $model->structureInitialization = $map['StructureInitialization'];
        }

        if (isset($map['StructureInitializationStatus'])) {
            $model->structureInitializationStatus = structureInitializationStatus::fromMap($map['StructureInitializationStatus']);
        }

        if (isset($map['SynchronizationDirection'])) {
            $model->synchronizationDirection = $map['SynchronizationDirection'];
        }

        if (isset($map['SynchronizationJobClass'])) {
            $model->synchronizationJobClass = $map['SynchronizationJobClass'];
        }

        if (isset($map['SynchronizationJobId'])) {
            $model->synchronizationJobId = $map['SynchronizationJobId'];
        }

        if (isset($map['SynchronizationJobName'])) {
            $model->synchronizationJobName = $map['SynchronizationJobName'];
        }

        if (isset($map['SynchronizationObjects'])) {
            if (!empty($map['SynchronizationObjects'])) {
                $model->synchronizationObjects = [];
                $n1 = 0;
                foreach ($map['SynchronizationObjects'] as $item1) {
                    $model->synchronizationObjects[$n1] = synchronizationObjects::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
