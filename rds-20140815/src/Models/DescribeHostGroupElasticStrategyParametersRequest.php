<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class DescribeHostGroupElasticStrategyParametersRequest extends Model
{
    /**
     * @var string
     */
    public $dedicatedHostGroupName;
    /**
     * @var string
     */
    public $regionId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
