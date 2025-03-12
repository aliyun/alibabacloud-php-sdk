<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ModifyServerlessAuthToMachineResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Result code. Values:
     * - **0**: Success
     * - **1**: Parameter error
     * @example 0
     *
     * @var int
     */
    public $resultCode;
    protected $_name = [
        'resultCode' => 'ResultCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resultCode) {
            $res['ResultCode'] = $this->resultCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResultCode'])) {
            $model->resultCode = $map['ResultCode'];
        }

        return $model;
    }
}
