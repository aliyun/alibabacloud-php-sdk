<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelTopPubUserListResponseBody;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelTopPubUserListResponseBody\topPubUserDetailList\onlinePeriods;
use AlibabaCloud\Tea\Model;

class topPubUserDetailList extends Model
{
    /**
     * @example 1615893327
     *
     * @var int
     */
    public $createdTs;

    /**
     * @example 1615893442
     *
     * @var int
     */
    public $destroyedTs;

    /**
     * @example 0
     *
     * @var int
     */
    public $duration;

    /**
     * @example 浙江省-杭州市
     *
     * @var string
     */
    public $location;

    /**
     * @example 0
     *
     * @var int
     */
    public $onlineDuration;

    /**
     * @var onlinePeriods[]
     */
    public $onlinePeriods;

    /**
     * @example testuserid
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
