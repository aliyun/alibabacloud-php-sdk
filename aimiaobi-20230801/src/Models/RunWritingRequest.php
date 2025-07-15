<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunWritingRequest\referenceData;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunWritingRequest\writingConfig;
use AlibabaCloud\Tea\Model;

class RunWritingRequest extends Model
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
     * @var referenceData
     */
    public $referenceData;

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
     * @var writingConfig
     */
    public $writingConfig;
    protected $_name = [
        'originSessionId' => 'OriginSessionId',
        'prompt' => 'Prompt',
        'referenceData' => 'ReferenceData',
        'sessionId' => 'SessionId',
        'taskId' => 'TaskId',
        'workspaceId' => 'WorkspaceId',
        'writingConfig' => 'WritingConfig',
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
        if (null !== $this->referenceData) {
            $res['ReferenceData'] = null !== $this->referenceData ? $this->referenceData->toMap() : null;
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
        if (null !== $this->writingConfig) {
            $res['WritingConfig'] = null !== $this->writingConfig ? $this->writingConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunWritingRequest
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
            $model->referenceData = referenceData::fromMap($map['ReferenceData']);
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
            $model->writingConfig = writingConfig::fromMap($map['WritingConfig']);
        }

        return $model;
    }
}
