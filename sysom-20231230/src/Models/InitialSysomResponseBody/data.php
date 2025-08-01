<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\InitialSysomResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $roleExist;
    protected $_name = [
        'roleExist' => 'role_exist',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleExist) {
            $res['role_exist'] = $this->roleExist;
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
        if (isset($map['role_exist'])) {
            $model->roleExist = $map['role_exist'];
        }

        return $model;
    }
}
