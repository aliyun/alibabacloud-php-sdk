<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DescribeDifyAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class root extends Model
{
    /**
     * @example 92748163-af62-4ca4-ad85-1****
     *
     * @var string
     */
    public $appUuid;

    /**
     * @example 1
     *
     * @var string
     */
    public $replicas;

    /**
     * @example 4CU
     *
     * @var string
     */
    public $resourceQuota;

    /**
     * @example sg-bp1ik7t5d5f24b****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @example DEPLOYED
     *
     * @var string
     */
    public $status;

    /**
     * @example vsw-bp1tzpv5jfsuoqy****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example vpc-bp1n16nsg8z1kn6****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example 339170706****
     *
     * @var string
     */
    public $workspaceId;

    /**
     * @example cn-hangzhou-j
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'appUuid' => 'AppUuid',
        'replicas' => 'Replicas',
        'resourceQuota' => 'ResourceQuota',
        'securityGroupId' => 'SecurityGroupId',
        'status' => 'Status',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
        'workspaceId' => 'WorkspaceId',
        'zoneId' => 'ZoneId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appUuid) {
            $res['AppUuid'] = $this->appUuid;
        }
        if (null !== $this->replicas) {
            $res['Replicas'] = $this->replicas;
        }
        if (null !== $this->resourceQuota) {
            $res['ResourceQuota'] = $this->resourceQuota;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return root
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppUuid'])) {
            $model->appUuid = $map['AppUuid'];
        }
        if (isset($map['Replicas'])) {
            $model->replicas = $map['Replicas'];
        }
        if (isset($map['ResourceQuota'])) {
            $model->resourceQuota = $map['ResourceQuota'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
