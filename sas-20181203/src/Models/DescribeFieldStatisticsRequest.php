<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeFieldStatisticsRequest extends Model
{
    /**
     * @description The type of the asset to query. If no asset types are specified, all types of assets are returned. Valid values:
     *
     *   **ecs**: server
     *   **cloud_product**: Alibaba Cloud service
     *
     * @example ecs
     *
     * @var string
     */
    public $machineTypes;

    /**
     * @description The ID of the region in which the asset resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the primary account of the Resource Directory member account.
     * > call the [DescribeMonitorAccounts](~~DescribeMonitorAccounts~~) interface to obtain this parameter.
     * @example 1232428423234****
     *
     * @var int
     */
    public $resourceDirectoryAccountId;
    protected $_name = [
        'machineTypes'               => 'MachineTypes',
        'regionId'                   => 'RegionId',
        'resourceDirectoryAccountId' => 'ResourceDirectoryAccountId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->machineTypes) {
            $res['MachineTypes'] = $this->machineTypes;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceDirectoryAccountId) {
            $res['ResourceDirectoryAccountId'] = $this->resourceDirectoryAccountId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFieldStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MachineTypes'])) {
            $model->machineTypes = $map['MachineTypes'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceDirectoryAccountId'])) {
            $model->resourceDirectoryAccountId = $map['ResourceDirectoryAccountId'];
        }

        return $model;
    }
}
