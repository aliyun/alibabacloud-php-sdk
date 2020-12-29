<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DetachInstanceRamRoleResponseBody\detachInstanceRamRoleResults\detachInstanceRamRoleResult\instanceRamRoleSets;

use AlibabaCloud\Tea\Model;

class instanceRamRoleSet extends Model
{
    /**
     * @var string
     */
    public $ramRoleName;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'ramRoleName' => 'RamRoleName',
        'instanceId'  => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceRamRoleSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
