<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeGroupStructResponseBody extends Model
{
    /**
     * @description The parent node of the group.
     *
     * @example 958****
     *
     * @var int
     */
    public $groupFather;

    /**
     * @description The type of the server group. Valid values:
     *
     *   **0**: the default group
     *   **1**: other groups
     *
     * @example 0
     *
     * @var int
     */
    public $groupFlag;

    /**
     * @description The ID of the server group.
     *
     * @example 958****
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The sequence number.
     *
     * @example 1
     *
     * @var int
     */
    public $groupIndex;

    /**
     * @description The level of the application group.
     *
     * @example 2
     *
     * @var int
     */
    public $groupLevel;

    /**
     * @description The name of the server group.
     *
     * @example TestGroupName
     *
     * @var string
     */
    public $groupName;

    /**
     * @description An array that consists of child groups.
     *
     * @var string[]
     */
    public $groups;

    /**
     * @description The number of servers in the group.
     *
     * @example 30
     *
     * @var int
     */
    public $machineNum;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 9FBC6E47-7508-58C9-9E76-528E118C****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'groupFather' => 'GroupFather',
        'groupFlag'   => 'GroupFlag',
        'groupId'     => 'GroupId',
        'groupIndex'  => 'GroupIndex',
        'groupLevel'  => 'GroupLevel',
        'groupName'   => 'GroupName',
        'groups'      => 'Groups',
        'machineNum'  => 'MachineNum',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupFather) {
            $res['GroupFather'] = $this->groupFather;
        }
        if (null !== $this->groupFlag) {
            $res['GroupFlag'] = $this->groupFlag;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupIndex) {
            $res['GroupIndex'] = $this->groupIndex;
        }
        if (null !== $this->groupLevel) {
            $res['GroupLevel'] = $this->groupLevel;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->groups) {
            $res['Groups'] = $this->groups;
        }
        if (null !== $this->machineNum) {
            $res['MachineNum'] = $this->machineNum;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGroupStructResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupFather'])) {
            $model->groupFather = $map['GroupFather'];
        }
        if (isset($map['GroupFlag'])) {
            $model->groupFlag = $map['GroupFlag'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupIndex'])) {
            $model->groupIndex = $map['GroupIndex'];
        }
        if (isset($map['GroupLevel'])) {
            $model->groupLevel = $map['GroupLevel'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Groups'])) {
            if (!empty($map['Groups'])) {
                $model->groups = $map['Groups'];
            }
        }
        if (isset($map['MachineNum'])) {
            $model->machineNum = $map['MachineNum'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
