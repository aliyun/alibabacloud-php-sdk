<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\SDK\Cr\V20181201\Models\GetArtifactBuildTaskResponseBody\sourceArtifact;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetArtifactBuildTaskResponseBody\targetArtifact;
use AlibabaCloud\Tea\Model;

class GetArtifactBuildTaskResponseBody extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $artifactBuildType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $buildTaskId;

    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $isSuccess;

    /**
     * @var string[]
     */
    public $instructions;

    /**
     * @var sourceArtifact
     */
    public $sourceArtifact;

    /**
     * @var targetArtifact
     */
    public $targetArtifact;
    protected $_name = [
        'endTime'           => 'EndTime',
        'startTime'         => 'StartTime',
        'artifactBuildType' => 'ArtifactBuildType',
        'requestId'         => 'RequestId',
        'taskStatus'        => 'TaskStatus',
        'buildTaskId'       => 'BuildTaskId',
        'code'              => 'Code',
        'isSuccess'         => 'IsSuccess',
        'instructions'      => 'Instructions',
        'sourceArtifact'    => 'SourceArtifact',
        'targetArtifact'    => 'TargetArtifact',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->artifactBuildType) {
            $res['ArtifactBuildType'] = $this->artifactBuildType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->buildTaskId) {
            $res['BuildTaskId'] = $this->buildTaskId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->instructions) {
            $res['Instructions'] = $this->instructions;
        }
        if (null !== $this->sourceArtifact) {
            $res['SourceArtifact'] = null !== $this->sourceArtifact ? $this->sourceArtifact->toMap() : null;
        }
        if (null !== $this->targetArtifact) {
            $res['TargetArtifact'] = null !== $this->targetArtifact ? $this->targetArtifact->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetArtifactBuildTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['ArtifactBuildType'])) {
            $model->artifactBuildType = $map['ArtifactBuildType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['BuildTaskId'])) {
            $model->buildTaskId = $map['BuildTaskId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['Instructions'])) {
            if (!empty($map['Instructions'])) {
                $model->instructions = $map['Instructions'];
            }
        }
        if (isset($map['SourceArtifact'])) {
            $model->sourceArtifact = sourceArtifact::fromMap($map['SourceArtifact']);
        }
        if (isset($map['TargetArtifact'])) {
            $model->targetArtifact = targetArtifact::fromMap($map['TargetArtifact']);
        }

        return $model;
    }
}
