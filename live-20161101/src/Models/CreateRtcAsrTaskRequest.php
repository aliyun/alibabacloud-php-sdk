<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class CreateRtcAsrTaskRequest extends Model
{
    /**
     * @var string
     */
    public $authKey;

    /**
     * @var int
     */
    public $autoTerminateDelay;

    /**
     * @var bool
     */
    public $autoTerminateEnabled;

    /**
     * @var string
     */
    public $callbackURL;

    /**
     * @var string
     */
    public $channelID;

    /**
     * @var string
     */
    public $language;

    /**
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
     * @var int
     */
    public $reportInterval;

    /**
     * @var string
     */
    public $rtcUserId;

    /**
     * @var string
     */
    public $SDKAppID;

    /**
     * @var string
     */
    public $streamURL;

    /**
     * @var string
     */
    public $targetLanguages;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
