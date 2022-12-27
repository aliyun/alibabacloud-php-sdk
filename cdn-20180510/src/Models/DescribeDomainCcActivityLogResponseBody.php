<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainCcActivityLogResponseBody\activityLog;
use AlibabaCloud\Tea\Model;

class DescribeDomainCcActivityLogResponseBody extends Model
{
    /**
     * @description The log entry of the event that triggered rate limiting.
     *
     * @var activityLog[]
     */
    public $activityLog;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageIndex;

    /**
     * @description The number of entries returned per page.
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example 3C6CCEC4-6B88-4D4A-93E4-D47B3D92CF8F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 20
     *
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
     * @return DescribeDomainCcActivityLogResponseBody
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
