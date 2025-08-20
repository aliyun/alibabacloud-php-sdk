<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetArtifactBuildTaskResponseBody\sourceArtifact;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetArtifactBuildTaskResponseBody\targetArtifact;

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
        'buildTaskId' => 'BuildTaskId',
        'code' => 'Code',
        'endTime' => 'EndTime',
        'instructions' => 'Instructions',
        'isSuccess' => 'IsSuccess',
        'requestId' => 'RequestId',
        'sourceArtifact' => 'SourceArtifact',
        'startTime' => 'StartTime',
        'targetArtifact' => 'TargetArtifact',
        'taskStatus' => 'TaskStatus',
    ];

    public function validate()
    {
        if (\is_array($this->instructions)) {
            Model::validateArray($this->instructions);
        }
        if (null !== $this->sourceArtifact) {
            $this->sourceArtifact->validate();
        }
        if (null !== $this->targetArtifact) {
            $this->targetArtifact->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->instructions)) {
                $res['Instructions'] = [];
                $n1 = 0;
                foreach ($this->instructions as $item1) {
                    $res['Instructions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sourceArtifact) {
            $res['SourceArtifact'] = null !== $this->sourceArtifact ? $this->sourceArtifact->toArray($noStream) : $this->sourceArtifact;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->targetArtifact) {
            $res['TargetArtifact'] = null !== $this->targetArtifact ? $this->targetArtifact->toArray($noStream) : $this->targetArtifact;
        }

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
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
                $model->instructions = [];
                $n1 = 0;
                foreach ($map['Instructions'] as $item1) {
                    $model->instructions[$n1] = $item1;
                    ++$n1;
                }
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
