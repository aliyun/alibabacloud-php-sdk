<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\ListRoomLivesResponseBody;

use AlibabaCloud\SDK\Imp\V20210630\Models\ListRoomLivesResponseBody\result\liveList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 是否还有下一页直播列表。
     *
     * @var bool
     */
    public $hasMore;

    /**
     * @description 直播列表信息。
     *
     * @var liveList[]
     */
    public $liveList;

    /**
     * @description 下一个拉取的时间戳，单位毫秒。
     *
     * @var int
     */
    public $nextQueryTimestamp;
    protected $_name = [
        'hasMore'            => 'HasMore',
        'liveList'           => 'LiveList',
        'nextQueryTimestamp' => 'NextQueryTimestamp',
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
        if (null !== $this->liveList) {
            $res['LiveList'] = [];
            if (null !== $this->liveList && \is_array($this->liveList)) {
                $n = 0;
                foreach ($this->liveList as $item) {
                    $res['LiveList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextQueryTimestamp) {
            $res['NextQueryTimestamp'] = $this->nextQueryTimestamp;
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
        if (isset($map['LiveList'])) {
            if (!empty($map['LiveList'])) {
                $model->liveList = [];
                $n               = 0;
                foreach ($map['LiveList'] as $item) {
                    $model->liveList[$n++] = null !== $item ? liveList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextQueryTimestamp'])) {
            $model->nextQueryTimestamp = $map['NextQueryTimestamp'];
        }

        return $model;
    }
}
