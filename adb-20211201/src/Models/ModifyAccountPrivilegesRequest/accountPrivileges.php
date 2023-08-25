<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\ModifyAccountPrivilegesRequest;

use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyAccountPrivilegesRequest\accountPrivileges\privilegeObject;
use AlibabaCloud\Tea\Model;

class accountPrivileges extends Model
{
    /**
     * @description The objects on which the permission takes effect, including databases, tables, and columns.
     *
     * @var privilegeObject
     */
    public $privilegeObject;

    /**
     * @description The permission level of the database account. You can call the `DescribeEnabledPrivileges` operation to query the permission level of the database account.
     *
     * @example Global
     *
     * @var string
     */
    public $privilegeType;

    /**
     * @description The permissions that you want to modify. You can call the `DescribeEnabledPrivileges` operation to query the permissions of the database account.
     *
     * @var string[]
     */
    public $privileges;
    protected $_name = [
        'privilegeObject' => 'PrivilegeObject',
        'privilegeType'   => 'PrivilegeType',
        'privileges'      => 'Privileges',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->privilegeObject) {
            $res['PrivilegeObject'] = null !== $this->privilegeObject ? $this->privilegeObject->toMap() : null;
        }
        if (null !== $this->privilegeType) {
            $res['PrivilegeType'] = $this->privilegeType;
        }
        if (null !== $this->privileges) {
            $res['Privileges'] = $this->privileges;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accountPrivileges
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrivilegeObject'])) {
            $model->privilegeObject = privilegeObject::fromMap($map['PrivilegeObject']);
        }
        if (isset($map['PrivilegeType'])) {
            $model->privilegeType = $map['PrivilegeType'];
        }
        if (isset($map['Privileges'])) {
            if (!empty($map['Privileges'])) {
                $model->privileges = $map['Privileges'];
            }
        }

        return $model;
    }
}
