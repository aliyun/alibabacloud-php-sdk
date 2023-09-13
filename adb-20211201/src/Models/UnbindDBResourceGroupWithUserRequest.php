<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class UnbindDBResourceGroupWithUserRequest extends Model
{
    /**
     * @example am-bp1ub9grke1****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example test
     *
     * @var string
     */
    public $groupName;

    /**
     * @example user1
     *
     * @var string
     */
    public $groupUser;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'groupName'   => 'GroupName',
        'groupUser'   => 'GroupUser',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->groupUser) {
            $res['GroupUser'] = $this->groupUser;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnbindDBResourceGroupWithUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GroupUser'])) {
            $model->groupUser = $map['GroupUser'];
        }

        return $model;
    }
}
