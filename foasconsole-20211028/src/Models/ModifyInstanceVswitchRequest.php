<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceVswitchRequest extends Model
{
    /**
     * @var string[]
     */
    public $haVSwitchIds;

    /**
     * @description This parameter is required.
     *
     * @example sc_flinkserverless_public_cn-7e22ae****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $vSwitchIds;
    protected $_name = [
        'haVSwitchIds' => 'HaVSwitchIds',
        'instanceId'   => 'InstanceId',
        'vSwitchIds'   => 'VSwitchIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->haVSwitchIds) {
            $res['HaVSwitchIds'] = $this->haVSwitchIds;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyInstanceVswitchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HaVSwitchIds'])) {
            if (!empty($map['HaVSwitchIds'])) {
                $model->haVSwitchIds = $map['HaVSwitchIds'];
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['VSwitchIds'])) {
            if (!empty($map['VSwitchIds'])) {
                $model->vSwitchIds = $map['VSwitchIds'];
            }
        }

        return $model;
    }
}
