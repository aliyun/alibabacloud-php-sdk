<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210422\Models\SearchTraceAppByPageResponseBody;

use AlibabaCloud\SDK\ARMS\V20210422\Models\SearchTraceAppByPageResponseBody\pageBean\traceApps;
use AlibabaCloud\Tea\Model;

class pageBean extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var traceApps[]
     */
    public $traceApps;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'totalCount' => 'TotalCount',
        'traceApps'  => 'TraceApps',
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->traceApps) {
            $res['TraceApps'] = [];
            if (null !== $this->traceApps && \is_array($this->traceApps)) {
                $n = 0;
                foreach ($this->traceApps as $item) {
                    $res['TraceApps'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['TraceApps'])) {
            if (!empty($map['TraceApps'])) {
                $model->traceApps = [];
                $n                = 0;
                foreach ($map['TraceApps'] as $item) {
                    $model->traceApps[$n++] = null !== $item ? traceApps::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
