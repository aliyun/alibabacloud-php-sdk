<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeChannelTopPubUserListResponseBody;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeChannelTopPubUserListResponseBody\topPubUserDetailList\onlinePeriods;
use AlibabaCloud\Tea\Model;

class topPubUserDetailList extends Model
{
    /**
     * @description 第一次加入通话的时间，使用UNIX时间戳表示，单位：秒。
     *
     * @var int
     */
    public $createdTs;

    /**
     * @description 最后一次离开通话的时间，使用UNIX时间戳表示，单位：秒。通话未结束时值为0。
     *
     * @var int
     */
    public $destroyedTs;

    /**
     * @description 总时长，单位：秒。
     *
     * @var int
     */
    public $duration;

    /**
     * @description 地域位置，例如：北京市-北京市
     *
     * @var string
     */
    public $location;

    /**
     * @description 通信时长，单位：秒。
     *
     * @var int
     */
    public $onlineDuration;

    /**
     * @description 在线期间用户列表。
     *
     * @var onlinePeriods[]
     */
    public $onlinePeriods;

    /**
     * @description 用户ID。
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'createdTs'      => 'CreatedTs',
        'destroyedTs'    => 'DestroyedTs',
        'duration'       => 'Duration',
        'location'       => 'Location',
        'onlineDuration' => 'OnlineDuration',
        'onlinePeriods'  => 'OnlinePeriods',
        'userId'         => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTs) {
            $res['CreatedTs'] = $this->createdTs;
        }
        if (null !== $this->destroyedTs) {
            $res['DestroyedTs'] = $this->destroyedTs;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->onlineDuration) {
            $res['OnlineDuration'] = $this->onlineDuration;
        }
        if (null !== $this->onlinePeriods) {
            $res['OnlinePeriods'] = [];
            if (null !== $this->onlinePeriods && \is_array($this->onlinePeriods)) {
                $n = 0;
                foreach ($this->onlinePeriods as $item) {
                    $res['OnlinePeriods'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return topPubUserDetailList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedTs'])) {
            $model->createdTs = $map['CreatedTs'];
        }
        if (isset($map['DestroyedTs'])) {
            $model->destroyedTs = $map['DestroyedTs'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['OnlineDuration'])) {
            $model->onlineDuration = $map['OnlineDuration'];
        }
        if (isset($map['OnlinePeriods'])) {
            if (!empty($map['OnlinePeriods'])) {
                $model->onlinePeriods = [];
                $n                    = 0;
                foreach ($map['OnlinePeriods'] as $item) {
                    $model->onlinePeriods[$n++] = null !== $item ? onlinePeriods::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
