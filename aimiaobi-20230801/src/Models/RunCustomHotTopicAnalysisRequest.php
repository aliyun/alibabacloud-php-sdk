<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class RunCustomHotTopicAnalysisRequest extends Model
{
    /**
     * @var string
     */
    public $askUser;

    /**
     * @var bool
     */
    public $forceAnalysisExistsTopic;

    /**
     * @var string
     */
    public $prompt;

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
    public $userBack;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'askUser' => 'AskUser',
        'forceAnalysisExistsTopic' => 'ForceAnalysisExistsTopic',
        'prompt' => 'Prompt',
        'sessionId' => 'SessionId',
        'taskId' => 'TaskId',
        'userBack' => 'UserBack',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->askUser) {
            $res['AskUser'] = $this->askUser;
        }

        if (null !== $this->forceAnalysisExistsTopic) {
            $res['ForceAnalysisExistsTopic'] = $this->forceAnalysisExistsTopic;
        }

        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->userBack) {
            $res['UserBack'] = $this->userBack;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['AskUser'])) {
            $model->askUser = $map['AskUser'];
        }

        if (isset($map['ForceAnalysisExistsTopic'])) {
            $model->forceAnalysisExistsTopic = $map['ForceAnalysisExistsTopic'];
        }

        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['UserBack'])) {
            $model->userBack = $map['UserBack'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
