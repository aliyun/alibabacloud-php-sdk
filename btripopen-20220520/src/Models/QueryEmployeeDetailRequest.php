<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class QueryEmployeeDetailRequest extends Model
{
    /**
     * @var string
     */
    public $outEmployeeId;
    protected $_name = [
        'outEmployeeId' => 'out_employee_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->outEmployeeId) {
            $res['out_employee_id'] = $this->outEmployeeId;
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
        if (isset($map['out_employee_id'])) {
            $model->outEmployeeId = $map['out_employee_id'];
        }

        return $model;
    }
}
