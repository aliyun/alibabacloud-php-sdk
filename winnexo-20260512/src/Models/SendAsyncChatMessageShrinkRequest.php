<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class SendAsyncChatMessageShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appToken;

    /**
     * @var string
     */
    public $autoPreference;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $contextItemsShrink;

    /**
     * @var string
     */
    public $digitalEmployeeNameShrink;

    /**
     * @var bool
     */
    public $directChat;

    /**
     * @var mixed
     */
    public $directMaxHistoryRounds;

    /**
     * @var bool
     */
    public $enableWebSearch;

    /**
     * @var string
     */
    public $filesShrink;

    /**
     * @var string
     */
    public $locale;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $opsUserCode;

    /**
     * @var string
     */
    public $opsUserId;

    /**
     * @var bool
     */
    public $reuseLastSession;

    /**
     * @var string
     */
    public $segmentsShrink;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var bool
     */
    public $stream;

    /**
     * @var string
     */
    public $taskExecutionShrink;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var bool
     */
    public $thinkingEnabled;

    /**
     * @var string
     */
    public $thinkingLevel;

    /**
     * @var string
     */
    public $workMode;
    protected $_name = [
        'appToken' => 'appToken',
        'autoPreference' => 'autoPreference',
        'content' => 'content',
        'contentType' => 'contentType',
        'contextItemsShrink' => 'contextItems',
        'digitalEmployeeNameShrink' => 'digitalEmployeeName',
        'directChat' => 'directChat',
        'directMaxHistoryRounds' => 'directMaxHistoryRounds',
        'enableWebSearch' => 'enableWebSearch',
        'filesShrink' => 'files',
        'locale' => 'locale',
        'model' => 'model',
        'opsUserCode' => 'opsUserCode',
        'opsUserId' => 'opsUserId',
        'reuseLastSession' => 'reuseLastSession',
        'segmentsShrink' => 'segments',
        'sessionId' => 'sessionId',
        'stream' => 'stream',
        'taskExecutionShrink' => 'taskExecution',
        'tenantId' => 'tenantId',
        'thinkingEnabled' => 'thinkingEnabled',
        'thinkingLevel' => 'thinkingLevel',
        'workMode' => 'workMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appToken) {
            $res['appToken'] = $this->appToken;
        }

        if (null !== $this->autoPreference) {
            $res['autoPreference'] = $this->autoPreference;
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->contentType) {
            $res['contentType'] = $this->contentType;
        }

        if (null !== $this->contextItemsShrink) {
            $res['contextItems'] = $this->contextItemsShrink;
        }

        if (null !== $this->digitalEmployeeNameShrink) {
            $res['digitalEmployeeName'] = $this->digitalEmployeeNameShrink;
        }

        if (null !== $this->directChat) {
            $res['directChat'] = $this->directChat;
        }

        if (null !== $this->directMaxHistoryRounds) {
            $res['directMaxHistoryRounds'] = $this->directMaxHistoryRounds;
        }

        if (null !== $this->enableWebSearch) {
            $res['enableWebSearch'] = $this->enableWebSearch;
        }

        if (null !== $this->filesShrink) {
            $res['files'] = $this->filesShrink;
        }

        if (null !== $this->locale) {
            $res['locale'] = $this->locale;
        }

        if (null !== $this->model) {
            $res['model'] = $this->model;
        }

        if (null !== $this->opsUserCode) {
            $res['opsUserCode'] = $this->opsUserCode;
        }

        if (null !== $this->opsUserId) {
            $res['opsUserId'] = $this->opsUserId;
        }

        if (null !== $this->reuseLastSession) {
            $res['reuseLastSession'] = $this->reuseLastSession;
        }

        if (null !== $this->segmentsShrink) {
            $res['segments'] = $this->segmentsShrink;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->stream) {
            $res['stream'] = $this->stream;
        }

        if (null !== $this->taskExecutionShrink) {
            $res['taskExecution'] = $this->taskExecutionShrink;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->thinkingEnabled) {
            $res['thinkingEnabled'] = $this->thinkingEnabled;
        }

        if (null !== $this->thinkingLevel) {
            $res['thinkingLevel'] = $this->thinkingLevel;
        }

        if (null !== $this->workMode) {
            $res['workMode'] = $this->workMode;
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
        if (isset($map['appToken'])) {
            $model->appToken = $map['appToken'];
        }

        if (isset($map['autoPreference'])) {
            $model->autoPreference = $map['autoPreference'];
        }

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['contentType'])) {
            $model->contentType = $map['contentType'];
        }

        if (isset($map['contextItems'])) {
            $model->contextItemsShrink = $map['contextItems'];
        }

        if (isset($map['digitalEmployeeName'])) {
            $model->digitalEmployeeNameShrink = $map['digitalEmployeeName'];
        }

        if (isset($map['directChat'])) {
            $model->directChat = $map['directChat'];
        }

        if (isset($map['directMaxHistoryRounds'])) {
            $model->directMaxHistoryRounds = $map['directMaxHistoryRounds'];
        }

        if (isset($map['enableWebSearch'])) {
            $model->enableWebSearch = $map['enableWebSearch'];
        }

        if (isset($map['files'])) {
            $model->filesShrink = $map['files'];
        }

        if (isset($map['locale'])) {
            $model->locale = $map['locale'];
        }

        if (isset($map['model'])) {
            $model->model = $map['model'];
        }

        if (isset($map['opsUserCode'])) {
            $model->opsUserCode = $map['opsUserCode'];
        }

        if (isset($map['opsUserId'])) {
            $model->opsUserId = $map['opsUserId'];
        }

        if (isset($map['reuseLastSession'])) {
            $model->reuseLastSession = $map['reuseLastSession'];
        }

        if (isset($map['segments'])) {
            $model->segmentsShrink = $map['segments'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['stream'])) {
            $model->stream = $map['stream'];
        }

        if (isset($map['taskExecution'])) {
            $model->taskExecutionShrink = $map['taskExecution'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['thinkingEnabled'])) {
            $model->thinkingEnabled = $map['thinkingEnabled'];
        }

        if (isset($map['thinkingLevel'])) {
            $model->thinkingLevel = $map['thinkingLevel'];
        }

        if (isset($map['workMode'])) {
            $model->workMode = $map['workMode'];
        }

        return $model;
    }
}
