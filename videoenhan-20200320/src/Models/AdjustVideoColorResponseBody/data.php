<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models\AdjustVideoColorResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example http://algo-app-aic-vd-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/video-recolor/2021-01-21-07/46%3A05-test.mov?Expires=1611216966&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=icKn5gEQ6rNlSHmCi2zAf2tC0L****
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
