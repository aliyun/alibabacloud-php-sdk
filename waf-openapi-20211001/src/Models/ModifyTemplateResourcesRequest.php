<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

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
        'bindResourceGroups'   => 'BindResourceGroups',
        'bindResources'        => 'BindResources',
        'instanceId'           => 'InstanceId',
        'templateId'           => 'TemplateId',
        'unbindResourceGroups' => 'UnbindResourceGroups',
        'unbindResources'      => 'UnbindResources',
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
