<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class GetInstanceInspectionsRequest extends Model
{
    /**
     * @description The end of the time range to query. Set this parameter to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * This parameter is required.
     * @example 1655427625000
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The database engine. Valid values:
     *
     *   **MySQL**
     *   **Redis**
     *   **PolarDBMySQL**
     *
     * This parameter is required.
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The type of the instance on which the database is deployed. Valid values:
     *
     *   **RDS**: an Alibaba Cloud database instance.
     *   **ECS**: an ECS instance on which a self-managed database is deployed.
     *   **IDC**: a self-managed database instance that is not deployed on Alibaba Cloud.
     *
     * This parameter is required.
     * @example RDS
     *
     * @var string
     */
    public $instanceArea;

    /**
     * @description The page number. The value must be a positive integer. Default value: 1.
     *
     * This parameter is required.
     * @example 1
     *
     * @var string
     */
    public $pageNo;

    /**
     * @description The number of entries per page. Default value: 10.
     *
     * This parameter is required.
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The resource group ID.
     *
     * @example rg-aek2eil6npi****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The filter condition, which can be specified in one of the following formats:
     *
     *   Specify the ID of a single instance in the {"InstanceId":"Instance ID"} format.
     *   Specify the IDs of multiple instances in the {"InstanceIds":["Instance ID1","Instance ID2"]} format. Separate the instance IDs with commas (,).
     *   Specify the region in which the instance resides in the {"region":"Region of the instance"} format.
     *
     * @example {"InstanceId":"rm-bp10usoc1erj7****"}
     *
     * @var string
     */
    public $searchMap;

    /**
     * @description The beginning of the time range to query. Set this parameter to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * This parameter is required.
     * @example 1655416825000
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'         => 'EndTime',
        'engine'          => 'Engine',
        'instanceArea'    => 'InstanceArea',
        'pageNo'          => 'PageNo',
        'pageSize'        => 'PageSize',
        'resourceGroupId' => 'ResourceGroupId',
        'searchMap'       => 'SearchMap',
        'startTime'       => 'StartTime',
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
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->instanceArea) {
            $res['InstanceArea'] = $this->instanceArea;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->searchMap) {
            $res['SearchMap'] = $this->searchMap;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceInspectionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['InstanceArea'])) {
            $model->instanceArea = $map['InstanceArea'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SearchMap'])) {
            $model->searchMap = $map['SearchMap'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
