<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateMachineGroupRequest\groupAttribute;
use AlibabaCloud\Tea\Model;

class UpdateMachineGroupRequest extends Model
{
    /**
     * @description The attribute of the machine group. This parameter is empty by default.
     *
     * @var groupAttribute
     */
    public $groupAttribute;

    /**
     * @description The name of the machine group.
     *
     * @example test-machine-group
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The type of the machine group. Set the value to an empty string.
     *
     * @example ""
     *
     * @var string
     */
    public $groupType;

    /**
     * @description The identifier type of the machine group. Valid values:
     *
     *   ip: The machine group uses IP addresses as identifiers.
     *   userdefined: The machine group uses custom identifiers.
     *
     * @example userdefined
     *
     * @var string
     */
    public $machineIdentifyType;

    /**
     * @description The identifiers of the machines in the machine group.
     *
     *   If you set machineIdentifyType to ip, enter the IP addresses of the machines.
     *   If you set machineIdentifyType to userdefined, enter a custom identifier.
     *
     * @example [uu_id_1，uu_id_2]
     *
     * @var string[]
     */
    public $machineList;
    protected $_name = [
        'groupAttribute'      => 'groupAttribute',
        'groupName'           => 'groupName',
        'groupType'           => 'groupType',
        'machineIdentifyType' => 'machineIdentifyType',
        'machineList'         => 'machineList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupAttribute) {
            $res['groupAttribute'] = null !== $this->groupAttribute ? $this->groupAttribute->toMap() : null;
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
            $res['machineList'] = $this->machineList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMachineGroupRequest
     */
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
                $model->machineList = $map['machineList'];
            }
        }

        return $model;
    }
}
