<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class ModifyApisecStatusRequest extends Model
{
    /**
     * @description The status of the API security module. Valid values:
     *
     *   **1**: enabled
     *   **0**: disabled
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $apisecStatus;

    /**
     * @description The ID of the WAF instance.
     *
     * This parameter is required.
     * @example waf-cn-tl32ast****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region in which the Web Application Firewall (WAF) instance is deployed. Valid values:
     *
     *   **cn-hangzhou**: Chinese mainland
     *   **ap-southeast-1**: outside the Chinese mainland
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the protected object group to which the protected object belongs.
     *
     * @example group
     *
     * @var string
     */
    public $resourceGroups;

    /**
     * @description The ID of the Alibaba Cloud resource group.
     *
     * @example rg-acfm***q
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @description The name of the protected object.
     *
     * @example alb-wewbb23dfset***
     *
     * @var string
     */
    public $resources;
    protected $_name = [
        'apisecStatus'                   => 'ApisecStatus',
        'instanceId'                     => 'InstanceId',
        'regionId'                       => 'RegionId',
        'resourceGroups'                 => 'ResourceGroups',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'resources'                      => 'Resources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apisecStatus) {
            $res['ApisecStatus'] = $this->apisecStatus;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroups) {
            $res['ResourceGroups'] = $this->resourceGroups;
        }
        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }
        if (null !== $this->resources) {
            $res['Resources'] = $this->resources;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyApisecStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApisecStatus'])) {
            $model->apisecStatus = $map['ApisecStatus'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroups'])) {
            $model->resourceGroups = $map['ResourceGroups'];
        }
        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }
        if (isset($map['Resources'])) {
            $model->resources = $map['Resources'];
        }

        return $model;
    }
}
