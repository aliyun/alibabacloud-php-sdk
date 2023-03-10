<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoseg\V20200320\Models\SegmentVideoBodyResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example http://algo-app-aic-vd-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/video-human-segmentation/D86DDFBC-B8ED-4780-9E6A-E5BA98D7CC9F.mp4?Expires=1584709406&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=Fx5HVxvRjAMIjWL2OvhTlOO4cC****
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
