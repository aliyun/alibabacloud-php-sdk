<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DetachInstanceRamRoleResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DetachInstanceRamRoleResponseBody\detachInstanceRamRoleResults\instanceRamRoleSets;
use AlibabaCloud\Tea\Model;

class detachInstanceRamRoleResults extends Model
{
    /**
     * @var instanceRamRoleSets[]
     */
    public $instanceRamRoleSets;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'instanceRamRoleSets' => 'InstanceRamRoleSets',
        'success'             => 'Success',
        'code'                => 'Code',
        'message'             => 'Message',
        'instanceId'          => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceRamRoleSets) {
            $res['InstanceRamRoleSets'] = [];
            if (null !== $this->instanceRamRoleSets && \is_array($this->instanceRamRoleSets)) {
                $n = 0;
                foreach ($this->instanceRamRoleSets as $item) {
                    $res['InstanceRamRoleSets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detachInstanceRamRoleResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceRamRoleSets'])) {
            if (!empty($map['InstanceRamRoleSets'])) {
                $model->instanceRamRoleSets = [];
                $n                          = 0;
                foreach ($map['InstanceRamRoleSets'] as $item) {
                    $model->instanceRamRoleSets[$n++] = null !== $item ? instanceRamRoleSets::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
