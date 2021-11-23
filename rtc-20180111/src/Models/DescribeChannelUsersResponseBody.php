<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Tea\Model;

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
        'channelProfile'      => 'ChannelProfile',
        'commTotalNum'        => 'CommTotalNum',
        'interactiveUserList' => 'InteractiveUserList',
        'interactiveUserNum'  => 'InteractiveUserNum',
        'isChannelExist'      => 'IsChannelExist',
        'liveUserList'        => 'LiveUserList',
        'liveUserNum'         => 'LiveUserNum',
        'requestId'           => 'RequestId',
        'timestamp'           => 'Timestamp',
        'userList'            => 'UserList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelProfile) {
            $res['ChannelProfile'] = $this->channelProfile;
        }
        if (null !== $this->commTotalNum) {
            $res['CommTotalNum'] = $this->commTotalNum;
        }
        if (null !== $this->interactiveUserList) {
            $res['InteractiveUserList'] = $this->interactiveUserList;
        }
        if (null !== $this->interactiveUserNum) {
            $res['InteractiveUserNum'] = $this->interactiveUserNum;
        }
        if (null !== $this->isChannelExist) {
            $res['IsChannelExist'] = $this->isChannelExist;
        }
        if (null !== $this->liveUserList) {
            $res['LiveUserList'] = $this->liveUserList;
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
            $res['UserList'] = $this->userList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeChannelUsersResponseBody
     */
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
                $model->interactiveUserList = $map['InteractiveUserList'];
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
                $model->liveUserList = $map['LiveUserList'];
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
                $model->userList = $map['UserList'];
            }
        }

        return $model;
    }
}
