<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeWorkerDetectionResponseBody\detectionItems\results;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeWorkerDetectionResponseBody\detectionItems\results\topAccessTables\searchResults;
use AlibabaCloud\Tea\Model;

class topAccessTables extends Model
{
    /**
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
     * @return topAccessTables
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
