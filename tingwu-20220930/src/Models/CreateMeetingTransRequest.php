<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20220930\Models;

use AlibabaCloud\Tea\Model;

class CreateMeetingTransRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $abilityParams;

    /**
     * @example JV1sRTisRMi****
     *
     * @var string
     */
    public $appKey;

    /**
     * @var mixed[]
     */
    public $asrParams;

    /**
     * @example 16
     *
     * @var int
     */
    public $audioBitRate;

    /**
     * @example pcm
     *
     * @var string
     */
    public $audioFormat;

    /**
     * @example cn
     *
     * @var string
     */
    public $audioLanguage;

    /**
     * @example false
     *
     * @var bool
     */
    public $audioOutputEnabled;

    /**
     * @example bucket
     *
     * @var string
     */
    public $audioOutputOssBucket;

    /**
     * @example tingwu/dir/filename
     *
     * @var string
     */
    public $audioOutputOssPath;

    /**
     * @example multi
     *
     * @var string
     */
    public $audioPackage;

    /**
     * @example 16000
     *
     * @var int
     */
    public $audioSampleRate;

    /**
     * @example false
     *
     * @var bool
     */
    public $audioSegmentsEnabled;

    /**
     * @example false
     *
     * @var bool
     */
    public $docResultEnabled;

    /**
     * @var mixed[]
     */
    public $labParams;

    /**
     * @example meeting_123
     *
     * @var string
     */
    public $meetingKey;

    /**
     * @example false
     *
     * @var bool
     */
    public $meetingResultEnabled;

    /**
     * @example bucket
     *
     * @var string
     */
    public $meetingResultOssBucket;

    /**
     * @example tingwu/dir/filename
     *
     * @var string
     */
    public $meetingResultOssPath;

    /**
     * @example 2
     *
     * @var int
     */
    public $realtimeActiveResultLevel;

    /**
     * @example true
     *
     * @var bool
     */
    public $realtimeResultEnabled;

    /**
     * @example 2
     *
     * @var int
     */
    public $realtimeResultLevel;

    /**
     * @example true
     *
     * @var bool
     */
    public $realtimeResultMeetingInfoEnabled;

    /**
     * @example true
     *
     * @var bool
     */
    public $realtimeResultWordsEnabled;

    /**
     * @var mixed[]
     */
    public $tags;

    /**
     * @example 2
     *
     * @var int
     */
    public $translateActiveResultLevel;

    /**
     * @example cn,en
     *
     * @var string
     */
    public $translateLanguages;

    /**
     * @example false
     *
     * @var bool
     */
    public $translateResultEnabled;

    /**
     * @example 2
     *
     * @var int
     */
    public $translateResultLevel;
    protected $_name = [
        'abilityParams'                    => 'AbilityParams',
        'appKey'                           => 'AppKey',
        'asrParams'                        => 'AsrParams',
        'audioBitRate'                     => 'AudioBitRate',
        'audioFormat'                      => 'AudioFormat',
        'audioLanguage'                    => 'AudioLanguage',
        'audioOutputEnabled'               => 'AudioOutputEnabled',
        'audioOutputOssBucket'             => 'AudioOutputOssBucket',
        'audioOutputOssPath'               => 'AudioOutputOssPath',
        'audioPackage'                     => 'AudioPackage',
        'audioSampleRate'                  => 'AudioSampleRate',
        'audioSegmentsEnabled'             => 'AudioSegmentsEnabled',
        'docResultEnabled'                 => 'DocResultEnabled',
        'labParams'                        => 'LabParams',
        'meetingKey'                       => 'MeetingKey',
        'meetingResultEnabled'             => 'MeetingResultEnabled',
        'meetingResultOssBucket'           => 'MeetingResultOssBucket',
        'meetingResultOssPath'             => 'MeetingResultOssPath',
        'realtimeActiveResultLevel'        => 'RealtimeActiveResultLevel',
        'realtimeResultEnabled'            => 'RealtimeResultEnabled',
        'realtimeResultLevel'              => 'RealtimeResultLevel',
        'realtimeResultMeetingInfoEnabled' => 'RealtimeResultMeetingInfoEnabled',
        'realtimeResultWordsEnabled'       => 'RealtimeResultWordsEnabled',
        'tags'                             => 'Tags',
        'translateActiveResultLevel'       => 'TranslateActiveResultLevel',
        'translateLanguages'               => 'TranslateLanguages',
        'translateResultEnabled'           => 'TranslateResultEnabled',
        'translateResultLevel'             => 'TranslateResultLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->abilityParams) {
            $res['AbilityParams'] = $this->abilityParams;
        }
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->asrParams) {
            $res['AsrParams'] = $this->asrParams;
        }
        if (null !== $this->audioBitRate) {
            $res['AudioBitRate'] = $this->audioBitRate;
        }
        if (null !== $this->audioFormat) {
            $res['AudioFormat'] = $this->audioFormat;
        }
        if (null !== $this->audioLanguage) {
            $res['AudioLanguage'] = $this->audioLanguage;
        }
        if (null !== $this->audioOutputEnabled) {
            $res['AudioOutputEnabled'] = $this->audioOutputEnabled;
        }
        if (null !== $this->audioOutputOssBucket) {
            $res['AudioOutputOssBucket'] = $this->audioOutputOssBucket;
        }
        if (null !== $this->audioOutputOssPath) {
            $res['AudioOutputOssPath'] = $this->audioOutputOssPath;
        }
        if (null !== $this->audioPackage) {
            $res['AudioPackage'] = $this->audioPackage;
        }
        if (null !== $this->audioSampleRate) {
            $res['AudioSampleRate'] = $this->audioSampleRate;
        }
        if (null !== $this->audioSegmentsEnabled) {
            $res['AudioSegmentsEnabled'] = $this->audioSegmentsEnabled;
        }
        if (null !== $this->docResultEnabled) {
            $res['DocResultEnabled'] = $this->docResultEnabled;
        }
        if (null !== $this->labParams) {
            $res['LabParams'] = $this->labParams;
        }
        if (null !== $this->meetingKey) {
            $res['MeetingKey'] = $this->meetingKey;
        }
        if (null !== $this->meetingResultEnabled) {
            $res['MeetingResultEnabled'] = $this->meetingResultEnabled;
        }
        if (null !== $this->meetingResultOssBucket) {
            $res['MeetingResultOssBucket'] = $this->meetingResultOssBucket;
        }
        if (null !== $this->meetingResultOssPath) {
            $res['MeetingResultOssPath'] = $this->meetingResultOssPath;
        }
        if (null !== $this->realtimeActiveResultLevel) {
            $res['RealtimeActiveResultLevel'] = $this->realtimeActiveResultLevel;
        }
        if (null !== $this->realtimeResultEnabled) {
            $res['RealtimeResultEnabled'] = $this->realtimeResultEnabled;
        }
        if (null !== $this->realtimeResultLevel) {
            $res['RealtimeResultLevel'] = $this->realtimeResultLevel;
        }
        if (null !== $this->realtimeResultMeetingInfoEnabled) {
            $res['RealtimeResultMeetingInfoEnabled'] = $this->realtimeResultMeetingInfoEnabled;
        }
        if (null !== $this->realtimeResultWordsEnabled) {
            $res['RealtimeResultWordsEnabled'] = $this->realtimeResultWordsEnabled;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->translateActiveResultLevel) {
            $res['TranslateActiveResultLevel'] = $this->translateActiveResultLevel;
        }
        if (null !== $this->translateLanguages) {
            $res['TranslateLanguages'] = $this->translateLanguages;
        }
        if (null !== $this->translateResultEnabled) {
            $res['TranslateResultEnabled'] = $this->translateResultEnabled;
        }
        if (null !== $this->translateResultLevel) {
            $res['TranslateResultLevel'] = $this->translateResultLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMeetingTransRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbilityParams'])) {
            $model->abilityParams = $map['AbilityParams'];
        }
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['AsrParams'])) {
            $model->asrParams = $map['AsrParams'];
        }
        if (isset($map['AudioBitRate'])) {
            $model->audioBitRate = $map['AudioBitRate'];
        }
        if (isset($map['AudioFormat'])) {
            $model->audioFormat = $map['AudioFormat'];
        }
        if (isset($map['AudioLanguage'])) {
            $model->audioLanguage = $map['AudioLanguage'];
        }
        if (isset($map['AudioOutputEnabled'])) {
            $model->audioOutputEnabled = $map['AudioOutputEnabled'];
        }
        if (isset($map['AudioOutputOssBucket'])) {
            $model->audioOutputOssBucket = $map['AudioOutputOssBucket'];
        }
        if (isset($map['AudioOutputOssPath'])) {
            $model->audioOutputOssPath = $map['AudioOutputOssPath'];
        }
        if (isset($map['AudioPackage'])) {
            $model->audioPackage = $map['AudioPackage'];
        }
        if (isset($map['AudioSampleRate'])) {
            $model->audioSampleRate = $map['AudioSampleRate'];
        }
        if (isset($map['AudioSegmentsEnabled'])) {
            $model->audioSegmentsEnabled = $map['AudioSegmentsEnabled'];
        }
        if (isset($map['DocResultEnabled'])) {
            $model->docResultEnabled = $map['DocResultEnabled'];
        }
        if (isset($map['LabParams'])) {
            $model->labParams = $map['LabParams'];
        }
        if (isset($map['MeetingKey'])) {
            $model->meetingKey = $map['MeetingKey'];
        }
        if (isset($map['MeetingResultEnabled'])) {
            $model->meetingResultEnabled = $map['MeetingResultEnabled'];
        }
        if (isset($map['MeetingResultOssBucket'])) {
            $model->meetingResultOssBucket = $map['MeetingResultOssBucket'];
        }
        if (isset($map['MeetingResultOssPath'])) {
            $model->meetingResultOssPath = $map['MeetingResultOssPath'];
        }
        if (isset($map['RealtimeActiveResultLevel'])) {
            $model->realtimeActiveResultLevel = $map['RealtimeActiveResultLevel'];
        }
        if (isset($map['RealtimeResultEnabled'])) {
            $model->realtimeResultEnabled = $map['RealtimeResultEnabled'];
        }
        if (isset($map['RealtimeResultLevel'])) {
            $model->realtimeResultLevel = $map['RealtimeResultLevel'];
        }
        if (isset($map['RealtimeResultMeetingInfoEnabled'])) {
            $model->realtimeResultMeetingInfoEnabled = $map['RealtimeResultMeetingInfoEnabled'];
        }
        if (isset($map['RealtimeResultWordsEnabled'])) {
            $model->realtimeResultWordsEnabled = $map['RealtimeResultWordsEnabled'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['TranslateActiveResultLevel'])) {
            $model->translateActiveResultLevel = $map['TranslateActiveResultLevel'];
        }
        if (isset($map['TranslateLanguages'])) {
            $model->translateLanguages = $map['TranslateLanguages'];
        }
        if (isset($map['TranslateResultEnabled'])) {
            $model->translateResultEnabled = $map['TranslateResultEnabled'];
        }
        if (isset($map['TranslateResultLevel'])) {
            $model->translateResultLevel = $map['TranslateResultLevel'];
        }

        return $model;
    }
}
