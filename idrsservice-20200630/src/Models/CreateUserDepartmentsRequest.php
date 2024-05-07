<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\Tea\Model;

class CreateUserDepartmentsRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string[]
     */
    public $departmentId;

    /**
     * @var string[]
     */
    public $userId;
    protected $_name = [
        'clientToken'  => 'ClientToken',
        'departmentId' => 'DepartmentId',
        'userId'       => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->departmentId) {
            $res['DepartmentId'] = $this->departmentId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUserDepartmentsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DepartmentId'])) {
            if (!empty($map['DepartmentId'])) {
                $model->departmentId = $map['DepartmentId'];
            }
        }
        if (isset($map['UserId'])) {
            if (!empty($map['UserId'])) {
                $model->userId = $map['UserId'];
            }
        }

        return $model;
    }
}
