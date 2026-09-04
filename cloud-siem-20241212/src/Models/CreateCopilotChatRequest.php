<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\CreateCopilotChatRequest\createConversation;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\CreateCopilotChatRequest\messages;

class CreateCopilotChatRequest extends Model
{
    /**
     * @var string
     */
    public $clientConversationId;

    /**
     * @var string
     */
    public $clientMessageId;

    /**
     * @var string
     */
    public $conversationId;

    /**
     * @var createConversation
     */
    public $createConversation;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var messages[]
     */
    public $messages;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $planMode;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $replaceTurnId;

    /**
     * @var string
     */
    public $routeTarget;

    /**
     * @var string
     */
    public $source;

    /**
     * @var bool
     */
    public $stream;

    /**
     * @var string
     */
    public $thinkingMode;

    /**
     * @var string
     */
    public $traceId;
    protected $_name = [
        'clientConversationId' => 'ClientConversationId',
        'clientMessageId' => 'ClientMessageId',
        'conversationId' => 'ConversationId',
        'createConversation' => 'CreateConversation',
        'lang' => 'Lang',
        'messages' => 'Messages',
        'model' => 'Model',
        'planMode' => 'PlanMode',
        'projectId' => 'ProjectId',
        'regionId' => 'RegionId',
        'replaceTurnId' => 'ReplaceTurnId',
        'routeTarget' => 'RouteTarget',
        'source' => 'Source',
        'stream' => 'Stream',
        'thinkingMode' => 'ThinkingMode',
        'traceId' => 'TraceId',
    ];

    public function validate()
    {
        if (null !== $this->createConversation) {
            $this->createConversation->validate();
        }
        if (\is_array($this->messages)) {
            Model::validateArray($this->messages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientConversationId) {
            $res['ClientConversationId'] = $this->clientConversationId;
        }

        if (null !== $this->clientMessageId) {
            $res['ClientMessageId'] = $this->clientMessageId;
        }

        if (null !== $this->conversationId) {
            $res['ConversationId'] = $this->conversationId;
        }

        if (null !== $this->createConversation) {
            $res['CreateConversation'] = null !== $this->createConversation ? $this->createConversation->toArray($noStream) : $this->createConversation;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->messages) {
            if (\is_array($this->messages)) {
                $res['Messages'] = [];
                $n1 = 0;
                foreach ($this->messages as $item1) {
                    $res['Messages'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->planMode) {
            $res['PlanMode'] = $this->planMode;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->replaceTurnId) {
            $res['ReplaceTurnId'] = $this->replaceTurnId;
        }

        if (null !== $this->routeTarget) {
            $res['RouteTarget'] = $this->routeTarget;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->stream) {
            $res['Stream'] = $this->stream;
        }

        if (null !== $this->thinkingMode) {
            $res['ThinkingMode'] = $this->thinkingMode;
        }

        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
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
        if (isset($map['ClientConversationId'])) {
            $model->clientConversationId = $map['ClientConversationId'];
        }

        if (isset($map['ClientMessageId'])) {
            $model->clientMessageId = $map['ClientMessageId'];
        }

        if (isset($map['ConversationId'])) {
            $model->conversationId = $map['ConversationId'];
        }

        if (isset($map['CreateConversation'])) {
            $model->createConversation = createConversation::fromMap($map['CreateConversation']);
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Messages'])) {
            if (!empty($map['Messages'])) {
                $model->messages = [];
                $n1 = 0;
                foreach ($map['Messages'] as $item1) {
                    $model->messages[$n1] = messages::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['PlanMode'])) {
            $model->planMode = $map['PlanMode'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ReplaceTurnId'])) {
            $model->replaceTurnId = $map['ReplaceTurnId'];
        }

        if (isset($map['RouteTarget'])) {
            $model->routeTarget = $map['RouteTarget'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['Stream'])) {
            $model->stream = $map['Stream'];
        }

        if (isset($map['ThinkingMode'])) {
            $model->thinkingMode = $map['ThinkingMode'];
        }

        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }

        return $model;
    }
}
