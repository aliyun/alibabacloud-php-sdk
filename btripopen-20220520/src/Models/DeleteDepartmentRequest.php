<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class DeleteDepartmentRequest extends Model
{
    /**
     * @var string
     */
    public $outDeptId;
    protected $_name = [
        'outDeptId' => 'out_dept_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->outDeptId) {
            $res['out_dept_id'] = $this->outDeptId;
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
        if (isset($map['out_dept_id'])) {
            $model->outDeptId = $map['out_dept_id'];
        }

        return $model;
    }
}
