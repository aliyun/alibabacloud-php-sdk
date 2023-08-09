<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiagnosticMetricSetsResponseBody\metricSets;
use AlibabaCloud\Tea\Model;

class DescribeDiagnosticMetricSetsResponseBody extends Model
{
    /**
     * @description A collection of diagnostic metrics.
     *
     * @var metricSets[]
     */
    public $metricSets;

    /**
     * @description The query token returned in this call.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE*****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'metricSets' => 'MetricSets',
        'nextToken'  => 'NextToken',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricSets) {
            $res['MetricSets'] = [];
            if (null !== $this->metricSets && \is_array($this->metricSets)) {
                $n = 0;
                foreach ($this->metricSets as $item) {
                    $res['MetricSets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDiagnosticMetricSetsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetricSets'])) {
            if (!empty($map['MetricSets'])) {
                $model->metricSets = [];
                $n                 = 0;
                foreach ($map['MetricSets'] as $item) {
                    $model->metricSets[$n++] = null !== $item ? metricSets::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
