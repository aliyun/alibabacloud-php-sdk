<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeUpgradeMajorVersionTasksResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $targetMajorVersion;

    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $sourceMajorVersion;

    /**
     * @var string
     */
    public $upgradeMode;

    /**
     * @var string
     */
    public $collectStatMode;

    /**
     * @var int
     */
    public $sourceInsName;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var int
     */
    public $targetInsName;

    /**
     * @var string
     */
    public $switchTime;

    /**
     * @var string
     */
    public $detail;
    protected $_name = [
        'targetMajorVersion' => 'TargetMajorVersion',
        'result'             => 'Result',
        'endTime'            => 'EndTime',
        'startTime'          => 'StartTime',
        'sourceMajorVersion' => 'SourceMajorVersion',
        'upgradeMode'        => 'UpgradeMode',
        'collectStatMode'    => 'CollectStatMode',
        'sourceInsName'      => 'SourceInsName',
        'taskId'             => 'TaskId',
        'targetInsName'      => 'TargetInsName',
        'switchTime'         => 'SwitchTime',
        'detail'             => 'Detail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetMajorVersion) {
            $res['TargetMajorVersion'] = $this->targetMajorVersion;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->sourceMajorVersion) {
            $res['SourceMajorVersion'] = $this->sourceMajorVersion;
        }
        if (null !== $this->upgradeMode) {
            $res['UpgradeMode'] = $this->upgradeMode;
        }
        if (null !== $this->collectStatMode) {
            $res['CollectStatMode'] = $this->collectStatMode;
        }
        if (null !== $this->sourceInsName) {
            $res['SourceInsName'] = $this->sourceInsName;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->targetInsName) {
            $res['TargetInsName'] = $this->targetInsName;
        }
        if (null !== $this->switchTime) {
            $res['SwitchTime'] = $this->switchTime;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TargetMajorVersion'])) {
            $model->targetMajorVersion = $map['TargetMajorVersion'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['SourceMajorVersion'])) {
            $model->sourceMajorVersion = $map['SourceMajorVersion'];
        }
        if (isset($map['UpgradeMode'])) {
            $model->upgradeMode = $map['UpgradeMode'];
        }
        if (isset($map['CollectStatMode'])) {
            $model->collectStatMode = $map['CollectStatMode'];
        }
        if (isset($map['SourceInsName'])) {
            $model->sourceInsName = $map['SourceInsName'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TargetInsName'])) {
            $model->targetInsName = $map['TargetInsName'];
        }
        if (isset($map['SwitchTime'])) {
            $model->switchTime = $map['SwitchTime'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }

        return $model;
    }
}
