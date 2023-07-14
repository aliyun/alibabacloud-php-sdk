<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTracesByPageResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTracesByPageResponseBody\pageBean\traceInfos;
use AlibabaCloud\Tea\Model;

class pageBean extends Model
{
    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 5
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The total number of returned entries.
     *
     * @example 1601
     *
     * @var int
     */
    public $total;

    /**
     * @description The details of the returned traces.
     *
     * @var traceInfos[]
     */
    public $traceInfos;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'total'      => 'Total',
        'traceInfos' => 'TraceInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->traceInfos) {
            $res['TraceInfos'] = [];
            if (null !== $this->traceInfos && \is_array($this->traceInfos)) {
                $n = 0;
                foreach ($this->traceInfos as $item) {
                    $res['TraceInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageBean
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['TraceInfos'])) {
            if (!empty($map['TraceInfos'])) {
                $model->traceInfos = [];
                $n                 = 0;
                foreach ($map['TraceInfos'] as $item) {
                    $model->traceInfos[$n++] = null !== $item ? traceInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
