<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addUserModel) {
            $res['AddUserModel'] = $this->addUserModel;
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
        if (isset($map['AddUserModel'])) {
            $model->addUserModel = $map['AddUserModel'];
        }

        return $model;
    }
}
