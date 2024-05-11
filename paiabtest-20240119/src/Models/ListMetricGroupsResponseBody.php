<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIABTest\V20240119\Models;

use AlibabaCloud\SDK\PAIABTest\V20240119\Models\ListMetricGroupsResponseBody\metricGroups;
use AlibabaCloud\Tea\Model;

class ListMetricGroupsResponseBody extends Model
{
    /**
     * @var metricGroups[]
     */
    public $metricGroups;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'metricGroups' => 'MetricGroups',
        'requestId'    => 'RequestId',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricGroups) {
            $res['MetricGroups'] = [];
            if (null !== $this->metricGroups && \is_array($this->metricGroups)) {
                $n = 0;
                foreach ($this->metricGroups as $item) {
                    $res['MetricGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMetricGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetricGroups'])) {
            if (!empty($map['MetricGroups'])) {
                $model->metricGroups = [];
                $n                   = 0;
                foreach ($map['MetricGroups'] as $item) {
                    $model->metricGroups[$n++] = null !== $item ? metricGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
