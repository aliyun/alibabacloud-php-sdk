<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamResourceCidrsResponseBody;

use AlibabaCloud\Tea\Model;

class ipamResourceCidrs extends Model
{
    /**
     * @example 132193271328****
     *
     * @var int
     */
    public $aliUid;

    /**
     * @example 192.168.1.0/32
     *
     * @var string
     */
    public $cidr;

    /**
     * @example Compliant
     *
     * @var string
     */
    public $complianceStatus;

    /**
     * @example 0
     *
     * @var string
     */
    public $ipUsage;

    /**
     * @example ipam-pool-alloc-112za33e4****
     *
     * @var string
     */
    public $ipamAllocationId;

    /**
     * @example ipam-uq5dcfc2eqhpf4****
     *
     * @var string
     */
    public $ipamId;

    /**
     * @example ipam-pool-6rcq3tobayc20t***
     *
     * @var string
     */
    public $ipamPoolId;

    /**
     * @example ipam-scope-glfmcyldpm8lsy****
     *
     * @var string
     */
    public $ipamScopeId;

    /**
     * @example Managed
     *
     * @var string
     */
    public $managementStatus;

    /**
     * @example Nonoverlapping
     *
     * @var string
     */
    public $overlapStatus;

    /**
     * @example vpc-bp16qjewdsunr41m1****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example 132193271328****
     *
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $resourceRegionId;

    /**
     * @example VPC
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example 192.168.1.0/24
     *
     * @var string
     */
    public $sourceCidr;

    /**
     * @example Created
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'aliUid'           => 'AliUid',
        'cidr'             => 'Cidr',
        'complianceStatus' => 'ComplianceStatus',
        'ipUsage'          => 'IpUsage',
        'ipamAllocationId' => 'IpamAllocationId',
        'ipamId'           => 'IpamId',
        'ipamPoolId'       => 'IpamPoolId',
        'ipamScopeId'      => 'IpamScopeId',
        'managementStatus' => 'ManagementStatus',
        'overlapStatus'    => 'OverlapStatus',
        'resourceId'       => 'ResourceId',
        'resourceOwnerId'  => 'ResourceOwnerId',
        'resourceRegionId' => 'ResourceRegionId',
        'resourceType'     => 'ResourceType',
        'sourceCidr'       => 'SourceCidr',
        'status'           => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->cidr) {
            $res['Cidr'] = $this->cidr;
        }
        if (null !== $this->complianceStatus) {
            $res['ComplianceStatus'] = $this->complianceStatus;
        }
        if (null !== $this->ipUsage) {
            $res['IpUsage'] = $this->ipUsage;
        }
        if (null !== $this->ipamAllocationId) {
            $res['IpamAllocationId'] = $this->ipamAllocationId;
        }
        if (null !== $this->ipamId) {
            $res['IpamId'] = $this->ipamId;
        }
        if (null !== $this->ipamPoolId) {
            $res['IpamPoolId'] = $this->ipamPoolId;
        }
        if (null !== $this->ipamScopeId) {
            $res['IpamScopeId'] = $this->ipamScopeId;
        }
        if (null !== $this->managementStatus) {
            $res['ManagementStatus'] = $this->managementStatus;
        }
        if (null !== $this->overlapStatus) {
            $res['OverlapStatus'] = $this->overlapStatus;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->resourceRegionId) {
            $res['ResourceRegionId'] = $this->resourceRegionId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->sourceCidr) {
            $res['SourceCidr'] = $this->sourceCidr;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipamResourceCidrs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['Cidr'])) {
            $model->cidr = $map['Cidr'];
        }
        if (isset($map['ComplianceStatus'])) {
            $model->complianceStatus = $map['ComplianceStatus'];
        }
        if (isset($map['IpUsage'])) {
            $model->ipUsage = $map['IpUsage'];
        }
        if (isset($map['IpamAllocationId'])) {
            $model->ipamAllocationId = $map['IpamAllocationId'];
        }
        if (isset($map['IpamId'])) {
            $model->ipamId = $map['IpamId'];
        }
        if (isset($map['IpamPoolId'])) {
            $model->ipamPoolId = $map['IpamPoolId'];
        }
        if (isset($map['IpamScopeId'])) {
            $model->ipamScopeId = $map['IpamScopeId'];
        }
        if (isset($map['ManagementStatus'])) {
            $model->managementStatus = $map['ManagementStatus'];
        }
        if (isset($map['OverlapStatus'])) {
            $model->overlapStatus = $map['OverlapStatus'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ResourceRegionId'])) {
            $model->resourceRegionId = $map['ResourceRegionId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['SourceCidr'])) {
            $model->sourceCidr = $map['SourceCidr'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
