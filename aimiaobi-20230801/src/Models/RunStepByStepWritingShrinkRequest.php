<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class RunStepByStepWritingShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $originSessionId;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @var string
     */
    public $referenceDataShrink;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $workspaceId;

    /**
     * @var string
     */
    public $writingConfigShrink;
    protected $_name = [
        'originSessionId' => 'OriginSessionId',
        'prompt' => 'Prompt',
        'referenceDataShrink' => 'ReferenceData',
        'sessionId' => 'SessionId',
        'taskId' => 'TaskId',
        'workspaceId' => 'WorkspaceId',
        'writingConfigShrink' => 'WritingConfig',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->originSessionId) {
            $res['OriginSessionId'] = $this->originSessionId;
        }

        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }

        if (null !== $this->referenceDataShrink) {
            $res['ReferenceData'] = $this->referenceDataShrink;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        if (null !== $this->writingConfigShrink) {
            $res['WritingConfig'] = $this->writingConfigShrink;
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
        if (isset($map['OriginSessionId'])) {
            $model->originSessionId = $map['OriginSessionId'];
        }

        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }

        if (isset($map['ReferenceData'])) {
            $model->referenceDataShrink = $map['ReferenceData'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        if (isset($map['WritingConfig'])) {
            $model->writingConfigShrink = $map['WritingConfig'];
        }

        return $model;
    }
}
