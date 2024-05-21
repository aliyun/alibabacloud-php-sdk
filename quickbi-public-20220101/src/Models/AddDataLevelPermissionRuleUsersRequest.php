<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class AddDataLevelPermissionRuleUsersRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example {"ruleId":"a5bb24da-***-a891683e14da","cubeId":"7c7223ae-***-3c744528014b","addModel":{"userGroups":["0d5fb19b-***-1248fc27ca51","3d2c23d4-***-f6390f325c2d"],"users":["4334***358","Huang***3fa822"]}}
     *
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
