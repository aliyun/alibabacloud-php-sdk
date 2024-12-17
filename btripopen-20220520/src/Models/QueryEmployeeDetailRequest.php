<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class QueryEmployeeDetailRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example abc12138
     *
     * @var string
     */
    public $outEmployeeId;
    protected $_name = [
        'outEmployeeId' => 'out_employee_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outEmployeeId) {
            $res['out_employee_id'] = $this->outEmployeeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryEmployeeDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['out_employee_id'])) {
            $model->outEmployeeId = $map['out_employee_id'];
        }

        return $model;
    }
}
