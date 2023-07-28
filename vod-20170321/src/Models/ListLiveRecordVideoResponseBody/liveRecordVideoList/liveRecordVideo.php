<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListLiveRecordVideoResponseBody\liveRecordVideoList;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListLiveRecordVideoResponseBody\liveRecordVideoList\liveRecordVideo\video;
use AlibabaCloud\Tea\Model;

class liveRecordVideo extends Model
{
    /**
     * @description The name of the application.
     *
     * @example testApp
     *
     * @var string
     */
    public $appName;

    /**
     * @description The domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The ID of the playlist.
     *
     * @example ****
     *
     * @var string
     */
    public $playlistId;

    /**
     * @description The end of the time range in which data was queried. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2017-12-08T08:44:56Z
     *
     * @var string
     */
    public $recordEndTime;

    /**
     * @description The beginning of the time range in which data was queried. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2017-12-08T07:40:56Z
     *
     * @var string
     */
    public $recordStartTime;

    /**
     * @description The name of the live stream.
     *
     * @example live-test
     *
     * @var string
     */
    public $streamName;

    /**
     * @description The information about the video.
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
