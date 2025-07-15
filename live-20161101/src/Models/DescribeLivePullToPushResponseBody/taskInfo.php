<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLivePullToPushResponseBody;

use AlibabaCloud\Tea\Model;

class taskInfo extends Model
{
    /**
     * @description The HTTP callback URL.
     *
     * @example https://callback*****.com
     *
     * @var string
     */
    public $callbackURL;

    /**
     * @description The destination URL to which the stream is relayed.
     *
     * @example rtmp://pushtest.********.aliyunlive.com/pulltest493/pulltest-w434
     *
     * @var string
     */
    public $dstUrl;

    /**
     * @description The end time of the task. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2024-08-27T14:30:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The file index, which indicates the sequence of the file where the playback starts.
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
     * @example 2
     *
     * @var int
     */
    public $offset;

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
     * @description The number of retries allowed.
     *
     * @example 3
     *
     * @var int
     */
    public $retryCount;

    /**
     * @description The retry interval. Unit: seconds.
     *
     * @example 60
     *
     * @var int
     */
    public $retryInterval;

    /**
     * @description The protocol of the source stream.
     *
     * @example RTMP
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
     * @example live
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The source URLs.
     *
     * @example rtmp://pulltest.****.aliyunlive.com/pulltest493/pulltest-w434
     *
     * @var string[]
     */
    public $sourceUrls;

    /**
     * @description The start time of the task. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2024-08-26T10:30:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The task ID.
     *
     * @example fd245384-4067-4f91-9d75-9666a6bc9****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The task name.
     *
     * @example test
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'callbackURL' => 'CallbackURL',
        'dstUrl' => 'DstUrl',
        'endTime' => 'EndTime',
        'fileIndex' => 'FileIndex',
        'offset' => 'Offset',
        'repeatNumber' => 'RepeatNumber',
        'retryCount' => 'RetryCount',
        'retryInterval' => 'RetryInterval',
        'sourceProtocol' => 'SourceProtocol',
        'sourceType' => 'SourceType',
        'sourceUrls' => 'SourceUrls',
        'startTime' => 'StartTime',
        'taskId' => 'TaskId',
        'taskName' => 'TaskName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->callbackURL) {
            $res['CallbackURL'] = $this->callbackURL;
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
        if (null !== $this->sourceUrls) {
            $res['SourceUrls'] = $this->sourceUrls;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallbackURL'])) {
            $model->callbackURL = $map['CallbackURL'];
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
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
