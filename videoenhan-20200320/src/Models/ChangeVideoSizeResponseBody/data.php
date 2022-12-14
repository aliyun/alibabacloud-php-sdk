<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models\ChangeVideoSizeResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example http://vibktprfx-prod-prod-aic-vd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/video-crop/2020-07-24-20/ZTZslWcU.jpg?Expires=1595597077&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=5cq1NNBEzS64U7RTXRBGlo7WPy****
     *
     * @var string
     */
    public $videoCoverUrl;

    /**
     * @example http://vibktprfx-prod-prod-aic-vd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/video-crop/2020-07-24-20/ZTZslWcU.mp4?Expires=1595597077&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=ZyvD9AXCT2IUFkVJngQdbXMwX6****
     *
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'videoCoverUrl' => 'VideoCoverUrl',
        'videoUrl'      => 'VideoUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoCoverUrl) {
            $res['VideoCoverUrl'] = $this->videoCoverUrl;
        }
        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
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
        if (isset($map['VideoCoverUrl'])) {
            $model->videoCoverUrl = $map['VideoCoverUrl'];
        }
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }

        return $model;
    }
}
