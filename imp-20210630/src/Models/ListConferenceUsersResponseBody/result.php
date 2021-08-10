<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\ListConferenceUsersResponseBody;

use AlibabaCloud\SDK\Imp\V20210630\Models\ListConferenceUsersResponseBody\result\conferenceUserList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 会议用户列表。
     *
     * @var conferenceUserList[]
     */
    public $conferenceUserList;

    /**
     * @description 是否还有数据
     *
     * @var bool
     */
    public $hasMore;

    /**
     * @description 总条目数
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description 总页数
     *
     * @var int
     */
    public $pageTotal;
    protected $_name = [
        'conferenceUserList' => 'ConferenceUserList',
        'hasMore'            => 'HasMore',
        'totalCount'         => 'TotalCount',
        'pageTotal'          => 'PageTotal',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conferenceUserList) {
            $res['ConferenceUserList'] = [];
            if (null !== $this->conferenceUserList && \is_array($this->conferenceUserList)) {
                $n = 0;
                foreach ($this->conferenceUserList as $item) {
                    $res['ConferenceUserList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hasMore) {
            $res['HasMore'] = $this->hasMore;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageTotal) {
            $res['PageTotal'] = $this->pageTotal;
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
        if (isset($map['ConferenceUserList'])) {
            if (!empty($map['ConferenceUserList'])) {
                $model->conferenceUserList = [];
                $n                         = 0;
                foreach ($map['ConferenceUserList'] as $item) {
                    $model->conferenceUserList[$n++] = null !== $item ? conferenceUserList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HasMore'])) {
            $model->hasMore = $map['HasMore'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageTotal'])) {
            $model->pageTotal = $map['PageTotal'];
        }

        return $model;
    }
}
