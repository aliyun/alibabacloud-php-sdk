<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBVersionInfosRequest extends Model
{
    /**
     * @description The resource type of the instance. Valid values:
     *
     *   **StorageElastic**: elastic storage mode.
     *   **Serverless**: Serverless mode.
     *
     * @example StorageElastic
     *
     * @var string
     */
    public $DBInstanceMode;

    /**
     * @description The minor version number that does not include the prefix.
     *
     * @example 6.3.10.20
     *
     * @var string
     */
    public $DBVersion;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the instance.
     *
     * >  You can call the [DescribeRegions](~~86912~~) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the instance belongs. For information about how to obtain the ID of a resource group, see [View basic information of a resource group](~~151181~~).
     *
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'DBInstanceMode'  => 'DBInstanceMode',
        'DBVersion'       => 'DBVersion',
        'ownerId'         => 'OwnerId',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceMode) {
            $res['DBInstanceMode'] = $this->DBInstanceMode;
        }
        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBVersionInfosRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceMode'])) {
            $model->DBInstanceMode = $map['DBInstanceMode'];
        }
        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
