<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\ListApplyLinkMicUsersResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 会议申请连麦用户列表。
     *
     * @var string[]
     */
    public $applyLinkMicUserList;

    /**
     * @description 是否还有下一页成员列表。
     *
     * @var bool
     */
    public $hasMore;

    /**
     * @description 改会议的申请连麦成员总页数。
     *
     * @var int
     */
    public $pageTotal;

    /**
     * @description 该会议的申请连麦成员总数。
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'applyLinkMicUserList' => 'ApplyLinkMicUserList',
        'hasMore'              => 'HasMore',
        'pageTotal'            => 'PageTotal',
        'totalCount'           => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyLinkMicUserList) {
            $res['ApplyLinkMicUserList'] = $this->applyLinkMicUserList;
        }
        if (null !== $this->hasMore) {
            $res['HasMore'] = $this->hasMore;
        }
        if (null !== $this->pageTotal) {
            $res['PageTotal'] = $this->pageTotal;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['ApplyLinkMicUserList'])) {
            if (!empty($map['ApplyLinkMicUserList'])) {
                $model->applyLinkMicUserList = $map['ApplyLinkMicUserList'];
            }
        }
        if (isset($map['HasMore'])) {
            $model->hasMore = $map['HasMore'];
        }
        if (isset($map['PageTotal'])) {
            $model->pageTotal = $map['PageTotal'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
