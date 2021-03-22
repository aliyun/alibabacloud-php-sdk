<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesRequest;

use AlibabaCloud\Tea\Model;

class arn extends Model
{
    /**
     * @var string
     */
    public $roleType;

    /**
     * @var string
     */
    public $rolearn;

    /**
     * @var int
     */
    public $assumeRoleFor;
    protected $_name = [
        'roleType'      => 'RoleType',
        'rolearn'       => 'Rolearn',
        'assumeRoleFor' => 'AssumeRoleFor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
        }
        if (null !== $this->rolearn) {
            $res['Rolearn'] = $this->rolearn;
        }
        if (null !== $this->assumeRoleFor) {
            $res['AssumeRoleFor'] = $this->assumeRoleFor;
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
        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
        }
        if (isset($map['Rolearn'])) {
            $model->rolearn = $map['Rolearn'];
        }
        if (isset($map['AssumeRoleFor'])) {
            $model->assumeRoleFor = $map['AssumeRoleFor'];
        }

        return $model;
    }
}
