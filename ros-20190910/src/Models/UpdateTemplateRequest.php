<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class UpdateTemplateRequest extends Model
{
    /**
     * @description The description of the template. It can be up to 256 characters in length.
     *
     * @example It is a demo.
     *
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
     * @description The ID of the template. This parameter applies to shared and private templates.
     *
     * This parameter is required.
     * @example 5ecd1e10-b0e9-4389-a565-e4c15efc****
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The name of the template.
     *
     * The name can be up to 255 characters in length and can contain digits, letters, hyphens (-), and underscores (_). It must start with a digit or letter.
     * @example MyTemplate
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The URL of the file that contains the template body. The URL must point to a template located in an HTTP or HTTPS web server or an Alibaba Cloud OSS bucket. Examples: oss://ros/template/demo and oss://ros/template/demo?RegionId=cn-hangzhou. The template can be up to 524,288 bytes in length, and the URL can be up to 1,024 bytes in length.
     *
     * You can specify only one of the TemplateBody and TemplateURL parameters.
     * @example oss://ros/template/demo
     *
     * @var string
     */
    public $templateURL;

    /**
     * @var string[]
     */
    public $validationOptions;
    protected $_name = [
        'description'       => 'Description',
        'isDraft'           => 'IsDraft',
        'rotateStrategy'    => 'RotateStrategy',
        'templateBody'      => 'TemplateBody',
        'templateId'        => 'TemplateId',
        'templateName'      => 'TemplateName',
        'templateURL'       => 'TemplateURL',
        'validationOptions' => 'ValidationOptions',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['ValidationOptions'] = $this->validationOptions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTemplateRequest
     */
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
                $model->validationOptions = $map['ValidationOptions'];
            }
        }

        return $model;
    }
}
