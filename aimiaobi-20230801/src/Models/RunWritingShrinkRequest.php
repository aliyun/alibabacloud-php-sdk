<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class RunWritingShrinkRequest extends Model
{
    /**
     * @example 3f7045e099474ba28ceca1b4eb6d6e21
     *
     * @var string
     */
    public $originSessionId;

    /**
     * @description This parameter is required.
     *
     * @example 提示词
     *
     * @var string
     */
    public $prompt;

    /**
     * @var string
     */
    public $referenceDataShrink;

    /**
     * @example 3f7045e099474ba28ceca1b4eb6d6e21
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example 3f7045e099474ba28ceca1b4eb6d6e21
     *
     * @var string
     */
    public $taskId;

    /**
     * @description This parameter is required.
     *
     * @example xxxx
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return RunWritingShrinkRequest
     */
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
