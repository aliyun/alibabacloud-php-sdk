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

class RunCustomHotTopicViewPointAnalysisRequest extends Model
{
    /**
     * @example 模型反问
     *
     * @var string
     */
    public $askUser;

    /**
     * @description This parameter is required.
     *
     * @example 自定义选题视角的Prompt
     *
     * @var string
     */
    public $prompt;

    /**
     * @example 改写后的Query
     *
     * @var string
     */
    public $searchQuery;

    /**
     * @example true
     *
     * @var bool
     */
    public $skipAskUser;

    /**
     * @example 热点主题
     *
     * @var string
     */
    public $topic;

    /**
     * @example 热点主题ID
     *
     * @var string
     */
    public $topicId;

    /**
     * @example 热点主题来源
     *
     * @var string
     */
    public $topicSource;

    /**
     * @example 热点主题版本
     *
     * @var string
     */
    public $topicVersion;

    /**
     * @example 用户反馈
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
        'prompt' => 'Prompt',
        'searchQuery' => 'SearchQuery',
        'skipAskUser' => 'SkipAskUser',
        'topic' => 'Topic',
        'topicId' => 'TopicId',
        'topicSource' => 'TopicSource',
        'topicVersion' => 'TopicVersion',
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
        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }
        if (null !== $this->searchQuery) {
            $res['SearchQuery'] = $this->searchQuery;
        }
        if (null !== $this->skipAskUser) {
            $res['SkipAskUser'] = $this->skipAskUser;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->topicId) {
            $res['TopicId'] = $this->topicId;
        }
        if (null !== $this->topicSource) {
            $res['TopicSource'] = $this->topicSource;
        }
        if (null !== $this->topicVersion) {
            $res['TopicVersion'] = $this->topicVersion;
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
     * @return RunCustomHotTopicViewPointAnalysisRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AskUser'])) {
            $model->askUser = $map['AskUser'];
        }
        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }
        if (isset($map['SearchQuery'])) {
            $model->searchQuery = $map['SearchQuery'];
        }
        if (isset($map['SkipAskUser'])) {
            $model->skipAskUser = $map['SkipAskUser'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['TopicId'])) {
            $model->topicId = $map['TopicId'];
        }
        if (isset($map['TopicSource'])) {
            $model->topicSource = $map['TopicSource'];
        }
        if (isset($map['TopicVersion'])) {
            $model->topicVersion = $map['TopicVersion'];
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
