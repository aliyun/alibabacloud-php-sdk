<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterChannelsResponseBody\channels;

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
    public $faceBeauty;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $rtmpUrl;

    /**
     * @var string
     */
    public $streamUrl;
    protected $_name = [
        'channelId'  => 'ChannelId',
        'faceBeauty' => 'FaceBeauty',
        'resourceId' => 'ResourceId',
        'rtmpUrl'    => 'RtmpUrl',
        'streamUrl'  => 'StreamUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->faceBeauty) {
            $res['FaceBeauty'] = $this->faceBeauty;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->rtmpUrl) {
            $res['RtmpUrl'] = $this->rtmpUrl;
        }
        if (null !== $this->streamUrl) {
            $res['StreamUrl'] = $this->streamUrl;
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
        if (isset($map['FaceBeauty'])) {
            $model->faceBeauty = $map['FaceBeauty'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['RtmpUrl'])) {
            $model->rtmpUrl = $map['RtmpUrl'];
        }
        if (isset($map['StreamUrl'])) {
            $model->streamUrl = $map['StreamUrl'];
        }

        return $model;
    }
}
