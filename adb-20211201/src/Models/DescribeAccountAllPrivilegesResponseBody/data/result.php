<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAccountAllPrivilegesResponseBody\data;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAccountAllPrivilegesResponseBody\data\result\privilegeObject;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The objects on which the permission takes effect, including databases, tables, and columns. If Global is returned for the PrivilegeType parameter, an empty string is returned for this parameter.
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
     * @description The name of the permission, which is the same as the permission name returned by the `DescribeEnabledPrivileges` operation.
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
     * @return result
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
