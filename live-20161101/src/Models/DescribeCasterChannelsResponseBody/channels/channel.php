<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterChannelsResponseBody\channels;

use AlibabaCloud\Tea\Model;

class channel extends Model
{
    /**
     * @description The ID of the channel.
     *
     * The layout references the channel ID when the channel is enabled. You can specify up to one video resource for the channel. The value of this parameter must be in the RV[Number] format, such as RV01 and RV12.
     *
     * @example RV01
     *
     * @var string
     */
    public $channelId;

    /**
     * @description The face retouching effect. Valid values: 0 (all effects), 1 (skin smoothing), 2 (skin whitening), 3 (dark circles removal), and 4 (nasolabial folds removal).
     *
     * @example 0
     *
     * @var string
     */
    public $faceBeauty;

    /**
     * @description The ID of the video resource.
     *
     * @example 87642866-281E-4AEA-9582-B124879****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The URL in the Real-Time Messaging Protocol (RTMP) format.
     *
     * @example rtmp://demo.aliyundoc.com/caster/rtmperf?auth_key=****
     *
     * @var string
     */
    public $rtmpUrl;

    /**
     * @description The URL of the output content in the channel.
     *
     * @example http://demo.aliyundoc.com/caster/streamwsx.flv?auth_key=YYYYY
     *
     * @var string
     */
    public $streamUrl;
    protected $_name = [
        'channelId' => 'ChannelId',
        'faceBeauty' => 'FaceBeauty',
        'resourceId' => 'ResourceId',
        'rtmpUrl' => 'RtmpUrl',
        'streamUrl' => 'StreamUrl',
    ];

    public function validate() {}

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
