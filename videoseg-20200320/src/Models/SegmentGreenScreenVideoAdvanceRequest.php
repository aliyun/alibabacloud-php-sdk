<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoseg\V20200320\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class SegmentGreenScreenVideoAdvanceRequest extends Model
{
    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/videoseg/SegmentGreenScreenVideo/SegmentGreenScreenVideo1.mp4
     *
     * @var Stream
     */
    public $videoURLObject;
    protected $_name = [
        'videoURLObject' => 'VideoURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoURLObject) {
            $res['VideoURL'] = $this->videoURLObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SegmentGreenScreenVideoAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoURL'])) {
            $model->videoURLObject = $map['VideoURL'];
        }

        return $model;
    }
}
