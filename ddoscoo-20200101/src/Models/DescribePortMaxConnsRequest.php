<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribePortMaxConnsRequest extends Model
{
    /**
     * @description The end of the time range to query. The value is a UNIX timestamp. Unit: seconds.
     *
     * > This UNIX timestamp must indicate a point in time that is accurate to the minute.
     * @example 1583683200
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The ID of the instance.
     *
     * > You can call the [DescribeInstanceIds](~~157459~~) operation to query the IDs of all instances.
     * @example ddoscoo-cn-mp91j1ao****
     *
     * @var string[]
     */
    public $instanceIds;

    /**
     * @description The ID of the resource group to which the instance belongs in Resource Management. This parameter is empty by default, which indicates that the instance belongs to the default resource group.
     *
     * @example default
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The beginning of the time range to query. The value is a UNIX timestamp. Unit: seconds.
     *
     * > This UNIX timestamp must indicate a point in time that is accurate to the minute.
     * @example 1582992000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime'         => 'EndTime',
        'instanceIds'     => 'InstanceIds',
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
     * @return DescribePortMaxConnsRequest
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
