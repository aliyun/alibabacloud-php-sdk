<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunWritingRequest\referenceData;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunWritingRequest\writingConfig;

class RunWritingRequest extends Model
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
     * @var referenceData
     */
    public $referenceData;
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
     * @var writingConfig
     */
    public $writingConfig;
    protected $_name = [
        'originSessionId' => 'OriginSessionId',
        'prompt'          => 'Prompt',
        'referenceData'   => 'ReferenceData',
        'sessionId'       => 'SessionId',
        'taskId'          => 'TaskId',
        'workspaceId'     => 'WorkspaceId',
        'writingConfig'   => 'WritingConfig',
    ];

    public function validate()
    {
        if (null !== $this->referenceData) {
            $this->referenceData->validate();
        }
        if (null !== $this->writingConfig) {
            $this->writingConfig->validate();
        }
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

        if (null !== $this->referenceData) {
            $res['ReferenceData'] = null !== $this->referenceData ? $this->referenceData->toArray($noStream) : $this->referenceData;
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
            $res['WritingConfig'] = null !== $this->writingConfig ? $this->writingConfig->toArray($noStream) : $this->writingConfig;
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
