<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAIDBClusterTaskAttributeResponseBody;

use AlibabaCloud\Dara\Model;

class taskInfo extends Model
{
    /**
     * @var string
     */
    public $completedTime;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $modelPath;

    /**
     * @var string
     */
    public $modelSource;

    /**
     * @var string
     */
    public $runningTimes;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $trainMode;

    /**
     * @var string
     */
    public $trainType;
    protected $_name = [
        'completedTime' => 'CompletedTime',
        'modelName' => 'ModelName',
        'modelPath' => 'ModelPath',
        'modelSource' => 'ModelSource',
        'runningTimes' => 'RunningTimes',
        'startTime' => 'StartTime',
        'trainMode' => 'TrainMode',
        'trainType' => 'TrainType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->completedTime) {
            $res['CompletedTime'] = $this->completedTime;
        }

        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }

        if (null !== $this->modelPath) {
            $res['ModelPath'] = $this->modelPath;
        }

        if (null !== $this->modelSource) {
            $res['ModelSource'] = $this->modelSource;
        }

        if (null !== $this->runningTimes) {
            $res['RunningTimes'] = $this->runningTimes;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->trainMode) {
            $res['TrainMode'] = $this->trainMode;
        }

        if (null !== $this->trainType) {
            $res['TrainType'] = $this->trainType;
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
        if (isset($map['CompletedTime'])) {
            $model->completedTime = $map['CompletedTime'];
        }

        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }

        if (isset($map['ModelPath'])) {
            $model->modelPath = $map['ModelPath'];
        }

        if (isset($map['ModelSource'])) {
            $model->modelSource = $map['ModelSource'];
        }

        if (isset($map['RunningTimes'])) {
            $model->runningTimes = $map['RunningTimes'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TrainMode'])) {
            $model->trainMode = $map['TrainMode'];
        }

        if (isset($map['TrainType'])) {
            $model->trainType = $map['TrainType'];
        }

        return $model;
    }
}
