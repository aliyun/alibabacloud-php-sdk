<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bss\V20140714\Models;

use AlibabaCloud\Tea\Model;

class QueryForCssOrderRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $paramStr;
    protected $_name = [
        'paramStr' => 'paramStr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->paramStr) {
            $res['paramStr'] = $this->paramStr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryForCssOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['paramStr'])) {
            $model->paramStr = $map['paramStr'];
        }

        return $model;
    }
}
