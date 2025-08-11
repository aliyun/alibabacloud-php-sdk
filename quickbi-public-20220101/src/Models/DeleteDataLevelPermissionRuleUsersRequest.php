<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deleteUserModel) {
            $res['DeleteUserModel'] = $this->deleteUserModel;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeleteUserModel'])) {
            $model->deleteUserModel = $map['DeleteUserModel'];
        }

        return $model;
    }
}
