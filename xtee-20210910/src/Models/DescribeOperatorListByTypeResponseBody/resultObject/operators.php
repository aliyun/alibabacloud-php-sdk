<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeOperatorListByTypeResponseBody\resultObject;

use AlibabaCloud\Tea\Model;

class operators extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $hasRightVariable;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'code'             => 'code',
        'hasRightVariable' => 'hasRightVariable',
        'name'             => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->hasRightVariable) {
            $res['hasRightVariable'] = $this->hasRightVariable;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operators
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['hasRightVariable'])) {
            $model->hasRightVariable = $map['hasRightVariable'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
