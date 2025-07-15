<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CreateLivePullToPushShrinkRequest extends Model
{
    /**
     * @description The HTTP callback URL. By default, this parameter is left empty.
     *
     * >
     *
     *   The URL is used to receive callbacks related to the task.
     *
     *   The URL can be up to 2,000 characters in length.
     *
     *   If you do not specify this parameter, no callbacks are returned for events related to the task.
     *
     * @example https://callback*****.com
     *
     * @var string
     */
    public $callbackUrl;

    /**
     * @description The destination URL to which the stream is relayed.
     *
     * >
     *
     *   The supported protocol for the URL is RTMP.
     *
     *   The URL can be up to 2,000 characters in length.
     *
     * This parameter is required.
     *
     * @example rtmp://pushtest.********.aliyunlive.com/pulltest493/pulltest-w434
     *
     * @var string
     */
    public $dstUrl;

    /**
     * @description The end time of the task.
     *
     * >
     *
     *   Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     *   The time range specified by the StartTime and EndTime parameters cannot exceed seven days.
     *
     *   The end time must be later than the start time.
     *
     *   The end time must be later than the current time.
     *
     * This parameter is required.
     *
     * @example 2024-08-27T14:30:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The file index, which specifies the sequence of the file where the playback starts.
     *
     * @example 0
     *
     * @var int
     */
    public $fileIndex;

    /**
     * @description The offset of the position where the system starts to read the video resource. Unit: seconds. Valid values: positive numbers.
     *
     * >
     *
     *   This parameter indicates an offset from the first frame of the first video resource in the list.
     *
     *   This parameter is applicable to only video resources from ApsaraVideo VOD or a third party.
     *
     * @example 2
     *
     * @var int
     */
    public $offset;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region where the task is started. Valid values:
     *
     *   ap-southeast-1: Singapore
     *   ap-southeast-5: Indonesia (Jakarta)
     *   cn-beijing: China (Beijing)
     *   cn-shanghai: China (Shanghai)
     *
     * This parameter is required.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The number of playbacks after the first playback is complete. Valid values:
     *
     *   0 (default): specifies that the video list is played only once.
     *   \\-1: specifies that the video list is played in loop mode.
     *   Positive integer: specifies the number of times the video list repeats after the first playback is complete.
     *
     * >  This parameter is applicable to only video resources from ApsaraVideo VOD or a third party.
     *
     * @example 0
     *
     * @var int
     */
    public $repeatNumber;

    /**
     * @description The number of retries allowed. Default value: 3.
     *
     * @example 3
     *
     * @var int
     */
    public $retryCount;

    /**
     * @description The retry interval. Unit: seconds. Valid values: [60,300]. Default value: 60.
     *
     * @example 60
     *
     * @var int
     */
    public $retryInterval;

    /**
     * @description The protocol of the source stream.
     *
     * Valid values:
     *
     *   rtmp
     *   rtsp
     *   srt
     *   http-flv
     *   flv
     *
     * >  This parameter is required if you set the **SourceType** parameter to live, but does not take effect if you set the SourceType parameter to vod or url.
     *
     * @example rtmp
     *
     * @var string
     */
    public $sourceProtocol;

    /**
     * @description The type of the source stream. Valid values:
     *
     *   live: a live stream
     *   vod: a list of ApsaraVideo VOD resources
     *   url: a list of video resources from a third party
     *
     * This parameter is required.
     *
     * @example live
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The source URLs.
     *
     * >
     *
     *   If SourceType is set to live, you can specify only one streaming URL.
     *
     *   If SourceType is set to vod or url, you can specify up to 30 IDs or URLs.
     *
     *   If SourceType is set to live, the supported protocols for URLs are Real-Time Messaging Protocol (RTMP), Real-Time Streaming Protocol (RTSP), Secure Reliable Transport Protocol (SRT), and HTTP-FLV.
     *
     *   If SourceType is set to vod, specify the IDs of media assets from ApsaraVideo VOD.
     *
     *   If SourceType is set to url, the supported protocols for URLs are MP4 and HTTP-FLV.
     *
     * This parameter is required.
     *
     * @example testurls
     *
     * @var string
     */
    public $sourceUrlsShrink;

    /**
     * @description The start time of the task.
     *
     * >
     *
     *   Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     *   The time range specified by the StartTime and EndTime parameters cannot exceed seven days.
     *
     * This parameter is required.
     *
     * @example 2024-08-26T10:30:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The name of the task. Default value: "". Fuzzy search for task names is supported.
     *
     * @example test
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'callbackUrl' => 'CallbackUrl',
        'dstUrl' => 'DstUrl',
        'endTime' => 'EndTime',
        'fileIndex' => 'FileIndex',
        'offset' => 'Offset',
        'ownerId' => 'OwnerId',
        'region' => 'Region',
        'regionId' => 'RegionId',
        'repeatNumber' => 'RepeatNumber',
        'retryCount' => 'RetryCount',
        'retryInterval' => 'RetryInterval',
        'sourceProtocol' => 'SourceProtocol',
        'sourceType' => 'SourceType',
        'sourceUrlsShrink' => 'SourceUrls',
        'startTime' => 'StartTime',
        'taskName' => 'TaskName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }
        if (null !== $this->dstUrl) {
            $res['DstUrl'] = $this->dstUrl;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->fileIndex) {
            $res['FileIndex'] = $this->fileIndex;
        }
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->repeatNumber) {
            $res['RepeatNumber'] = $this->repeatNumber;
        }
        if (null !== $this->retryCount) {
            $res['RetryCount'] = $this->retryCount;
        }
        if (null !== $this->retryInterval) {
            $res['RetryInterval'] = $this->retryInterval;
        }
        if (null !== $this->sourceProtocol) {
            $res['SourceProtocol'] = $this->sourceProtocol;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->sourceUrlsShrink) {
            $res['SourceUrls'] = $this->sourceUrlsShrink;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLivePullToPushShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }
        if (isset($map['DstUrl'])) {
            $model->dstUrl = $map['DstUrl'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['FileIndex'])) {
            $model->fileIndex = $map['FileIndex'];
        }
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RepeatNumber'])) {
            $model->repeatNumber = $map['RepeatNumber'];
        }
        if (isset($map['RetryCount'])) {
            $model->retryCount = $map['RetryCount'];
        }
        if (isset($map['RetryInterval'])) {
            $model->retryInterval = $map['RetryInterval'];
        }
        if (isset($map['SourceProtocol'])) {
            $model->sourceProtocol = $map['SourceProtocol'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['SourceUrls'])) {
            $model->sourceUrlsShrink = $map['SourceUrls'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
