<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateMachineGroupRequest\groupAttribute;

class UpdateMachineGroupRequest extends Model
{
    /**
     * @var groupAttribute
     */
    public $groupAttribute;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $groupType;

    /**
     * @var string
     */
    public $machineIdentifyType;

    /**
     * @var string[]
     */
    public $machineList;
    protected $_name = [
        'groupAttribute' => 'groupAttribute',
        'groupName' => 'groupName',
        'groupType' => 'groupType',
        'machineIdentifyType' => 'machineIdentifyType',
        'machineList' => 'machineList',
    ];

    public function validate()
    {
        if (null !== $this->groupAttribute) {
            $this->groupAttribute->validate();
        }
        if (\is_array($this->machineList)) {
            Model::validateArray($this->machineList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupAttribute) {
            $res['groupAttribute'] = null !== $this->groupAttribute ? $this->groupAttribute->toArray($noStream) : $this->groupAttribute;
        }

        if (null !== $this->groupName) {
            $res['groupName'] = $this->groupName;
        }

        if (null !== $this->groupType) {
            $res['groupType'] = $this->groupType;
        }

        if (null !== $this->machineIdentifyType) {
            $res['machineIdentifyType'] = $this->machineIdentifyType;
        }

        if (null !== $this->machineList) {
            if (\is_array($this->machineList)) {
                $res['machineList'] = [];
                $n1 = 0;
                foreach ($this->machineList as $item1) {
                    $res['machineList'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['groupAttribute'])) {
            $model->groupAttribute = groupAttribute::fromMap($map['groupAttribute']);
        }

        if (isset($map['groupName'])) {
            $model->groupName = $map['groupName'];
        }

        if (isset($map['groupType'])) {
            $model->groupType = $map['groupType'];
        }

        if (isset($map['machineIdentifyType'])) {
            $model->machineIdentifyType = $map['machineIdentifyType'];
        }

        if (isset($map['machineList'])) {
            if (!empty($map['machineList'])) {
                $model->machineList = [];
                $n1 = 0;
                foreach ($map['machineList'] as $item1) {
                    $model->machineList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
