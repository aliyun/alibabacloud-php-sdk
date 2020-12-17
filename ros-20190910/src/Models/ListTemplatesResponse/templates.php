<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListTemplatesResponse;

use AlibabaCloud\Tea\Model;

class templates extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

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
    public $updateTime;

    /**
     * @var string
     */
    public $templateVersion;

    /**
     * @var string
     */
    public $shareType;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $templateARN;
    protected $_name = [
        'createTime'      => 'CreateTime',
        'description'     => 'Description',
        'templateId'      => 'TemplateId',
        'templateName'    => 'TemplateName',
        'updateTime'      => 'UpdateTime',
        'templateVersion' => 'TemplateVersion',
        'shareType'       => 'ShareType',
        'ownerId'         => 'OwnerId',
        'templateARN'     => 'TemplateARN',
    ];

    public function validate()
    {
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('templateId', $this->templateId, true);
        Model::validateRequired('templateName', $this->templateName, true);
        Model::validateRequired('updateTime', $this->updateTime, true);
        Model::validateRequired('templateVersion', $this->templateVersion, true);
        Model::validateRequired('shareType', $this->shareType, true);
        Model::validateRequired('ownerId', $this->ownerId, true);
        Model::validateRequired('templateARN', $this->templateARN, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }
        if (null !== $this->shareType) {
            $res['ShareType'] = $this->shareType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->templateARN) {
            $res['TemplateARN'] = $this->templateARN;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return templates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }
        if (isset($map['ShareType'])) {
            $model->shareType = $map['ShareType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['TemplateARN'])) {
            $model->templateARN = $map['TemplateARN'];
        }

        return $model;
    }
}
