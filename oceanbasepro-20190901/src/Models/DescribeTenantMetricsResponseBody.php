<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DescribeTenantMetricsResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example EE205C00-30E4-XXXX-XXXX-87E3A8A2AA0C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The metrics of the tenant.
     *
     * @example "Metrics":[ {"request_queue_rt":0.0,"TimeStamp":"2022-02-23T01:58:00Z"}]
     *
     * @var string
     */
    public $tenantMetrics;

    /**
     * @description The total count.
     *
     * @example 9
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'     => 'RequestId',
        'tenantMetrics' => 'TenantMetrics',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->tenantMetrics) {
            $res['TenantMetrics'] = $this->tenantMetrics;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTenantMetricsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TenantMetrics'])) {
            $model->tenantMetrics = $map['TenantMetrics'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
