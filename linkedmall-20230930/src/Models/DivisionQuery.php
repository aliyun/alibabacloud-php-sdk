<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class DivisionQuery extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $divisionCode;
    protected $_name = [
        'divisionCode' => 'divisionCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->divisionCode) {
            $res['divisionCode'] = $this->divisionCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DivisionQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['divisionCode'])) {
            $model->divisionCode = $map['divisionCode'];
        }

        return $model;
    }
}
