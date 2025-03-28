<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;

class UpdateTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $isDraft;

    /**
     * @var string
     */
    public $rotateStrategy;

    /**
     * @var string
     */
    public $templateBody;

    /**
     * @var string
     */
    public $templateId;

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
        'isDraft' => 'IsDraft',
        'rotateStrategy' => 'RotateStrategy',
        'templateBody' => 'TemplateBody',
        'templateId' => 'TemplateId',
        'templateName' => 'TemplateName',
        'templateURL' => 'TemplateURL',
        'validationOptions' => 'ValidationOptions',
    ];

    public function validate()
    {
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

        if (null !== $this->isDraft) {
            $res['IsDraft'] = $this->isDraft;
        }

        if (null !== $this->rotateStrategy) {
            $res['RotateStrategy'] = $this->rotateStrategy;
        }

        if (null !== $this->templateBody) {
            $res['TemplateBody'] = $this->templateBody;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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

        if (isset($map['IsDraft'])) {
            $model->isDraft = $map['IsDraft'];
        }

        if (isset($map['RotateStrategy'])) {
            $model->rotateStrategy = $map['RotateStrategy'];
        }

        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
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
