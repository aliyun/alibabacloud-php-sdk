<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Tea\Model;

class DescribeOnDemandDdosEventRequest extends Model
{
    /**
     * @description The timestamp that indicates the end time of the attack. Unit: seconds. The timestamp follows the UNIX time format. It is the number of seconds that have elapsed since 00:00:00 Thursday, 1 January 1970.
     *
     * @example 1557909844
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The timestamp that specifies the beginning of the time range to query. Unit: seconds. The timestamp follows the UNIX time format. It is the number of seconds that have elapsed since 00:00:00 Thursday, 1 January 1970.
     *
     * @example ddosbgp-cn-n6w1r7nz****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The status of the event. Valid values:
     *
     *   **hole_begin **: indicates that the event is in the blackhole state.
     *   **hole_end **: indicates that blackhole ends.
     *   **defense_begin **: indicates that the event is in the cleaning state.
     *   **defense_end **: indicates that cleaning ends.
     *
     * @example 192.XX.XX.1
     *
     * @var string
     */
    public $ip;

    /**
     * @description The IP address of the protection target.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The ID of the on-demand instance to query.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example rg-acfm2pz25js****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The operation that you want to perform. Set the value to **DescribeOnDemandDdosEvent**.
     *
     * @example 1557305044
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime'         => 'EndTime',
        'instanceId'      => 'InstanceId',
        'ip'              => 'Ip',
        'pageNo'          => 'PageNo',
        'pageSize'        => 'PageSize',
        'regionId'        => 'RegionId',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
     * @return DescribeOnDemandDdosEventRequest
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
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
