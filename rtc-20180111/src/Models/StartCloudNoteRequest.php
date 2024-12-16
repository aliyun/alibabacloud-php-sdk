<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudNoteRequest\autoChapters;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudNoteRequest\customPrompt;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudNoteRequest\meetingAssistance;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudNoteRequest\serviceInspection;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudNoteRequest\storageConfig;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudNoteRequest\summarization;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudNoteRequest\textPolish;
use AlibabaCloud\Tea\Model;

class StartCloudNoteRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 2ws***z3
     *
     * @var string
     */
    public $appId;

    /**
     * @var autoChapters
     */
    public $autoChapters;

    /**
     * @description This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $channelId;

    /**
     * @var customPrompt
     */
    public $customPrompt;

    /**
     * @var string[]
     */
    public $languageHints;

    /**
     * @var meetingAssistance
     */
    public $meetingAssistance;

    /**
     * @var serviceInspection
     */
    public $serviceInspection;

    /**
     * @example cn
     *
     * @var string
     */
    public $sourceLanguage;

    /**
     * @description This parameter is required.
     *
     * @var storageConfig
     */
    public $storageConfig;

    /**
     * @var summarization
     */
    public $summarization;

    /**
     * @description This parameter is required.
     *
     * @example rtc
     *
     * @var string
     */
    public $taskId;

    /**
     * @var textPolish
     */
    public $textPolish;
    protected $_name = [
        'appId'             => 'AppId',
        'autoChapters'      => 'AutoChapters',
        'channelId'         => 'ChannelId',
        'customPrompt'      => 'CustomPrompt',
        'languageHints'     => 'LanguageHints',
        'meetingAssistance' => 'MeetingAssistance',
        'serviceInspection' => 'ServiceInspection',
        'sourceLanguage'    => 'SourceLanguage',
        'storageConfig'     => 'StorageConfig',
        'summarization'     => 'Summarization',
        'taskId'            => 'TaskId',
        'textPolish'        => 'TextPolish',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->autoChapters) {
            $res['AutoChapters'] = null !== $this->autoChapters ? $this->autoChapters->toMap() : null;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->customPrompt) {
            $res['CustomPrompt'] = null !== $this->customPrompt ? $this->customPrompt->toMap() : null;
        }
        if (null !== $this->languageHints) {
            $res['LanguageHints'] = $this->languageHints;
        }
        if (null !== $this->meetingAssistance) {
            $res['MeetingAssistance'] = null !== $this->meetingAssistance ? $this->meetingAssistance->toMap() : null;
        }
        if (null !== $this->serviceInspection) {
            $res['ServiceInspection'] = null !== $this->serviceInspection ? $this->serviceInspection->toMap() : null;
        }
        if (null !== $this->sourceLanguage) {
            $res['SourceLanguage'] = $this->sourceLanguage;
        }
        if (null !== $this->storageConfig) {
            $res['StorageConfig'] = null !== $this->storageConfig ? $this->storageConfig->toMap() : null;
        }
        if (null !== $this->summarization) {
            $res['Summarization'] = null !== $this->summarization ? $this->summarization->toMap() : null;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->textPolish) {
            $res['TextPolish'] = null !== $this->textPolish ? $this->textPolish->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartCloudNoteRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AutoChapters'])) {
            $model->autoChapters = autoChapters::fromMap($map['AutoChapters']);
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['CustomPrompt'])) {
            $model->customPrompt = customPrompt::fromMap($map['CustomPrompt']);
        }
        if (isset($map['LanguageHints'])) {
            if (!empty($map['LanguageHints'])) {
                $model->languageHints = $map['LanguageHints'];
            }
        }
        if (isset($map['MeetingAssistance'])) {
            $model->meetingAssistance = meetingAssistance::fromMap($map['MeetingAssistance']);
        }
        if (isset($map['ServiceInspection'])) {
            $model->serviceInspection = serviceInspection::fromMap($map['ServiceInspection']);
        }
        if (isset($map['SourceLanguage'])) {
            $model->sourceLanguage = $map['SourceLanguage'];
        }
        if (isset($map['StorageConfig'])) {
            $model->storageConfig = storageConfig::fromMap($map['StorageConfig']);
        }
        if (isset($map['Summarization'])) {
            $model->summarization = summarization::fromMap($map['Summarization']);
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TextPolish'])) {
            $model->textPolish = textPolish::fromMap($map['TextPolish']);
        }

        return $model;
    }
}
