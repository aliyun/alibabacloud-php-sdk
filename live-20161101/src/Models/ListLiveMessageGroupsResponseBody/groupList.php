<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListLiveMessageGroupsResponseBody;

use AlibabaCloud\Dara\Model;

class groupList extends Model
{
    /**
     * @var string[]
     */
    public $adminList;

    /**
     * @var int
     */
    public $createtime;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var bool
     */
    public $delete;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupInfo;

    /**
     * @var string
     */
    public $groupName;
    protected $_name = [
        'adminList' => 'AdminList',
        'createtime' => 'Createtime',
        'creatorId' => 'CreatorId',
        'delete' => 'Delete',
        'groupId' => 'GroupId',
        'groupInfo' => 'GroupInfo',
        'groupName' => 'GroupName',
    ];

    public function validate()
    {
        if (\is_array($this->adminList)) {
            Model::validateArray($this->adminList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adminList) {
            if (\is_array($this->adminList)) {
                $res['AdminList'] = [];
                $n1 = 0;
                foreach ($this->adminList as $item1) {
                    $res['AdminList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createtime) {
            $res['Createtime'] = $this->createtime;
        }

        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }

        if (null !== $this->delete) {
            $res['Delete'] = $this->delete;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->groupInfo) {
            $res['GroupInfo'] = $this->groupInfo;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
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
        if (isset($map['AdminList'])) {
            if (!empty($map['AdminList'])) {
                $model->adminList = [];
                $n1 = 0;
                foreach ($map['AdminList'] as $item1) {
                    $model->adminList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Createtime'])) {
            $model->createtime = $map['Createtime'];
        }

        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }

        if (isset($map['Delete'])) {
            $model->delete = $map['Delete'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['GroupInfo'])) {
            $model->groupInfo = $map['GroupInfo'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        return $model;
    }
}
