<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeUpgradeMajorVersionTasksResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $collectStatMode;

    /**
     * @var string
     */
    public $detail;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $sourceInsName;

    /**
     * @var string
     */
    public $sourceMajorVersion;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $switchEndTime;

    /**
     * @var string
     */
    public $switchTime;

    /**
     * @var string
     */
    public $targetInsName;

    /**
     * @var string
     */
    public $targetMajorVersion;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $upgradeMode;

    /**
     * @var bool
     */
    public $cutOver;

    /**
     * @var int
     */
    public $totalLogicRepDelayTime;

    /**
     * @var int
     */
    public $totalLogicRepLatencyMB;

    /**
     * @var string
     */
    public $zeroDownTimeConnectionString;

    /**
     * @var int
     */
    public $zeroDownTimePort;
    protected $_name = [
        'collectStatMode' => 'CollectStatMode',
        'detail' => 'Detail',
        'endTime' => 'EndTime',
        'result' => 'Result',
        'sourceInsName' => 'SourceInsName',
        'sourceMajorVersion' => 'SourceMajorVersion',
        'startTime' => 'StartTime',
        'switchEndTime' => 'SwitchEndTime',
        'switchTime' => 'SwitchTime',
        'targetInsName' => 'TargetInsName',
        'targetMajorVersion' => 'TargetMajorVersion',
        'taskId' => 'TaskId',
        'upgradeMode' => 'UpgradeMode',
        'cutOver' => 'cutOver',
        'totalLogicRepDelayTime' => 'totalLogicRepDelayTime',
        'totalLogicRepLatencyMB' => 'totalLogicRepLatencyMB',
        'zeroDownTimeConnectionString' => 'zeroDownTimeConnectionString',
        'zeroDownTimePort' => 'zeroDownTimePort',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->collectStatMode) {
            $res['CollectStatMode'] = $this->collectStatMode;
        }

        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        if (null !== $this->sourceInsName) {
            $res['SourceInsName'] = $this->sourceInsName;
        }

        if (null !== $this->sourceMajorVersion) {
            $res['SourceMajorVersion'] = $this->sourceMajorVersion;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->switchEndTime) {
            $res['SwitchEndTime'] = $this->switchEndTime;
        }

        if (null !== $this->switchTime) {
            $res['SwitchTime'] = $this->switchTime;
        }

        if (null !== $this->targetInsName) {
            $res['TargetInsName'] = $this->targetInsName;
        }

        if (null !== $this->targetMajorVersion) {
            $res['TargetMajorVersion'] = $this->targetMajorVersion;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->upgradeMode) {
            $res['UpgradeMode'] = $this->upgradeMode;
        }

        if (null !== $this->cutOver) {
            $res['cutOver'] = $this->cutOver;
        }

        if (null !== $this->totalLogicRepDelayTime) {
            $res['totalLogicRepDelayTime'] = $this->totalLogicRepDelayTime;
        }

        if (null !== $this->totalLogicRepLatencyMB) {
            $res['totalLogicRepLatencyMB'] = $this->totalLogicRepLatencyMB;
        }

        if (null !== $this->zeroDownTimeConnectionString) {
            $res['zeroDownTimeConnectionString'] = $this->zeroDownTimeConnectionString;
        }

        if (null !== $this->zeroDownTimePort) {
            $res['zeroDownTimePort'] = $this->zeroDownTimePort;
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
        if (isset($map['CollectStatMode'])) {
            $model->collectStatMode = $map['CollectStatMode'];
        }

        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        if (isset($map['SourceInsName'])) {
            $model->sourceInsName = $map['SourceInsName'];
        }

        if (isset($map['SourceMajorVersion'])) {
            $model->sourceMajorVersion = $map['SourceMajorVersion'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['SwitchEndTime'])) {
            $model->switchEndTime = $map['SwitchEndTime'];
        }

        if (isset($map['SwitchTime'])) {
            $model->switchTime = $map['SwitchTime'];
        }

        if (isset($map['TargetInsName'])) {
            $model->targetInsName = $map['TargetInsName'];
        }

        if (isset($map['TargetMajorVersion'])) {
            $model->targetMajorVersion = $map['TargetMajorVersion'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['UpgradeMode'])) {
            $model->upgradeMode = $map['UpgradeMode'];
        }

        if (isset($map['cutOver'])) {
            $model->cutOver = $map['cutOver'];
        }

        if (isset($map['totalLogicRepDelayTime'])) {
            $model->totalLogicRepDelayTime = $map['totalLogicRepDelayTime'];
        }

        if (isset($map['totalLogicRepLatencyMB'])) {
            $model->totalLogicRepLatencyMB = $map['totalLogicRepLatencyMB'];
        }

        if (isset($map['zeroDownTimeConnectionString'])) {
            $model->zeroDownTimeConnectionString = $map['zeroDownTimeConnectionString'];
        }

        if (isset($map['zeroDownTimePort'])) {
            $model->zeroDownTimePort = $map['zeroDownTimePort'];
        }

        return $model;
    }
}
