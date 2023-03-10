<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoseg\V20200320\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class SegmentVideoBodyAdvanceRequest extends Model
{
    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/videoseg/SegmentVideoBody/SegmentVideoBody1.mp4
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
     * @return SegmentVideoBodyAdvanceRequest
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
