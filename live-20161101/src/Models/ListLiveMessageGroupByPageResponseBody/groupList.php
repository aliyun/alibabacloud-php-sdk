<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListLiveMessageGroupByPageResponseBody;

use AlibabaCloud\Tea\Model;

class groupList extends Model
{
    /**
     * @description The list of administrators.
     *
     * @var string[]
     */
    public $adminList;

    /**
     * @description The time when the group was created. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1698299727
     *
     * @var int
     */
    public $createtime;

    /**
     * @description The ID of the user who created the group.
     *
     * @example user_77
     *
     * @var string
     */
    public $creatorId;

    /**
     * @description Indicates whether the group is deleted.
     *
     * @example true
     *
     * @var bool
     */
    public $delete;

    /**
     * @description The ID of the interactive messaging group.
     *
     * @example cU9MeBqf****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The additional information about the group.
     *
     * @example testgroupinfo
     *
     * @var string
     */
    public $groupInfo;

    /**
     * @description The name of the group.
     *
     * @example mytestgroup
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->adminList) {
            $res['AdminList'] = $this->adminList;
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

    /**
     * @param array $map
     *
     * @return groupList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdminList'])) {
            if (!empty($map['AdminList'])) {
                $model->adminList = $map['AdminList'];
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
