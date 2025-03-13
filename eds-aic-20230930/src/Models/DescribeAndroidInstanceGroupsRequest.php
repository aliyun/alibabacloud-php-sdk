<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class DescribeAndroidInstanceGroupsRequest extends Model
{
    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $bizRegionId;

    /**
     * @description The billing method.
     *
     * Valid values:
     *
     *   PrePaid: subscription
     *   PostPaid: pay-as-you-go
     *
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The IDs of the instance groups.
     *
     * @var string[]
     */
    public $instanceGroupIds;

    /**
     * @description The name of the instance group. Instance groups support fuzzy search by name.
     *
     * @example defaultInstanceGroup
     *
     * @var string
     */
    public $instanceGroupName;

    /**
     * @description The ID of the key pair.
     *
     * @example kp-5htf0ymsrnb7q****
     *
     * @var string
     */
    public $keyPairId;

    /**
     * @description The maximum number of entries per page. Value range: 0 to 100. Default value: 100.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. If NextToken is empty, no next page exists.
     *
     * @example AAAAAV3MpHK1AP0pfERHZN5pu6l5V9uONHqPtDLM2U8s****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the policy.
     *
     * @example pg-1b77w6xrqfubi****
     *
     * @var string
     */
    public $policyGroupId;

    /**
     * @description The sales mode.
     *
     * Valid values:
     *
     *   standard
     *
     * @example standard
     *
     * @var string
     */
    public $saleMode;

    /**
     * @description The status of the instance group.
     *
     * Valid values:
     *
     *   UPDATING_FAILED: The image update for the instance group failed.
     *   FAILED: The instance group failed to be created.
     *   RUNNING: The instance group is available.
     *   EXPIRED: The instance group expired.
     *   DELETING: The instance group is being deleted.
     *   DELETED: The instance group is deleted.
     *   UPDATING: The instance group is undergoing an image update.
     *   CREATING: The instance group is being created.
     *
     * @example CREATING
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'bizRegionId'       => 'BizRegionId',
        'chargeType'        => 'ChargeType',
        'instanceGroupIds'  => 'InstanceGroupIds',
        'instanceGroupName' => 'InstanceGroupName',
        'keyPairId'         => 'KeyPairId',
        'maxResults'        => 'MaxResults',
        'nextToken'         => 'NextToken',
        'policyGroupId'     => 'PolicyGroupId',
        'saleMode'          => 'SaleMode',
        'status'            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->instanceGroupIds) {
            $res['InstanceGroupIds'] = $this->instanceGroupIds;
        }
        if (null !== $this->instanceGroupName) {
            $res['InstanceGroupName'] = $this->instanceGroupName;
        }
        if (null !== $this->keyPairId) {
            $res['KeyPairId'] = $this->keyPairId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }
        if (null !== $this->saleMode) {
            $res['SaleMode'] = $this->saleMode;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAndroidInstanceGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['InstanceGroupIds'])) {
            if (!empty($map['InstanceGroupIds'])) {
                $model->instanceGroupIds = $map['InstanceGroupIds'];
            }
        }
        if (isset($map['InstanceGroupName'])) {
            $model->instanceGroupName = $map['InstanceGroupName'];
        }
        if (isset($map['KeyPairId'])) {
            $model->keyPairId = $map['KeyPairId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }
        if (isset($map['SaleMode'])) {
            $model->saleMode = $map['SaleMode'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
