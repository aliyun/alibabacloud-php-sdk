<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class CreateHybridCloudGroupRequest extends Model
{
    /**
     * @description The region in which the node resides. Specify the parameter in the Carrier code-Continent code-City code format.
     *
     * @example aliyun-asiapacific-beijing
     *
     * @var string
     */
    public $backSourceMark;

    /**
     * @description The ID of the hybrid cloud cluster.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $clusterId;

    /**
     * @description The name of the node group.
     *
     * This parameter is required.
     * @var string
     */
    public $groupName;

    /**
     * @description The type of the node group. Valid values:
     *
     *   **protect**
     *   **control**
     *   **storage**
     *   **controlStorage**
     *
     * This parameter is required.
     * @example protect
     *
     * @var string
     */
    public $groupType;

    /**
     * @description The ID of the WAF instance.
     *
     * This parameter is required.
     * @example waf-cn-n6w***x52m
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The IP address of the server used for load balancing.
     *
     * This parameter is required.
     * @example 3.3.3.3
     *
     * @var string
     */
    public $loadBalanceIp;

    /**
     * @description The region in which the node resides. Specify the parameter in the Carrier code-Continent code-City code format.
     *
     * @example 0-410-0
     *
     * @var string
     */
    public $locationCode;

    /**
     * @description The region in which the WAF instance is deployed. Valid values:
     *
     *   **cn-hangzhou**: Chinese mainland.
     *   **ap-southeast-1**: outside the Chinese mainland.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The remarks.
     *
     * @var string
     */
    public $remark;

    /**
     * @description The ID of the Alibaba Cloud resource group.
     *
     * @example rg-acfm***q
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;
    protected $_name = [
        'backSourceMark'                 => 'BackSourceMark',
        'clusterId'                      => 'ClusterId',
        'groupName'                      => 'GroupName',
        'groupType'                      => 'GroupType',
        'instanceId'                     => 'InstanceId',
        'loadBalanceIp'                  => 'LoadBalanceIp',
        'locationCode'                   => 'LocationCode',
        'regionId'                       => 'RegionId',
        'remark'                         => 'Remark',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backSourceMark) {
            $res['BackSourceMark'] = $this->backSourceMark;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->loadBalanceIp) {
            $res['LoadBalanceIp'] = $this->loadBalanceIp;
        }
        if (null !== $this->locationCode) {
            $res['LocationCode'] = $this->locationCode;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateHybridCloudGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackSourceMark'])) {
            $model->backSourceMark = $map['BackSourceMark'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LoadBalanceIp'])) {
            $model->loadBalanceIp = $map['LoadBalanceIp'];
        }
        if (isset($map['LocationCode'])) {
            $model->locationCode = $map['LocationCode'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }

        return $model;
    }
}
