<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CloneCenterPolicyRequest extends Model
{
    /**
     * @description The business type.
     *
     * Valid values:
     *
     *   1: public cloud
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
     * @description The name of the cloud computer policy that you want to clone.
     *
     * This parameter is required.
     *
     * @example testPolicyGroupName
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the cloud computer policy that you want to clone.
     *
     * This parameter is required.
     *
     * @example pg-gx2x1dhsmthe9****
     *
     * @var string
     */
    public $policyGroupId;

    /**
     * @description The region ID. Set the value to cn-shanghai.
     *
     * This parameter is required.
     *
     * @example cn-shanghai
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
        'name' => 'Name',
        'policyGroupId' => 'PolicyGroupId',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
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
     * @return CloneCenterPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
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
