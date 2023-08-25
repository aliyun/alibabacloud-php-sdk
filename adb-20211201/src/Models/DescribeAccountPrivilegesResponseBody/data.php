<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAccountPrivilegesResponseBody;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAccountPrivilegesResponseBody\data\privilegeObject;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The objects on which the permission takes effect, including databases, tables, columns, and additional descriptions.
     *
     * @var privilegeObject
     */
    public $privilegeObject;

    /**
     * @description The permission level of the permission. Valid values: `Global`, `Database`, `Table`, and `Column`. You can call the `DescribeEnabledPrivileges` parameter to query the permission level of a specific permission.
     *
     * @example Column
     *
     * @var string
     */
    public $privilegeType;

    /**
     * @description The name of the permission. You can call the `DescribeEnabledPrivileges` operation to query the name of the permission.
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
     * @return data
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
