<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\ModifyAccountPrivilegesRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyAccountPrivilegesRequest\accountPrivileges\privilegeObject;

class accountPrivileges extends Model
{
    /**
     * @var privilegeObject
     */
    public $privilegeObject;
    /**
     * @var string
     */
    public $privilegeType;
    /**
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
        if (null !== $this->privilegeObject) {
            $this->privilegeObject->validate();
        }
        if (\is_array($this->privileges)) {
            Model::validateArray($this->privileges);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->privilegeObject) {
            $res['PrivilegeObject'] = null !== $this->privilegeObject ? $this->privilegeObject->toArray($noStream) : $this->privilegeObject;
        }

        if (null !== $this->privilegeType) {
            $res['PrivilegeType'] = $this->privilegeType;
        }

        if (null !== $this->privileges) {
            if (\is_array($this->privileges)) {
                $res['Privileges'] = [];
                $n1                = 0;
                foreach ($this->privileges as $item1) {
                    $res['Privileges'][$n1++] = $item1;
                }
            }
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
        if (isset($map['PrivilegeObject'])) {
            $model->privilegeObject = privilegeObject::fromMap($map['PrivilegeObject']);
        }

        if (isset($map['PrivilegeType'])) {
            $model->privilegeType = $map['PrivilegeType'];
        }

        if (isset($map['Privileges'])) {
            if (!empty($map['Privileges'])) {
                $model->privileges = [];
                $n1                = 0;
                foreach ($map['Privileges'] as $item1) {
                    $model->privileges[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
