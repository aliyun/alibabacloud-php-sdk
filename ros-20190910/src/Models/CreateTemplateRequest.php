<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateTemplateRequest\tags;

class CreateTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $templateBody;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $templateURL;

    /**
     * @var string[]
     */
    public $validationOptions;
    protected $_name = [
        'description' => 'Description',
        'resourceGroupId' => 'ResourceGroupId',
        'tags' => 'Tags',
        'templateBody' => 'TemplateBody',
        'templateName' => 'TemplateName',
        'templateURL' => 'TemplateURL',
        'validationOptions' => 'ValidationOptions',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (\is_array($this->validationOptions)) {
            Model::validateArray($this->validationOptions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->templateBody) {
            $res['TemplateBody'] = $this->templateBody;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        if (null !== $this->templateURL) {
            $res['TemplateURL'] = $this->templateURL;
        }

        if (null !== $this->validationOptions) {
            if (\is_array($this->validationOptions)) {
                $res['ValidationOptions'] = [];
                $n1 = 0;
                foreach ($this->validationOptions as $item1) {
                    $res['ValidationOptions'][$n1++] = $item1;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        if (isset($map['TemplateURL'])) {
            $model->templateURL = $map['TemplateURL'];
        }

        if (isset($map['ValidationOptions'])) {
            if (!empty($map['ValidationOptions'])) {
                $model->validationOptions = [];
                $n1 = 0;
                foreach ($map['ValidationOptions'] as $item1) {
                    $model->validationOptions[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
