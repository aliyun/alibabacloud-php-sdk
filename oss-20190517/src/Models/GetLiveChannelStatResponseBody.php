<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class GetLiveChannelStatResponseBody extends Model
{
    /**
     * @var LiveChannelAudio
     */
    public $audio;

    /**
     * @var string
     */
    public $connectedTime;

    /**
     * @var string
     */
    public $remoteAddr;

    /**
     * @var string
     */
    public $status;

    /**
     * @var LiveChannelVideo
     */
    public $video;
    protected $_name = [
        'audio'         => 'Audio',
        'connectedTime' => 'ConnectedTime',
        'remoteAddr'    => 'RemoteAddr',
        'status'        => 'Status',
        'video'         => 'Video',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audio) {
            $res['Audio'] = null !== $this->audio ? $this->audio->toMap() : null;
        }
        if (null !== $this->connectedTime) {
            $res['ConnectedTime'] = $this->connectedTime;
        }
        if (null !== $this->remoteAddr) {
            $res['RemoteAddr'] = $this->remoteAddr;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->video) {
            $res['Video'] = null !== $this->video ? $this->video->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLiveChannelStatResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Audio'])) {
            $model->audio = LiveChannelAudio::fromMap($map['Audio']);
        }
        if (isset($map['ConnectedTime'])) {
            $model->connectedTime = $map['ConnectedTime'];
        }
        if (isset($map['RemoteAddr'])) {
            $model->remoteAddr = $map['RemoteAddr'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Video'])) {
            $model->video = LiveChannelVideo::fromMap($map['Video']);
        }

        return $model;
    }
}
