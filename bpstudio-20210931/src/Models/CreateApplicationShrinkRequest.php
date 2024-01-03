<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models;

use AlibabaCloud\Tea\Model;

class CreateApplicationShrinkRequest extends Model
{
    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $areaId;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * @example 1600765710019
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The parameters that are used to configure the application you want to create. For example, enableMonitor specifies whether to automatically create a CloudMonitor task for the application, and enableReport specifies whether to generate reports.
     *
     * @example {"enableMonitor":"0", "enableReport":"1"}
     *
     * @var string
     */
    public $configurationShrink;

    /**
     * @description The instances in which you want to create the application. You can create applications in an existing virtual private cloud (VPC).
     *
     * @var string
     */
    public $instancesShrink;

    /**
     * @description The name of the application.
     *
     *   The application name must be unique. You can call the [ListApplication](https://www.alibabacloud.com/help/en/bp-studio/latest/api-bpstudio-2021-09-31-listapplication) operation to query the existing applications.
     *   The application name must be 2 to 128 characters in length. The name must start with a letter and cannot start with `http:// or https://`. The name can contain letters, digits, underscores (\_), and hyphens (-).
     *
     * @example cadt-application
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the resource group to which the application you want to create belongs.
     *
     * @example rg-acfmyjt3c5om3hi
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the template.
     *
     * @example 0KSHPM6SJU03TNZP
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The parameter values that are contained in the template. If the template contains no parameter values, the default values are used.
     *
     * @example {"variable1":"1"}
     *
     * @var string
     */
    public $variablesShrink;
    protected $_name = [
        'areaId'              => 'AreaId',
        'clientToken'         => 'ClientToken',
        'configurationShrink' => 'Configuration',
        'instancesShrink'     => 'Instances',
        'name'                => 'Name',
        'resourceGroupId'     => 'ResourceGroupId',
        'templateId'          => 'TemplateId',
        'variablesShrink'     => 'Variables',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->areaId) {
            $res['AreaId'] = $this->areaId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->configurationShrink) {
            $res['Configuration'] = $this->configurationShrink;
        }
        if (null !== $this->instancesShrink) {
            $res['Instances'] = $this->instancesShrink;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->variablesShrink) {
            $res['Variables'] = $this->variablesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateApplicationShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AreaId'])) {
            $model->areaId = $map['AreaId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Configuration'])) {
            $model->configurationShrink = $map['Configuration'];
        }
        if (isset($map['Instances'])) {
            $model->instancesShrink = $map['Instances'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['Variables'])) {
            $model->variablesShrink = $map['Variables'];
        }

        return $model;
    }
}
