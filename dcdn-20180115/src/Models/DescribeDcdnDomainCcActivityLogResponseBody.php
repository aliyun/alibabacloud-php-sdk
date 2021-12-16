<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainCcActivityLogResponseBody\activityLog;
use AlibabaCloud\Tea\Model;

class DescribeDcdnDomainCcActivityLogResponseBody extends Model
{
    /**
     * @var activityLog[]
     */
    public $activityLog;

    /**
     * @var int
     */
    public $pageIndex;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'activityLog' => 'ActivityLog',
        'pageIndex'   => 'PageIndex',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'total'       => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityLog) {
            $res['ActivityLog'] = [];
            if (null !== $this->activityLog && \is_array($this->activityLog)) {
                $n = 0;
                foreach ($this->activityLog as $item) {
                    $res['ActivityLog'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnDomainCcActivityLogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivityLog'])) {
            if (!empty($map['ActivityLog'])) {
                $model->activityLog = [];
                $n                  = 0;
                foreach ($map['ActivityLog'] as $item) {
                    $model->activityLog[$n++] = null !== $item ? activityLog::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
