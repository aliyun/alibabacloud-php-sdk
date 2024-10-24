<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetCustomTemplateResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetCustomTemplateResponseBody\customTemplate\frontendHint;
use AlibabaCloud\Tea\Model;

class customTemplate extends Model
{
    /**
     * @example 2022-01-01T10:00:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @var frontendHint
     */
    public $frontendHint;

    /**
     * @example true
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @example 2022-01-01T11:00:00Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @example 1
     *
     * @var int
     */
    public $subtype;

    /**
     * @example Normal
     *
     * @var string
     */
    public $subtypeName;

    /**
     * @example {"Type":"Normal","FrameType":"normal","Time":0,"Count":10}
     *
     * @var string
     */
    public $templateConfig;

    /**
     * @example ****20b48fb04483915d4f2cd8ac****
     *
     * @var string
     */
    public $templateId;

    /**
     * @example 测试转码模板
     *
     * @var string
     */
    public $templateName;

    /**
     * @example 2
     *
     * @var int
     */
    public $type;

    /**
     * @example SnapshotTemplate
     *
     * @var string
     */
    public $typeName;
    protected $_name = [
        'createTime'     => 'CreateTime',
        'frontendHint'   => 'FrontendHint',
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
        if (null !== $this->frontendHint) {
            $res['FrontendHint'] = null !== $this->frontendHint ? $this->frontendHint->toMap() : null;
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
        if (isset($map['FrontendHint'])) {
            $model->frontendHint = frontendHint::fromMap($map['FrontendHint']);
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
