<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeEncryptionDBRolePrivilegeResponseBody\data;

use AlibabaCloud\Dara\Model;

class rolePrivilegeList extends Model
{
    /**
     * @var string
     */
    public $encryption;

    /**
     * @var string
     */
    public $negation;

    /**
     * @var string
     */
    public $notEncryption;

    /**
     * @var string
     */
    public $rolePrivilegeName;
    protected $_name = [
        'encryption' => 'Encryption',
        'negation' => 'Negation',
        'notEncryption' => 'NotEncryption',
        'rolePrivilegeName' => 'RolePrivilegeName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->encryption) {
            $res['Encryption'] = $this->encryption;
        }

        if (null !== $this->negation) {
            $res['Negation'] = $this->negation;
        }

        if (null !== $this->notEncryption) {
            $res['NotEncryption'] = $this->notEncryption;
        }

        if (null !== $this->rolePrivilegeName) {
            $res['RolePrivilegeName'] = $this->rolePrivilegeName;
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
        if (isset($map['Encryption'])) {
            $model->encryption = $map['Encryption'];
        }

        if (isset($map['Negation'])) {
            $model->negation = $map['Negation'];
        }

        if (isset($map['NotEncryption'])) {
            $model->notEncryption = $map['NotEncryption'];
        }

        if (isset($map['RolePrivilegeName'])) {
            $model->rolePrivilegeName = $map['RolePrivilegeName'];
        }

        return $model;
    }
}
