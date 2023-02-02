<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DescribeNodeMetricsRequest extends Model
{
    /**
     * @description The end time of the time range for querying monitoring data.
     * The value must be UTC time in the format of YYYY-MM-DDThh:mm:ssZ.
     * @example 2021-09-13T15:40:43Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the OceanBase cluster.
     *
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The monitoring metrics.
     * For more information about supported metrics, see [Node statistics](~~212099~~).
     * @example tps
     *
     * @var string
     */
    public $metrics;

    /**
     * @description The list of nodes.
     *
     * @example [i-bp16niirq4zdmgvm****,i-bp16n56hq4z4fgvm****]
     *
     * @var string
     */
    public $nodeIdList;

    /**
     * @description The name of the node.
     *
     * @example i-bp16niirq4zdmgvm****
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The number of the page to return.
     * - Default value: 1
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of rows to return on each page.
     * - Default value: 10
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The start time of the time range for querying monitoring data.
     * The value must be UTC time in the format of YYYY-MM-DDThh:mm:ssZ.
     * @example 2021-06-13T15:40:43Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The ID of the tenant.
     *
     * @example tfafd34fs****
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'endTime'    => 'EndTime',
        'instanceId' => 'InstanceId',
        'metrics'    => 'Metrics',
        'nodeIdList' => 'NodeIdList',
        'nodeName'   => 'NodeName',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'startTime'  => 'StartTime',
        'tenantId'   => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->metrics) {
            $res['Metrics'] = $this->metrics;
        }
        if (null !== $this->nodeIdList) {
            $res['NodeIdList'] = $this->nodeIdList;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNodeMetricsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Metrics'])) {
            $model->metrics = $map['Metrics'];
        }
        if (isset($map['NodeIdList'])) {
            $model->nodeIdList = $map['NodeIdList'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
