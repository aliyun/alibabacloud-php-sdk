<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\CreateConfigTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class configTemplate extends Model
{
    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $templateType;

    /**
     * @var string
     */
    public $stackName;

    /**
     * @var string
     */
    public $pkgVersionId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $templateDescription;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $stackId;

    /**
     * @var string
     */
    public $pkgVersionLabel;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'updateTime'          => 'UpdateTime',
        'createTime'          => 'CreateTime',
        'templateType'        => 'TemplateType',
        'stackName'           => 'StackName',
        'pkgVersionId'        => 'PkgVersionId',
        'templateName'        => 'TemplateName',
        'templateDescription' => 'TemplateDescription',
        'appName'             => 'AppName',
        'stackId'             => 'StackId',
        'pkgVersionLabel'     => 'PkgVersionLabel',
        'appId'               => 'AppId',
        'templateId'          => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }
        if (null !== $this->stackName) {
            $res['StackName'] = $this->stackName;
        }
        if (null !== $this->pkgVersionId) {
            $res['PkgVersionId'] = $this->pkgVersionId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->templateDescription) {
            $res['TemplateDescription'] = $this->templateDescription;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->pkgVersionLabel) {
            $res['PkgVersionLabel'] = $this->pkgVersionLabel;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configTemplate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }
        if (isset($map['StackName'])) {
            $model->stackName = $map['StackName'];
        }
        if (isset($map['PkgVersionId'])) {
            $model->pkgVersionId = $map['PkgVersionId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TemplateDescription'])) {
            $model->templateDescription = $map['TemplateDescription'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['PkgVersionLabel'])) {
            $model->pkgVersionLabel = $map['PkgVersionLabel'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
