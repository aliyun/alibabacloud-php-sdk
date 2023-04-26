<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListLiveRecordVideoResponseBody\liveRecordVideoList;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListLiveRecordVideoResponseBody\liveRecordVideoList\liveRecordVideo\video;
use AlibabaCloud\Tea\Model;

class liveRecordVideo extends Model
{
    /**
     * @description The information about the video.
     *
     * @example testApp
     *
     * @var string
     */
    public $appName;

    /**
     * @description The tags of the video. Separate multiple tags with commas (,).
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The last time when the video was updated. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example ****
     *
     * @var string
     */
    public $playlistId;

    /**
     * @description The domain name of the recorded live stream.
     *
     * @example 2017-12-08T08:44:56Z
     *
     * @var string
     */
    public $recordEndTime;

    /**
     * @description The array of video snapshot URLs.
     *
     * @example 2017-12-08T07:40:56Z
     *
     * @var string
     */
    public $recordStartTime;

    /**
     * @description The end of the time range to query. The query is performed based on the time range during which the required live streams were recorded. The end time must be later than the start time. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * @example live-test
     *
     * @var string
     */
    public $streamName;

    /**
     * @description The name of the application that was used to record the live stream.
     *
     * @var video
     */
    public $video;
    protected $_name = [
        'appName'         => 'AppName',
        'domainName'      => 'DomainName',
        'playlistId'      => 'PlaylistId',
        'recordEndTime'   => 'RecordEndTime',
        'recordStartTime' => 'RecordStartTime',
        'streamName'      => 'StreamName',
        'video'           => 'Video',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->playlistId) {
            $res['PlaylistId'] = $this->playlistId;
        }
        if (null !== $this->recordEndTime) {
            $res['RecordEndTime'] = $this->recordEndTime;
        }
        if (null !== $this->recordStartTime) {
            $res['RecordStartTime'] = $this->recordStartTime;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->video) {
            $res['Video'] = null !== $this->video ? $this->video->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveRecordVideo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['PlaylistId'])) {
            $model->playlistId = $map['PlaylistId'];
        }
        if (isset($map['RecordEndTime'])) {
            $model->recordEndTime = $map['RecordEndTime'];
        }
        if (isset($map['RecordStartTime'])) {
            $model->recordStartTime = $map['RecordStartTime'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['Video'])) {
            $model->video = video::fromMap($map['Video']);
        }

        return $model;
    }
}
