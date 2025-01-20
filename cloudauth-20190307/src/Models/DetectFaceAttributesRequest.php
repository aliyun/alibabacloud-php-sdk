<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;

class DetectFaceAttributesRequest extends Model
{
    /**
     * @var string
     */
    public $bizType;
    /**
     * @var string
     */
    public $materialValue;
    protected $_name = [
        'bizType'       => 'BizType',
        'materialValue' => 'MaterialValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
