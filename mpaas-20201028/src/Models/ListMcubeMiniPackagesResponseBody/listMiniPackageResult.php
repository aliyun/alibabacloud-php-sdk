<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeMiniPackagesResponseBody;

use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeMiniPackagesResponseBody\listMiniPackageResult\miniPackageList;
use AlibabaCloud\Tea\Model;

class listMiniPackageResult extends Model
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
     * @var miniPackageList[]
     */
    public $miniPackageList;

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
        'currentPage'     => 'CurrentPage',
        'hasMore'         => 'HasMore',
        'miniPackageList' => 'MiniPackageList',
        'pageSize'        => 'PageSize',
        'resultMsg'       => 'ResultMsg',
        'success'         => 'Success',
        'totalCount'      => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->hasMore) {
            $res['HasMore'] = $this->hasMore;
        }
        if (null !== $this->miniPackageList) {
            $res['MiniPackageList'] = [];
            if (null !== $this->miniPackageList && \is_array($this->miniPackageList)) {
                $n = 0;
                foreach ($this->miniPackageList as $item) {
                    $res['MiniPackageList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return listMiniPackageResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['HasMore'])) {
            $model->hasMore = $map['HasMore'];
        }
        if (isset($map['MiniPackageList'])) {
            if (!empty($map['MiniPackageList'])) {
                $model->miniPackageList = [];
                $n                      = 0;
                foreach ($map['MiniPackageList'] as $item) {
                    $model->miniPackageList[$n++] = null !== $item ? miniPackageList::fromMap($item) : $item;
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
