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
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceGroupName;
    protected $_name = [
        'acceleratorType'   => 'AcceleratorType',
        'boundQuotas'       => 'BoundQuotas',
        'CPU'               => 'CPU',
        'creatorId'         => 'CreatorId',
        'GPU'               => 'GPU',
        'GPUType'           => 'GPUType',
        'gmtCreateTime'     => 'GmtCreateTime',
        'gmtExpiredTime'    => 'GmtExpiredTime',
        'gmtModifiedTime'   => 'GmtModifiedTime',
        'isBound'           => 'IsBound',
        'machineGroupId'    => 'MachineGroupId',
        'memory'            => 'Memory',
        'nodeName'          => 'NodeName',
        'nodeStatus'        => 'NodeStatus',
        'nodeType'          => 'NodeType',
        'orderStatus'       => 'OrderStatus',
        'reasonCode'        => 'ReasonCode',
        'reasonMessage'     => 'ReasonMessage',
        'resourceGroupId'   => 'ResourceGroupId',
        'resourceGroupName' => 'ResourceGroupName',
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
        if (null !== $this->reasonCode) {
            $res['ReasonCode'] = $this->reasonCode;
        }
        if (null !== $this->reasonMessage) {
            $res['ReasonMessage'] = $this->reasonMessage;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
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
        if (isset($map['ReasonCode'])) {
            $model->reasonCode = $map['ReasonCode'];
        }
        if (isset($map['ReasonMessage'])) {
            $model->reasonMessage = $map['ReasonMessage'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }

        return $model;
    }
}
