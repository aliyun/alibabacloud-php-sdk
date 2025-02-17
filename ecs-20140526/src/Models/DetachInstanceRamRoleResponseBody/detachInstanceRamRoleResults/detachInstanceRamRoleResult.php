<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DetachInstanceRamRoleResponseBody\detachInstanceRamRoleResults;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DetachInstanceRamRoleResponseBody\detachInstanceRamRoleResults\detachInstanceRamRoleResult\instanceRamRoleSets;

class detachInstanceRamRoleResult extends Model
{
    /**
     * @var string
     */
    public $code;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var instanceRamRoleSets
     */
    public $instanceRamRoleSets;
    /**
     * @var string
     */
    public $message;
    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'                => 'Code',
        'instanceId'          => 'InstanceId',
        'instanceRamRoleSets' => 'InstanceRamRoleSets',
        'message'             => 'Message',
        'success'             => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->instanceRamRoleSets) {
            $this->instanceRamRoleSets->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceRamRoleSets) {
            $res['InstanceRamRoleSets'] = null !== $this->instanceRamRoleSets ? $this->instanceRamRoleSets->toArray($noStream) : $this->instanceRamRoleSets;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceRamRoleSets'])) {
            $model->instanceRamRoleSets = instanceRamRoleSets::fromMap($map['InstanceRamRoleSets']);
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
