<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshAdditionalStatusResponseBody\clusterStatus;
use AlibabaCloud\Tea\Model;

class DescribeServiceMeshAdditionalStatusResponseBody extends Model
{
    /**
     * @description Indicates whether the SLB instance is reused. Valid values:
     *
     *   `true`: The SLB instance is reused.
     *   `false`: The SLB instance is not reused.
     *
     * @var clusterStatus
     */
    public $clusterStatus;

    /**
     * @description The check result of the number of SLB instances created for exposing the API server. Valid values:
     *
     *   `too_much`: An excessive number of SLB instances are created.
     *   `num_exact`: A proper number of SLB instances are created.
     *   `too_little`: The number of SLB instances falls short.
     *
     * @example 11fd0027-c27e-41bb-a565-75583054****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterStatus' => 'ClusterStatus',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterStatus) {
            $res['ClusterStatus'] = null !== $this->clusterStatus ? $this->clusterStatus->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServiceMeshAdditionalStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterStatus'])) {
            $model->clusterStatus = clusterStatus::fromMap($map['ClusterStatus']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
