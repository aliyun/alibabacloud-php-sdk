<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\StartRtcCloudRecordingRequest\mixLayoutParams;
use AlibabaCloud\SDK\Live\V20161101\Models\StartRtcCloudRecordingRequest\mixTranscodeParams;
use AlibabaCloud\SDK\Live\V20161101\Models\StartRtcCloudRecordingRequest\recordParams;
use AlibabaCloud\SDK\Live\V20161101\Models\StartRtcCloudRecordingRequest\storageParams;
use AlibabaCloud\SDK\Live\V20161101\Models\StartRtcCloudRecordingRequest\subscribeParams;
use AlibabaCloud\Tea\Model;

class StartRtcCloudRecordingRequest extends Model
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
     * @var mixLayoutParams
     */
    public $mixLayoutParams;

    /**
     * @var mixTranscodeParams
     */
    public $mixTranscodeParams;

    /**
     * @example http://xxxx/test/mycallback
     *
     * @var string
     */
    public $notifyUrl;

    /**
     * @description This parameter is required.
     *
     * @var recordParams
     */
    public $recordParams;

    /**
     * @description This parameter is required.
     *
     * @var storageParams
     */
    public $storageParams;

    /**
     * @description This parameter is required.
     *
     * @var subscribeParams
     */
    public $subscribeParams;
    protected $_name = [
        'appId' => 'AppId',
        'channelId' => 'ChannelId',
        'mixLayoutParams' => 'MixLayoutParams',
        'mixTranscodeParams' => 'MixTranscodeParams',
        'notifyUrl' => 'NotifyUrl',
        'recordParams' => 'RecordParams',
        'storageParams' => 'StorageParams',
        'subscribeParams' => 'SubscribeParams',
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
        if (null !== $this->mixLayoutParams) {
            $res['MixLayoutParams'] = null !== $this->mixLayoutParams ? $this->mixLayoutParams->toMap() : null;
        }
        if (null !== $this->mixTranscodeParams) {
            $res['MixTranscodeParams'] = null !== $this->mixTranscodeParams ? $this->mixTranscodeParams->toMap() : null;
        }
        if (null !== $this->notifyUrl) {
            $res['NotifyUrl'] = $this->notifyUrl;
        }
        if (null !== $this->recordParams) {
            $res['RecordParams'] = null !== $this->recordParams ? $this->recordParams->toMap() : null;
        }
        if (null !== $this->storageParams) {
            $res['StorageParams'] = null !== $this->storageParams ? $this->storageParams->toMap() : null;
        }
        if (null !== $this->subscribeParams) {
            $res['SubscribeParams'] = null !== $this->subscribeParams ? $this->subscribeParams->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartRtcCloudRecordingRequest
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
            $model->mixLayoutParams = mixLayoutParams::fromMap($map['MixLayoutParams']);
        }
        if (isset($map['MixTranscodeParams'])) {
            $model->mixTranscodeParams = mixTranscodeParams::fromMap($map['MixTranscodeParams']);
        }
        if (isset($map['NotifyUrl'])) {
            $model->notifyUrl = $map['NotifyUrl'];
        }
        if (isset($map['RecordParams'])) {
            $model->recordParams = recordParams::fromMap($map['RecordParams']);
        }
        if (isset($map['StorageParams'])) {
            $model->storageParams = storageParams::fromMap($map['StorageParams']);
        }
        if (isset($map['SubscribeParams'])) {
            $model->subscribeParams = subscribeParams::fromMap($map['SubscribeParams']);
        }

        return $model;
    }
}
