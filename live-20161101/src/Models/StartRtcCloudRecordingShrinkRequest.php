<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class StartRtcCloudRecordingShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var int
     */
    public $maxIdleTime;

    /**
     * @var string
     */
    public $mixLayoutParamsShrink;

    /**
     * @var string
     */
    public $mixTranscodeParamsShrink;

    /**
     * @var string
     */
    public $notifyAuthKey;

    /**
     * @var string
     */
    public $notifyUrl;

    /**
     * @var string
     */
    public $recordParamsShrink;

    /**
     * @var string
     */
    public $storageParamsShrink;

    /**
     * @var string
     */
    public $subscribeParamsShrink;
    protected $_name = [
        'appId' => 'AppId',
        'channelId' => 'ChannelId',
        'maxIdleTime' => 'MaxIdleTime',
        'mixLayoutParamsShrink' => 'MixLayoutParams',
        'mixTranscodeParamsShrink' => 'MixTranscodeParams',
        'notifyAuthKey' => 'NotifyAuthKey',
        'notifyUrl' => 'NotifyUrl',
        'recordParamsShrink' => 'RecordParams',
        'storageParamsShrink' => 'StorageParams',
        'subscribeParamsShrink' => 'SubscribeParams',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->maxIdleTime) {
            $res['MaxIdleTime'] = $this->maxIdleTime;
        }

        if (null !== $this->mixLayoutParamsShrink) {
            $res['MixLayoutParams'] = $this->mixLayoutParamsShrink;
        }

        if (null !== $this->mixTranscodeParamsShrink) {
            $res['MixTranscodeParams'] = $this->mixTranscodeParamsShrink;
        }

        if (null !== $this->notifyAuthKey) {
            $res['NotifyAuthKey'] = $this->notifyAuthKey;
        }

        if (null !== $this->notifyUrl) {
            $res['NotifyUrl'] = $this->notifyUrl;
        }

        if (null !== $this->recordParamsShrink) {
            $res['RecordParams'] = $this->recordParamsShrink;
        }

        if (null !== $this->storageParamsShrink) {
            $res['StorageParams'] = $this->storageParamsShrink;
        }

        if (null !== $this->subscribeParamsShrink) {
            $res['SubscribeParams'] = $this->subscribeParamsShrink;
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

        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        if (isset($map['MaxIdleTime'])) {
            $model->maxIdleTime = $map['MaxIdleTime'];
        }

        if (isset($map['MixLayoutParams'])) {
            $model->mixLayoutParamsShrink = $map['MixLayoutParams'];
        }

        if (isset($map['MixTranscodeParams'])) {
            $model->mixTranscodeParamsShrink = $map['MixTranscodeParams'];
        }

        if (isset($map['NotifyAuthKey'])) {
            $model->notifyAuthKey = $map['NotifyAuthKey'];
        }

        if (isset($map['NotifyUrl'])) {
            $model->notifyUrl = $map['NotifyUrl'];
        }

        if (isset($map['RecordParams'])) {
            $model->recordParamsShrink = $map['RecordParams'];
        }

        if (isset($map['StorageParams'])) {
            $model->storageParamsShrink = $map['StorageParams'];
        }

        if (isset($map['SubscribeParams'])) {
            $model->subscribeParamsShrink = $map['SubscribeParams'];
        }

        return $model;
    }
}
