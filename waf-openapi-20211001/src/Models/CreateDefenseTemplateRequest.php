<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class CreateDefenseTemplateRequest extends Model
{
    /**
     * @description The scenario in which you want to use the protection rule template. For more information, see the description of the **DefenseScene** parameter in the [CreateDefenseRule](~~CreateDefenseRule~~) topic.
     *
     * This parameter is required.
     *
     * @example waf_group
     *
     * @var string
     */
    public $defenseScene;

    /**
     * @description The description of the protection rule template.
     *
     * @example Test
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the Web Application Firewall (WAF) instance.
     *
     * >  You can call the [DescribeInstance](https://help.aliyun.com/document_detail/433756.html) operation to obtain the ID of the WAF instance.
     *
     * This parameter is required.
     *
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
     * @description The name of the protection rule template.
     *
     * This parameter is required.
     *
     * @example test221
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The origin of the protection rule template that you want to create. Set the value to **custom**. The value specifies that the protection rule template is a custom template.
     *
     * This parameter is required.
     *
     * @example custom
     *
     * @var string
     */
    public $templateOrigin;

    /**
     * @description The status of the protection rule template. Valid values:
     *
     *   **0:** disabled.
     *   **1:** enabled.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $templateStatus;

    /**
     * @description The type of the protection rule template. Valid values:
     *
     *   **user_default:** default template.
     *   **user_custom:** custom template.
     *
     * This parameter is required.
     *
     * @example user_default
     *
     * @var string
     */
    public $templateType;

    /**
     * @var string[]
     */
    public $unbindResourceGroups;

    /**
     * @var string[]
     */
    public $unbindResources;
    protected $_name = [
        'defenseScene' => 'DefenseScene',
        'description' => 'Description',
        'instanceId' => 'InstanceId',
        'regionId' => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'templateName' => 'TemplateName',
        'templateOrigin' => 'TemplateOrigin',
        'templateStatus' => 'TemplateStatus',
        'templateType' => 'TemplateType',
        'unbindResourceGroups' => 'UnbindResourceGroups',
        'unbindResources' => 'UnbindResources',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->defenseScene) {
            $res['DefenseScene'] = $this->defenseScene;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->templateOrigin) {
            $res['TemplateOrigin'] = $this->templateOrigin;
        }
        if (null !== $this->templateStatus) {
            $res['TemplateStatus'] = $this->templateStatus;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
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
     * @return CreateDefenseTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefenseScene'])) {
            $model->defenseScene = $map['DefenseScene'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TemplateOrigin'])) {
            $model->templateOrigin = $map['TemplateOrigin'];
        }
        if (isset($map['TemplateStatus'])) {
            $model->templateStatus = $map['TemplateStatus'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
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
