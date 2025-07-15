<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems;

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
use AlibabaCloud\Tea\Model;

class publishItem extends Model
{
    /**
     * @description The details about the audio and video data of the stream ingest occurrences.
     *
     * @var aacHeaders
     */
    public $aacHeaders;

    /**
     * @description The metric value at a granularity of seconds at the query time.
     *
     * @example AppName
     *
     * @var string
     */
    public $appName;

    /**
     * @description The name of the application to which the ingested stream belongs.
     *
     * @var audioBitRate
     */
    public $audioBitRate;

    /**
     * @description The metric value at a granularity of seconds at the query time.
     *
     * @var audioFrames
     */
    public $audioFrames;

    /**
     * @description The metric value at a granularity of seconds at the query time.
     *
     * @var audioInterval
     */
    public $audioInterval;

    /**
     * @description The metric value at a granularity of seconds at the query time.
     *
     * @var audioStamps
     */
    public $audioStamps;

    /**
     * @description The metric value at a granularity of seconds at the query time.
     *
     * @var avcHeaders
     */
    public $avcHeaders;

    /**
     * @description The metric value at a granularity of seconds at the query time.
     *
     * @example H264/AAC
     *
     * @var string
     */
    public $codecInfo;

    /**
     * @description The audio and video encoding information.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The ingest domain.
     *
     * @var errorFlags
     */
    public $errorFlags;

    /**
     * @description The metric value at a granularity of seconds at the query time.
     *
     * @example -
     *
     * @var string
     */
    public $publishInterval;

    /**
     * @description The stream ingest duration. Unit: seconds. A hyphen (-) indicates that the stream is being ingested and the duration cannot be returned.
     *
     * @example cn397
     *
     * @var string
     */
    public $publishIp;

    /**
     * @description The IP address of the stream ingest client.
     *
     * @example 1
     *
     * @var string
     */
    public $publishStatus;

    /**
     * @description The stream ingest status. A value of 1 indicates that the stream is being ingested. A value of 0 indicates that the stream was ingested.
     *
     * @example 2015-12-10T15:00:00Z
     *
     * @var string
     */
    public $publishTime;

    /**
     * @description The start time of stream ingest. The time is displayed in UTC.
     *
     * @example 2015-12-10T15:10:00Z
     *
     * @var string
     */
    public $stopTime;

    /**
     * @description The end time of stream ingest. The time is displayed in UTC.
     *
     * @example StreamName
     *
     * @var string
     */
    public $streamName;

    /**
     * @description The name of the stream.
     *
     * @example 2.-395_37261_9848098_1538080899396
     *
     * @var string
     */
    public $uniqueId;

    /**
     * @description The unique ID of each stream ingest occurrence.
     *
     * @var videoAndAudioStamp
     */
    public $videoAndAudioStamp;

    /**
     * @description The metric value at a granularity of seconds at the query time.
     *
     * @var videoBitRate
     */
    public $videoBitRate;

    /**
     * @description The metric value at a granularity of seconds at the query time.
     *
     * @var videoFrames
     */
    public $videoFrames;

    /**
     * @description The metric value at a granularity of seconds at the query time.
     *
     * @var videoInterval
     */
    public $videoInterval;

    /**
     * @description The metric value at a granularity of seconds at the query time.
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aacHeaders) {
            $res['AacHeaders'] = null !== $this->aacHeaders ? $this->aacHeaders->toMap() : null;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->audioBitRate) {
            $res['AudioBitRate'] = null !== $this->audioBitRate ? $this->audioBitRate->toMap() : null;
        }
        if (null !== $this->audioFrames) {
            $res['AudioFrames'] = null !== $this->audioFrames ? $this->audioFrames->toMap() : null;
        }
        if (null !== $this->audioInterval) {
            $res['AudioInterval'] = null !== $this->audioInterval ? $this->audioInterval->toMap() : null;
        }
        if (null !== $this->audioStamps) {
            $res['AudioStamps'] = null !== $this->audioStamps ? $this->audioStamps->toMap() : null;
        }
        if (null !== $this->avcHeaders) {
            $res['AvcHeaders'] = null !== $this->avcHeaders ? $this->avcHeaders->toMap() : null;
        }
        if (null !== $this->codecInfo) {
            $res['CodecInfo'] = $this->codecInfo;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->errorFlags) {
            $res['ErrorFlags'] = null !== $this->errorFlags ? $this->errorFlags->toMap() : null;
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
            $res['VideoAndAudioStamp'] = null !== $this->videoAndAudioStamp ? $this->videoAndAudioStamp->toMap() : null;
        }
        if (null !== $this->videoBitRate) {
            $res['VideoBitRate'] = null !== $this->videoBitRate ? $this->videoBitRate->toMap() : null;
        }
        if (null !== $this->videoFrames) {
            $res['VideoFrames'] = null !== $this->videoFrames ? $this->videoFrames->toMap() : null;
        }
        if (null !== $this->videoInterval) {
            $res['VideoInterval'] = null !== $this->videoInterval ? $this->videoInterval->toMap() : null;
        }
        if (null !== $this->videoStamps) {
            $res['VideoStamps'] = null !== $this->videoStamps ? $this->videoStamps->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return publishItem
     */
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
