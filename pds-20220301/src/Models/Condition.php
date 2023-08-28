<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class Condition extends Model
{
    /**
     * @var int[]
     */
    public $intEquals;

    /**
     * @var int[]
     */
    public $intNotEquals;

    /**
     * @var string[]
     */
    public $stringEquals;

    /**
     * @var string[]
     */
    public $stringNotEquals;
    protected $_name = [
        'intEquals'       => 'int_equals',
        'intNotEquals'    => 'int_not_equals',
        'stringEquals'    => 'string_equals',
        'stringNotEquals' => 'string_not_equals',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->intEquals) {
            $res['int_equals'] = $this->intEquals;
        }
        if (null !== $this->intNotEquals) {
            $res['int_not_equals'] = $this->intNotEquals;
        }
        if (null !== $this->stringEquals) {
            $res['string_equals'] = $this->stringEquals;
        }
        if (null !== $this->stringNotEquals) {
            $res['string_not_equals'] = $this->stringNotEquals;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Condition
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['int_equals'])) {
            if (!empty($map['int_equals'])) {
                $model->intEquals = $map['int_equals'];
            }
        }
        if (isset($map['int_not_equals'])) {
            if (!empty($map['int_not_equals'])) {
                $model->intNotEquals = $map['int_not_equals'];
            }
        }
        if (isset($map['string_equals'])) {
            if (!empty($map['string_equals'])) {
                $model->stringEquals = $map['string_equals'];
            }
        }
        if (isset($map['string_not_equals'])) {
            if (!empty($map['string_not_equals'])) {
                $model->stringNotEquals = $map['string_not_equals'];
            }
        }

        return $model;
    }
}
