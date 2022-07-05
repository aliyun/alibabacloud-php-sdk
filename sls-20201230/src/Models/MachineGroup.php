<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\SDK\Sls\V20201230\Models\MachineGroup\groupAttribute;
use AlibabaCloud\Tea\Model;

class MachineGroup extends Model
{
    /**
     * @description 机器组属性。
     *
     * @var groupAttribute
     */
    public $groupAttribute;

    /**
     * @description 机器组名称。
     *
     * @var string
     */
    public $groupName;

    /**
     * @description 机器组种类。
     *
     * @var string
     */
    public $groupType;

    /**
     * @description 机器组标识种类，支持 IP 标识或者用户自定义标识，即 ip 、userdefined。
     *
     * @var string
     */
    public $machineIdentifyType;

    /**
     * @description 机器组标识列表。
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
     * @return MachineGroup
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
