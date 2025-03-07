<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListSystemTemplatesResponseBody;

use AlibabaCloud\Tea\Model;

class systemTemplateList extends Model
{
    /**
     * @description The template state.
     *
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The subtype ID of the template.
     *
     * @example 1
     *
     * @var int
     */
    public $subtype;

    /**
     * @description The subtype name of the template.
     *
     * @example Remux
     *
     * @var string
     */
    public $subtypeName;

    /**
     * @description The template parameters.
     *
     * @example {"Container":{"Format":"flv"},"Video":{},"Audio":{}}
     *
     * @var string
     */
    public $templateConfig;

    /**
     * @description The template ID.
     *
     * @example S00000001-000000
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The template name.
     *
     * @example FLV-COPY
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The type ID of the template.
     *
     * @example 1
     *
     * @var int
     */
    public $type;

    /**
     * @description The type name of the template.
     *
     * @example TranscodeTemplate
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
     * @return systemTemplateList
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
