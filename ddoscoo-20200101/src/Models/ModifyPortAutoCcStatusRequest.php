<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifyPortAutoCcStatusRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * > You can call the [DescribeInstanceIds](~~157459~~) operation to query the IDs of all instances.
     * @example ddoscoo-cn-mp91j1ao****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The mode of the Intelligent Protection policy. Valid values:
     *
     *   **normal**
     *   **loose**
     *   **strict**
     *
     * @example normal
     *
     * @var string
     */
    public $mode;

    /**
     * @description Specifies the status of the Intelligent Protection policy. Valid values:
     *
     *   **on**: enables the policy.
     *   **off**: disables the policy.
     *
     * @example on
     *
     * @var string
     */
    public $switch;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'mode'       => 'Mode',
        'switch'     => 'Switch',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->switch) {
            $res['Switch'] = $this->switch;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyPortAutoCcStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Switch'])) {
            $model->switch = $map['Switch'];
        }

        return $model;
    }
}
