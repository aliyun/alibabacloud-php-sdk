<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribePortFlowListRequest extends Model
{
    /**
     * @description The end of the time range to query. The value is a UNIX timestamp. Unit: seconds.
     *
     **
     *
     **This UNIX timestamp must indicate a point in time that is accurate to the minute.
     *
     * @example 1583683200
     *
     * @var int
     */
    public $endTime;

    /**
     * @description An array that consists of the IDs of instances.
     *
     * @example ddoscoo-cn-mp91j1ao****
     *
     * @var string[]
     */
    public $instanceIds;

    /**
     * @description The interval for returning data. Unit: seconds. The interval that you can specify varies based on the time range to query. The time range to query is determined by the values of **StartTime** and **EndTime**.
     *
     *   If the time range to query is no greater than 1 hour, we recommend that you specify the interval from 60 seconds to the time range to query.
     *   If the time range to query is greater than 1 hour but no greater than 6 hours, we recommend that you specify the interval from 600 seconds to the time range to query.
     *   If the time range to query is greater than 6 hours but no greater than 24 hours, we recommend that you specify the interval from 1,800 seconds to the time range to query.
     *   If the time range to query is greater than 24 hours but no greater than 7 days, we recommend that you specify the interval from 3,600 seconds to the time range to query.
     *   If the time range to query is greater than 7 days but no greater than 15 days, we recommend that you specify the interval from 14,400 seconds to the time range to query.
     *   If the time range to query is greater than 15 days, we recommend that you specify the interval from 43,200 seconds to the time range to query.
     *
     * @example 1000
     *
     * @var int
     */
    public $interval;

    /**
     * @description The ID of the resource group to which the instance belongs in Resource Management. This parameter is empty by default, which indicates that the instance belongs to the default resource group.
     *
     * For more information about resource groups, see [Create a resource group](~~94485~~).
     * @example rg-acfm2pz25js****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The beginning of the time range to query. The value is a UNIX timestamp. Unit: seconds.
     *
     **
     *
     **This UNIX timestamp must indicate a point in time that is accurate to the minute.
     *
     * @example 1582992000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime'         => 'EndTime',
        'instanceIds'     => 'InstanceIds',
        'interval'        => 'Interval',
        'resourceGroupId' => 'ResourceGroupId',
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
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePortFlowListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
