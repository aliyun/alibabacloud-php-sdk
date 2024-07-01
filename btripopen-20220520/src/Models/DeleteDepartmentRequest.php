<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class DeleteDepartmentRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example dept123
     *
     * @var string
     */
    public $outDeptId;
    protected $_name = [
        'outDeptId' => 'out_dept_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outDeptId) {
            $res['out_dept_id'] = $this->outDeptId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDepartmentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['out_dept_id'])) {
            $model->outDeptId = $map['out_dept_id'];
        }

        return $model;
    }
}
