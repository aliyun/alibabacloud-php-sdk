<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CreateRtcAsrTaskRequest extends Model
{
    /**
     * @description The AuthKey that is used to generate the MD5 signature in callbacks.
     *
     * @example abcd
     *
     * @var string
     */
    public $authKey;

    /**
     * @description The maximum latency at which the task is automatically stopped. Unit: seconds. Valid values: 1 to 10.
     *
     * @example 5
     *
     * @var int
     */
    public $autoTerminateDelay;

    /**
     * @description Specifies whether to automatically stop the task when the latency exceeds the specified limit. Default value: false.
     *
     * @example true
     *
     * @var bool
     */
    public $autoTerminateEnabled;

    /**
     * @description The callback URL.
     *
     * This parameter is required.
     *
     * @example http://xxx.com
     *
     * @var string
     */
    public $callbackURL;

    /**
     * @description The ID of the channel.
     *
     * >  This parameter is required and takes effect only if you set the Mode parameter to rtc.
     *
     * @example channelId
     *
     * @var string
     */
    public $channelID;

    /**
     * @description The source language of the audio. Valid values:
     *
     *   ja: Japanese
     *   yue: Cantonese
     *   fspk: mixed Mandarin and English
     *   en: English
     *   cn: Mandarin
     *
     * This parameter is required.
     *
     * @example cn
     *
     * @var string
     */
    public $language;

    /**
     * @description The type of the stream. Valid values: live and rtc. The value live specifies a regular live stream, such as a Real-Time Messaging Protocol (RTMP) stream.
     *
     * This parameter is required.
     *
     * @example live
     *
     * @var string
     */
    public $mode;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The interval at which callbacks are returned. Unit: milliseconds. Valid values: -1 and 0 to 500.
     *
     *   \\-1: accepts callbacks only for whole sentences, but not for incomplete sentences.
     *   0 or an empty value: returns callbacks in real time.
     *   A value that is greater than 0 and less than or equal to 500: returns callbacks at the specified interval.
     *
     * @example 5
     *
     * @var int
     */
    public $reportInterval;

    /**
     * @description The ID of the user who ingests the stream.
     *
     * >  This parameter is required and takes effect only if you set the Mode parameter to rtc. You can specify only one user ID.
     *
     * @example user1
     *
     * @var string
     */
    public $rtcUserId;

    /**
     * @description The ID of the ApsaraVideo Real-time Communication (ARTC) application.
     *
     * >  This parameter is required and takes effect only if you set the Mode parameter to rtc.
     *
     * @example appId
     *
     * @var string
     */
    public $SDKAppID;

    /**
     * @description The URL of the live stream.
     *
     * >  This parameter is required and takes effect only if you set the Mode parameter to live.
     *
     * @example rtmp://xxx
     *
     * @var string
     */
    public $streamURL;

    /**
     * @description The language into which the subtitles are translated. Valid values:
     *
     *   cn: Chinese
     *   en: English
     *   ja: Japanese
     *
     * @example en
     *
     * @var string
     */
    public $targetLanguages;

    /**
     * @description Specifies whether to enable the translation feature.
     *
     * @example true
     *
     * @var bool
     */
    public $translateEnabled;
    protected $_name = [
        'authKey' => 'AuthKey',
        'autoTerminateDelay' => 'AutoTerminateDelay',
        'autoTerminateEnabled' => 'AutoTerminateEnabled',
        'callbackURL' => 'CallbackURL',
        'channelID' => 'ChannelID',
        'language' => 'Language',
        'mode' => 'Mode',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'reportInterval' => 'ReportInterval',
        'rtcUserId' => 'RtcUserId',
        'SDKAppID' => 'SDKAppID',
        'streamURL' => 'StreamURL',
        'targetLanguages' => 'TargetLanguages',
        'translateEnabled' => 'TranslateEnabled',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->authKey) {
            $res['AuthKey'] = $this->authKey;
        }
        if (null !== $this->autoTerminateDelay) {
            $res['AutoTerminateDelay'] = $this->autoTerminateDelay;
        }
        if (null !== $this->autoTerminateEnabled) {
            $res['AutoTerminateEnabled'] = $this->autoTerminateEnabled;
        }
        if (null !== $this->callbackURL) {
            $res['CallbackURL'] = $this->callbackURL;
        }
        if (null !== $this->channelID) {
            $res['ChannelID'] = $this->channelID;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->reportInterval) {
            $res['ReportInterval'] = $this->reportInterval;
        }
        if (null !== $this->rtcUserId) {
            $res['RtcUserId'] = $this->rtcUserId;
        }
        if (null !== $this->SDKAppID) {
            $res['SDKAppID'] = $this->SDKAppID;
        }
        if (null !== $this->streamURL) {
            $res['StreamURL'] = $this->streamURL;
        }
        if (null !== $this->targetLanguages) {
            $res['TargetLanguages'] = $this->targetLanguages;
        }
        if (null !== $this->translateEnabled) {
            $res['TranslateEnabled'] = $this->translateEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRtcAsrTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthKey'])) {
            $model->authKey = $map['AuthKey'];
        }
        if (isset($map['AutoTerminateDelay'])) {
            $model->autoTerminateDelay = $map['AutoTerminateDelay'];
        }
        if (isset($map['AutoTerminateEnabled'])) {
            $model->autoTerminateEnabled = $map['AutoTerminateEnabled'];
        }
        if (isset($map['CallbackURL'])) {
            $model->callbackURL = $map['CallbackURL'];
        }
        if (isset($map['ChannelID'])) {
            $model->channelID = $map['ChannelID'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReportInterval'])) {
            $model->reportInterval = $map['ReportInterval'];
        }
        if (isset($map['RtcUserId'])) {
            $model->rtcUserId = $map['RtcUserId'];
        }
        if (isset($map['SDKAppID'])) {
            $model->SDKAppID = $map['SDKAppID'];
        }
        if (isset($map['StreamURL'])) {
            $model->streamURL = $map['StreamURL'];
        }
        if (isset($map['TargetLanguages'])) {
            $model->targetLanguages = $map['TargetLanguages'];
        }
        if (isset($map['TranslateEnabled'])) {
            $model->translateEnabled = $map['TranslateEnabled'];
        }

        return $model;
    }
}
