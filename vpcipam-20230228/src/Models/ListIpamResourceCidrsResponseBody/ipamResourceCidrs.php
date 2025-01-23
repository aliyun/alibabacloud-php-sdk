<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamResourceCidrsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamResourceCidrsResponseBody\ipamResourceCidrs\overlapDetail;

class ipamResourceCidrs extends Model
{
    /**
     * @var int
     */
    public $aliUid;
    /**
     * @var string
     */
    public $cidr;
    /**
     * @var string
     */
    public $complianceStatus;
    /**
     * @var string
     */
    public $ipUsage;
    /**
     * @var string
     */
    public $ipamAllocationId;
    /**
     * @var string
     */
    public $ipamId;
    /**
     * @var string
     */
    public $ipamPoolId;
    /**
     * @var string
     */
    public $ipamScopeId;
    /**
     * @var string
     */
    public $managementStatus;
    /**
     * @var overlapDetail[]
     */
    public $overlapDetail;
    /**
     * @var string
     */
    public $overlapStatus;
    /**
     * @var string
     */
    public $resourceId;
    /**
     * @var int
     */
    public $resourceOwnerId;
    /**
     * @var string
     */
    public $resourceRegionId;
    /**
     * @var string
     */
    public $resourceType;
    /**
     * @var string
     */
    public $sourceCidr;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $vpcId;
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
        'overlapDetail'    => 'OverlapDetail',
        'overlapStatus'    => 'OverlapStatus',
        'resourceId'       => 'ResourceId',
        'resourceOwnerId'  => 'ResourceOwnerId',
        'resourceRegionId' => 'ResourceRegionId',
        'resourceType'     => 'ResourceType',
        'sourceCidr'       => 'SourceCidr',
        'status'           => 'Status',
        'vpcId'            => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->overlapDetail)) {
            Model::validateArray($this->overlapDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->overlapDetail) {
            if (\is_array($this->overlapDetail)) {
                $res['OverlapDetail'] = [];
                $n1                   = 0;
                foreach ($this->overlapDetail as $item1) {
                    $res['OverlapDetail'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['OverlapDetail'])) {
            if (!empty($map['OverlapDetail'])) {
                $model->overlapDetail = [];
                $n1                   = 0;
                foreach ($map['OverlapDetail'] as $item1) {
                    $model->overlapDetail[$n1++] = overlapDetail::fromMap($item1);
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
