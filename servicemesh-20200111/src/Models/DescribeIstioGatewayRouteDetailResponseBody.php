<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail;
use AlibabaCloud\Tea\Model;

class DescribeIstioGatewayRouteDetailResponseBody extends Model
{
    /**
     * @example demo route
     *
     * @var string
     */
    public $description;

    /**
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @example 31d3a0f0-07ed-4f6e-9004-1804498c****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The percentage of requests to which the delay fault is injected.
     *
     * @var routeDetail
     */
    public $routeDetail;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'description' => 'Description',
        'namespace'   => 'Namespace',
        'priority'    => 'Priority',
        'requestId'   => 'RequestId',
        'routeDetail' => 'RouteDetail',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->routeDetail) {
            $res['RouteDetail'] = null !== $this->routeDetail ? $this->routeDetail->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIstioGatewayRouteDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RouteDetail'])) {
            $model->routeDetail = routeDetail::fromMap($map['RouteDetail']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
