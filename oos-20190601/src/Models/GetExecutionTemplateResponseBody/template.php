<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\GetExecutionTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class template extends Model
{
    /**
     * @description The creator of the template.
     *
     * @example root(13090000)
     *
     * @var string
     */
    public $createdBy;

    /**
     * @description The time when the template was created.
     *
     * @example 2019-05-16T10:26:14Z
     *
     * @var string
     */
    public $createdDate;

    /**
     * @description The description of the template.
     *
     * @example Get status of instances
     *
     * @var string
     */
    public $description;

    /**
     * @description The SHA-256 value of the template content.
     *
     * @example 4bc7d7a21b3e003434b9c223f6e6d2578b5ebfeb5be28c1fcf8a8a1b11907bb4
     *
     * @var string
     */
    public $hash;

    /**
     * @description The share type of the template. The share type of a user-created template is **Private**.
     *
     * @example Private
     *
     * @var string
     */
    public $shareType;

    /**
     * @description The tag keys and values. The number of key-value pairs ranges from 1 to 20.
     *
     * @example {"k1":"k2","k2":"v2"}
     *
     * @var mixed[]
     */
    public $tags;

    /**
     * @description The format of the template. The system automatically determines whether the format is JSON or YAML.
     *
     * @example JSON
     *
     * @var string
     */
    public $templateFormat;

    /**
     * @description The ID of the template.
     *
     * @example t-94753d4d828d38
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The name of the template.
     *
     * @example MyTemplate
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The version of the template. The name of the version consists of the letter v and a number. The number starts from 1.
     *
     * @example v1
     *
     * @var string
     */
    public $templateVersion;

    /**
     * @description The user who last updated the template.
     *
     * @example root(13090000)
     *
     * @var string
     */
    public $updatedBy;

    /**
     * @description The time when the template was last updated.
     *
     * @example 2019-05-16T10:26:14Z
     *
     * @var string
     */
    public $updatedDate;
    protected $_name = [
        'createdBy' => 'CreatedBy',
        'createdDate' => 'CreatedDate',
        'description' => 'Description',
        'hash' => 'Hash',
        'shareType' => 'ShareType',
        'tags' => 'Tags',
        'templateFormat' => 'TemplateFormat',
        'templateId' => 'TemplateId',
        'templateName' => 'TemplateName',
        'templateVersion' => 'TemplateVersion',
        'updatedBy' => 'UpdatedBy',
        'updatedDate' => 'UpdatedDate',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdBy) {
            $res['CreatedBy'] = $this->createdBy;
        }
        if (null !== $this->createdDate) {
            $res['CreatedDate'] = $this->createdDate;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->hash) {
            $res['Hash'] = $this->hash;
        }
        if (null !== $this->shareType) {
            $res['ShareType'] = $this->shareType;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->templateFormat) {
            $res['TemplateFormat'] = $this->templateFormat;
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
        if (null !== $this->updatedBy) {
            $res['UpdatedBy'] = $this->updatedBy;
        }
        if (null !== $this->updatedDate) {
            $res['UpdatedDate'] = $this->updatedDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return template
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedBy'])) {
            $model->createdBy = $map['CreatedBy'];
        }
        if (isset($map['CreatedDate'])) {
            $model->createdDate = $map['CreatedDate'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Hash'])) {
            $model->hash = $map['Hash'];
        }
        if (isset($map['ShareType'])) {
            $model->shareType = $map['ShareType'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['TemplateFormat'])) {
            $model->templateFormat = $map['TemplateFormat'];
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
        if (isset($map['UpdatedBy'])) {
            $model->updatedBy = $map['UpdatedBy'];
        }
        if (isset($map['UpdatedDate'])) {
            $model->updatedDate = $map['UpdatedDate'];
        }

        return $model;
    }
}
