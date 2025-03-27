<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class ModifyTemplateResourcesRequest extends Model
{
    /**
     * @var string[]
     */
    public $bindResourceGroups;

    /**
     * @var string[]
     */
    public $bindResources;

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
     * @var int
     */
    public $templateId;

    /**
     * @var string[]
     */
    public $unbindResourceGroups;

    /**
     * @var string[]
     */
    public $unbindResources;
    protected $_name = [
        'bindResourceGroups' => 'BindResourceGroups',
        'bindResources' => 'BindResources',
        'instanceId' => 'InstanceId',
        'regionId' => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'templateId' => 'TemplateId',
        'unbindResourceGroups' => 'UnbindResourceGroups',
        'unbindResources' => 'UnbindResources',
    ];

    public function validate()
    {
        if (\is_array($this->bindResourceGroups)) {
            Model::validateArray($this->bindResourceGroups);
        }
        if (\is_array($this->bindResources)) {
            Model::validateArray($this->bindResources);
        }
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
        if (null !== $this->bindResourceGroups) {
            if (\is_array($this->bindResourceGroups)) {
                $res['BindResourceGroups'] = [];
                $n1 = 0;
                foreach ($this->bindResourceGroups as $item1) {
                    $res['BindResourceGroups'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->bindResources) {
            if (\is_array($this->bindResources)) {
                $res['BindResources'] = [];
                $n1 = 0;
                foreach ($this->bindResources as $item1) {
                    $res['BindResources'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->unbindResourceGroups)) {
                $res['UnbindResourceGroups'] = [];
                $n1 = 0;
                foreach ($this->unbindResourceGroups as $item1) {
                    $res['UnbindResourceGroups'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->unbindResources) {
            if (\is_array($this->unbindResources)) {
                $res['UnbindResources'] = [];
                $n1 = 0;
                foreach ($this->unbindResources as $item1) {
                    $res['UnbindResources'][$n1++] = $item1;
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
        if (isset($map['BindResourceGroups'])) {
            if (!empty($map['BindResourceGroups'])) {
                $model->bindResourceGroups = [];
                $n1 = 0;
                foreach ($map['BindResourceGroups'] as $item1) {
                    $model->bindResourceGroups[$n1++] = $item1;
                }
            }
        }

        if (isset($map['BindResources'])) {
            if (!empty($map['BindResources'])) {
                $model->bindResources = [];
                $n1 = 0;
                foreach ($map['BindResources'] as $item1) {
                    $model->bindResources[$n1++] = $item1;
                }
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
                $model->unbindResourceGroups = [];
                $n1 = 0;
                foreach ($map['UnbindResourceGroups'] as $item1) {
                    $model->unbindResourceGroups[$n1++] = $item1;
                }
            }
        }

        if (isset($map['UnbindResources'])) {
            if (!empty($map['UnbindResources'])) {
                $model->unbindResources = [];
                $n1 = 0;
                foreach ($map['UnbindResources'] as $item1) {
                    $model->unbindResources[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
