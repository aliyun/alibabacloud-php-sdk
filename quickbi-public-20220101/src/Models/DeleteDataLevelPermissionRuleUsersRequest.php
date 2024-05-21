<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class DeleteDataLevelPermissionRuleUsersRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example {"ruleId":"a5bb24da-***-a891683e14da","cubeId":"7c7223ae-***-3c744528014b","delModel":{"userGroups":["0d5fb19b-***-1248fc27ca51","3d2c23d4-***-f6390f325c2d"],"users":["4334***358","Huang***3fa822"]}}
     *
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
