<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveMessageGroupResponseBody extends Model
{
    /**
     * @description The list of the group administrators.
     *
     * @var string[]
     */
    public $adminList;

    /**
     * @description The time when the group was created. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1698305471
     *
     * @var int
     */
    public $createtime;

    /**
     * @description The ID of the group creator.
     *
     * @example uid1
     *
     * @var string
     */
    public $creatorId;

    /**
     * @description The time when the group was deleted. This parameter is returned only if the group was deleted.
     *
     * @example 1698299827
     *
     * @var int
     */
    public $deletatime;

    /**
     * @description Indicates whether the group was deleted.
     *
     * @example false
     *
     * @var bool
     */
    public $delete;

    /**
     * @description The ID of the user who deleted the group. This parameter is returned only if the group was deleted.
     *
     * @example uid1
     *
     * @var string
     */
    public $deletor;

    /**
     * @description The group ID.
     *
     * @example grouptest1
     *
     * @var string
     */
    public $groupId;

    /**
     * @description Additional information about the group.
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

    /**
     * @description The categorized message statistics. This parameter is returned only if the group exists.
     *
     * @var int[]
     */
    public $msgAmount;

    /**
     * @description The number of online users in the group. This parameter is returned only if the group exists.
     *
     * @example 2
     *
     * @var int
     */
    public $onlineUserCounts;

    /**
     * @description The request ID.
     *
     * @example 1815A27D-BAE2-10E6-89FD-D477951C67C7
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the group is a super group. Valid values:
     *
     *   True
     *   False
     *
     * @example False
     *
     * @var bool
     */
    public $superLargeGroup;

    /**
     * @description The total number of sessions. This parameter is returned only if the group exists.
     *
     * @example 50
     *
     * @var int
     */
    public $totalTimes;
    protected $_name = [
        'adminList' => 'AdminList',
        'createtime' => 'Createtime',
        'creatorId' => 'CreatorId',
        'deletatime' => 'Deletatime',
        'delete' => 'Delete',
        'deletor' => 'Deletor',
        'groupId' => 'GroupId',
        'groupInfo' => 'GroupInfo',
        'groupName' => 'GroupName',
        'msgAmount' => 'MsgAmount',
        'onlineUserCounts' => 'OnlineUserCounts',
        'requestId' => 'RequestId',
        'superLargeGroup' => 'SuperLargeGroup',
        'totalTimes' => 'TotalTimes',
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
        if (null !== $this->deletatime) {
            $res['Deletatime'] = $this->deletatime;
        }
        if (null !== $this->delete) {
            $res['Delete'] = $this->delete;
        }
        if (null !== $this->deletor) {
            $res['Deletor'] = $this->deletor;
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
        if (null !== $this->msgAmount) {
            $res['MsgAmount'] = $this->msgAmount;
        }
        if (null !== $this->onlineUserCounts) {
            $res['OnlineUserCounts'] = $this->onlineUserCounts;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->superLargeGroup) {
            $res['SuperLargeGroup'] = $this->superLargeGroup;
        }
        if (null !== $this->totalTimes) {
            $res['TotalTimes'] = $this->totalTimes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveMessageGroupResponseBody
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
        if (isset($map['Deletatime'])) {
            $model->deletatime = $map['Deletatime'];
        }
        if (isset($map['Delete'])) {
            $model->delete = $map['Delete'];
        }
        if (isset($map['Deletor'])) {
            $model->deletor = $map['Deletor'];
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
        if (isset($map['MsgAmount'])) {
            $model->msgAmount = $map['MsgAmount'];
        }
        if (isset($map['OnlineUserCounts'])) {
            $model->onlineUserCounts = $map['OnlineUserCounts'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SuperLargeGroup'])) {
            $model->superLargeGroup = $map['SuperLargeGroup'];
        }
        if (isset($map['TotalTimes'])) {
            $model->totalTimes = $map['TotalTimes'];
        }

        return $model;
    }
}
