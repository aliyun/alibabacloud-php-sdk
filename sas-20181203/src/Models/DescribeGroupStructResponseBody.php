<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeGroupStructResponseBody extends Model
{
    /**
     * @var int
     */
    public $groupFather;
    /**
     * @var int
     */
    public $groupFlag;
    /**
     * @var int
     */
    public $groupId;
    /**
     * @var int
     */
    public $groupIndex;
    /**
     * @var int
     */
    public $groupLevel;
    /**
     * @var string
     */
    public $groupName;
    /**
     * @var string[]
     */
    public $groups;
    /**
     * @var int
     */
    public $machineNum;
    /**
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
        if (\is_array($this->groups)) {
            Model::validateArray($this->groups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->groups)) {
                $res['Groups'] = [];
                $n1            = 0;
                foreach ($this->groups as $item1) {
                    $res['Groups'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->machineNum) {
            $res['MachineNum'] = $this->machineNum;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
                $model->groups = [];
                $n1            = 0;
                foreach ($map['Groups'] as $item1) {
                    $model->groups[$n1++] = $item1;
                }
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
