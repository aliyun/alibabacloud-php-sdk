<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAiOutboundTaskExecDetailResponseBody;

use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAiOutboundTaskExecDetailResponseBody\data\list_;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example true
     *
     * @var bool
     */
    public $hasNextPage;

    /**
     * @var list_[]
     */
    public $list;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 199
     *
     * @var int
     */
    public $totalResults;
    protected $_name = [
        'currentPage'  => 'CurrentPage',
        'hasNextPage'  => 'HasNextPage',
        'list'         => 'List',
        'pageSize'     => 'PageSize',
        'totalResults' => 'TotalResults',
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
        if (null !== $this->hasNextPage) {
            $res['HasNextPage'] = $this->hasNextPage;
        }
        if (null !== $this->list) {
            $res['List'] = [];
            if (null !== $this->list && \is_array($this->list)) {
                $n = 0;
                foreach ($this->list as $item) {
                    $res['List'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalResults) {
            $res['TotalResults'] = $this->totalResults;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['HasNextPage'])) {
            $model->hasNextPage = $map['HasNextPage'];
        }
        if (isset($map['List'])) {
            if (!empty($map['List'])) {
                $model->list = [];
                $n           = 0;
                foreach ($map['List'] as $item) {
                    $model->list[$n++] = null !== $item ? list_::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalResults'])) {
            $model->totalResults = $map['TotalResults'];
        }

        return $model;
    }
}
