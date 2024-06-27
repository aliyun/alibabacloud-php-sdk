<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventVariableListResponseBody\resultObject\middleVariables;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iv) {
            $res['iv'] = $this->iv;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return variableVelocity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['iv'])) {
            $model->iv = $map['iv'];
        }

        return $model;
    }
}
