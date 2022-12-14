<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models\AbstractEcommerceVideoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example http://algo-app-aic-vd-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/shop-video-abs/2020-03-20-19/YVgDynxB.jpg?Expires=1584707249&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=e5Q3O%2ByA6H7UhYJeMZxz4p70de****
     *
     * @var string
     */
    public $videoCoverUrl;

    /**
     * @example http://algo-app-aic-vd-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/shop-video-abs/2020-03-20-19/YVgDynxB.mp4?Expires=1584707249&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=KErufmbHvTUYYLRj6i42wY7Tew****
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
