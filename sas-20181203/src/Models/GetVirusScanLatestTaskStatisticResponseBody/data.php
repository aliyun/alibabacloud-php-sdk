<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetVirusScanLatestTaskStatisticResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The number of machines on which the virus scan task is complete.
     *
     * @example 2
     *
     * @var int
     */
    public $completeMachine;

    /**
     * @description The name of the machine.
     *
     * @example testMahine1
     *
     * @var string
     */
    public $machineName;

    /**
     * @description The progress of the virus scan task in percentage.
     *
     * @example 92
     *
     * @var string
     */
    public $progress;

    /**
     * @description The highest risk level of the detected alerts. Valid values:
     *
     *   **high**
     *   **medium**
     *   **low**
     *
     * @example medium
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @description The number of safe machines that are detected.
     *
     * @example 1
     *
     * @var int
     */
    public $safeMachine;

    /**
     * @description The number of machines that are scanned.
     *
     * @example 3
     *
     * @var int
     */
    public $scanMachine;

    /**
     * @description The paths of files that were scanned. This value is returned only when ScanType is set to user.
     *
     * @var string[]
     */
    public $scanPath;

    /**
     * @description The timestamp generated when the virus scan task was performed. Unit: milliseconds.
     *
     * @example 1681145862000
     *
     * @var int
     */
    public $scanTime;

    /**
     * @description The type of the virus scan. Valid values:
     *
     *   **system**: automatic scan.
     *   **user**: custom scan.
     *
     * @example system
     *
     * @var string
     */
    public $scanType;

    /**
     * @description The status of the virus scan task.
     *
     **Valid values for a main task**:
     *
     *   **0**: The main task is to be started.
     *   **10**: The main task is running.
     *   **100**: The main task is complete.
     *
     **Valid values for a subtask**:
     *
     *   **0**: The subtask is to be started.
     *   **20**: The scan script is sent.
     *   **50**: The subtask is running.
     *   **100**: The subtask is complete.
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description The number of alerts that are detected.
     *
     * @example 2
     *
     * @var int
     */
    public $suspiciousCount;

    /**
     * @description The number of suspicious machines that are detected.
     *
     * @example 2
     *
     * @var int
     */
    public $suspiciousMachine;

    /**
     * @description The ID of the virus scan task.
     *
     * @example fc98d58eb56f699d49bf7ebbd6d7****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The number of machines on which the virus scan task was not complete or failed.
     *
     * @example 1
     *
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
    }

    public function toMap()
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
            $res['ScanPath'] = $this->scanPath;
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

    /**
     * @param array $map
     *
     * @return data
     */
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
                $model->scanPath = $map['ScanPath'];
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
