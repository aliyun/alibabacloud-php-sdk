<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeMiniAppsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeMiniAppsResponseBody\listMiniResult\miniProgramList;

class listMiniResult extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var bool
     */
    public $hasMore;

    /**
     * @var miniProgramList[]
     */
    public $miniProgramList;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $resultMsg;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'hasMore' => 'HasMore',
        'miniProgramList' => 'MiniProgramList',
        'pageSize' => 'PageSize',
        'resultMsg' => 'ResultMsg',
        'success' => 'Success',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->miniProgramList)) {
            Model::validateArray($this->miniProgramList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->hasMore) {
            $res['HasMore'] = $this->hasMore;
        }

        if (null !== $this->miniProgramList) {
            if (\is_array($this->miniProgramList)) {
                $res['MiniProgramList'] = [];
                $n1 = 0;
                foreach ($this->miniProgramList as $item1) {
                    $res['MiniProgramList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->resultMsg) {
            $res['ResultMsg'] = $this->resultMsg;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['HasMore'])) {
            $model->hasMore = $map['HasMore'];
        }

        if (isset($map['MiniProgramList'])) {
            if (!empty($map['MiniProgramList'])) {
                $model->miniProgramList = [];
                $n1 = 0;
                foreach ($map['MiniProgramList'] as $item1) {
                    $model->miniProgramList[$n1] = miniProgramList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ResultMsg'])) {
            $model->resultMsg = $map['ResultMsg'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
