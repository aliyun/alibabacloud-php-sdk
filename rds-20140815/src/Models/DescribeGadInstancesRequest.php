<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeGadInstancesRequest extends Model
{
    /**
     * @description The ID of the single global active database cluster that you want to query.
     *
     *   If you leave this parameter empty, this operation returns the details about all global active database clusters that are created within your Alibaba Cloud account.
     *   If you specify this parameter, this operation returns the details about the single global active database cluster that you specify.
     *
     * >  You can call this operation with this parameter left empty to query the details about all global active database clusters that are created within your Alibaba Cloud account. Then, you can call this operation again with this parameter specified to query the details about the single global active database cluster that you specify.
     * @example gad-rm-bp1npi2j8********
     *
     * @var string
     */
    public $gadInstanceName;

    /**
     * @description The ID of the region where the global active database clusters that you want to query reside. You can call the [DescribeRegions](~~26243~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
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
     * @return DescribeGadInstancesRequest
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
