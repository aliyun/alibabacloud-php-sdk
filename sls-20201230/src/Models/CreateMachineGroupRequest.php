<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\SDK\Sls\V20201230\Models\CreateMachineGroupRequest\groupAttribute;
use AlibabaCloud\Tea\Model;

class CreateMachineGroupRequest extends Model
{
    /**
     * @description The attributes of the machine group.
     *
     * @var groupAttribute
     */
    public $groupAttribute;

    /**
     * @description The name of the machine group. The name must meet the following requirements:
     *
     *   The name of each machine group in a project must be unique.
     *   It can contain only lowercase letters, digits, hyphens (-), and underscores (\_).
     *   It must start and end with a lowercase letter or a digit.
     *   It must be 3 to 128 characters in length.
     *
     * @example test-machine-group
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The type of the machine group. The parameter can be left empty.
     *
     * @example ""
     *
     * @var string
     */
    public $groupType;

    /**
     * @description The type of the machine group identifier. Valid values:
     *
     *   ip: The machine group uses IP addresses as identifiers.
     *   userdefined: The machine group uses custom identifiers.
     *
     * @example ip
     *
     * @var string
     */
    public $machineIdentifyType;

    /**
     * @description The identifiers of machine group.
     *
     *   If you set machineIdentifyType to ip, enter the IP address of the machine.
     *   If you set machineIdentifyType to userdefined, enter a custom identifier.
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
     * @return CreateMachineGroupRequest
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
