<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class UpdateInstancePackageStateShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example install
     *
     * @var string
     */
    public $configureAction;

    /**
     * @description This parameter is required.
     *
     * @example i-bp1jaxa2bs4bps7*****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example {"username": "xx"}
     *
     * @var string
     */
    public $parametersShrink;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description This parameter is required.
     *
     * @example ACS-ECS-InventoryDataCollection
     *
     * @var string
     */
    public $templateName;

    /**
     * @example v1
     *
     * @var string
     */
    public $templateVersion;
    protected $_name = [
        'configureAction'  => 'ConfigureAction',
        'instanceId'       => 'InstanceId',
        'parametersShrink' => 'Parameters',
        'regionId'         => 'RegionId',
        'templateName'     => 'TemplateName',
        'templateVersion'  => 'TemplateVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configureAction) {
            $res['ConfigureAction'] = $this->configureAction;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->parametersShrink) {
            $res['Parameters'] = $this->parametersShrink;
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
     * @return UpdateInstancePackageStateShrinkRequest
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
            $model->parametersShrink = $map['Parameters'];
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
