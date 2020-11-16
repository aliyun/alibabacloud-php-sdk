<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterChannelsResponse\channels;

use AlibabaCloud\Tea\Model;

class channel extends Model
{
    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $streamUrl;

    /**
     * @var string
     */
    public $rtmpUrl;
    protected $_name = [
        'channelId'  => 'ChannelId',
        'resourceId' => 'ResourceId',
        'streamUrl'  => 'StreamUrl',
        'rtmpUrl'    => 'RtmpUrl',
    ];

    public function validate()
    {
        Model::validateRequired('channelId', $this->channelId, true);
        Model::validateRequired('resourceId', $this->resourceId, true);
        Model::validateRequired('streamUrl', $this->streamUrl, true);
        Model::validateRequired('rtmpUrl', $this->rtmpUrl, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->streamUrl) {
            $res['StreamUrl'] = $this->streamUrl;
        }
        if (null !== $this->rtmpUrl) {
            $res['RtmpUrl'] = $this->rtmpUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return channel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['StreamUrl'])) {
            $model->streamUrl = $map['StreamUrl'];
        }
        if (isset($map['RtmpUrl'])) {
            $model->rtmpUrl = $map['RtmpUrl'];
        }

        return $model;
    }
}
