<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBResourceGroupResponseBody;

use AlibabaCloud\Dara\Model;

class groupsInfo extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $groupType;

    /**
     * @var string[]
     */
    public $groupUserList;

    /**
     * @var string
     */
    public $groupUsers;

    /**
     * @var int
     */
    public $nodeNum;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'groupName' => 'GroupName',
        'groupType' => 'GroupType',
        'groupUserList' => 'GroupUserList',
        'groupUsers' => 'GroupUsers',
        'nodeNum' => 'NodeNum',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->groupUserList)) {
            Model::validateArray($this->groupUserList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }

        if (null !== $this->groupUserList) {
            if (\is_array($this->groupUserList)) {
                $res['GroupUserList'] = [];
                $n1 = 0;
                foreach ($this->groupUserList as $item1) {
                    $res['GroupUserList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->groupUsers) {
            $res['GroupUsers'] = $this->groupUsers;
        }

        if (null !== $this->nodeNum) {
            $res['NodeNum'] = $this->nodeNum;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }

        if (isset($map['GroupUserList'])) {
            if (!empty($map['GroupUserList'])) {
                $model->groupUserList = [];
                $n1 = 0;
                foreach ($map['GroupUserList'] as $item1) {
                    $model->groupUserList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['GroupUsers'])) {
            $model->groupUsers = $map['GroupUsers'];
        }

        if (isset($map['NodeNum'])) {
            $model->nodeNum = $map['NodeNum'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
