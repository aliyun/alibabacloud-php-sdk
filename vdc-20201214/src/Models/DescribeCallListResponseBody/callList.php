<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeCallListResponseBody;

use AlibabaCloud\Tea\Model;

class callList extends Model
{
    /**
     * @description App ID。
     *
     * @var string
     */
    public $appId;

    /**
     * @description 频道ID。
     *
     * @var string
     */
    public $channelId;

    /**
     * @description 通信状态，IN：进行中，OUT：已结束
     *
     * @var string
     */
    public $callStatus;

    /**
     * @description 通信的创建时间戳，使用UNIX时间戳表示，单位：秒。
     *
     * @var int
     */
    public $createdTs;

    /**
     * @description 通信的释放时间戳，使用UNIX时间戳表示，单位：秒。
     *
     * @var int
     */
    public $destroyedTs;

    /**
     * @description 通信持续时长，单位：秒。
     *
     * @var int
     */
    public $duration;

    /**
     * @description 通信用户数。
     *
     * @var int
     */
    public $userCnt;

    /**
     * @description 通信体验差的用户数。
     *
     * @var int
     */
    public $badExpUserCnt;
    protected $_name = [
        'appId'         => 'AppId',
        'channelId'     => 'ChannelId',
        'callStatus'    => 'CallStatus',
        'createdTs'     => 'CreatedTs',
        'destroyedTs'   => 'DestroyedTs',
        'duration'      => 'Duration',
        'userCnt'       => 'UserCnt',
        'badExpUserCnt' => 'BadExpUserCnt',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->callStatus) {
            $res['CallStatus'] = $this->callStatus;
        }
        if (null !== $this->createdTs) {
            $res['CreatedTs'] = $this->createdTs;
        }
        if (null !== $this->destroyedTs) {
            $res['DestroyedTs'] = $this->destroyedTs;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->userCnt) {
            $res['UserCnt'] = $this->userCnt;
        }
        if (null !== $this->badExpUserCnt) {
            $res['BadExpUserCnt'] = $this->badExpUserCnt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return callList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['CallStatus'])) {
            $model->callStatus = $map['CallStatus'];
        }
        if (isset($map['CreatedTs'])) {
            $model->createdTs = $map['CreatedTs'];
        }
        if (isset($map['DestroyedTs'])) {
            $model->destroyedTs = $map['DestroyedTs'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['UserCnt'])) {
            $model->userCnt = $map['UserCnt'];
        }
        if (isset($map['BadExpUserCnt'])) {
            $model->badExpUserCnt = $map['BadExpUserCnt'];
        }

        return $model;
    }
}
