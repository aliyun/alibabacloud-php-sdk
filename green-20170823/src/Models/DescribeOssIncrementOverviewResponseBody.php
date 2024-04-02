<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class DescribeOssIncrementOverviewResponseBody extends Model
{
    /**
     * @var int
     */
    public $adUnhandleCount;

    /**
     * @var int
     */
    public $audioCount;

    /**
     * @var int
     */
    public $imageCount;

    /**
     * @var int
     */
    public $liveUnhandleCount;

    /**
     * @var int
     */
    public $pornUnhandleCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $terrorismUnhandleCount;

    /**
     * @var int
     */
    public $videoCount;

    /**
     * @var int
     */
    public $videoFrameCount;

    /**
     * @var int
     */
    public $voiceAntispamUnhandleCount;
    protected $_name = [
        'adUnhandleCount'            => 'AdUnhandleCount',
        'audioCount'                 => 'AudioCount',
        'imageCount'                 => 'ImageCount',
        'liveUnhandleCount'          => 'LiveUnhandleCount',
        'pornUnhandleCount'          => 'PornUnhandleCount',
        'requestId'                  => 'RequestId',
        'terrorismUnhandleCount'     => 'TerrorismUnhandleCount',
        'videoCount'                 => 'VideoCount',
        'videoFrameCount'            => 'VideoFrameCount',
        'voiceAntispamUnhandleCount' => 'VoiceAntispamUnhandleCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adUnhandleCount) {
            $res['AdUnhandleCount'] = $this->adUnhandleCount;
        }
        if (null !== $this->audioCount) {
            $res['AudioCount'] = $this->audioCount;
        }
        if (null !== $this->imageCount) {
            $res['ImageCount'] = $this->imageCount;
        }
        if (null !== $this->liveUnhandleCount) {
            $res['LiveUnhandleCount'] = $this->liveUnhandleCount;
        }
        if (null !== $this->pornUnhandleCount) {
            $res['PornUnhandleCount'] = $this->pornUnhandleCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->terrorismUnhandleCount) {
            $res['TerrorismUnhandleCount'] = $this->terrorismUnhandleCount;
        }
        if (null !== $this->videoCount) {
            $res['VideoCount'] = $this->videoCount;
        }
        if (null !== $this->videoFrameCount) {
            $res['VideoFrameCount'] = $this->videoFrameCount;
        }
        if (null !== $this->voiceAntispamUnhandleCount) {
            $res['VoiceAntispamUnhandleCount'] = $this->voiceAntispamUnhandleCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOssIncrementOverviewResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdUnhandleCount'])) {
            $model->adUnhandleCount = $map['AdUnhandleCount'];
        }
        if (isset($map['AudioCount'])) {
            $model->audioCount = $map['AudioCount'];
        }
        if (isset($map['ImageCount'])) {
            $model->imageCount = $map['ImageCount'];
        }
        if (isset($map['LiveUnhandleCount'])) {
            $model->liveUnhandleCount = $map['LiveUnhandleCount'];
        }
        if (isset($map['PornUnhandleCount'])) {
            $model->pornUnhandleCount = $map['PornUnhandleCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TerrorismUnhandleCount'])) {
            $model->terrorismUnhandleCount = $map['TerrorismUnhandleCount'];
        }
        if (isset($map['VideoCount'])) {
            $model->videoCount = $map['VideoCount'];
        }
        if (isset($map['VideoFrameCount'])) {
            $model->videoFrameCount = $map['VideoFrameCount'];
        }
        if (isset($map['VoiceAntispamUnhandleCount'])) {
            $model->voiceAntispamUnhandleCount = $map['VoiceAntispamUnhandleCount'];
        }

        return $model;
    }
}
