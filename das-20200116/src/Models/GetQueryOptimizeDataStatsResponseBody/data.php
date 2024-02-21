<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetQueryOptimizeDataStatsResponseBody;

use AlibabaCloud\SDK\DAS\V20200116\Models\GetQueryOptimizeDataStatsResponseBody\data\list_;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The reserved parameter.
     *
     * @example None
     *
     * @var string
     */
    public $extra;

    /**
     * @description The information about the SQL templates.
     *
     * @var list_[]
     */
    public $list;

    /**
     * @description The reserved parameter.
     *
     * @example None
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The reserved parameter.
     *
     * @example None
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The total number of entries returned.
     *
     * @example 10
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'extra'    => 'Extra',
        'list'     => 'List',
        'pageNo'   => 'PageNo',
        'pageSize' => 'PageSize',
        'total'    => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
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
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
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
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
