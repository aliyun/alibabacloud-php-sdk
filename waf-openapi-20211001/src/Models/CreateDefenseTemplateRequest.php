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

    public function validate()
    {
        if (\is_array($this->unbindResourceGroups)) {
            Model::validateArray($this->unbindResourceGroups);
        }
        if (\is_array($this->unbindResources)) {
            Model::validateArray($this->unbindResources);
        }
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

        if (null !== $this->unbindResourceGroups) {
            if (\is_array($this->unbindResourceGroups)) {
                $res['UnbindResourceGroups'] = [];
                $n1 = 0;
                foreach ($this->unbindResourceGroups as $item1) {
                    $res['UnbindResourceGroups'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->unbindResources) {
            if (\is_array($this->unbindResources)) {
                $res['UnbindResources'] = [];
                $n1 = 0;
                foreach ($this->unbindResources as $item1) {
                    $res['UnbindResources'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['UnbindResourceGroups'])) {
            if (!empty($map['UnbindResourceGroups'])) {
                $model->unbindResourceGroups = [];
                $n1 = 0;
                foreach ($map['UnbindResourceGroups'] as $item1) {
                    $model->unbindResourceGroups[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['UnbindResources'])) {
            if (!empty($map['UnbindResources'])) {
                $model->unbindResources = [];
                $n1 = 0;
                foreach ($map['UnbindResources'] as $item1) {
                    $model->unbindResources[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
