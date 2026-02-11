<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210422\Models\SearchTraceAppByPageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20210422\Models\SearchTraceAppByPageResponseBody\pageBean\traceApps;

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
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
        'traceApps' => 'TraceApps',
    ];

    public function validate()
    {
        if (\is_array($this->traceApps)) {
            Model::validateArray($this->traceApps);
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

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->traceApps) {
            if (\is_array($this->traceApps)) {
                $res['TraceApps'] = [];
                $n1 = 0;
                foreach ($this->traceApps as $item1) {
                    $res['TraceApps'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['TraceApps'])) {
            if (!empty($map['TraceApps'])) {
                $model->traceApps = [];
                $n1 = 0;
                foreach ($map['TraceApps'] as $item1) {
                    $model->traceApps[$n1] = traceApps::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
