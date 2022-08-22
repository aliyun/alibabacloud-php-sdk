<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveRoomUserStatisticsResponseBody;

use AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveRoomUserStatisticsResponseBody\result\userStatisticsList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $hasMore;

    /**
     * @var string
     */
    public $liveId;

    /**
     * @var int
     */
    public $pageTotal;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var userStatisticsList[]
     */
    public $userStatisticsList;
    protected $_name = [
        'hasMore'            => 'HasMore',
        'liveId'             => 'LiveId',
        'pageTotal'          => 'PageTotal',
        'totalCount'         => 'TotalCount',
        'userStatisticsList' => 'UserStatisticsList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hasMore) {
            $res['HasMore'] = $this->hasMore;
        }
        if (null !== $this->liveId) {
            $res['LiveId'] = $this->liveId;
        }
        if (null !== $this->pageTotal) {
            $res['PageTotal'] = $this->pageTotal;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->userStatisticsList) {
            $res['UserStatisticsList'] = [];
            if (null !== $this->userStatisticsList && \is_array($this->userStatisticsList)) {
                $n = 0;
                foreach ($this->userStatisticsList as $item) {
                    $res['UserStatisticsList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HasMore'])) {
            $model->hasMore = $map['HasMore'];
        }
        if (isset($map['LiveId'])) {
            $model->liveId = $map['LiveId'];
        }
        if (isset($map['PageTotal'])) {
            $model->pageTotal = $map['PageTotal'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['UserStatisticsList'])) {
            if (!empty($map['UserStatisticsList'])) {
                $model->userStatisticsList = [];
                $n                         = 0;
                foreach ($map['UserStatisticsList'] as $item) {
                    $model->userStatisticsList[$n++] = null !== $item ? userStatisticsList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
