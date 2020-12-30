<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribePublicConfigTemplatesResponseBody\publicConfigTemplates;

use AlibabaCloud\Tea\Model;

class publicConfigTemplate extends Model
{
    /**
     * @var string
     */
    public $templateDescription;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $stackId;

    /**
     * @var string
     */
    public $templateLogo;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $packageSource;

    /**
     * @var string
     */
    public $stackName;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $categoryName;

    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'templateDescription' => 'TemplateDescription',
        'updateTime'          => 'UpdateTime',
        'stackId'             => 'StackId',
        'templateLogo'        => 'TemplateLogo',
        'createTime'          => 'CreateTime',
        'packageSource'       => 'PackageSource',
        'stackName'           => 'StackName',
        'templateName'        => 'TemplateName',
        'categoryName'        => 'CategoryName',
        'templateId'          => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateDescription) {
            $res['TemplateDescription'] = $this->templateDescription;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->templateLogo) {
            $res['TemplateLogo'] = $this->templateLogo;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->packageSource) {
            $res['PackageSource'] = $this->packageSource;
        }
        if (null !== $this->stackName) {
            $res['StackName'] = $this->stackName;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return publicConfigTemplate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TemplateDescription'])) {
            $model->templateDescription = $map['TemplateDescription'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['TemplateLogo'])) {
            $model->templateLogo = $map['TemplateLogo'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['PackageSource'])) {
            $model->packageSource = $map['PackageSource'];
        }
        if (isset($map['StackName'])) {
            $model->stackName = $map['StackName'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
