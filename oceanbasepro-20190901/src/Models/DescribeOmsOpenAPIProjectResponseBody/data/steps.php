<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOmsOpenAPIProjectResponseBody\data;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOmsOpenAPIProjectResponseBody\data\steps\extraInfo;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOmsOpenAPIProjectResponseBody\data\steps\stepInfo;
use AlibabaCloud\Tea\Model;

class steps extends Model
{
    /**
     * @var int
     */
    public $estimatedRemainingSeconds;

    /**
     * @var extraInfo
     */
    public $extraInfo;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var bool
     */
    public $interactive;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $stepDescription;

    /**
     * @var stepInfo
     */
    public $stepInfo;

    /**
     * @var string
     */
    public $stepName;

    /**
     * @var int
     */
    public $stepOrder;

    /**
     * @var int
     */
    public $stepProgress;

    /**
     * @var string
     */
    public $stepStatus;
    protected $_name = [
        'estimatedRemainingSeconds' => 'EstimatedRemainingSeconds',
        'extraInfo'                 => 'ExtraInfo',
        'finishTime'                => 'FinishTime',
        'interactive'               => 'Interactive',
        'startTime'                 => 'StartTime',
        'stepDescription'           => 'StepDescription',
        'stepInfo'                  => 'StepInfo',
        'stepName'                  => 'StepName',
        'stepOrder'                 => 'StepOrder',
        'stepProgress'              => 'StepProgress',
        'stepStatus'                => 'StepStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->estimatedRemainingSeconds) {
            $res['EstimatedRemainingSeconds'] = $this->estimatedRemainingSeconds;
        }
        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = null !== $this->extraInfo ? $this->extraInfo->toMap() : null;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->interactive) {
            $res['Interactive'] = $this->interactive;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->stepDescription) {
            $res['StepDescription'] = $this->stepDescription;
        }
        if (null !== $this->stepInfo) {
            $res['StepInfo'] = null !== $this->stepInfo ? $this->stepInfo->toMap() : null;
        }
        if (null !== $this->stepName) {
            $res['StepName'] = $this->stepName;
        }
        if (null !== $this->stepOrder) {
            $res['StepOrder'] = $this->stepOrder;
        }
        if (null !== $this->stepProgress) {
            $res['StepProgress'] = $this->stepProgress;
        }
        if (null !== $this->stepStatus) {
            $res['StepStatus'] = $this->stepStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return steps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EstimatedRemainingSeconds'])) {
            $model->estimatedRemainingSeconds = $map['EstimatedRemainingSeconds'];
        }
        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = extraInfo::fromMap($map['ExtraInfo']);
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['Interactive'])) {
            $model->interactive = $map['Interactive'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StepDescription'])) {
            $model->stepDescription = $map['StepDescription'];
        }
        if (isset($map['StepInfo'])) {
            $model->stepInfo = stepInfo::fromMap($map['StepInfo']);
        }
        if (isset($map['StepName'])) {
            $model->stepName = $map['StepName'];
        }
        if (isset($map['StepOrder'])) {
            $model->stepOrder = $map['StepOrder'];
        }
        if (isset($map['StepProgress'])) {
            $model->stepProgress = $map['StepProgress'];
        }
        if (isset($map['StepStatus'])) {
            $model->stepStatus = $map['StepStatus'];
        }

        return $model;
    }
}
