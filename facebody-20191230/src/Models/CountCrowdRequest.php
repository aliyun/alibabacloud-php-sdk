<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class CountCrowdRequest extends Model
{
    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/CountCrowd/CountCrowd4.jpg
     *
     * @var string
     */
    public $imageURL;

    /**
     * @example true
     *
     * @var bool
     */
    public $isShow;
    protected $_name = [
        'imageURL' => 'ImageURL',
        'isShow'   => 'IsShow',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }
        if (null !== $this->isShow) {
            $res['IsShow'] = $this->isShow;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CountCrowdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['IsShow'])) {
            $model->isShow = $map['IsShow'];
        }

        return $model;
    }
}
