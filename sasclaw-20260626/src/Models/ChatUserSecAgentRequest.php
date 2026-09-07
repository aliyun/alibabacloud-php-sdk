<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SasClaw\V20260626\Models;

use AlibabaCloud\Dara\Model;

class ChatUserSecAgentRequest extends Model
{
    /**
     * @var string
     */
    public $agent;

    /**
     * @var string
     */
    public $attachmentStagingId;

    /**
     * @var string
     */
    public $attachments;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $executionMode;

    /**
     * @var string
     */
    public $extraParams;

    /**
     * @var bool
     */
    public $memory;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @var string
     */
    public $responseLanguage;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $skill;

    /**
     * @var bool
     */
    public $stream;

    /**
     * @var string
     */
    public $talkId;

    /**
     * @var string
     */
    public $target;

    /**
     * @var string
     */
    public $timeZone;

    /**
     * @var string
     */
    public $userInputInfo;
    protected $_name = [
        'agent' => 'Agent',
        'attachmentStagingId' => 'AttachmentStagingId',
        'attachments' => 'Attachments',
        'channel' => 'Channel',
        'executionMode' => 'ExecutionMode',
        'extraParams' => 'ExtraParams',
        'memory' => 'Memory',
        'model' => 'Model',
        'prompt' => 'Prompt',
        'responseLanguage' => 'ResponseLanguage',
        'sessionId' => 'SessionId',
        'skill' => 'Skill',
        'stream' => 'Stream',
        'talkId' => 'TalkId',
        'target' => 'Target',
        'timeZone' => 'TimeZone',
        'userInputInfo' => 'UserInputInfo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agent) {
            $res['Agent'] = $this->agent;
        }

        if (null !== $this->attachmentStagingId) {
            $res['AttachmentStagingId'] = $this->attachmentStagingId;
        }

        if (null !== $this->attachments) {
            $res['Attachments'] = $this->attachments;
        }

        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }

        if (null !== $this->executionMode) {
            $res['ExecutionMode'] = $this->executionMode;
        }

        if (null !== $this->extraParams) {
            $res['ExtraParams'] = $this->extraParams;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }

        if (null !== $this->responseLanguage) {
            $res['ResponseLanguage'] = $this->responseLanguage;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->skill) {
            $res['Skill'] = $this->skill;
        }

        if (null !== $this->stream) {
            $res['Stream'] = $this->stream;
        }

        if (null !== $this->talkId) {
            $res['TalkId'] = $this->talkId;
        }

        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }

        if (null !== $this->timeZone) {
            $res['TimeZone'] = $this->timeZone;
        }

        if (null !== $this->userInputInfo) {
            $res['UserInputInfo'] = $this->userInputInfo;
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
        if (isset($map['Agent'])) {
            $model->agent = $map['Agent'];
        }

        if (isset($map['AttachmentStagingId'])) {
            $model->attachmentStagingId = $map['AttachmentStagingId'];
        }

        if (isset($map['Attachments'])) {
            $model->attachments = $map['Attachments'];
        }

        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }

        if (isset($map['ExecutionMode'])) {
            $model->executionMode = $map['ExecutionMode'];
        }

        if (isset($map['ExtraParams'])) {
            $model->extraParams = $map['ExtraParams'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }

        if (isset($map['ResponseLanguage'])) {
            $model->responseLanguage = $map['ResponseLanguage'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['Skill'])) {
            $model->skill = $map['Skill'];
        }

        if (isset($map['Stream'])) {
            $model->stream = $map['Stream'];
        }

        if (isset($map['TalkId'])) {
            $model->talkId = $map['TalkId'];
        }

        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }

        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }

        if (isset($map['UserInputInfo'])) {
            $model->userInputInfo = $map['UserInputInfo'];
        }

        return $model;
    }
}
