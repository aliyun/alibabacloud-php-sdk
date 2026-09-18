<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AISC\V20260101\Models\ListScanTasksByTargetResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $executeCaseCount;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var int
     */
    public $sampleLevel;

    /**
     * @var string
     */
    public $scanType;

    /**
     * @var string
     */
    public $scannerTaskId;

    /**
     * @var string
     */
    public $scannerTaskMessage;

    /**
     * @var string
     */
    public $scannerTaskStatus;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var int
     */
    public $totalCaseCount;
    protected $_name = [
        'createTime' => 'CreateTime',
        'endTime' => 'EndTime',
        'executeCaseCount' => 'ExecuteCaseCount',
        'riskLevel' => 'RiskLevel',
        'sampleLevel' => 'SampleLevel',
        'scanType' => 'ScanType',
        'scannerTaskId' => 'ScannerTaskId',
        'scannerTaskMessage' => 'ScannerTaskMessage',
        'scannerTaskStatus' => 'ScannerTaskStatus',
        'startTime' => 'StartTime',
        'taskName' => 'TaskName',
        'totalCaseCount' => 'TotalCaseCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->executeCaseCount) {
            $res['ExecuteCaseCount'] = $this->executeCaseCount;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->sampleLevel) {
            $res['SampleLevel'] = $this->sampleLevel;
        }

        if (null !== $this->scanType) {
            $res['ScanType'] = $this->scanType;
        }

        if (null !== $this->scannerTaskId) {
            $res['ScannerTaskId'] = $this->scannerTaskId;
        }

        if (null !== $this->scannerTaskMessage) {
            $res['ScannerTaskMessage'] = $this->scannerTaskMessage;
        }

        if (null !== $this->scannerTaskStatus) {
            $res['ScannerTaskStatus'] = $this->scannerTaskStatus;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        if (null !== $this->totalCaseCount) {
            $res['TotalCaseCount'] = $this->totalCaseCount;
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

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['ExecuteCaseCount'])) {
            $model->executeCaseCount = $map['ExecuteCaseCount'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['SampleLevel'])) {
            $model->sampleLevel = $map['SampleLevel'];
        }

        if (isset($map['ScanType'])) {
            $model->scanType = $map['ScanType'];
        }

        if (isset($map['ScannerTaskId'])) {
            $model->scannerTaskId = $map['ScannerTaskId'];
        }

        if (isset($map['ScannerTaskMessage'])) {
            $model->scannerTaskMessage = $map['ScannerTaskMessage'];
        }

        if (isset($map['ScannerTaskStatus'])) {
            $model->scannerTaskStatus = $map['ScannerTaskStatus'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        if (isset($map['TotalCaseCount'])) {
            $model->totalCaseCount = $map['TotalCaseCount'];
        }

        return $model;
    }
}
