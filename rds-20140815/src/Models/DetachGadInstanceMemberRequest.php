<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DetachGadInstanceMemberRequest extends Model
{
    /**
     * @description The ID of the global active database cluster.
     *
     * @example gad-rm-bp1npi2j8********
     *
     * @var string
     */
    public $gadInstanceName;

    /**
     * @description The ID of the instance that serves as the unit node you want to remove. You can call the [DescribeGadInstances](~~330105~~) query the ID of the instance.
     *
     * @example rm-bp1npi2j8********
     *
     * @var string
     */
    public $memberInstanceName;

    /**
     * @description The region ID of the central node. You can call the [DescribeGadInstances](~~330105~~) operation to query the information.
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
        'gadInstanceName'    => 'GadInstanceName',
        'memberInstanceName' => 'MemberInstanceName',
        'regionId'           => 'RegionId',
        'resourceGroupId'    => 'ResourceGroupId',
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
        if (null !== $this->memberInstanceName) {
            $res['MemberInstanceName'] = $this->memberInstanceName;
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
     * @return DetachGadInstanceMemberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GadInstanceName'])) {
            $model->gadInstanceName = $map['GadInstanceName'];
        }
        if (isset($map['MemberInstanceName'])) {
            $model->memberInstanceName = $map['MemberInstanceName'];
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
