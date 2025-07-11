<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DeleteCenterPolicyRequest extends Model
{
    /**
     * @description The business type.
     *
     * Valid values:
     *
     *   1: public cloud.
     *   8: commercial edition.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $businessType;

    /**
     * @description The policy IDs.
     *
     * This parameter is required.
     *
     * @var string[]
     */
    public $policyGroupIds;

    /**
     * @description The region ID. You can call the [DescribeRegions](~~DescribeRegions~~) operation to query the list of regions where Elastic Desktop Service (EDS) Enterprise is available.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

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
        'businessType' => 'BusinessType',
        'policyGroupIds' => 'PolicyGroupIds',
        'regionId' => 'RegionId',
        'resourceType' => 'ResourceType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->policyGroupIds) {
            $res['PolicyGroupIds'] = $this->policyGroupIds;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCenterPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['PolicyGroupIds'])) {
            if (!empty($map['PolicyGroupIds'])) {
                $model->policyGroupIds = $map['PolicyGroupIds'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
