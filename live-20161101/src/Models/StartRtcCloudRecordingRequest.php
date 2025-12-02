<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\StartRtcCloudRecordingRequest\mixLayoutParams;
use AlibabaCloud\SDK\Live\V20161101\Models\StartRtcCloudRecordingRequest\mixTranscodeParams;
use AlibabaCloud\SDK\Live\V20161101\Models\StartRtcCloudRecordingRequest\recordParams;
use AlibabaCloud\SDK\Live\V20161101\Models\StartRtcCloudRecordingRequest\storageParams;
use AlibabaCloud\SDK\Live\V20161101\Models\StartRtcCloudRecordingRequest\subscribeParams;

class StartRtcCloudRecordingRequest extends Model
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
     * @var mixLayoutParams
     */
    public $mixLayoutParams;

    /**
     * @var mixTranscodeParams
     */
    public $mixTranscodeParams;

    /**
     * @var string
     */
    public $notifyAuthKey;

    /**
     * @var string[]
     */
    public $notifyFileUploadedFormat;

    /**
     * @var string
     */
    public $notifyUrl;

    /**
     * @var recordParams
     */
    public $recordParams;

    /**
     * @var storageParams
     */
    public $storageParams;

    /**
     * @var subscribeParams
     */
    public $subscribeParams;
    protected $_name = [
        'appId' => 'AppId',
        'channelId' => 'ChannelId',
        'maxIdleTime' => 'MaxIdleTime',
        'mixLayoutParams' => 'MixLayoutParams',
        'mixTranscodeParams' => 'MixTranscodeParams',
        'notifyAuthKey' => 'NotifyAuthKey',
        'notifyFileUploadedFormat' => 'NotifyFileUploadedFormat',
        'notifyUrl' => 'NotifyUrl',
        'recordParams' => 'RecordParams',
        'storageParams' => 'StorageParams',
        'subscribeParams' => 'SubscribeParams',
    ];

    public function validate()
    {
        if (null !== $this->mixLayoutParams) {
            $this->mixLayoutParams->validate();
        }
        if (null !== $this->mixTranscodeParams) {
            $this->mixTranscodeParams->validate();
        }
        if (\is_array($this->notifyFileUploadedFormat)) {
            Model::validateArray($this->notifyFileUploadedFormat);
        }
        if (null !== $this->recordParams) {
            $this->recordParams->validate();
        }
        if (null !== $this->storageParams) {
            $this->storageParams->validate();
        }
        if (null !== $this->subscribeParams) {
            $this->subscribeParams->validate();
        }
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

        if (null !== $this->mixLayoutParams) {
            $res['MixLayoutParams'] = null !== $this->mixLayoutParams ? $this->mixLayoutParams->toArray($noStream) : $this->mixLayoutParams;
        }

        if (null !== $this->mixTranscodeParams) {
            $res['MixTranscodeParams'] = null !== $this->mixTranscodeParams ? $this->mixTranscodeParams->toArray($noStream) : $this->mixTranscodeParams;
        }

        if (null !== $this->notifyAuthKey) {
            $res['NotifyAuthKey'] = $this->notifyAuthKey;
        }

        if (null !== $this->notifyFileUploadedFormat) {
            if (\is_array($this->notifyFileUploadedFormat)) {
                $res['NotifyFileUploadedFormat'] = [];
                $n1 = 0;
                foreach ($this->notifyFileUploadedFormat as $item1) {
                    $res['NotifyFileUploadedFormat'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->notifyUrl) {
            $res['NotifyUrl'] = $this->notifyUrl;
        }

        if (null !== $this->recordParams) {
            $res['RecordParams'] = null !== $this->recordParams ? $this->recordParams->toArray($noStream) : $this->recordParams;
        }

        if (null !== $this->storageParams) {
            $res['StorageParams'] = null !== $this->storageParams ? $this->storageParams->toArray($noStream) : $this->storageParams;
        }

        if (null !== $this->subscribeParams) {
            $res['SubscribeParams'] = null !== $this->subscribeParams ? $this->subscribeParams->toArray($noStream) : $this->subscribeParams;
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
            $model->mixLayoutParams = mixLayoutParams::fromMap($map['MixLayoutParams']);
        }

        if (isset($map['MixTranscodeParams'])) {
            $model->mixTranscodeParams = mixTranscodeParams::fromMap($map['MixTranscodeParams']);
        }

        if (isset($map['NotifyAuthKey'])) {
            $model->notifyAuthKey = $map['NotifyAuthKey'];
        }

        if (isset($map['NotifyFileUploadedFormat'])) {
            if (!empty($map['NotifyFileUploadedFormat'])) {
                $model->notifyFileUploadedFormat = [];
                $n1 = 0;
                foreach ($map['NotifyFileUploadedFormat'] as $item1) {
                    $model->notifyFileUploadedFormat[$n1] = $item1;
                    ++$n1;
                }
            }
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
