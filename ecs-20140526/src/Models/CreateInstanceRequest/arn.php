<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateInstanceRequest;

use AlibabaCloud\Tea\Model;

class arn extends Model
{
    /**
     * @description > This parameter is in invitational preview and is unavailable.
     *
     * @example 1234567890
     *
     * @var int
     */
    public $assumeRoleFor;

    /**
     * @description > This parameter is in invitational preview and is unavailable.
     *
     * @example Primary
     *
     * @var string
     */
    public $roleType;

    /**
     * @description > This parameter is in invitational preview and is unavailable.
     *
     * @example acs:ram::123456789012****:role/adminrole
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return arn
     */
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
