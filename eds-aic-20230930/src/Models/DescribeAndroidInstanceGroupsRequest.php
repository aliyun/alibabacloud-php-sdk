<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class DescribeAndroidInstanceGroupsRequest extends Model
{
    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $bizRegionId;

    /**
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @var string[]
     */
    public $instanceGroupIds;

    /**
     * @var string
     */
    public $instanceGroupName;

    /**
     * @example kp-5htf0ymsrnb7q****
     *
     * @var string
     */
    public $keyPairId;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example AAAAAV3MpHK1AP0pfERHZN5pu6l5V9uONHqPtDLM2U8s****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example pg-1b77w6xrqfubi****
     *
     * @var string
     */
    public $policyGroupId;

    /**
     * @example standard
     *
     * @var string
     */
    public $saleMode;

    /**
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
