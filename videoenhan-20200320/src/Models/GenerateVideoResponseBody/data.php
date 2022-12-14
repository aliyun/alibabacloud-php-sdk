<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models\GenerateVideoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example http://vibktprfx-prod-prod-aic-vd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/video-gen/2021-05-07-15/B9MGfwxu.mp4?Expires=1620372653&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=F9flL1n5GPYaae0dLl%2F8D%2Bn4j6****
     *
     * @var string
     */
    public $videoCoverUrl;

    /**
     * @example http://vibktprfx-prod-prod-aic-vd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/video-gen/2021-05-07-15/B9MGfwxu.jpg?Expires=1620372653&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=djBvGvdJu8bd%2FC%2BVHdg1d57U%2Bu****
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
