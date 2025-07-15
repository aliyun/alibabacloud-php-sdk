<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class UpdateInstancePackageStateRequest extends Model
{
    /**
     * @description The operation type.
     *
     * Valid values:
     *
     *   uninstall
     *   install
     *
     * This parameter is required.
     *
     * @example install
     *
     * @var string
     */
    public $configureAction;

    /**
     * @description The ID of the Elastic Compute Service (ECS) instance.
     *
     * This parameter is required.
     *
     * @example i-bp1jaxa2bs4bps7*****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The parameters for installing or uninstalling the extensions.
     *
     * @example {"username": "xx"}
     *
     * @var mixed[]
     */
    public $parameters;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the template.
     *
     * This parameter is required.
     *
     * @example ACS-ECS-InventoryDataCollection
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The version of the template.
     *
     * @example v1
     *
     * @var string
     */
    public $templateVersion;
    protected $_name = [
        'configureAction' => 'ConfigureAction',
        'instanceId' => 'InstanceId',
        'parameters' => 'Parameters',
        'regionId' => 'RegionId',
        'templateName' => 'TemplateName',
        'templateVersion' => 'TemplateVersion',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->configureAction) {
            $res['ConfigureAction'] = $this->configureAction;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateInstancePackageStateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigureAction'])) {
            $model->configureAction = $map['ConfigureAction'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }

        return $model;
    }
}
