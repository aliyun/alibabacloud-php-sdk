<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\Tea\Model;

class DeleteUserDepartmentsRequest extends Model
{
    /**
     * @var string[]
     */
    public $userId;

    /**
     * @var string[]
     */
    public $departmentId;
    protected $_name = [
        'userId'       => 'UserId',
        'departmentId' => 'DepartmentId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->departmentId) {
            $res['DepartmentId'] = $this->departmentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteUserDepartmentsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserId'])) {
            if (!empty($map['UserId'])) {
                $model->userId = $map['UserId'];
            }
        }
        if (isset($map['DepartmentId'])) {
            if (!empty($map['DepartmentId'])) {
                $model->departmentId = $map['DepartmentId'];
            }
        }

        return $model;
    }
}
