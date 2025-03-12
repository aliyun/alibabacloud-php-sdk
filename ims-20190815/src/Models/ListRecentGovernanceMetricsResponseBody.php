<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\ListRecentGovernanceMetricsResponseBody\governanceMetrics;
use AlibabaCloud\Tea\Model;

class ListRecentGovernanceMetricsResponseBody extends Model
{
    /**
     * @description The time when the report was generated.
     *
     * @example 2025-02-10T02:11:23Z
     *
     * @var string
     */
    public $generateTime;

    /**
     * @description The metric values of all governance items. The value of the parameter is an array, and each row in the array contains the metric value of a governance item.
     *
     * @var governanceMetrics
     */
    public $governanceMetrics;

    /**
     * @description The request ID.
     *
     * @example 49846A91-C1C5-5C2B-BC64-8B0B7BADB4C0
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'generateTime'      => 'GenerateTime',
        'governanceMetrics' => 'GovernanceMetrics',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->generateTime) {
            $res['GenerateTime'] = $this->generateTime;
        }
        if (null !== $this->governanceMetrics) {
            $res['GovernanceMetrics'] = null !== $this->governanceMetrics ? $this->governanceMetrics->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRecentGovernanceMetricsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GenerateTime'])) {
            $model->generateTime = $map['GenerateTime'];
        }
        if (isset($map['GovernanceMetrics'])) {
            $model->governanceMetrics = governanceMetrics::fromMap($map['GovernanceMetrics']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
