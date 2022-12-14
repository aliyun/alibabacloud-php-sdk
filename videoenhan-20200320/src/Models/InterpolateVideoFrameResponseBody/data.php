<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models\InterpolateVideoFrameResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example http://vibktprfx-prod-prod-aic-vd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/video-interp/20-12-22/mRsPNVunG7717nne_20-12-22-07-29-51.mp4?Expires=1608624020&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=NFjSLll8E7E1tkuLPFyTpr6ULi****
     *
     * @var string
     */
    public $videoURL;
    protected $_name = [
        'videoURL' => 'VideoURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoURL) {
            $res['VideoURL'] = $this->videoURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoURL'])) {
            $model->videoURL = $map['VideoURL'];
        }

        return $model;
    }
}
