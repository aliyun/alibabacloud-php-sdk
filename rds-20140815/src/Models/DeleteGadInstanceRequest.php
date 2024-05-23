<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DeleteGadInstanceRequest extends Model
{
    /**
     * @description The ID of the global active database cluster. You can call the GadInstanceName operation to query the cluster ID.
     *
     * This parameter is required.
     * @example gad-rm-bp1npi2j8********
     *
     * @var string
     */
    public $gadInstanceName;

    /**
     * @description The region ID of the central node of the global active database cluster. The central node refers to the primary node. You can call the DescribeGadInstances operation to query the region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID. You can call the DescribeDBInstanceAttribute operation to query the resource group ID.
     *
     * @example rg-acfmy*****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'gadInstanceName' => 'GadInstanceName',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gadInstanceName) {
            $res['GadInstanceName'] = $this->gadInstanceName;
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
     * @return DeleteGadInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GadInstanceName'])) {
            $model->gadInstanceName = $map['GadInstanceName'];
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
