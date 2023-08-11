<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Tea\Model;

class DescribeDdosEventRequest extends Model
{
    /**
     * @description The time when the DDoS attack stopped. This value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1638288000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The start time of the DDoS attack event to query. This value is a UNIX timestamp. Unit: seconds.
     *
     * @example ddosbgp-cn-n6w1r7nz****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The status of the DDoS attack event. Valid values:
     *
     *   **hole_begin**: indicates that blackhole filtering is triggered for the attacked IP address.
     *   **hole_end**: indicates that blackhole filtering is deactivated for the attacked IP address.
     *   **defense_begin**: indicates that attack traffic is being scrubbed.
     *   **defense_end**: indicates that attack traffic is scrubbed.
     *
     * @example 47.89.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @description The attacked IP address to query.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The ID of the Anti-DDoS Origin instance to query.
     *
     * >  You can call the [DescribeInstanceList](~~118698~~) operation to query the IDs of all Anti-DDoS Origin instances.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The details about the DDoS attack event.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The number of the page to return.
     *
     * @example rg-acfm2pz25js****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The operation that you want to perform. Set the value to **DescribeDdosEvent**
     *
     * @example 1633017600
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
     * @return DescribeDdosEventRequest
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
