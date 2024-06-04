<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DescribeDefenseTemplatesRequest extends Model
{
    /**
     * @description The scenario in which the protection template is used.
     *
     *   **waf_group**: basic protection.
     *   **antiscan**: scan protection.
     *   **ip_blacklist**: IP address blacklist.
     *   **custom_acl**: custom rule.
     *   **whitelist**: whitelist.
     *   **region_block**: region blacklist.
     *   **custom_response**: custom response.
     *   **cc**: HTTP flood protection.
     *   **tamperproof**: website tamper-proofing.
     *   **dlp**: data leakage prevention.
     *
     * @example region_block
     *
     * @var string
     */
    public $defenseScene;

    /**
     * @description The sub-scenario in which the protection template is used. Valid values:
     *
     *   **web**: bot management for website protection.
     *   **app**: bot management for app protection.
     *   **basic**: bot management for basic protection.
     *
     * @example basic
     *
     * @var string
     */
    public $defenseSubScene;

    /**
     * @description The ID of the Web Application Firewall (WAF) instance.
     *
     * This parameter is required.
     * @example waf_v3prepaid_public_cn-pe33b****03
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The page number. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: **20**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

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
     * @description The name of the protected object or protected object group.
     *
     * >  If you specify ResourceType, you must specify this parameter.
     * @example xxxqiu.cc-ecs
     *
     * @var string
     */
    public $resource;

    /**
     * @description The ID of the Alibaba Cloud resource group.
     *
     * @example rg-acfmvyknl****fa
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @description The type of the protected resource. Valid values:
     *
     *   **single**: protected object. This is the default value.
     *   **group**: protected object group.
     *
     * >  If you specify Resource, you must specify this parameter.
     * @example single
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The ID of the protection template.
     *
     * @example 12345
     *
     * @var int
     */
    public $templateId;

    /**
     * @description The type of the protection template. Valid values:
     *
     *   **user_default**: default template.
     *   **user_custom**: custom template.
     *
     * @example user_default
     *
     * @var string
     */
    public $templateType;
    protected $_name = [
        'defenseScene'                   => 'DefenseScene',
        'defenseSubScene'                => 'DefenseSubScene',
        'instanceId'                     => 'InstanceId',
        'pageNumber'                     => 'PageNumber',
        'pageSize'                       => 'PageSize',
        'regionId'                       => 'RegionId',
        'resource'                       => 'Resource',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'resourceType'                   => 'ResourceType',
        'templateId'                     => 'TemplateId',
        'templateType'                   => 'TemplateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defenseScene) {
            $res['DefenseScene'] = $this->defenseScene;
        }
        if (null !== $this->defenseSubScene) {
            $res['DefenseSubScene'] = $this->defenseSubScene;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDefenseTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefenseScene'])) {
            $model->defenseScene = $map['DefenseScene'];
        }
        if (isset($map['DefenseSubScene'])) {
            $model->defenseSubScene = $map['DefenseSubScene'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
