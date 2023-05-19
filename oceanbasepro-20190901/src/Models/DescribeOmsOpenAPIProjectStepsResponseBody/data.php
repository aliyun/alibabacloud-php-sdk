<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOmsOpenAPIProjectStepsResponseBody;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOmsOpenAPIProjectStepsResponseBody\data\extraInfo;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOmsOpenAPIProjectStepsResponseBody\data\stepInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The request ID.
     *
     * @example 2020-05-22T17:04:18
     *
     * @var int
     */
    public $estimatedRemainingSeconds;

    /**
     * @description A system error occurred.
     *
     * @var extraInfo
     */
    public $extraInfo;

    /**
     * @description $.parameters[3].schema.example
     *
     * @example 2020-05-22T17:05:18
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description $.parameters[5].schema.description
     *
     * @example false
     *
     * @var bool
     */
    public $interactive;

    /**
     * @description The error details.
     *
     * @example 2020-05-22T17:04:18
     *
     * @var string
     */
    public $startTime;

    /**
     * @description It is an Alibaba Cloud asset management and configuration tool, with which you can manage multiple Alibaba Cloud products and services by using commands. It is easy to use and a good helper in migration to cloud.
     *
     * @example Schema migration
     *
     * @var string
     */
    public $stepDescription;

    /**
     * @description The error related parameters.
     *
     * @var stepInfo
     */
    public $stepInfo;

    /**
     * @description Alibaba Cloud provides SDKs in different languages to help you quickly integrate Alibaba Cloud products and services by using APIs. We recommend that you use an SDK to call APIs. In this way, you do not need to sign for verification.
     *
     * @example structmigration
     *
     * @var string
     */
    public $stepName;

    /**
     * @description DescribeOmsOpenAPIProjectSteps
     *
     * @example 1
     *
     * @var int
     */
    public $stepOrder;

    /**
     * @description cn-hangzhou
     *
     * @example 10
     *
     * @var int
     */
    public $stepProgress;

    /**
     * @description Indicates whether the call is successful.
     *
     * @example INIT
     *
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
     * @return data
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
