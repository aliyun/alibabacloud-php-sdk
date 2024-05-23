<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class SwitchoverInstanceRequest extends Model
{
    /**
     * @description Whether to force the switchover.
     * - false: Do not force the switchover.
     * @example true
     *
     * @var bool
     */
    public $forced;

    /**
     * @description The instance ID of the primary/standby instance. You can set the default value to the instance ID of the instance to be switched to the primary instance.
     *
     * This parameter is required.
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The instance ID of the instance to be switched to the primary instance.
     *
     * This parameter is required.
     * @example ob4bv8o7sp****
     *
     * @var string
     */
    public $targetInstanceId;
    protected $_name = [
        'forced'           => 'Forced',
        'instanceId'       => 'InstanceId',
        'targetInstanceId' => 'TargetInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->forced) {
            $res['Forced'] = $this->forced;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->targetInstanceId) {
            $res['TargetInstanceId'] = $this->targetInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SwitchoverInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Forced'])) {
            $model->forced = $map['Forced'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TargetInstanceId'])) {
            $model->targetInstanceId = $map['TargetInstanceId'];
        }

        return $model;
    }
}
