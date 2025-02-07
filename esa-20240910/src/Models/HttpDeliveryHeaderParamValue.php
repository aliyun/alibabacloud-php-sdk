<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class HttpDeliveryHeaderParamValue extends Model
{
    /**
     * @var string
     */
    public $staticValue;
    protected $_name = [
        'staticValue' => 'StaticValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->staticValue) {
            $res['StaticValue'] = $this->staticValue;
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
        if (isset($map['StaticValue'])) {
            $model->staticValue = $map['StaticValue'];
        }

        return $model;
    }
}
