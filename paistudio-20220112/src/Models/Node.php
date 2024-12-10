<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class Node extends Model
{
    /**
     * @var string
     */
    public $acceleratorType;

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
     * @var UserInfo[]
     */
    public $users;

    /**
     * @var int
     */
    public $workloadNum;
    protected $_name = [
        'acceleratorType'   => 'AcceleratorType',
        'boundQuotas'       => 'BoundQuotas',
        'CPU'               => 'CPU',
        'creatorId'         => 'CreatorId',
        'GPU'               => 'GPU',
        'GPUMemory'         => 'GPUMemory',
        'GPUType'           => 'GPUType',
        'gmtCreateTime'     => 'GmtCreateTime',
        'gmtExpiredTime'    => 'GmtExpiredTime',
        'gmtModifiedTime'   => 'GmtModifiedTime',
        'isBound'           => 'IsBound',
        'limitCPU'          => 'LimitCPU',
        'limitGPU'          => 'LimitGPU',
        'limitMemory'       => 'LimitMemory',
        'machineGroupId'    => 'MachineGroupId',
        'memory'            => 'Memory',
        'nodeName'          => 'NodeName',
        'nodeStatus'        => 'NodeStatus',
        'nodeType'          => 'NodeType',
        'orderStatus'       => 'OrderStatus',
        'podNum'            => 'PodNum',
        'reasonCode'        => 'ReasonCode',
        'reasonMessage'     => 'ReasonMessage',
        'requestCPU'        => 'RequestCPU',
        'requestGPU'        => 'RequestGPU',
        'requestMemory'     => 'RequestMemory',
        'resourceGroupId'   => 'ResourceGroupId',
        'resourceGroupName' => 'ResourceGroupName',
        'users'             => 'Users',
        'workloadNum'       => 'WorkloadNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceleratorType) {
            $res['AcceleratorType'] = $this->acceleratorType;
        }
        if (null !== $this->boundQuotas) {
            $res['BoundQuotas'] = [];
            if (null !== $this->boundQuotas && \is_array($this->boundQuotas)) {
                $n = 0;
                foreach ($this->boundQuotas as $item) {
                    $res['BoundQuotas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->CPU) {
            $res['CPU'] = $this->CPU;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
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
        if (null !== $this->users) {
            $res['Users'] = [];
            if (null !== $this->users && \is_array($this->users)) {
                $n = 0;
                foreach ($this->users as $item) {
                    $res['Users'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->workloadNum) {
            $res['WorkloadNum'] = $this->workloadNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Node
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorType'])) {
            $model->acceleratorType = $map['AcceleratorType'];
        }
        if (isset($map['BoundQuotas'])) {
            if (!empty($map['BoundQuotas'])) {
                $model->boundQuotas = [];
                $n                  = 0;
                foreach ($map['BoundQuotas'] as $item) {
                    $model->boundQuotas[$n++] = null !== $item ? QuotaIdName::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CPU'])) {
            $model->CPU = $map['CPU'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
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
        if (isset($map['Users'])) {
            if (!empty($map['Users'])) {
                $model->users = [];
                $n            = 0;
                foreach ($map['Users'] as $item) {
                    $model->users[$n++] = null !== $item ? UserInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['WorkloadNum'])) {
            $model->workloadNum = $map['WorkloadNum'];
        }

        return $model;
    }
}
