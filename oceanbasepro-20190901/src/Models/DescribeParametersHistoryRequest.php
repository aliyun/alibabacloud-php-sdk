<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DescribeParametersHistoryRequest extends Model
{
    /**
     * @description The type of the parameter.
     * Valid values: CLUSTER and TENANT.
     * @example TENANT
     *
     * @var string
     */
    public $dimension;

    /**
     * @description The resource ID of the parameter type.
     * You can leave this parameter unspecified when you call this operation to query the modification history of cluster parameters. In the case of tenant parameters, pass the tenant ID.
     * @example ob2mr3oae0****
     *
     * @var string
     */
    public $dimensionValue;

    /**
     * @description The end time for the query of parameter modification history.
     *
     * @example 2021-09-13 15:40:43
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
     * @description The start time of the time range for querying the parameter modification history.
     *
     * @example 2021-06-13 15:40:43
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'dimension'      => 'Dimension',
        'dimensionValue' => 'DimensionValue',
        'endTime'        => 'EndTime',
        'instanceId'     => 'InstanceId',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'startTime'      => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dimension) {
            $res['Dimension'] = $this->dimension;
        }
        if (null !== $this->dimensionValue) {
            $res['DimensionValue'] = $this->dimensionValue;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeParametersHistoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dimension'])) {
            $model->dimension = $map['Dimension'];
        }
        if (isset($map['DimensionValue'])) {
            $model->dimensionValue = $map['DimensionValue'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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

        return $model;
    }
}
