<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudNoteShrinkRequest\storageConfig;

class StartCloudNoteShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $autoChaptersShrink;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $customPromptShrink;

    /**
     * @var string[]
     */
    public $languageHints;

    /**
     * @var string
     */
    public $meetingAssistanceShrink;

    /**
     * @var string
     */
    public $realtimeSubtitleShrink;

    /**
     * @var string
     */
    public $serviceInspectionShrink;

    /**
     * @var string
     */
    public $sourceLanguage;

    /**
     * @var storageConfig
     */
    public $storageConfig;

    /**
     * @var string
     */
    public $summarizationShrink;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $textPolishShrink;

    /**
     * @var string
     */
    public $transcriptionShrink;
    protected $_name = [
        'appId' => 'AppId',
        'autoChaptersShrink' => 'AutoChapters',
        'channelId' => 'ChannelId',
        'customPromptShrink' => 'CustomPrompt',
        'languageHints' => 'LanguageHints',
        'meetingAssistanceShrink' => 'MeetingAssistance',
        'realtimeSubtitleShrink' => 'RealtimeSubtitle',
        'serviceInspectionShrink' => 'ServiceInspection',
        'sourceLanguage' => 'SourceLanguage',
        'storageConfig' => 'StorageConfig',
        'summarizationShrink' => 'Summarization',
        'taskId' => 'TaskId',
        'textPolishShrink' => 'TextPolish',
        'transcriptionShrink' => 'Transcription',
    ];

    public function validate()
    {
        if (\is_array($this->languageHints)) {
            Model::validateArray($this->languageHints);
        }
        if (null !== $this->storageConfig) {
            $this->storageConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->autoChaptersShrink) {
            $res['AutoChapters'] = $this->autoChaptersShrink;
        }

        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->customPromptShrink) {
            $res['CustomPrompt'] = $this->customPromptShrink;
        }

        if (null !== $this->languageHints) {
            if (\is_array($this->languageHints)) {
                $res['LanguageHints'] = [];
                $n1 = 0;
                foreach ($this->languageHints as $item1) {
                    $res['LanguageHints'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->meetingAssistanceShrink) {
            $res['MeetingAssistance'] = $this->meetingAssistanceShrink;
        }

        if (null !== $this->realtimeSubtitleShrink) {
            $res['RealtimeSubtitle'] = $this->realtimeSubtitleShrink;
        }

        if (null !== $this->serviceInspectionShrink) {
            $res['ServiceInspection'] = $this->serviceInspectionShrink;
        }

        if (null !== $this->sourceLanguage) {
            $res['SourceLanguage'] = $this->sourceLanguage;
        }

        if (null !== $this->storageConfig) {
            $res['StorageConfig'] = null !== $this->storageConfig ? $this->storageConfig->toArray($noStream) : $this->storageConfig;
        }

        if (null !== $this->summarizationShrink) {
            $res['Summarization'] = $this->summarizationShrink;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->textPolishShrink) {
            $res['TextPolish'] = $this->textPolishShrink;
        }

        if (null !== $this->transcriptionShrink) {
            $res['Transcription'] = $this->transcriptionShrink;
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
            $model->autoChaptersShrink = $map['AutoChapters'];
        }

        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        if (isset($map['CustomPrompt'])) {
            $model->customPromptShrink = $map['CustomPrompt'];
        }

        if (isset($map['LanguageHints'])) {
            if (!empty($map['LanguageHints'])) {
                $model->languageHints = [];
                $n1 = 0;
                foreach ($map['LanguageHints'] as $item1) {
                    $model->languageHints[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MeetingAssistance'])) {
            $model->meetingAssistanceShrink = $map['MeetingAssistance'];
        }

        if (isset($map['RealtimeSubtitle'])) {
            $model->realtimeSubtitleShrink = $map['RealtimeSubtitle'];
        }

        if (isset($map['ServiceInspection'])) {
            $model->serviceInspectionShrink = $map['ServiceInspection'];
        }

        if (isset($map['SourceLanguage'])) {
            $model->sourceLanguage = $map['SourceLanguage'];
        }

        if (isset($map['StorageConfig'])) {
            $model->storageConfig = storageConfig::fromMap($map['StorageConfig']);
        }

        if (isset($map['Summarization'])) {
            $model->summarizationShrink = $map['Summarization'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TextPolish'])) {
            $model->textPolishShrink = $map['TextPolish'];
        }

        if (isset($map['Transcription'])) {
            $model->transcriptionShrink = $map['Transcription'];
        }

        return $model;
    }
}
