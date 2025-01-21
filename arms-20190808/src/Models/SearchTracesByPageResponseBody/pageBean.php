<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTracesByPageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTracesByPageResponseBody\pageBean\traceInfos;

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
    public $total;
    /**
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
        if (\is_array($this->traceInfos)) {
            Model::validateArray($this->traceInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->traceInfos)) {
                $res['TraceInfos'] = [];
                $n1                = 0;
                foreach ($this->traceInfos as $item1) {
                    $res['TraceInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
                $n1                = 0;
                foreach ($map['TraceInfos'] as $item1) {
                    $model->traceInfos[$n1++] = traceInfos::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
