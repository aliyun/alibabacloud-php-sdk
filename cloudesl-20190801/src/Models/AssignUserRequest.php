<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20190801\Models;

use AlibabaCloud\Tea\Model;

class AssignUserRequest extends Model
{
    /**
     * @var string
     */
    public $stores;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $userId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $userType;
    protected $_name = [
        'stores'   => 'Stores',
        'userId'   => 'UserId',
        'userType' => 'UserType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stores) {
            $res['Stores'] = $this->stores;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssignUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Stores'])) {
            $model->stores = $map['Stores'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
