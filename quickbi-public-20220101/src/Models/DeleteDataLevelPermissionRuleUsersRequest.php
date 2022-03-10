<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class DeleteDataLevelPermissionRuleUsersRequest extends Model
{
    /**
     * @var string
     */
    public $deleteUserModel;
    protected $_name = [
        'deleteUserModel' => 'DeleteUserModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deleteUserModel) {
            $res['DeleteUserModel'] = $this->deleteUserModel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDataLevelPermissionRuleUsersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeleteUserModel'])) {
            $model->deleteUserModel = $map['DeleteUserModel'];
        }

        return $model;
    }
}
