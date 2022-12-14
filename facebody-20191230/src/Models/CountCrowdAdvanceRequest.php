<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class CountCrowdAdvanceRequest extends Model
{
    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/CountCrowd/CountCrowd4.jpg
     *
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @example true
     *
     * @var bool
     */
    public $isShow;
    protected $_name = [
        'imageURLObject' => 'ImageURL',
        'isShow'         => 'IsShow',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURLObject) {
            $res['ImageURL'] = $this->imageURLObject;
        }
        if (null !== $this->isShow) {
            $res['IsShow'] = $this->isShow;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CountCrowdAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURLObject = $map['ImageURL'];
        }
        if (isset($map['IsShow'])) {
            $model->isShow = $map['IsShow'];
        }

        return $model;
    }
}
