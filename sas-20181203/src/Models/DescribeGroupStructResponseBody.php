<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeGroupStructResponseBody extends Model
{
    /**
     * @example 958****
     *
     * @var int
     */
    public $groupFather;

    /**
     * @example 0
     *
     * @var int
     */
    public $groupFlag;

    /**
     * @example 958****
     *
     * @var int
     */
    public $groupId;

    /**
     * @example 1
     *
     * @var int
     */
    public $groupIndex;

    /**
     * @example 2
     *
     * @var int
     */
    public $groupLevel;

    /**
     * @example TestGroupName
     *
     * @var string
     */
    public $groupName;

    /**
     * @var string[]
     */
    public $groups;

    /**
     * @example 30
     *
     * @var int
     */
    public $machineNum;

    /**
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
