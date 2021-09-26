<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetBaseTemplateListResponseBody;

use AlibabaCloud\Tea\Model;

class templateList extends Model
{
    /**
     * @var string
     */
    public $dbTypeName;

    /**
     * @var string
     */
    public $templateContent;

    /**
     * @var string
     */
    public $sqlTypeName;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateState;
    protected $_name = [
        'dbTypeName'      => 'DbTypeName',
        'templateContent' => 'TemplateContent',
        'sqlTypeName'     => 'SqlTypeName',
        'templateId'      => 'TemplateId',
        'templateState'   => 'TemplateState',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbTypeName) {
            $res['DbTypeName'] = $this->dbTypeName;
        }
        if (null !== $this->templateContent) {
            $res['TemplateContent'] = $this->templateContent;
        }
        if (null !== $this->sqlTypeName) {
            $res['SqlTypeName'] = $this->sqlTypeName;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateState) {
            $res['TemplateState'] = $this->templateState;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return templateList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbTypeName'])) {
            $model->dbTypeName = $map['DbTypeName'];
        }
        if (isset($map['TemplateContent'])) {
            $model->templateContent = $map['TemplateContent'];
        }
        if (isset($map['SqlTypeName'])) {
            $model->sqlTypeName = $map['SqlTypeName'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateState'])) {
            $model->templateState = $map['TemplateState'];
        }

        return $model;
    }
}
