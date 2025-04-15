<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudNoteRequest\autoChapters;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudNoteRequest\customPrompt;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudNoteRequest\meetingAssistance;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudNoteRequest\realtimeSubtitle;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudNoteRequest\serviceInspection;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudNoteRequest\storageConfig;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudNoteRequest\summarization;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudNoteRequest\textPolish;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudNoteRequest\transcription;

class StartCloudNoteRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var autoChapters
     */
    public $autoChapters;

    /**
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
     * @var realtimeSubtitle
     */
    public $realtimeSubtitle;

    /**
     * @var serviceInspection
     */
    public $serviceInspection;

    /**
     * @var string
     */
    public $sourceLanguage;

    /**
     * @var storageConfig
     */
    public $storageConfig;

    /**
     * @var summarization
     */
    public $summarization;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var textPolish
     */
    public $textPolish;

    /**
     * @var transcription
     */
    public $transcription;
    protected $_name = [
        'appId' => 'AppId',
        'autoChapters' => 'AutoChapters',
        'channelId' => 'ChannelId',
        'customPrompt' => 'CustomPrompt',
        'languageHints' => 'LanguageHints',
        'meetingAssistance' => 'MeetingAssistance',
        'realtimeSubtitle' => 'RealtimeSubtitle',
        'serviceInspection' => 'ServiceInspection',
        'sourceLanguage' => 'SourceLanguage',
        'storageConfig' => 'StorageConfig',
        'summarization' => 'Summarization',
        'taskId' => 'TaskId',
        'textPolish' => 'TextPolish',
        'transcription' => 'Transcription',
    ];

    public function validate()
    {
        if (null !== $this->autoChapters) {
            $this->autoChapters->validate();
        }
        if (null !== $this->customPrompt) {
            $this->customPrompt->validate();
        }
        if (\is_array($this->languageHints)) {
            Model::validateArray($this->languageHints);
        }
        if (null !== $this->meetingAssistance) {
            $this->meetingAssistance->validate();
        }
        if (null !== $this->realtimeSubtitle) {
            $this->realtimeSubtitle->validate();
        }
        if (null !== $this->serviceInspection) {
            $this->serviceInspection->validate();
        }
        if (null !== $this->storageConfig) {
            $this->storageConfig->validate();
        }
        if (null !== $this->summarization) {
            $this->summarization->validate();
        }
        if (null !== $this->textPolish) {
            $this->textPolish->validate();
        }
        if (null !== $this->transcription) {
            $this->transcription->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->autoChapters) {
            $res['AutoChapters'] = null !== $this->autoChapters ? $this->autoChapters->toArray($noStream) : $this->autoChapters;
        }

        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->customPrompt) {
            $res['CustomPrompt'] = null !== $this->customPrompt ? $this->customPrompt->toArray($noStream) : $this->customPrompt;
        }

        if (null !== $this->languageHints) {
            if (\is_array($this->languageHints)) {
                $res['LanguageHints'] = [];
                $n1 = 0;
                foreach ($this->languageHints as $item1) {
                    $res['LanguageHints'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->meetingAssistance) {
            $res['MeetingAssistance'] = null !== $this->meetingAssistance ? $this->meetingAssistance->toArray($noStream) : $this->meetingAssistance;
        }

        if (null !== $this->realtimeSubtitle) {
            $res['RealtimeSubtitle'] = null !== $this->realtimeSubtitle ? $this->realtimeSubtitle->toArray($noStream) : $this->realtimeSubtitle;
        }

        if (null !== $this->serviceInspection) {
            $res['ServiceInspection'] = null !== $this->serviceInspection ? $this->serviceInspection->toArray($noStream) : $this->serviceInspection;
        }

        if (null !== $this->sourceLanguage) {
            $res['SourceLanguage'] = $this->sourceLanguage;
        }

        if (null !== $this->storageConfig) {
            $res['StorageConfig'] = null !== $this->storageConfig ? $this->storageConfig->toArray($noStream) : $this->storageConfig;
        }

        if (null !== $this->summarization) {
            $res['Summarization'] = null !== $this->summarization ? $this->summarization->toArray($noStream) : $this->summarization;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->textPolish) {
            $res['TextPolish'] = null !== $this->textPolish ? $this->textPolish->toArray($noStream) : $this->textPolish;
        }

        if (null !== $this->transcription) {
            $res['Transcription'] = null !== $this->transcription ? $this->transcription->toArray($noStream) : $this->transcription;
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
                $model->languageHints = [];
                $n1 = 0;
                foreach ($map['LanguageHints'] as $item1) {
                    $model->languageHints[$n1++] = $item1;
                }
            }
        }

        if (isset($map['MeetingAssistance'])) {
            $model->meetingAssistance = meetingAssistance::fromMap($map['MeetingAssistance']);
        }

        if (isset($map['RealtimeSubtitle'])) {
            $model->realtimeSubtitle = realtimeSubtitle::fromMap($map['RealtimeSubtitle']);
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

        if (isset($map['Transcription'])) {
            $model->transcription = transcription::fromMap($map['Transcription']);
        }

        return $model;
    }
}
