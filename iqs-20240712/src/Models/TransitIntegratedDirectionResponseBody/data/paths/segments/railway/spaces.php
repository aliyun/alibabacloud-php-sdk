<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths\segments\railway;

use AlibabaCloud\Dara\Model;

class spaces extends Model
{
    /**
     * @var string
     */
    public $code;
    /**
     * @var string
     */
    public $cost;
    protected $_name = [
        'code' => 'code',
        'cost' => 'cost',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->cost) {
            $res['cost'] = $this->cost;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['cost'])) {
            $model->cost = $map['cost'];
        }

        return $model;
    }
}
