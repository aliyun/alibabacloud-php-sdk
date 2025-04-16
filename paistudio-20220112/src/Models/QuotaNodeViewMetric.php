<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class QuotaNodeViewMetric extends Model
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
     * @var string
     */
    public $quotaId;

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
        'CPUUsageRate' => 'CPUUsageRate',
        'createdTime' => 'CreatedTime',
        'diskReadRate' => 'DiskReadRate',
        'diskWriteRate' => 'DiskWriteRate',
        'GPUType' => 'GPUType',
        'memoryUsageRate' => 'MemoryUsageRate',
        'networkInputRate' => 'NetworkInputRate',
        'networkOutputRate' => 'NetworkOutputRate',
        'nodeID' => 'NodeID',
        'nodeStatus' => 'NodeStatus',
        'nodeType' => 'NodeType',
        'quotaId' => 'QuotaId',
        'requestCPU' => 'RequestCPU',
        'requestGPU' => 'RequestGPU',
        'requestMemory' => 'RequestMemory',
        'taskIdMap' => 'TaskIdMap',
        'totalCPU' => 'TotalCPU',
        'totalGPU' => 'TotalGPU',
        'totalMemory' => 'TotalMemory',
        'totalTasks' => 'TotalTasks',
        'userIDs' => 'UserIDs',
        'userNumber' => 'UserNumber',
    ];

    public function validate()
    {
        if (\is_array($this->taskIdMap)) {
            Model::validateArray($this->taskIdMap);
        }
        if (\is_array($this->userIDs)) {
            Model::validateArray($this->userIDs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->quotaId) {
            $res['QuotaId'] = $this->quotaId;
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
            if (\is_array($this->taskIdMap)) {
                $res['TaskIdMap'] = [];
                foreach ($this->taskIdMap as $key1 => $value1) {
                    $res['TaskIdMap'][$key1] = $value1;
                }
            }
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
            if (\is_array($this->userIDs)) {
                $res['UserIDs'] = [];
                $n1 = 0;
                foreach ($this->userIDs as $item1) {
                    $res['UserIDs'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->userNumber) {
            $res['UserNumber'] = $this->userNumber;
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

        if (isset($map['QuotaId'])) {
            $model->quotaId = $map['QuotaId'];
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
            if (!empty($map['TaskIdMap'])) {
                $model->taskIdMap = [];
                foreach ($map['TaskIdMap'] as $key1 => $value1) {
                    $model->taskIdMap[$key1] = $value1;
                }
            }
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
                $model->userIDs = [];
                $n1 = 0;
                foreach ($map['UserIDs'] as $item1) {
                    $model->userIDs[$n1++] = $item1;
                }
            }
        }

        if (isset($map['UserNumber'])) {
            $model->userNumber = $map['UserNumber'];
        }

        return $model;
    }
}
