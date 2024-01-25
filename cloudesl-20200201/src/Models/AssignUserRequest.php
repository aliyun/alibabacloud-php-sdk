<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20200201\Models;

use AlibabaCloud\Tea\Model;

class AssignUserRequest extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $extraParams;

    /**
     * @example [s-dxsxxxxxx,s-dxsyyyyyyy]
     *
     * @var string
     */
    public $stores;

    /**
     * @example 1344***
     *
     * @var string
     */
    public $userId;

    /**
     * @example USER_TYPE_COMPANY_OWNER
     *
     * @var string
     */
    public $userType;
    protected $_name = [
        'extraParams' => 'ExtraParams',
        'stores'      => 'Stores',
        'userId'      => 'UserId',
        'userType'    => 'UserType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extraParams) {
            $res['ExtraParams'] = $this->extraParams;
        }
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
        if (isset($map['ExtraParams'])) {
            $model->extraParams = $map['ExtraParams'];
        }
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
