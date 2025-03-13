<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class RunCustomHotTopicAnalysisRequest extends Model
{
    /**
     * @example 模型反问
     *
     * @var string
     */
    public $askUser;

    /**
     * @example false
     *
     * @var bool
     */
    public $forceAnalysisExistsTopic;

    /**
     * @description This parameter is required.
     *
     * @example 用户输入Prompt
     *
     * @var string
     */
    public $prompt;

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
     * @example 用户针对模型反问的输入
     *
     * @var string
     */
    public $userBack;

    /**
     * @description This parameter is required.
     *
     * @example xxxx
     *
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

    public function validate(): void {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return RunCustomHotTopicAnalysisRequest
     */
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
