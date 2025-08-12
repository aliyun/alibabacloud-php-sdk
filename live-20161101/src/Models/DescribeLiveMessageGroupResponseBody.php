<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class DescribeLiveMessageGroupResponseBody extends Model
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
     * @var int
     */
    public $deletatime;

    /**
     * @var bool
     */
    public $delete;

    /**
     * @var string
     */
    public $deletor;

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

    /**
     * @var int[]
     */
    public $msgAmount;

    /**
     * @var int
     */
    public $onlineUserCounts;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $superLargeGroup;

    /**
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

    public function validate()
    {
        if (\is_array($this->adminList)) {
            Model::validateArray($this->adminList);
        }
        if (\is_array($this->msgAmount)) {
            Model::validateArray($this->msgAmount);
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
            if (\is_array($this->msgAmount)) {
                $res['MsgAmount'] = [];
                foreach ($this->msgAmount as $key1 => $value1) {
                    $res['MsgAmount'][$key1] = $value1;
                }
            }
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
            if (!empty($map['MsgAmount'])) {
                $model->msgAmount = [];
                foreach ($map['MsgAmount'] as $key1 => $value1) {
                    $model->msgAmount[$key1] = $value1;
                }
            }
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
