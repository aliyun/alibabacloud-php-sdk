<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class Node extends Model
{
    /**
     * @var string
     */
    public $acceleratorType;

    /**
     * @var string
     */
    public $allocatableCPU;

    /**
     * @var string
     */
    public $allocatableMemory;

    /**
     * @var int
     */
    public $ancestorQuotaWorkloadNum;

    /**
     * @var string
     */
    public $availabilityZone;

    /**
     * @var QuotaIdName[]
     */
    public $boundQuotas;

    /**
     * @var string
     */
    public $CPU;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var int
     */
    public $descendantQuotaWorkloadNum;

    /**
     * @var int
     */
    public $diskCapacity;

    /**
     * @var string
     */
    public $diskPL;

    /**
     * @var string
     */
    public $GPU;

    /**
     * @var string
     */
    public $GPUMemory;

    /**
     * @var string
     */
    public $GPUType;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtExpiredTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var string
     */
    public $hyperZone;

    /**
     * @var bool
     */
    public $isBound;

    /**
     * @var string
     */
    public $limitCPU;

    /**
     * @var string
     */
    public $limitGPU;

    /**
     * @var string
     */
    public $limitMemory;

    /**
     * @var string
     */
    public $machineGroupId;

    /**
     * @var string
     */
    public $memory;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $nodeStatus;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $orderStatus;

    /**
     * @var int
     */
    public $podNum;

    /**
     * @var string
     */
    public $reasonCode;

    /**
     * @var string
     */
    public $reasonMessage;

    /**
     * @var string
     */
    public $requestCPU;

    /**
     * @var string
     */
    public $requestGPU;

    /**
     * @var string
     */
    public $requestMemory;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceGroupName;

    /**
     * @var int
     */
    public $selfQuotaWorkloadNum;

    /**
     * @var string[]
     */
    public $subNodes;

    /**
     * @var string
     */
    public $systemReservedCPU;

    /**
     * @var string
     */
    public $systemReservedMemory;

    /**
     * @var UserInfo[]
     */
    public $users;

    /**
     * @var int
     */
    public $workloadNum;
    protected $_name = [
        'acceleratorType' => 'AcceleratorType',
        'allocatableCPU' => 'AllocatableCPU',
        'allocatableMemory' => 'AllocatableMemory',
        'ancestorQuotaWorkloadNum' => 'AncestorQuotaWorkloadNum',
        'availabilityZone' => 'AvailabilityZone',
        'boundQuotas' => 'BoundQuotas',
        'CPU' => 'CPU',
        'creatorId' => 'CreatorId',
        'descendantQuotaWorkloadNum' => 'DescendantQuotaWorkloadNum',
        'diskCapacity' => 'DiskCapacity',
        'diskPL' => 'DiskPL',
        'GPU' => 'GPU',
        'GPUMemory' => 'GPUMemory',
        'GPUType' => 'GPUType',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtExpiredTime' => 'GmtExpiredTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'hyperZone' => 'HyperZone',
        'isBound' => 'IsBound',
        'limitCPU' => 'LimitCPU',
        'limitGPU' => 'LimitGPU',
        'limitMemory' => 'LimitMemory',
        'machineGroupId' => 'MachineGroupId',
        'memory' => 'Memory',
        'nodeName' => 'NodeName',
        'nodeStatus' => 'NodeStatus',
        'nodeType' => 'NodeType',
        'orderStatus' => 'OrderStatus',
        'podNum' => 'PodNum',
        'reasonCode' => 'ReasonCode',
        'reasonMessage' => 'ReasonMessage',
        'requestCPU' => 'RequestCPU',
        'requestGPU' => 'RequestGPU',
        'requestMemory' => 'RequestMemory',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceGroupName' => 'ResourceGroupName',
        'selfQuotaWorkloadNum' => 'SelfQuotaWorkloadNum',
        'subNodes' => 'SubNodes',
        'systemReservedCPU' => 'SystemReservedCPU',
        'systemReservedMemory' => 'SystemReservedMemory',
        'users' => 'Users',
        'workloadNum' => 'WorkloadNum',
    ];

    public function validate()
    {
        if (\is_array($this->boundQuotas)) {
            Model::validateArray($this->boundQuotas);
        }
        if (\is_array($this->subNodes)) {
            Model::validateArray($this->subNodes);
        }
        if (\is_array($this->users)) {
            Model::validateArray($this->users);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceleratorType) {
            $res['AcceleratorType'] = $this->acceleratorType;
        }

        if (null !== $this->allocatableCPU) {
            $res['AllocatableCPU'] = $this->allocatableCPU;
        }

        if (null !== $this->allocatableMemory) {
            $res['AllocatableMemory'] = $this->allocatableMemory;
        }

        if (null !== $this->ancestorQuotaWorkloadNum) {
            $res['AncestorQuotaWorkloadNum'] = $this->ancestorQuotaWorkloadNum;
        }

        if (null !== $this->availabilityZone) {
            $res['AvailabilityZone'] = $this->availabilityZone;
        }

        if (null !== $this->boundQuotas) {
            if (\is_array($this->boundQuotas)) {
                $res['BoundQuotas'] = [];
                $n1 = 0;
                foreach ($this->boundQuotas as $item1) {
                    $res['BoundQuotas'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->CPU) {
            $res['CPU'] = $this->CPU;
        }

        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }

        if (null !== $this->descendantQuotaWorkloadNum) {
            $res['DescendantQuotaWorkloadNum'] = $this->descendantQuotaWorkloadNum;
        }

        if (null !== $this->diskCapacity) {
            $res['DiskCapacity'] = $this->diskCapacity;
        }

        if (null !== $this->diskPL) {
            $res['DiskPL'] = $this->diskPL;
        }

        if (null !== $this->GPU) {
            $res['GPU'] = $this->GPU;
        }

        if (null !== $this->GPUMemory) {
            $res['GPUMemory'] = $this->GPUMemory;
        }

        if (null !== $this->GPUType) {
            $res['GPUType'] = $this->GPUType;
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtExpiredTime) {
            $res['GmtExpiredTime'] = $this->gmtExpiredTime;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }

        if (null !== $this->hyperZone) {
            $res['HyperZone'] = $this->hyperZone;
        }

        if (null !== $this->isBound) {
            $res['IsBound'] = $this->isBound;
        }

        if (null !== $this->limitCPU) {
            $res['LimitCPU'] = $this->limitCPU;
        }

        if (null !== $this->limitGPU) {
            $res['LimitGPU'] = $this->limitGPU;
        }

        if (null !== $this->limitMemory) {
            $res['LimitMemory'] = $this->limitMemory;
        }

        if (null !== $this->machineGroupId) {
            $res['MachineGroupId'] = $this->machineGroupId;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }

        if (null !== $this->nodeStatus) {
            $res['NodeStatus'] = $this->nodeStatus;
        }

        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }

        if (null !== $this->orderStatus) {
            $res['OrderStatus'] = $this->orderStatus;
        }

        if (null !== $this->podNum) {
            $res['PodNum'] = $this->podNum;
        }

        if (null !== $this->reasonCode) {
            $res['ReasonCode'] = $this->reasonCode;
        }

        if (null !== $this->reasonMessage) {
            $res['ReasonMessage'] = $this->reasonMessage;
        }

        if (null !== $this->requestCPU) {
            $res['RequestCPU'] = $this->requestCPU;
        }

        if (null !== $this->requestGPU) {
            $res['RequestGPU'] = $this->requestGPU;
        }

        if (null !== $this->requestMemory) {
            $res['RequestMemory'] = $this->requestMemory;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
        }

        if (null !== $this->selfQuotaWorkloadNum) {
            $res['SelfQuotaWorkloadNum'] = $this->selfQuotaWorkloadNum;
        }

        if (null !== $this->subNodes) {
            if (\is_array($this->subNodes)) {
                $res['SubNodes'] = [];
                $n1 = 0;
                foreach ($this->subNodes as $item1) {
                    $res['SubNodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->systemReservedCPU) {
            $res['SystemReservedCPU'] = $this->systemReservedCPU;
        }

        if (null !== $this->systemReservedMemory) {
            $res['SystemReservedMemory'] = $this->systemReservedMemory;
        }

        if (null !== $this->users) {
            if (\is_array($this->users)) {
                $res['Users'] = [];
                $n1 = 0;
                foreach ($this->users as $item1) {
                    $res['Users'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->workloadNum) {
            $res['WorkloadNum'] = $this->workloadNum;
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
        if (isset($map['AcceleratorType'])) {
            $model->acceleratorType = $map['AcceleratorType'];
        }

        if (isset($map['AllocatableCPU'])) {
            $model->allocatableCPU = $map['AllocatableCPU'];
        }

        if (isset($map['AllocatableMemory'])) {
            $model->allocatableMemory = $map['AllocatableMemory'];
        }

        if (isset($map['AncestorQuotaWorkloadNum'])) {
            $model->ancestorQuotaWorkloadNum = $map['AncestorQuotaWorkloadNum'];
        }

        if (isset($map['AvailabilityZone'])) {
            $model->availabilityZone = $map['AvailabilityZone'];
        }

        if (isset($map['BoundQuotas'])) {
            if (!empty($map['BoundQuotas'])) {
                $model->boundQuotas = [];
                $n1 = 0;
                foreach ($map['BoundQuotas'] as $item1) {
                    $model->boundQuotas[$n1] = QuotaIdName::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CPU'])) {
            $model->CPU = $map['CPU'];
        }

        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }

        if (isset($map['DescendantQuotaWorkloadNum'])) {
            $model->descendantQuotaWorkloadNum = $map['DescendantQuotaWorkloadNum'];
        }

        if (isset($map['DiskCapacity'])) {
            $model->diskCapacity = $map['DiskCapacity'];
        }

        if (isset($map['DiskPL'])) {
            $model->diskPL = $map['DiskPL'];
        }

        if (isset($map['GPU'])) {
            $model->GPU = $map['GPU'];
        }

        if (isset($map['GPUMemory'])) {
            $model->GPUMemory = $map['GPUMemory'];
        }

        if (isset($map['GPUType'])) {
            $model->GPUType = $map['GPUType'];
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtExpiredTime'])) {
            $model->gmtExpiredTime = $map['GmtExpiredTime'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }

        if (isset($map['HyperZone'])) {
            $model->hyperZone = $map['HyperZone'];
        }

        if (isset($map['IsBound'])) {
            $model->isBound = $map['IsBound'];
        }

        if (isset($map['LimitCPU'])) {
            $model->limitCPU = $map['LimitCPU'];
        }

        if (isset($map['LimitGPU'])) {
            $model->limitGPU = $map['LimitGPU'];
        }

        if (isset($map['LimitMemory'])) {
            $model->limitMemory = $map['LimitMemory'];
        }

        if (isset($map['MachineGroupId'])) {
            $model->machineGroupId = $map['MachineGroupId'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        if (isset($map['NodeStatus'])) {
            $model->nodeStatus = $map['NodeStatus'];
        }

        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }

        if (isset($map['OrderStatus'])) {
            $model->orderStatus = $map['OrderStatus'];
        }

        if (isset($map['PodNum'])) {
            $model->podNum = $map['PodNum'];
        }

        if (isset($map['ReasonCode'])) {
            $model->reasonCode = $map['ReasonCode'];
        }

        if (isset($map['ReasonMessage'])) {
            $model->reasonMessage = $map['ReasonMessage'];
        }

        if (isset($map['RequestCPU'])) {
            $model->requestCPU = $map['RequestCPU'];
        }

        if (isset($map['RequestGPU'])) {
            $model->requestGPU = $map['RequestGPU'];
        }

        if (isset($map['RequestMemory'])) {
            $model->requestMemory = $map['RequestMemory'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }

        if (isset($map['SelfQuotaWorkloadNum'])) {
            $model->selfQuotaWorkloadNum = $map['SelfQuotaWorkloadNum'];
        }

        if (isset($map['SubNodes'])) {
            if (!empty($map['SubNodes'])) {
                $model->subNodes = [];
                $n1 = 0;
                foreach ($map['SubNodes'] as $item1) {
                    $model->subNodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SystemReservedCPU'])) {
            $model->systemReservedCPU = $map['SystemReservedCPU'];
        }

        if (isset($map['SystemReservedMemory'])) {
            $model->systemReservedMemory = $map['SystemReservedMemory'];
        }

        if (isset($map['Users'])) {
            if (!empty($map['Users'])) {
                $model->users = [];
                $n1 = 0;
                foreach ($map['Users'] as $item1) {
                    $model->users[$n1] = UserInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['WorkloadNum'])) {
            $model->workloadNum = $map['WorkloadNum'];
        }

        return $model;
    }
}
