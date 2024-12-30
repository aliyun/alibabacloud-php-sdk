<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeExecutorDetectionResponseBody\detectionItems\results;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeExecutorDetectionResponseBody\detectionItems\results\operatorAgg\searchResults;
use AlibabaCloud\Tea\Model;

class operatorAgg extends Model
{
    /**
     * @example OperatorCost
     *
     * @var string
     */
    public $metricName;

    /**
     * @var searchResults[]
     */
    public $searchResults;
    protected $_name = [
        'metricName'    => 'MetricName',
        'searchResults' => 'SearchResults',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->searchResults) {
            $res['SearchResults'] = [];
            if (null !== $this->searchResults && \is_array($this->searchResults)) {
                $n = 0;
                foreach ($this->searchResults as $item) {
                    $res['SearchResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operatorAgg
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['SearchResults'])) {
            if (!empty($map['SearchResults'])) {
                $model->searchResults = [];
                $n                    = 0;
                foreach ($map['SearchResults'] as $item) {
                    $model->searchResults[$n++] = null !== $item ? searchResults::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
