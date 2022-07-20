<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetCustomTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class customTemplate extends Model
{
    /**
     * @description 模板创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 是否默认模板
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @description 模板修改时间
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description 模板状态
     *
     * @var string
     */
    public $status;

    /**
     * @description 模板子类型ID
     *
     * @var int
     */
    public $subtype;

    /**
     * @description 模板子类型名称
     *
     * @var string
     */
    public $subtypeName;

    /**
     * @description 模板参数
     *
     * @var string
     */
    public $templateConfig;

    /**
     * @description 模板Id
     *
     * @var string
     */
    public $templateId;

    /**
     * @description 模板名称
     *
     * @var string
     */
    public $templateName;

    /**
     * @description 模板类型ID
     *
     * @var int
     */
    public $type;

    /**
     * @description 模板类型名称
     *
     * @var string
     */
    public $typeName;
    protected $_name = [
        'createTime'     => 'CreateTime',
        'isDefault'      => 'IsDefault',
        'modifiedTime'   => 'ModifiedTime',
        'status'         => 'Status',
        'subtype'        => 'Subtype',
        'subtypeName'    => 'SubtypeName',
        'templateConfig' => 'TemplateConfig',
        'templateId'     => 'TemplateId',
        'templateName'   => 'TemplateName',
        'type'           => 'Type',
        'typeName'       => 'TypeName',
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
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subtype) {
            $res['Subtype'] = $this->subtype;
        }
        if (null !== $this->subtypeName) {
            $res['SubtypeName'] = $this->subtypeName;
        }
        if (null !== $this->templateConfig) {
            $res['TemplateConfig'] = $this->templateConfig;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->typeName) {
            $res['TypeName'] = $this->typeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customTemplate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Subtype'])) {
            $model->subtype = $map['Subtype'];
        }
        if (isset($map['SubtypeName'])) {
            $model->subtypeName = $map['SubtypeName'];
        }
        if (isset($map['TemplateConfig'])) {
            $model->templateConfig = $map['TemplateConfig'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
        }

        return $model;
    }
}
