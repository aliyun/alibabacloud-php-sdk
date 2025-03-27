<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class CreateDefenseTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $defenseScene;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $templateOrigin;

    /**
     * @var int
     */
    public $templateStatus;

    /**
     * @var string
     */
    public $templateType;
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
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        return $model;
    }
}
