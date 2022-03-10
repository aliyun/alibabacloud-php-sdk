<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class AddDataLevelPermissionRuleUsersRequest extends Model
{
    /**
     * @var string
     */
    public $addUserModel;
    protected $_name = [
        'addUserModel' => 'AddUserModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addUserModel) {
            $res['AddUserModel'] = $this->addUserModel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddDataLevelPermissionRuleUsersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddUserModel'])) {
            $model->addUserModel = $map['AddUserModel'];
        }

        return $model;
    }
}
