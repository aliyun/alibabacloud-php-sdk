<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Nis\V20211216\Models\GetNisTrafficMetricsResponseBody\metricStatics;

class GetNisTrafficMetricsResponseBody extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var metricStatics[]
     */
    public $metricStatics;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $unit;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'metricStatics' => 'MetricStatics',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'unit' => 'Unit',
    ];

    public function validate()
    {
        if (\is_array($this->metricStatics)) {
            Model::validateArray($this->metricStatics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->metricStatics) {
            if (\is_array($this->metricStatics)) {
                $res['MetricStatics'] = [];
                $n1 = 0;
                foreach ($this->metricStatics as $item1) {
                    $res['MetricStatics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['MetricStatics'])) {
            if (!empty($map['MetricStatics'])) {
                $model->metricStatics = [];
                $n1 = 0;
                foreach ($map['MetricStatics'] as $item1) {
                    $model->metricStatics[$n1] = metricStatics::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        return $model;
    }
}
