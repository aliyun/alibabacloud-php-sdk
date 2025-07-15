<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class UpdateLivePullToPushRequest extends Model
{
    /**
     * @description The callback URL. By default, this parameter is left empty.
     *
     * >
     *
     *   The URL is used to receive callbacks related to the task.
     *
     *   The URL can be up to 2,000 characters in length.
     *
     *   If you do not specify this parameter, no callbacks are returned for events related to the task.
     *
     *   The update takes effect for subsequent events that occur.
     *
     * @example https://callback*****.com
     *
     * @var string
     */
    public $callbackUrl;

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
     *   If the task has ended, the update does not take effect.
     *
     * @example 2024-08-27T14:30:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The file index. Default value: 0.
     *
     * >  You can modify this parameter only if the task is stopped. The update takes effect after you restart the task.
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
     *   This parameter indicates an offset from the first frame.
     *
     *   This parameter is applicable to only video resources from ApsaraVideo VOD or a third party.
     *
     *   The update takes effect only for the first video in a video list.
     *
     *   You can modify this parameter only if the task is stopped. The update takes effect immediately.
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
     * >
     *
     *   This parameter is applicable to only video resources from ApsaraVideo VOD or a third party.
     *
     *   The update can take effect immediately.
     *
     * @example 0
     *
     * @var int
     */
    public $repeatNumber;

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
     *   If the source is a live stream, the update takes effect immediately. If the source is a list of video resources from ApsaraVideo VOD or a third party, the update does not take effect until the playback of the current video ends. After the update takes effect, the video list starts to play from the beginning.
     *
     *   You can modify this parameter only if the task is stopped. The update takes effect immediately.
     *
     * @example changedtesturl
     *
     * @var string[]
     */
    public $sourceUrls;

    /**
     * @description The start time of the task.
     *
     * >
     *
     *   Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     *   The time range specified by the StartTime and EndTime parameters cannot exceed seven days.
     *
     *   If the task has already started, the update does not take effect.
     *
     * @example 2024-08-23T15:30:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The task ID.
     *
     * This parameter is required.
     *
     * @example fd245384-4067-4f91-9d75-9666a6bc****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'callbackUrl' => 'CallbackUrl',
        'endTime' => 'EndTime',
        'fileIndex' => 'FileIndex',
        'offset' => 'Offset',
        'ownerId' => 'OwnerId',
        'region' => 'Region',
        'regionId' => 'RegionId',
        'repeatNumber' => 'RepeatNumber',
        'sourceUrls' => 'SourceUrls',
        'startTime' => 'StartTime',
        'taskId' => 'TaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
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
        if (null !== $this->sourceUrls) {
            $res['SourceUrls'] = $this->sourceUrls;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateLivePullToPushRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
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
        if (isset($map['SourceUrls'])) {
            if (!empty($map['SourceUrls'])) {
                $model->sourceUrls = $map['SourceUrls'];
            }
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
