<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceVswitchShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $haVSwitchIdsShrink;

    /**
     * @description This parameter is required.
     *
     * @example sc_flinkserverless_public_cn-7e22ae****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $vSwitchIdsShrink;
    protected $_name = [
        'haVSwitchIdsShrink' => 'HaVSwitchIds',
        'instanceId'         => 'InstanceId',
        'vSwitchIdsShrink'   => 'VSwitchIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->haVSwitchIdsShrink) {
            $res['HaVSwitchIds'] = $this->haVSwitchIdsShrink;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->vSwitchIdsShrink) {
            $res['VSwitchIds'] = $this->vSwitchIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyInstanceVswitchShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HaVSwitchIds'])) {
            $model->haVSwitchIdsShrink = $map['HaVSwitchIds'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['VSwitchIds'])) {
            $model->vSwitchIdsShrink = $map['VSwitchIds'];
        }

        return $model;
    }
}
