<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\UpdateConfigTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class configTemplate extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $stackId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $appId;

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
    public $templateId;
    protected $_name = [
        'appName'      => 'AppName',
        'updateTime'   => 'UpdateTime',
        'stackId'      => 'StackId',
        'createTime'   => 'CreateTime',
        'appId'        => 'AppId',
        'stackName'    => 'StackName',
        'templateName' => 'TemplateName',
        'templateId'   => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->stackName) {
            $res['StackName'] = $this->stackName;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['StackName'])) {
            $model->stackName = $map['StackName'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
