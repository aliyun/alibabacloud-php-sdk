<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class DetectFaceAttributesRequest extends Model
{
    /**
     * @example RPBasicTest
     *
     * @var string
     */
    public $bizType;

    /**
     * @example http://image-demo.img-cn-hangzhou.aliyuncs.com/example.jpg
     *
     * @var string
     */
    public $materialValue;
    protected $_name = [
        'bizType'       => 'BizType',
        'materialValue' => 'MaterialValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->materialValue) {
            $res['MaterialValue'] = $this->materialValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectFaceAttributesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['MaterialValue'])) {
            $model->materialValue = $map['MaterialValue'];
        }

        return $model;
    }
}
