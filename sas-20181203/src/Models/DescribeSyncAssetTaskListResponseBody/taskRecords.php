<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSyncAssetTaskListResponseBody;

use AlibabaCloud\Dara\Model;

class taskRecords extends Model
{
    /**
     * @var int
     */
    public $assetCount;

    /**
     * @var string
     */
    public $ipSegments;

    /**
     * @var int
     */
    public $processRate;

    /**
     * @var string
     */
    public $rootTaskId;

    /**
     * @var int
     */
    public $taskEndTime;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var int
     */
    public $taskStartTime;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'assetCount' => 'AssetCount',
        'ipSegments' => 'IpSegments',
        'processRate' => 'ProcessRate',
        'rootTaskId' => 'RootTaskId',
        'taskEndTime' => 'TaskEndTime',
        'taskName' => 'TaskName',
        'taskStartTime' => 'TaskStartTime',
        'taskStatus' => 'TaskStatus',
        'taskType' => 'TaskType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetCount) {
            $res['AssetCount'] = $this->assetCount;
        }

        if (null !== $this->ipSegments) {
            $res['IpSegments'] = $this->ipSegments;
        }

        if (null !== $this->processRate) {
            $res['ProcessRate'] = $this->processRate;
        }

        if (null !== $this->rootTaskId) {
            $res['RootTaskId'] = $this->rootTaskId;
        }

        if (null !== $this->taskEndTime) {
            $res['TaskEndTime'] = $this->taskEndTime;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        if (null !== $this->taskStartTime) {
            $res['TaskStartTime'] = $this->taskStartTime;
        }

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
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
        if (isset($map['AssetCount'])) {
            $model->assetCount = $map['AssetCount'];
        }

        if (isset($map['IpSegments'])) {
            $model->ipSegments = $map['IpSegments'];
        }

        if (isset($map['ProcessRate'])) {
            $model->processRate = $map['ProcessRate'];
        }

        if (isset($map['RootTaskId'])) {
            $model->rootTaskId = $map['RootTaskId'];
        }

        if (isset($map['TaskEndTime'])) {
            $model->taskEndTime = $map['TaskEndTime'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        if (isset($map['TaskStartTime'])) {
            $model->taskStartTime = $map['TaskStartTime'];
        }

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
