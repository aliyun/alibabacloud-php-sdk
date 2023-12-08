<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class DescribeComputeResourceUsageRequest extends Model
{
    /**
     * @example am-bp1xxxxxxxx47
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example 2023-02-05T03:45:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example test
     *
     * @var string
     */
    public $resourceGroupName;

    /**
     * @example 2023-02-04T03:45:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'DBClusterId'       => 'DBClusterId',
        'endTime'           => 'EndTime',
        'resourceGroupName' => 'ResourceGroupName',
        'startTime'         => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeComputeResourceUsageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
