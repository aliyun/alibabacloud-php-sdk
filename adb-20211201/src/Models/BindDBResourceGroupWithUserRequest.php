<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class BindDBResourceGroupWithUserRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example am-bp1ub9grke1****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The name of the resource group.
     *
     * @example test
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The name of the database account. It can be a standard account or a privileged account.
     *
     * @example accout
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
     * @return BindDBResourceGroupWithUserRequest
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
