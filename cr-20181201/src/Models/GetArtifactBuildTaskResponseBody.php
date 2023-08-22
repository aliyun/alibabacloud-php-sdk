<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\SDK\Cr\V20181201\Models\GetArtifactBuildTaskResponseBody\sourceArtifact;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetArtifactBuildTaskResponseBody\targetArtifact;
use AlibabaCloud\Tea\Model;

class GetArtifactBuildTaskResponseBody extends Model
{
    /**
     * @description The type of the artifact building task. Valid values:
     *
     *   `IMAGE_TO_ACCELERATED_IMAGE`: builds accelerated images for Container Service for Kubernetes (ACK) clusters.
     *   `IMAGE_TO_ECI_ACCELERATED_IMAGE`: builds accelerated images for elastic container instances.
     *
     * @example IMAGE_TO_ACCELERATED_IMAGE
     *
     * @var string
     */
    public $artifactBuildType;

    /**
     * @description The ID of the artifact building task.
     *
     * @example i2a-1yu****
     *
     * @var string
     */
    public $buildTaskId;

    /**
     * @description The return value.
     *
     * @example success
     *
     * @var string
     */
    public $code;

    /**
     * @description The time when the artifact building task ends.
     *
     * @example 156871880
     *
     * @var int
     */
    public $endTime;

    /**
     * @var string[]
     */
    public $instructions;

    /**
     * @description Indicates whether the request is successful.
     *
     * @example true
     *
     * @var bool
     */
    public $isSuccess;

    /**
     * @description The ID of the request.
     *
     * @example C4C7DD0C-C9D6-437A-A7EE-121EFD70D002
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the source artifact.
     *
     * @var sourceArtifact
     */
    public $sourceArtifact;

    /**
     * @description The time when the artifact building task starts.
     *
     * @example 156871881
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The artifact that is built in the task.
     *
     * @var targetArtifact
     */
    public $targetArtifact;

    /**
     * @description The status of the artifact that is built in the task. Valid values:
     *
     *   `PENDING`: The artifact is being scheduled.
     *   `BUILDING`: The artifact is being built.
     *   `SUCCESS`: The artifact is built.
     *   `FAILED`: The artifact fails to be built.
     *
     * @example BUILDING
     *
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
