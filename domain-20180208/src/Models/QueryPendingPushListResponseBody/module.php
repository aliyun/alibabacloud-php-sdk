<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models\QueryPendingPushListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180208\Models\QueryPendingPushListResponseBody\module\pushList;

class module extends Model
{
    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var pushList[]
     */
    public $pushList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'pushList' => 'PushList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->pushList)) {
            Model::validateArray($this->pushList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->pushList) {
            if (\is_array($this->pushList)) {
                $res['PushList'] = [];
                $n1 = 0;
                foreach ($this->pushList as $item1) {
                    $res['PushList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PushList'])) {
            if (!empty($map['PushList'])) {
                $model->pushList = [];
                $n1 = 0;
                foreach ($map['PushList'] as $item1) {
                    $model->pushList[$n1] = pushList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
