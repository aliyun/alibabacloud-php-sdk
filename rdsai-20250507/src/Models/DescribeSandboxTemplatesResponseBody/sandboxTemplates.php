<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeSandboxTemplatesResponseBody;

use AlibabaCloud\Dara\Model;

class sandboxTemplates extends Model
{
    /**
     * @var string
     */
    public $createdBy;

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
    public $image;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $replicas;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'createdBy' => 'CreatedBy',
        'defaultCpu' => 'DefaultCpu',
        'defaultMemory' => 'DefaultMemory',
        'description' => 'Description',
        'enableVpcAccess' => 'EnableVpcAccess',
        'image' => 'Image',
        'name' => 'Name',
        'replicas' => 'Replicas',
        'tags' => 'Tags',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdBy) {
            $res['CreatedBy'] = $this->createdBy;
        }

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

        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->replicas) {
            $res['Replicas'] = $this->replicas;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                foreach ($this->tags as $key1 => $value1) {
                    $res['Tags'][$key1] = $value1;
                }
            }
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
        if (isset($map['CreatedBy'])) {
            $model->createdBy = $map['CreatedBy'];
        }

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

        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Replicas'])) {
            $model->replicas = $map['Replicas'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                foreach ($map['Tags'] as $key1 => $value1) {
                    $model->tags[$key1] = $value1;
                }
            }
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
