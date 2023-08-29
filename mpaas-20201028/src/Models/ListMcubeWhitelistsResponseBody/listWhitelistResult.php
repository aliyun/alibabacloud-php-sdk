<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeWhitelistsResponseBody;

use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeWhitelistsResponseBody\listWhitelistResult\whitelists;
use AlibabaCloud\Tea\Model;

class listWhitelistResult extends Model
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

    /**
     * @var whitelists[]
     */
    public $whitelists;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'hasMore'     => 'HasMore',
        'pageSize'    => 'PageSize',
        'resultMsg'   => 'ResultMsg',
        'success'     => 'Success',
        'totalCount'  => 'TotalCount',
        'whitelists'  => 'Whitelists',
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
        if (null !== $this->whitelists) {
            $res['Whitelists'] = [];
            if (null !== $this->whitelists && \is_array($this->whitelists)) {
                $n = 0;
                foreach ($this->whitelists as $item) {
                    $res['Whitelists'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listWhitelistResult
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
        if (isset($map['Whitelists'])) {
            if (!empty($map['Whitelists'])) {
                $model->whitelists = [];
                $n                 = 0;
                foreach ($map['Whitelists'] as $item) {
                    $model->whitelists[$n++] = null !== $item ? whitelists::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
