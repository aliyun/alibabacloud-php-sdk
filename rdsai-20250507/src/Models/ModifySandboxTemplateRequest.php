<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;

class ModifySandboxTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $defaultCpu;

    /**
     * @var string
     */
    public $defaultMemory;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $replicas;

    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'defaultCpu' => 'DefaultCpu',
        'defaultMemory' => 'DefaultMemory',
        'instanceName' => 'InstanceName',
        'regionId' => 'RegionId',
        'replicas' => 'Replicas',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultCpu) {
            $res['DefaultCpu'] = $this->defaultCpu;
        }

        if (null !== $this->defaultMemory) {
            $res['DefaultMemory'] = $this->defaultMemory;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->replicas) {
            $res['Replicas'] = $this->replicas;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
        if (isset($map['DefaultCpu'])) {
            $model->defaultCpu = $map['DefaultCpu'];
        }

        if (isset($map['DefaultMemory'])) {
            $model->defaultMemory = $map['DefaultMemory'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Replicas'])) {
            $model->replicas = $map['Replicas'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
