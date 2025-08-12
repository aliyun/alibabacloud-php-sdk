<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem\aacHeaders;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem\audioBitRate;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem\audioFrames;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem\audioInterval;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem\audioStamps;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem\avcHeaders;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem\errorFlags;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem\videoAndAudioStamp;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem\videoBitRate;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem\videoFrames;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem\videoInterval;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem\videoStamps;

class publishItem extends Model
{
    /**
     * @var aacHeaders
     */
    public $aacHeaders;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var audioBitRate
     */
    public $audioBitRate;

    /**
     * @var audioFrames
     */
    public $audioFrames;

    /**
     * @var audioInterval
     */
    public $audioInterval;

    /**
     * @var audioStamps
     */
    public $audioStamps;

    /**
     * @var avcHeaders
     */
    public $avcHeaders;

    /**
     * @var string
     */
    public $codecInfo;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var errorFlags
     */
    public $errorFlags;

    /**
     * @var string
     */
    public $publishInterval;

    /**
     * @var string
     */
    public $publishIp;

    /**
     * @var string
     */
    public $publishStatus;

    /**
     * @var string
     */
    public $publishTime;

    /**
     * @var string
     */
    public $stopTime;

    /**
     * @var string
     */
    public $streamName;

    /**
     * @var string
     */
    public $uniqueId;

    /**
     * @var videoAndAudioStamp
     */
    public $videoAndAudioStamp;

    /**
     * @var videoBitRate
     */
    public $videoBitRate;

    /**
     * @var videoFrames
     */
    public $videoFrames;

    /**
     * @var videoInterval
     */
    public $videoInterval;

    /**
     * @var videoStamps
     */
    public $videoStamps;
    protected $_name = [
        'aacHeaders' => 'AacHeaders',
        'appName' => 'AppName',
        'audioBitRate' => 'AudioBitRate',
        'audioFrames' => 'AudioFrames',
        'audioInterval' => 'AudioInterval',
        'audioStamps' => 'AudioStamps',
        'avcHeaders' => 'AvcHeaders',
        'codecInfo' => 'CodecInfo',
        'domainName' => 'DomainName',
        'errorFlags' => 'ErrorFlags',
        'publishInterval' => 'PublishInterval',
        'publishIp' => 'PublishIp',
        'publishStatus' => 'PublishStatus',
        'publishTime' => 'PublishTime',
        'stopTime' => 'StopTime',
        'streamName' => 'StreamName',
        'uniqueId' => 'UniqueId',
        'videoAndAudioStamp' => 'VideoAndAudioStamp',
        'videoBitRate' => 'VideoBitRate',
        'videoFrames' => 'VideoFrames',
        'videoInterval' => 'VideoInterval',
        'videoStamps' => 'VideoStamps',
    ];

    public function validate()
    {
        if (null !== $this->aacHeaders) {
            $this->aacHeaders->validate();
        }
        if (null !== $this->audioBitRate) {
            $this->audioBitRate->validate();
        }
        if (null !== $this->audioFrames) {
            $this->audioFrames->validate();
        }
        if (null !== $this->audioInterval) {
            $this->audioInterval->validate();
        }
        if (null !== $this->audioStamps) {
            $this->audioStamps->validate();
        }
        if (null !== $this->avcHeaders) {
            $this->avcHeaders->validate();
        }
        if (null !== $this->errorFlags) {
            $this->errorFlags->validate();
        }
        if (null !== $this->videoAndAudioStamp) {
            $this->videoAndAudioStamp->validate();
        }
        if (null !== $this->videoBitRate) {
            $this->videoBitRate->validate();
        }
        if (null !== $this->videoFrames) {
            $this->videoFrames->validate();
        }
        if (null !== $this->videoInterval) {
            $this->videoInterval->validate();
        }
        if (null !== $this->videoStamps) {
            $this->videoStamps->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aacHeaders) {
            $res['AacHeaders'] = null !== $this->aacHeaders ? $this->aacHeaders->toArray($noStream) : $this->aacHeaders;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->audioBitRate) {
            $res['AudioBitRate'] = null !== $this->audioBitRate ? $this->audioBitRate->toArray($noStream) : $this->audioBitRate;
        }

        if (null !== $this->audioFrames) {
            $res['AudioFrames'] = null !== $this->audioFrames ? $this->audioFrames->toArray($noStream) : $this->audioFrames;
        }

        if (null !== $this->audioInterval) {
            $res['AudioInterval'] = null !== $this->audioInterval ? $this->audioInterval->toArray($noStream) : $this->audioInterval;
        }

        if (null !== $this->audioStamps) {
            $res['AudioStamps'] = null !== $this->audioStamps ? $this->audioStamps->toArray($noStream) : $this->audioStamps;
        }

        if (null !== $this->avcHeaders) {
            $res['AvcHeaders'] = null !== $this->avcHeaders ? $this->avcHeaders->toArray($noStream) : $this->avcHeaders;
        }

        if (null !== $this->codecInfo) {
            $res['CodecInfo'] = $this->codecInfo;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->errorFlags) {
            $res['ErrorFlags'] = null !== $this->errorFlags ? $this->errorFlags->toArray($noStream) : $this->errorFlags;
        }

        if (null !== $this->publishInterval) {
            $res['PublishInterval'] = $this->publishInterval;
        }

        if (null !== $this->publishIp) {
            $res['PublishIp'] = $this->publishIp;
        }

        if (null !== $this->publishStatus) {
            $res['PublishStatus'] = $this->publishStatus;
        }

        if (null !== $this->publishTime) {
            $res['PublishTime'] = $this->publishTime;
        }

        if (null !== $this->stopTime) {
            $res['StopTime'] = $this->stopTime;
        }

        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }

