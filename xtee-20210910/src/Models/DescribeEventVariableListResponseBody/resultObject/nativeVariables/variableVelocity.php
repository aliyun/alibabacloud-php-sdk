<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventVariableListResponseBody\resultObject\nativeVariables;

use AlibabaCloud\Dara\Model;

class variableVelocity extends Model
{
    /**
     * @var string
     */
    public $iv;
    protected $_name = [
        'iv' => 'iv',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->iv) {
            $res['iv'] = $this->iv;
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
        if (isset($map['iv'])) {
            $model->iv = $map['iv'];
        }

        return $model;
    }
}
