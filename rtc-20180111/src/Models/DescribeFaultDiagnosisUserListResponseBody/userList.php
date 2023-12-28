<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeFaultDiagnosisUserListResponseBody;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeFaultDiagnosisUserListResponseBody\userList\faultList;
use AlibabaCloud\Tea\Model;

class userList extends Model
{
    /**
     * @example 1614936817
     *
     * @var int
     */
    public $channelCreatedTs;

    /**
     * @example 904
     *
     * @var string
     */
    public $channelId;

    /**
     * @example 1614936817
     *
     * @var int
     */
    public $createdTs;

    /**
     * @example 1614936817
     *
     * @var int
     */
    public $destroyedTs;

    /**
     * @var faultList[]
     */
    public $faultList;

    /**
     * @example 123456
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'channelCreatedTs' => 'ChannelCreatedTs',
        'channelId'        => 'ChannelId',
        'createdTs'        => 'CreatedTs',
        'destroyedTs'      => 'DestroyedTs',
        'faultList'        => 'FaultList',
        'userId'           => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelCreatedTs) {
            $res['ChannelCreatedTs'] = $this->channelCreatedTs;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->createdTs) {
            $res['CreatedTs'] = $this->createdTs;
        }
        if (null !== $this->destroyedTs) {
            $res['DestroyedTs'] = $this->destroyedTs;
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
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['ChannelCreatedTs'])) {
            $model->channelCreatedTs = $map['ChannelCreatedTs'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['CreatedTs'])) {
            $model->createdTs = $map['CreatedTs'];
        }
        if (isset($map['DestroyedTs'])) {
            $model->destroyedTs = $map['DestroyedTs'];
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
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