        if (null !== $this->uniqueId) {
            $res['UniqueId'] = $this->uniqueId;
        }

        if (null !== $this->videoAndAudioStamp) {
            $res['VideoAndAudioStamp'] = null !== $this->videoAndAudioStamp ? $this->videoAndAudioStamp->toArray($noStream) : $this->videoAndAudioStamp;
        }

        if (null !== $this->videoBitRate) {
            $res['VideoBitRate'] = null !== $this->videoBitRate ? $this->videoBitRate->toArray($noStream) : $this->videoBitRate;
        }

        if (null !== $this->videoFrames) {
            $res['VideoFrames'] = null !== $this->videoFrames ? $this->videoFrames->toArray($noStream) : $this->videoFrames;
        }

        if (null !== $this->videoInterval) {
            $res['VideoInterval'] = null !== $this->videoInterval ? $this->videoInterval->toArray($noStream) : $this->videoInterval;
        }

        if (null !== $this->videoStamps) {
            $res['VideoStamps'] = null !== $this->videoStamps ? $this->videoStamps->toArray($noStream) : $this->videoStamps;
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
        if (isset($map['AacHeaders'])) {
            $model->aacHeaders = aacHeaders::fromMap($map['AacHeaders']);
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AudioBitRate'])) {
            $model->audioBitRate = audioBitRate::fromMap($map['AudioBitRate']);
        }

        if (isset($map['AudioFrames'])) {
            $model->audioFrames = audioFrames::fromMap($map['AudioFrames']);
        }

        if (isset($map['AudioInterval'])) {
            $model->audioInterval = audioInterval::fromMap($map['AudioInterval']);
        }

        if (isset($map['AudioStamps'])) {
            $model->audioStamps = audioStamps::fromMap($map['AudioStamps']);
        }

        if (isset($map['AvcHeaders'])) {
            $model->avcHeaders = avcHeaders::fromMap($map['AvcHeaders']);
        }

        if (isset($map['CodecInfo'])) {
            $model->codecInfo = $map['CodecInfo'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['ErrorFlags'])) {
            $model->errorFlags = errorFlags::fromMap($map['ErrorFlags']);
        }

        if (isset($map['PublishInterval'])) {
            $model->publishInterval = $map['PublishInterval'];
        }

        if (isset($map['PublishIp'])) {
            $model->publishIp = $map['PublishIp'];
        }

        if (isset($map['PublishStatus'])) {
            $model->publishStatus = $map['PublishStatus'];
        }

        if (isset($map['PublishTime'])) {
            $model->publishTime = $map['PublishTime'];
        }

        if (isset($map['StopTime'])) {
            $model->stopTime = $map['StopTime'];
        }

        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }

        if (isset($map['UniqueId'])) {
            $model->uniqueId = $map['UniqueId'];
        }

        if (isset($map['VideoAndAudioStamp'])) {
            $model->videoAndAudioStamp = videoAndAudioStamp::fromMap($map['VideoAndAudioStamp']);
        }

        if (isset($map['VideoBitRate'])) {
            $model->videoBitRate = videoBitRate::fromMap($map['VideoBitRate']);
        }

        if (isset($map['VideoFrames'])) {
            $model->videoFrames = videoFrames::fromMap($map['VideoFrames']);
        }

        if (isset($map['VideoInterval'])) {
            $model->videoInterval = videoInterval::fromMap($map['VideoInterval']);
        }

        if (isset($map['VideoStamps'])) {
            $model->videoStamps = videoStamps::fromMap($map['VideoStamps']);
        }

        return $model;
    }
}
