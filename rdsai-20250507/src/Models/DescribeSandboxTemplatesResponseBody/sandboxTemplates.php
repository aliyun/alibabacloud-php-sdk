<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeSandboxTemplatesResponseBody;

use AlibabaCloud\Dara\Model;

class sandboxTemplates extends Model
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
    public $description;

    /**
     * @var string
     */
    public $enableVpcAccess;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'defaultCpu' => 'DefaultCpu',
        'defaultMemory' => 'DefaultMemory',
        'description' => 'Description',
        'enableVpcAccess' => 'EnableVpcAccess',
        'name' => 'Name',
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

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enableVpcAccess) {
            $res['EnableVpcAccess'] = $this->enableVpcAccess;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnableVpcAccess'])) {
            $model->enableVpcAccess = $map['EnableVpcAccess'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
