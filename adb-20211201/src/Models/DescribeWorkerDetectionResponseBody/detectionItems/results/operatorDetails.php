<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeWorkerDetectionResponseBody\detectionItems\results;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeWorkerDetectionResponseBody\detectionItems\results\operatorDetails\searchResults;

class operatorDetails extends Model
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
        'metricName' => 'MetricName',
        'searchResults' => 'SearchResults',
    ];

    public function validate()
    {
        if (\is_array($this->searchResults)) {
            Model::validateArray($this->searchResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }

        if (null !== $this->searchResults) {
            if (\is_array($this->searchResults)) {
                $res['SearchResults'] = [];
                $n1 = 0;
                foreach ($this->searchResults as $item1) {
                    $res['SearchResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }

        if (isset($map['SearchResults'])) {
            if (!empty($map['SearchResults'])) {
                $model->searchResults = [];
                $n1 = 0;
                foreach ($map['SearchResults'] as $item1) {
                    $model->searchResults[$n1] = searchResults::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
