<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;

class GenerateHumanAnimeStyleVideoRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example anime
     *
     * @var string
     */
    public $cartoonStyle;

    /**
     * @description This parameter is required.
     *
     * @example https://viapi-test.oss-cn-shanghai.aliyuncs.com/test/xxx/eas/EvaluateVideoQuality/123.mp4
     *
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'cartoonStyle' => 'CartoonStyle',
        'videoUrl'     => 'VideoUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cartoonStyle) {
            $res['CartoonStyle'] = $this->cartoonStyle;
        }
        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateHumanAnimeStyleVideoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CartoonStyle'])) {
            $model->cartoonStyle = $map['CartoonStyle'];
        }
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }

        return $model;
    }
}
