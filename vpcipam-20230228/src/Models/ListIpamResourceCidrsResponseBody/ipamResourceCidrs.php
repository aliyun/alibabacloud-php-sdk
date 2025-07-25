<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamResourceCidrsResponseBody;

use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamResourceCidrsResponseBody\ipamResourceCidrs\ipCountDetail;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamResourceCidrsResponseBody\ipamResourceCidrs\overlapDetail;
use AlibabaCloud\Tea\Model;

class ipamResourceCidrs extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 132193271328****
     *
     * @var int
     */
    public $aliUid;

    /**
     * @description The CIDR block of the resource.
     *
     * @example 192.168.1.0/32
     *
     * @var string
     */
    public $cidr;

    /**
     * @description The compliance status of the resource.
     *
     *   **Compliant**
     *   **Noncompliant**
     *   **Ignored** Ignored resources are not monitored.
     *   **Unmanaged**: The resource does not have a CIDR block allocated from the IPAM pool. IPAM does not monitor whether the CIDR block of the resource meets the allocation rules of the IP address pool.
     *
     * @example Compliant
     *
     * @var string
     */
    public $complianceStatus;

    /**
     * @var ipCountDetail
     */
    public $ipCountDetail;

    /**
     * @description The IP usage that is displayed in decimal form.
     *
     * @example 0
     *
     * @var string
     */
    public $ipUsage;

    /**
     * @description The ID of the instance to which CIDR blocks are allocated from the IPAM pool.
     *
     * @example ipam-pool-alloc-112za33e4****
     *
     * @var string
     */
    public $ipamAllocationId;

    /**
     * @description The ID of the IPAM.
     *
     * @example ipam-uq5dcfc2eqhpf4****
     *
     * @var string
     */
    public $ipamId;

    /**
     * @description The ID of the IPAM pool.
     *
     * @example ipam-pool-6rcq3tobayc20t***
     *
     * @var string
     */
    public $ipamPoolId;

    /**
     * @description The ID of the IPAM scope.
     *
     * @example ipam-scope-glfmcyldpm8lsy****
     *
     * @var string
     */
    public $ipamScopeId;

    /**
     * @description The management status of the resource.
     *
     *   **Managed**: The resource has a CIDR block allocated from an IPAM pool. IPAM is monitoring whether the allocated CIDR block overlaps with other CIDR blocks and whether the allocated CIDR block meets the allocation rules.
     *   **Unmanaged**: The resource does not have a CIDR block allocated from the IPAM pool. IPAM is monitoring whether the resource has CIDR blocks that meet the allocation rules. Monitor whether CIDR blocks overlap with each other.
     *   **Ignored**: The resource is not monitored. Ignored resources are not monitored. If you ignore a resource, CIDR blocks allocated to the resource are returned to the IPAM pool and will not be automatically allocated to the resource (if automatic allocation rules are specified).
     *
     * @example Managed
     *
     * @var string
     */
    public $managementStatus;

    /**
     * @description List of resources that overlap with the current resource.
     *
     * @var overlapDetail[]
     */
    public $overlapDetail;

    /**
     * @description The overlapping status of the resource.
     *
     *   **Nonoverlapping**
     *   **Overlapping**
     *   **Ignored** Ignored resources are not monitored.
     *
     * @example Nonoverlapping
     *
     * @var string
     */
    public $overlapStatus;

    /**
     * @description The resource ID.
     *
     * @example vpc-bp16qjewdsunr41m1****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The ID of the Alibaba Cloud account to which the resource belongs.
     *
     * @example 132193271328****
     *
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The effective region ID of the resource.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $resourceRegionId;

    /**
     * @description The type of resource. Valid values:
     *
     *   **VPC**
     *   **VSwitch**
     *
     * @example VPC
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The source CIDR block.
     *
     * @example 192.168.1.0/24
     *
     * @var string
     */
    public $sourceCidr;

    /**
     * @description The status of the resource in the IPAM pool. Valid values:
     *
     *   **Created**
     *   **Deleted**
     *
     * @example Created
     *
     * @var string
     */
    public $status;

    /**
     * @description The VPC ID.
     *
     * @example vpc-bp1fjfnrg3av6zb9e****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'aliUid' => 'AliUid',
        'cidr' => 'Cidr',
        'complianceStatus' => 'ComplianceStatus',
        'ipCountDetail' => 'IpCountDetail',
        'ipUsage' => 'IpUsage',
        'ipamAllocationId' => 'IpamAllocationId',
        'ipamId' => 'IpamId',
        'ipamPoolId' => 'IpamPoolId',
        'ipamScopeId' => 'IpamScopeId',
        'managementStatus' => 'ManagementStatus',
        'overlapDetail' => 'OverlapDetail',
        'overlapStatus' => 'OverlapStatus',
        'resourceId' => 'ResourceId',
        'resourceOwnerId' => 'ResourceOwnerId',
        'resourceRegionId' => 'ResourceRegionId',
        'resourceType' => 'ResourceType',
        'sourceCidr' => 'SourceCidr',
        'status' => 'Status',
        'vpcId' => 'VpcId',
    ];

    public function validate() {}

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
        if (null !== $this->ipCountDetail) {
            $res['IpCountDetail'] = null !== $this->ipCountDetail ? $this->ipCountDetail->toMap() : null;
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
        if (null !== $this->overlapDetail) {
            $res['OverlapDetail'] = [];
            if (null !== $this->overlapDetail && \is_array($this->overlapDetail)) {
                $n = 0;
                foreach ($this->overlapDetail as $item) {
                    $res['OverlapDetail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['IpCountDetail'])) {
            $model->ipCountDetail = ipCountDetail::fromMap($map['IpCountDetail']);
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
        if (isset($map['OverlapDetail'])) {
            if (!empty($map['OverlapDetail'])) {
                $model->overlapDetail = [];
                $n = 0;
                foreach ($map['OverlapDetail'] as $item) {
                    $model->overlapDetail[$n++] = null !== $item ? overlapDetail::fromMap($item) : $item;
                }
            }
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
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
