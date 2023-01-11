<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListTemplatesResponseBody;

use AlibabaCloud\SDK\ROS\V20190910\Models\ListTemplatesResponseBody\templates\tags;
use AlibabaCloud\Tea\Model;

class templates extends Model
{
    /**
     * @example 2019-10-15T08:17:14.000000
     *
     * @var string
     */
    public $createTime;

    /**
     * @example test-description
     *
     * @var string
     */
    public $description;

    /**
     * @example 151266687691****
     *
     * @var string
     */
    public $ownerId;

    /**
     * @example rg-acfmxazb4ph6aiy****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example Private
     *
     * @var string
     */
    public $shareType;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @example acs:ros:*:151266687691****:template/a52f81be-496f-4e1c-a286-8852ab54****
     *
     * @var string
     */
    public $templateARN;

    /**
     * @example 4d4f5aa2-3260-4e47-863b-763fbb12****
     *
     * @var string
     */
    public $templateId;

    /**
     * @example demo
     *
     * @var string
     */
    public $templateName;

    /**
     * @example v1
     *
     * @var string
     */
    public $templateVersion;

    /**
     * @example 2019-10-15T08:17:14.000000
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'      => 'CreateTime',
        'description'     => 'Description',
        'ownerId'         => 'OwnerId',
        'resourceGroupId' => 'ResourceGroupId',
        'shareType'       => 'ShareType',
        'tags'            => 'Tags',
        'templateARN'     => 'TemplateARN',
        'templateId'      => 'TemplateId',
        'templateName'    => 'TemplateName',
        'templateVersion' => 'TemplateVersion',
        'updateTime'      => 'UpdateTime',
    ];

    public function validate()
    {
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->shareType) {
            $res['ShareType'] = $this->shareType;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->templateARN) {
            $res['TemplateARN'] = $this->templateARN;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ShareType'])) {
            $model->shareType = $map['ShareType'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TemplateARN'])) {
            $model->templateARN = $map['TemplateARN'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
