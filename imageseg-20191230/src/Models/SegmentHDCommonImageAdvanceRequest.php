<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageseg\V20191230\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class SegmentHDCommonImageAdvanceRequest extends Model
{
    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageseg/SegmentHDCommonImage/SegmentHDCommonImage1.jpg
     *
     * @var Stream
     */
    public $imageUrlObject;
    protected $_name = [
        'imageUrlObject' => 'ImageUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageUrlObject) {
            $res['ImageUrl'] = $this->imageUrlObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SegmentHDCommonImageAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageUrl'])) {
            $model->imageUrlObject = $map['ImageUrl'];
        }

        return $model;
    }
}
