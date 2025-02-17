<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyAutoSnapshotPolicyExRequest\copyEncryptionConfiguration;

use AlibabaCloud\Dara\Model;

class arn extends Model
{
    /**
     * @var int
     */
    public $assumeRoleFor;
    /**
     * @var string
     */
    public $roleType;
    /**
     * @var string
     */
    public $rolearn;
    protected $_name = [
        'assumeRoleFor' => 'AssumeRoleFor',
        'roleType'      => 'RoleType',
        'rolearn'       => 'Rolearn',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assumeRoleFor) {
            $res['AssumeRoleFor'] = $this->assumeRoleFor;
        }

        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
        }

        if (null !== $this->rolearn) {
            $res['Rolearn'] = $this->rolearn;
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
        if (isset($map['AssumeRoleFor'])) {
            $model->assumeRoleFor = $map['AssumeRoleFor'];
        }

        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
        }

        if (isset($map['Rolearn'])) {
            $model->rolearn = $map['Rolearn'];
        }

        return $model;
    }
}
