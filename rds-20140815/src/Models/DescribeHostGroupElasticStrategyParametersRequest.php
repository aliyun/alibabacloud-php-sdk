<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeHostGroupElasticStrategyParametersRequest extends Model
{
    /**
     * @description The name of the dedicated cluster.
     *
     * This parameter is required.
     * @example dhg-d0dwi82293b2w9t5
     *
     * @var string
     */
    public $dedicatedHostGroupName;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/26243.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfmy****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'dedicatedHostGroupName' => 'DedicatedHostGroupName',
        'regionId'               => 'RegionId',
        'resourceGroupId'        => 'ResourceGroupId',
        'resourceOwnerId'        => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHostGroupName) {
            $res['DedicatedHostGroupName'] = $this->dedicatedHostGroupName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHostGroupElasticStrategyParametersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedHostGroupName'])) {
            $model->dedicatedHostGroupName = $map['DedicatedHostGroupName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
