<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class RunCustomHotTopicViewPointAnalysisRequest extends Model
{
    /**
     * @var string
     */
    public $askUser;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @var string
     */
    public $searchQuery;

    /**
     * @var bool
     */
    public $skipAskUser;

    /**
     * @var string
     */
    public $topic;

    /**
     * @var string
     */
    public $topicId;

    /**
     * @var string
     */
    public $topicSource;

    /**
     * @var string
     */
    public $topicVersion;

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
