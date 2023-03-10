<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoseg\V20200320\Models\SegmentHalfBodyResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example http://vibktprfx-prod-prod-aic-vd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/segment-halfbody/1596074561.mp4?Expires=1596076361&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=2mMLs0Y1muqeqCEv%2FSWyq8EEEc****
     *
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'videoUrl' => 'VideoUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }

        return $model;
    }
}
