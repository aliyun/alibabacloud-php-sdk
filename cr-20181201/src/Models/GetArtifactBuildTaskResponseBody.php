<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\SDK\Cr\V20181201\Models\GetArtifactBuildTaskResponseBody\sourceArtifact;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetArtifactBuildTaskResponseBody\targetArtifact;
use AlibabaCloud\Tea\Model;

class GetArtifactBuildTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $artifactBuildType;

    /**
     * @var string
     */
    public $buildTaskId;

    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string[]
     */
    public $instructions;

    /**
     * @var bool
     */
    public $isSuccess;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sourceArtifact
     */
    public $sourceArtifact;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var targetArtifact
     */
    public $targetArtifact;

    /**
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'artifactBuildType' => 'ArtifactBuildType',
        'buildTaskId'       => 'BuildTaskId',
        'code'              => 'Code',
        'endTime'           => 'EndTime',
        'instructions'      => 'Instructions',
        'isSuccess'         => 'IsSuccess',
        'requestId'         => 'RequestId',
        'sourceArtifact'    => 'SourceArtifact',
        'startTime'         => 'StartTime',
        'targetArtifact'    => 'TargetArtifact',
        'taskStatus'        => 'TaskStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->artifactBuildType) {
            $res['ArtifactBuildType'] = $this->artifactBuildType;
        }
        if (null !== $this->buildTaskId) {
            $res['BuildTaskId'] = $this->buildTaskId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instructions) {
            $res['Instructions'] = $this->instructions;
        }
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sourceArtifact) {
            $res['SourceArtifact'] = null !== $this->sourceArtifact ? $this->sourceArtifact->toMap() : null;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->targetArtifact) {
            $res['TargetArtifact'] = null !== $this->targetArtifact ? $this->targetArtifact->toMap() : null;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
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
        if (isset($map['ArtifactBuildType'])) {
            $model->artifactBuildType = $map['ArtifactBuildType'];
        }
        if (isset($map['BuildTaskId'])) {
            $model->buildTaskId = $map['BuildTaskId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Instructions'])) {
            if (!empty($map['Instructions'])) {
                $model->instructions = $map['Instructions'];
            }
        }
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SourceArtifact'])) {
            $model->sourceArtifact = sourceArtifact::fromMap($map['SourceArtifact']);
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TargetArtifact'])) {
            $model->targetArtifact = targetArtifact::fromMap($map['TargetArtifact']);
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        return $model;
    }
}
