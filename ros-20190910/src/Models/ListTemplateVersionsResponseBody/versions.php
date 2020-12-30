<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListTemplateVersionsResponseBody;

use AlibabaCloud\Tea\Model;

class versions extends Model
{
    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateVersion;
    protected $_name = [
        'updateTime'      => 'UpdateTime',
        'description'     => 'Description',
        'createTime'      => 'CreateTime',
        'templateName'    => 'TemplateName',
        'templateId'      => 'TemplateId',
        'templateVersion' => 'TemplateVersion',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return versions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }

        return $model;
    }
}
