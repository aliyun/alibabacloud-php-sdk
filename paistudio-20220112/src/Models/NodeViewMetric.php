<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class NodeViewMetric extends Model
{
    /**
     * @var string
     */
    public $CPUUsageRate;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $diskReadRate;

    /**
     * @var string
     */
    public $diskWriteRate;

    /**
     * @var string
     */
    public $GPUType;

    /**
     * @var string
     */
    public $machineGroupID;

    /**
     * @var string
     */
    public $memoryUsageRate;

    /**
     * @var string
     */
    public $networkInputRate;

    /**
     * @var string
     */
    public $networkOutputRate;

    /**
     * @example -i121212node
     *
     * @var string
     */
    public $nodeID;

    /**
     * @var string
     */
    public $nodeStatus;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var int
     */
    public $requestCPU;

    /**
     * @var int
     */
    public $requestGPU;

    /**
     * @var int
     */
    public $requestMemory;

    /**
     * @var mixed[]
     */
    public $taskIdMap;

    /**
     * @var int
     */
    public $totalCPU;

    /**
     * @var int
     */
    public $totalGPU;

    /**
     * @var int
     */
    public $totalMemory;

    /**
     * @var int
     */
    public $totalTasks;

    /**
     * @var string[]
     */
    public $userIDs;

    /**
     * @var string
     */
    public $userNumber;
    protected $_name = [
        'CPUUsageRate'      => 'CPUUsageRate',
        'createdTime'       => 'CreatedTime',
        'diskReadRate'      => 'DiskReadRate',
        'diskWriteRate'     => 'DiskWriteRate',
        'GPUType'           => 'GPUType',
        'machineGroupID'    => 'MachineGroupID',
        'memoryUsageRate'   => 'MemoryUsageRate',
        'networkInputRate'  => 'NetworkInputRate',
        'networkOutputRate' => 'NetworkOutputRate',
        'nodeID'            => 'NodeID',
        'nodeStatus'        => 'NodeStatus',
        'nodeType'          => 'NodeType',
        'requestCPU'        => 'RequestCPU',
        'requestGPU'        => 'RequestGPU',
        'requestMemory'     => 'RequestMemory',
        'taskIdMap'         => 'TaskIdMap',
        'totalCPU'          => 'TotalCPU',
        'totalGPU'          => 'TotalGPU',
        'totalMemory'       => 'TotalMemory',
        'totalTasks'        => 'TotalTasks',
        'userIDs'           => 'UserIDs',
        'userNumber'        => 'UserNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->CPUUsageRate) {
            $res['CPUUsageRate'] = $this->CPUUsageRate;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->diskReadRate) {
            $res['DiskReadRate'] = $this->diskReadRate;
        }
        if (null !== $this->diskWriteRate) {
            $res['DiskWriteRate'] = $this->diskWriteRate;
        }
        if (null !== $this->GPUType) {
            $res['GPUType'] = $this->GPUType;
        }
        if (null !== $this->machineGroupID) {
            $res['MachineGroupID'] = $this->machineGroupID;
        }
        if (null !== $this->memoryUsageRate) {
            $res['MemoryUsageRate'] = $this->memoryUsageRate;
        }
        if (null !== $this->networkInputRate) {
            $res['NetworkInputRate'] = $this->networkInputRate;
        }
        if (null !== $this->networkOutputRate) {
            $res['NetworkOutputRate'] = $this->networkOutputRate;
        }
        if (null !== $this->nodeID) {
            $res['NodeID'] = $this->nodeID;
        }
        if (null !== $this->nodeStatus) {
            $res['NodeStatus'] = $this->nodeStatus;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
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
        if (null !== $this->taskIdMap) {
            $res['TaskIdMap'] = $this->taskIdMap;
        }
        if (null !== $this->totalCPU) {
            $res['TotalCPU'] = $this->totalCPU;
        }
        if (null !== $this->totalGPU) {
            $res['TotalGPU'] = $this->totalGPU;
        }
        if (null !== $this->totalMemory) {
            $res['TotalMemory'] = $this->totalMemory;
        }
        if (null !== $this->totalTasks) {
            $res['TotalTasks'] = $this->totalTasks;
        }
        if (null !== $this->userIDs) {
            $res['UserIDs'] = $this->userIDs;
        }
        if (null !== $this->userNumber) {
            $res['UserNumber'] = $this->userNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return NodeViewMetric
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CPUUsageRate'])) {
            $model->CPUUsageRate = $map['CPUUsageRate'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['DiskReadRate'])) {
            $model->diskReadRate = $map['DiskReadRate'];
        }
        if (isset($map['DiskWriteRate'])) {
            $model->diskWriteRate = $map['DiskWriteRate'];
        }
        if (isset($map['GPUType'])) {
            $model->GPUType = $map['GPUType'];
        }
        if (isset($map['MachineGroupID'])) {
            $model->machineGroupID = $map['MachineGroupID'];
        }
        if (isset($map['MemoryUsageRate'])) {
            $model->memoryUsageRate = $map['MemoryUsageRate'];
        }
        if (isset($map['NetworkInputRate'])) {
            $model->networkInputRate = $map['NetworkInputRate'];
        }
        if (isset($map['NetworkOutputRate'])) {
            $model->networkOutputRate = $map['NetworkOutputRate'];
        }
        if (isset($map['NodeID'])) {
            $model->nodeID = $map['NodeID'];
        }
        if (isset($map['NodeStatus'])) {
            $model->nodeStatus = $map['NodeStatus'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
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
        if (isset($map['TaskIdMap'])) {
            $model->taskIdMap = $map['TaskIdMap'];
        }
        if (isset($map['TotalCPU'])) {
            $model->totalCPU = $map['TotalCPU'];
        }
        if (isset($map['TotalGPU'])) {
            $model->totalGPU = $map['TotalGPU'];
        }
        if (isset($map['TotalMemory'])) {
            $model->totalMemory = $map['TotalMemory'];
        }
        if (isset($map['TotalTasks'])) {
            $model->totalTasks = $map['TotalTasks'];
        }
        if (isset($map['UserIDs'])) {
            if (!empty($map['UserIDs'])) {
                $model->userIDs = $map['UserIDs'];
            }
        }
        if (isset($map['UserNumber'])) {
            $model->userNumber = $map['UserNumber'];
        }

        return $model;
    }
}
