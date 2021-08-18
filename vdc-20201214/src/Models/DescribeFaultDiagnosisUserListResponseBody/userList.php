<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeFaultDiagnosisUserListResponseBody;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeFaultDiagnosisUserListResponseBody\userList\faultList;
use AlibabaCloud\Tea\Model;

class userList extends Model
{
    /**
     * @description 频道ID。
     *
     * @var string
     */
    public $channelId;

    /**
     * @description 用户ID。
     *
     * @var string
     */
    public $userId;

    /**
     * @description 用户首次进入通话时间，使用UNIX时间戳表示，单位：秒。
     *
     * @var int
     */
    public $createdTs;

    /**
     * @description 用户最后一次离开通话时间，使用UNIX时间戳表示，单位：秒。
     *
     * @var int
     */
    public $destroyedTs;

    /**
     * @description 通信的创建时间戳，使用UNIX时间戳表示，单位：秒。
     *
     * @var int
     */
    public $channelCreatedTs;

    /**
     * @description 异常列表。
     *
     * @var faultList[]
     */
    public $faultList;
    protected $_name = [
        'channelId'        => 'ChannelId',
        'userId'           => 'UserId',
        'createdTs'        => 'CreatedTs',
        'destroyedTs'      => 'DestroyedTs',
        'channelCreatedTs' => 'ChannelCreatedTs',
        'faultList'        => 'FaultList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->createdTs) {
            $res['CreatedTs'] = $this->createdTs;
        }
        if (null !== $this->destroyedTs) {
            $res['DestroyedTs'] = $this->destroyedTs;
        }
        if (null !== $this->channelCreatedTs) {
            $res['ChannelCreatedTs'] = $this->channelCreatedTs;
        }
        if (null !== $this->faultList) {
            $res['FaultList'] = [];
            if (null !== $this->faultList && \is_array($this->faultList)) {
                $n = 0;
                foreach ($this->faultList as $item) {
                    $res['FaultList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['CreatedTs'])) {
            $model->createdTs = $map['CreatedTs'];
        }
        if (isset($map['DestroyedTs'])) {
            $model->destroyedTs = $map['DestroyedTs'];
        }
        if (isset($map['ChannelCreatedTs'])) {
            $model->channelCreatedTs = $map['ChannelCreatedTs'];
        }
        if (isset($map['FaultList'])) {
            if (!empty($map['FaultList'])) {
                $model->faultList = [];
                $n                = 0;
                foreach ($map['FaultList'] as $item) {
                    $model->faultList[$n++] = null !== $item ? faultList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
