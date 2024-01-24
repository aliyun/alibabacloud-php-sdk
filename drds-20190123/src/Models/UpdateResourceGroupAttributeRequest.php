<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class UpdateResourceGroupAttributeRequest extends Model
{
    /**
     * @description The ID of the instance that you want to transfer.
     *
     * >  You can call the [DescribeDrdsInstances](~~139284~~) operation to view the details of the instances under the account, including the instance IDs.
     * @example drds***********
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @description The ID of the resource group that you want to specify.
     *
     * >  You can call the [ListResourceGroups](~~158855~~) operation to view the details of the resource groups, including the resource group IDs.
     * @example rg-***************
     *
     * @var string
     */
    public $newResourceGroupId;

    /**
     * @description The ID of the region where the instance you want to transfer is located.
     *
     * >  You can call the [DescribeDrdsInstances](~~139284~~) operation to view the details of the instances under the account, including the region IDs.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'drdsInstanceId'     => 'DrdsInstanceId',
        'newResourceGroupId' => 'NewResourceGroupId',
        'regionId'           => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->newResourceGroupId) {
            $res['NewResourceGroupId'] = $this->newResourceGroupId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateResourceGroupAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['NewResourceGroupId'])) {
            $model->newResourceGroupId = $map['NewResourceGroupId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
