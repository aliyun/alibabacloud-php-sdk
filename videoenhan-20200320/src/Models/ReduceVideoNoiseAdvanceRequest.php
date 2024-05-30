<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class ReduceVideoNoiseAdvanceRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example https://viapi-test.oss-cn-shanghai.aliyuncs.com/test-team/xxx/shang/video/SD%289516100%29.mp4
     *
     * @var Stream
     */
    public $videoUrlObject;
    protected $_name = [
        'videoUrlObject' => 'VideoUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoUrlObject) {
            $res['VideoUrl'] = $this->videoUrlObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReduceVideoNoiseAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoUrl'])) {
            $model->videoUrlObject = $map['VideoUrl'];
        }

        return $model;
    }
}
