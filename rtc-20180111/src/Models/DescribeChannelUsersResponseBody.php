<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;

class DescribeChannelUsersResponseBody extends Model
{
    /**
     * @var int
     */
    public $channelProfile;

    /**
     * @var int
     */
    public $commTotalNum;

    /**
     * @var string[]
     */
    public $interactiveUserList;

    /**
     * @var int
     */
    public $interactiveUserNum;

    /**
     * @var bool
     */
    public $isChannelExist;

    /**
     * @var string[]
     */
    public $liveUserList;

    /**
     * @var int
     */
    public $liveUserNum;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var string[]
     */
    public $userList;
    protected $_name = [
        'channelProfile' => 'ChannelProfile',
        'commTotalNum' => 'CommTotalNum',
        'interactiveUserList' => 'InteractiveUserList',
        'interactiveUserNum' => 'InteractiveUserNum',
        'isChannelExist' => 'IsChannelExist',
        'liveUserList' => 'LiveUserList',
        'liveUserNum' => 'LiveUserNum',
        'requestId' => 'RequestId',
        'timestamp' => 'Timestamp',
        'userList' => 'UserList',
    ];

    public function validate()
    {
        if (\is_array($this->interactiveUserList)) {
            Model::validateArray($this->interactiveUserList);
        }
        if (\is_array($this->liveUserList)) {
            Model::validateArray($this->liveUserList);
        }
        if (\is_array($this->userList)) {
            Model::validateArray($this->userList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelProfile) {
            $res['ChannelProfile'] = $this->channelProfile;
        }

        if (null !== $this->commTotalNum) {
            $res['CommTotalNum'] = $this->commTotalNum;
        }

        if (null !== $this->interactiveUserList) {
            if (\is_array($this->interactiveUserList)) {
                $res['InteractiveUserList'] = [];
                $n1 = 0;
                foreach ($this->interactiveUserList as $item1) {
                    $res['InteractiveUserList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->interactiveUserNum) {
            $res['InteractiveUserNum'] = $this->interactiveUserNum;
        }

        if (null !== $this->isChannelExist) {
            $res['IsChannelExist'] = $this->isChannelExist;
        }

        if (null !== $this->liveUserList) {
            if (\is_array($this->liveUserList)) {
                $res['LiveUserList'] = [];
                $n1 = 0;
                foreach ($this->liveUserList as $item1) {
                    $res['LiveUserList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->liveUserNum) {
            $res['LiveUserNum'] = $this->liveUserNum;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        if (null !== $this->userList) {
            if (\is_array($this->userList)) {
                $res['UserList'] = [];
                $n1 = 0;
                foreach ($this->userList as $item1) {
                    $res['UserList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ChannelProfile'])) {
            $model->channelProfile = $map['ChannelProfile'];
        }

        if (isset($map['CommTotalNum'])) {
            $model->commTotalNum = $map['CommTotalNum'];
        }

        if (isset($map['InteractiveUserList'])) {
            if (!empty($map['InteractiveUserList'])) {
                $model->interactiveUserList = [];
                $n1 = 0;
                foreach ($map['InteractiveUserList'] as $item1) {
                    $model->interactiveUserList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InteractiveUserNum'])) {
            $model->interactiveUserNum = $map['InteractiveUserNum'];
        }

        if (isset($map['IsChannelExist'])) {
            $model->isChannelExist = $map['IsChannelExist'];
        }

        if (isset($map['LiveUserList'])) {
            if (!empty($map['LiveUserList'])) {
                $model->liveUserList = [];
                $n1 = 0;
                foreach ($map['LiveUserList'] as $item1) {
                    $model->liveUserList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['LiveUserNum'])) {
            $model->liveUserNum = $map['LiveUserNum'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        if (isset($map['UserList'])) {
            if (!empty($map['UserList'])) {
                $model->userList = [];
                $n1 = 0;
                foreach ($map['UserList'] as $item1) {
                    $model->userList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
