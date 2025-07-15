<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class StartRtcCloudRecordingShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example ********-7074-****-9ef5-85c19a4*****
     *
     * @var string
     */
    public $appId;

    /**
     * @description This parameter is required.
     *
     * @example room1024
     *
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $mixLayoutParamsShrink;

    /**
     * @var string
     */
    public $mixTranscodeParamsShrink;

    /**
     * @example http://xxxx/test/mycallback
     *
     * @var string
     */
    public $notifyUrl;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $recordParamsShrink;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $storageParamsShrink;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $subscribeParamsShrink;
    protected $_name = [
        'appId' => 'AppId',
        'channelId' => 'ChannelId',
        'mixLayoutParamsShrink' => 'MixLayoutParams',
        'mixTranscodeParamsShrink' => 'MixTranscodeParams',
        'notifyUrl' => 'NotifyUrl',
        'recordParamsShrink' => 'RecordParams',
        'storageParamsShrink' => 'StorageParams',
        'subscribeParamsShrink' => 'SubscribeParams',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->mixLayoutParamsShrink) {
            $res['MixLayoutParams'] = $this->mixLayoutParamsShrink;
        }
        if (null !== $this->mixTranscodeParamsShrink) {
            $res['MixTranscodeParams'] = $this->mixTranscodeParamsShrink;
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

    /**
     * @param array $map
     *
     * @return StartRtcCloudRecordingShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['MixLayoutParams'])) {
            $model->mixLayoutParamsShrink = $map['MixLayoutParams'];
        }
        if (isset($map['MixTranscodeParams'])) {
            $model->mixTranscodeParamsShrink = $map['MixTranscodeParams'];
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
