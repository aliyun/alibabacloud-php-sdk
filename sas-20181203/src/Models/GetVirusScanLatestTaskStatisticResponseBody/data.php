<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetVirusScanLatestTaskStatisticResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $completeMachine;
    /**
     * @var string
     */
    public $machineName;
    /**
     * @var string
     */
    public $progress;
    /**
     * @var string
     */
    public $riskLevel;
    /**
     * @var int
     */
    public $safeMachine;
    /**
     * @var int
     */
    public $scanMachine;
    /**
     * @var string[]
     */
    public $scanPath;
    /**
     * @var int
     */
    public $scanTime;
    /**
     * @var string
     */
    public $scanType;
    /**
     * @var int
     */
    public $status;
    /**
     * @var int
     */
    public $suspiciousCount;
    /**
     * @var int
     */
    public $suspiciousMachine;
    /**
     * @var string
     */
    public $taskId;
    /**
     * @var int
     */
    public $unCompleteMachine;
    protected $_name = [
        'completeMachine'   => 'CompleteMachine',
        'machineName'       => 'MachineName',
        'progress'          => 'Progress',
        'riskLevel'         => 'RiskLevel',
        'safeMachine'       => 'SafeMachine',
        'scanMachine'       => 'ScanMachine',
        'scanPath'          => 'ScanPath',
        'scanTime'          => 'ScanTime',
        'scanType'          => 'ScanType',
        'status'            => 'Status',
        'suspiciousCount'   => 'SuspiciousCount',
        'suspiciousMachine' => 'SuspiciousMachine',
        'taskId'            => 'TaskId',
        'unCompleteMachine' => 'UnCompleteMachine',
    ];

    public function validate()
    {
        if (\is_array($this->scanPath)) {
            Model::validateArray($this->scanPath);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->completeMachine) {
            $res['CompleteMachine'] = $this->completeMachine;
        }

        if (null !== $this->machineName) {
            $res['MachineName'] = $this->machineName;
        }

        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->safeMachine) {
            $res['SafeMachine'] = $this->safeMachine;
        }

        if (null !== $this->scanMachine) {
            $res['ScanMachine'] = $this->scanMachine;
        }

        if (null !== $this->scanPath) {
            if (\is_array($this->scanPath)) {
                $res['ScanPath'] = [];
                $n1              = 0;
                foreach ($this->scanPath as $item1) {
                    $res['ScanPath'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->scanTime) {
            $res['ScanTime'] = $this->scanTime;
        }

        if (null !== $this->scanType) {
            $res['ScanType'] = $this->scanType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->suspiciousCount) {
            $res['SuspiciousCount'] = $this->suspiciousCount;
        }

        if (null !== $this->suspiciousMachine) {
            $res['SuspiciousMachine'] = $this->suspiciousMachine;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->unCompleteMachine) {
            $res['UnCompleteMachine'] = $this->unCompleteMachine;
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
        if (isset($map['CompleteMachine'])) {
            $model->completeMachine = $map['CompleteMachine'];
        }

        if (isset($map['MachineName'])) {
            $model->machineName = $map['MachineName'];
        }

        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['SafeMachine'])) {
            $model->safeMachine = $map['SafeMachine'];
        }

        if (isset($map['ScanMachine'])) {
            $model->scanMachine = $map['ScanMachine'];
        }

        if (isset($map['ScanPath'])) {
            if (!empty($map['ScanPath'])) {
                $model->scanPath = [];
                $n1              = 0;
                foreach ($map['ScanPath'] as $item1) {
                    $model->scanPath[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ScanTime'])) {
            $model->scanTime = $map['ScanTime'];
        }

        if (isset($map['ScanType'])) {
            $model->scanType = $map['ScanType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SuspiciousCount'])) {
            $model->suspiciousCount = $map['SuspiciousCount'];
        }

        if (isset($map['SuspiciousMachine'])) {
            $model->suspiciousMachine = $map['SuspiciousMachine'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['UnCompleteMachine'])) {
            $model->unCompleteMachine = $map['UnCompleteMachine'];
        }

        return $model;
    }
}
