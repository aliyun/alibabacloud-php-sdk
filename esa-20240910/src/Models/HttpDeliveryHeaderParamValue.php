<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class HttpDeliveryHeaderParamValue extends Model
{
    /**
     * @description The static variable.
     *
     * @example alicdn
     *
     * @var string
     */
    public $staticValue;
    protected $_name = [
        'staticValue' => 'StaticValue',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->staticValue) {
            $res['StaticValue'] = $this->staticValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HttpDeliveryHeaderParamValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StaticValue'])) {
            $model->staticValue = $map['StaticValue'];
        }

        return $model;
    }
}
