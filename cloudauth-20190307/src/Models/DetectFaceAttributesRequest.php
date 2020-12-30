<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class DetectFaceAttributesRequest extends Model
{
    /**
     * @var string
     */
    public $materialValue;

    /**
     * @var string
     */
    public $bizType;
    protected $_name = [
        'materialValue' => 'MaterialValue',
        'bizType'       => 'BizType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->materialValue) {
            $res['MaterialValue'] = $this->materialValue;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
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
        if (isset($map['MaterialValue'])) {
            $model->materialValue = $map['MaterialValue'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        return $model;
    }
}
