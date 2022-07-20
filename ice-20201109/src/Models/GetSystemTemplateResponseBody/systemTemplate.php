<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetSystemTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class systemTemplate extends Model
{
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
     * @return systemTemplate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
