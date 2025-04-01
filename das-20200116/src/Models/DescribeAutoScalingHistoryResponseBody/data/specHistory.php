<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeAutoScalingHistoryResponseBody\data;

use AlibabaCloud\Dara\Model;

class specHistory extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var int
     */
    public $originCore;

    /**
     * @var string
     */
    public $originInstanceClass;

    /**
     * @var float
     */
    public $originMemory;

    /**
     * @var string
     */
    public $scaleType;

    /**
     * @var int
     */
    public $targetCore;

    /**
     * @var string
     */
    public $targetInstanceClass;

    /**
     * @var float
     */
    public $targetMemory;

    /**
     * @var bool
     */
    public $taskExcuteStatus;

    /**
     * @var int
     */
    public $taskTime;
    protected $_name = [
        'errorCode' => 'ErrorCode',
        'originCore' => 'OriginCore',
        'originInstanceClass' => 'OriginInstanceClass',
        'originMemory' => 'OriginMemory',
        'scaleType' => 'ScaleType',
        'targetCore' => 'TargetCore',
        'targetInstanceClass' => 'TargetInstanceClass',
        'targetMemory' => 'TargetMemory',
        'taskExcuteStatus' => 'TaskExcuteStatus',
        'taskTime' => 'TaskTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->originCore) {
            $res['OriginCore'] = $this->originCore;
        }

        if (null !== $this->originInstanceClass) {
            $res['OriginInstanceClass'] = $this->originInstanceClass;
        }

        if (null !== $this->originMemory) {
            $res['OriginMemory'] = $this->originMemory;
        }

        if (null !== $this->scaleType) {
            $res['ScaleType'] = $this->scaleType;
        }

        if (null !== $this->targetCore) {
            $res['TargetCore'] = $this->targetCore;
        }

        if (null !== $this->targetInstanceClass) {
            $res['TargetInstanceClass'] = $this->targetInstanceClass;
        }

        if (null !== $this->targetMemory) {
            $res['TargetMemory'] = $this->targetMemory;
        }

        if (null !== $this->taskExcuteStatus) {
            $res['TaskExcuteStatus'] = $this->taskExcuteStatus;
        }

        if (null !== $this->taskTime) {
            $res['TaskTime'] = $this->taskTime;
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
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['OriginCore'])) {
            $model->originCore = $map['OriginCore'];
        }

        if (isset($map['OriginInstanceClass'])) {
            $model->originInstanceClass = $map['OriginInstanceClass'];
        }

        if (isset($map['OriginMemory'])) {
            $model->originMemory = $map['OriginMemory'];
        }

        if (isset($map['ScaleType'])) {
            $model->scaleType = $map['ScaleType'];
        }

        if (isset($map['TargetCore'])) {
            $model->targetCore = $map['TargetCore'];
        }

        if (isset($map['TargetInstanceClass'])) {
            $model->targetInstanceClass = $map['TargetInstanceClass'];
        }

        if (isset($map['TargetMemory'])) {
            $model->targetMemory = $map['TargetMemory'];
        }

        if (isset($map['TaskExcuteStatus'])) {
            $model->taskExcuteStatus = $map['TaskExcuteStatus'];
        }

        if (isset($map['TaskTime'])) {
            $model->taskTime = $map['TaskTime'];
        }

        return $model;
    }
}
