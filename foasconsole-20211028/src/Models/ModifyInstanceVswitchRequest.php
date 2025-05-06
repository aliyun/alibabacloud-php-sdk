<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models;

use AlibabaCloud\Dara\Model;

class ModifyInstanceVswitchRequest extends Model
{
    /**
     * @var string[]
     */
    public $haVSwitchIds;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $vSwitchIds;
    protected $_name = [
        'haVSwitchIds' => 'HaVSwitchIds',
        'instanceId' => 'InstanceId',
        'vSwitchIds' => 'VSwitchIds',
    ];

    public function validate()
    {
        if (\is_array($this->haVSwitchIds)) {
            Model::validateArray($this->haVSwitchIds);
        }
        if (\is_array($this->vSwitchIds)) {
            Model::validateArray($this->vSwitchIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->haVSwitchIds) {
            if (\is_array($this->haVSwitchIds)) {
                $res['HaVSwitchIds'] = [];
                $n1 = 0;
                foreach ($this->haVSwitchIds as $item1) {
                    $res['HaVSwitchIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->vSwitchIds) {
            if (\is_array($this->vSwitchIds)) {
                $res['VSwitchIds'] = [];
                $n1 = 0;
                foreach ($this->vSwitchIds as $item1) {
                    $res['VSwitchIds'][$n1++] = $item1;
                }
            }
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
        if (isset($map['HaVSwitchIds'])) {
            if (!empty($map['HaVSwitchIds'])) {
                $model->haVSwitchIds = [];
                $n1 = 0;
                foreach ($map['HaVSwitchIds'] as $item1) {
                    $model->haVSwitchIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['VSwitchIds'])) {
            if (!empty($map['VSwitchIds'])) {
                $model->vSwitchIds = [];
                $n1 = 0;
                foreach ($map['VSwitchIds'] as $item1) {
                    $model->vSwitchIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
