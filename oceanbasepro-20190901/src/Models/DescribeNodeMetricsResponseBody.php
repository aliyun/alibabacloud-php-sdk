<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DescribeNodeMetricsResponseBody extends Model
{
    /**
     * @example -
     *
     * @var string
     */
    public $nodeMetrics;

    /**
     * @description You can call this operation to query the detailed metrics information of an OceanBase Database node.
     *
     * @example EE205C00-30E4-XXXX-XXXX-87E3A8A2AA0C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description ```
     * http(s)://[Endpoint]/?Action=DescribeNodeMetrics
     * &InstanceId=ob317v4uif****
     * &PageNumber=1
     * &TenantId=ob2mr3oae0****
     * &Metrics=tps
     * &NodeName=i-bp16niirq4zdmgvm****
     * ```
     * @example 9
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'nodeMetrics' => 'NodeMetrics',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeMetrics) {
            $res['NodeMetrics'] = $this->nodeMetrics;
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
     * @return DescribeNodeMetricsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeMetrics'])) {
            $model->nodeMetrics = $map['NodeMetrics'];
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
