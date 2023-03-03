<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class GenerateHumanAnimeStyleVideoAdvanceRequest extends Model
{
    /**
     * @example anime
     *
     * @var string
     */
    public $cartoonStyle;

    /**
     * @example https://viapi-test.oss-cn-shanghai.aliyuncs.com/test/xxx/eas/EvaluateVideoQuality/123.mp4
     *
     * @var Stream
     */
    public $videoUrlObject;
    protected $_name = [
        'cartoonStyle'   => 'CartoonStyle',
        'videoUrlObject' => 'VideoUrl',
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
        if (null !== $this->videoUrlObject) {
            $res['VideoUrl'] = $this->videoUrlObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateHumanAnimeStyleVideoAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CartoonStyle'])) {
            $model->cartoonStyle = $map['CartoonStyle'];
        }
        if (isset($map['VideoUrl'])) {
            $model->videoUrlObject = $map['VideoUrl'];
        }

        return $model;
    }
}
