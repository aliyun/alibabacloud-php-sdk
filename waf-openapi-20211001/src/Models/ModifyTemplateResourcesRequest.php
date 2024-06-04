<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class ModifyTemplateResourcesRequest extends Model
{
    /**
     * @description The protected object groups that you want to associate with the protection rule template. Specify the value of this parameter in the ["group1","group2",...] format.
     *
     * @var string[]
     */
    public $bindResourceGroups;

    /**
     * @description The protected objects that you want to associate with the protection rule template. Specify the value of this parameter in the ["XX1","XX2",...] format.
     *
     * @var string[]
     */
    public $bindResources;

    /**
     * @description The ID of the Web Application Firewall (WAF) instance.
     *
     * This parameter is required.
     * @example waf_cdnsdf3****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region where the WAF instance resides. Valid values:
     *
     *   **cn-hangzhou:** the Chinese mainland.
     *   **ap-southeast-1:** outside the Chinese mainland.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the Alibaba Cloud resource group.
     *
     * @example rg-acfm***q
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @description The ID of the protection rule template.
     *
     * This parameter is required.
     * @example 2291
     *
     * @var int
     */
    public $templateId;

    /**
     * @description The protected object groups that you want to disassociate from the protection rule template. Specify the value of this parameter in the ["group1","group2",...] format.
     *
     * @var string[]
     */
    public $unbindResourceGroups;

    /**
     * @description The protected objects that you want to disassociate from the protection rule template. Specify the value of this parameter in the ["XX1","XX2",...] format.
     *
     * @var string[]
     */
    public $unbindResources;
    protected $_name = [
        'bindResourceGroups'             => 'BindResourceGroups',
        'bindResources'                  => 'BindResources',
        'instanceId'                     => 'InstanceId',
        'regionId'                       => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'templateId'                     => 'TemplateId',
        'unbindResourceGroups'           => 'UnbindResourceGroups',
        'unbindResources'                => 'UnbindResources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindResourceGroups) {
            $res['BindResourceGroups'] = $this->bindResourceGroups;
        }
        if (null !== $this->bindResources) {
            $res['BindResources'] = $this->bindResources;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->unbindResourceGroups) {
            $res['UnbindResourceGroups'] = $this->unbindResourceGroups;
        }
        if (null !== $this->unbindResources) {
            $res['UnbindResources'] = $this->unbindResources;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyTemplateResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindResourceGroups'])) {
            if (!empty($map['BindResourceGroups'])) {
                $model->bindResourceGroups = $map['BindResourceGroups'];
            }
        }
        if (isset($map['BindResources'])) {
            if (!empty($map['BindResources'])) {
                $model->bindResources = $map['BindResources'];
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['UnbindResourceGroups'])) {
            if (!empty($map['UnbindResourceGroups'])) {
                $model->unbindResourceGroups = $map['UnbindResourceGroups'];
            }
        }
        if (isset($map['UnbindResources'])) {
            if (!empty($map['UnbindResources'])) {
                $model->unbindResources = $map['UnbindResources'];
            }
        }

        return $model;
    }
}
