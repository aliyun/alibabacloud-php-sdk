<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyResourceCenterPolicyRequest extends Model
{
    /**
     * @description The IDs of the cloud computer policies that you want to associate with cloud computers.
     *
     * >  You can specify up to one cloud computer policy that takes effect globally, and up to four cloud computer policies that apply to specific IP addresses. If multiple cloud computer policies are configured for global enforcement, only the earliest-associated policy will take effect
     *
     * This parameter is required.
     *
     * @var string[]
     */
    public $policyGroupIds;

    /**
     * @description The policy type.
     *
     * Valid values:
     *
     *   general: a general policy.
     *
     * This parameter is required.
     *
     * @example general
     *
     * @var string
     */
    public $policyGroupType;

    /**
     * @description The service type.
     *
     * Valid values:
     *
     *   app: cloud applications.
     *   resourceGroup: resource groups.
     *   desktop: cloud computers.
     *   desktopGroup: cloud computer shares.
     *
     * This parameter is required.
     *
     * @example desktop
     *
     * @var string
     */
    public $productType;

    /**
     * @description The resource IDs. You can specify up to 100 resource IDs.
     *
     * This parameter is required.
     *
     * @var string[]
     */
    public $resourceIds;

    /**
     * @description The region ID of the resource.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $resourceRegionId;

    /**
     * @description The resource type.
     *
     * Valid values:
     *
     *   app: cloud applications.
     *   desktop: cloud computers.
     *
     * This parameter is required.
     *
     * @example desktop
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'policyGroupIds' => 'PolicyGroupIds',
        'policyGroupType' => 'PolicyGroupType',
        'productType' => 'ProductType',
        'resourceIds' => 'ResourceIds',
        'resourceRegionId' => 'ResourceRegionId',
        'resourceType' => 'ResourceType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyGroupIds) {
            $res['PolicyGroupIds'] = $this->policyGroupIds;
        }
        if (null !== $this->policyGroupType) {
            $res['PolicyGroupType'] = $this->policyGroupType;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->resourceIds) {
            $res['ResourceIds'] = $this->resourceIds;
        }
        if (null !== $this->resourceRegionId) {
            $res['ResourceRegionId'] = $this->resourceRegionId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyResourceCenterPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyGroupIds'])) {
            if (!empty($map['PolicyGroupIds'])) {
                $model->policyGroupIds = $map['PolicyGroupIds'];
            }
        }
        if (isset($map['PolicyGroupType'])) {
            $model->policyGroupType = $map['PolicyGroupType'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['ResourceIds'])) {
            if (!empty($map['ResourceIds'])) {
                $model->resourceIds = $map['ResourceIds'];
            }
        }
        if (isset($map['ResourceRegionId'])) {
            $model->resourceRegionId = $map['ResourceRegionId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
