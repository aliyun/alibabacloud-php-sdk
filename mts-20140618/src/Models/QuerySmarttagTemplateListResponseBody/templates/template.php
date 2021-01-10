<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QuerySmarttagTemplateListResponseBody\templates;

use AlibabaCloud\Tea\Model;

class template extends Model
{
    /**
     * @var string
     */
    public $analyseTypes;

    /**
     * @var string
     */
    public $industry;

    /**
     * @var bool
     */
    public $isDefault;

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
    public $faceCategoryIds;

    /**
     * @var string
     */
    public $scene;
    protected $_name = [
        'analyseTypes'    => 'AnalyseTypes',
        'industry'        => 'Industry',
        'isDefault'       => 'IsDefault',
        'templateName'    => 'TemplateName',
        'templateId'      => 'TemplateId',
        'faceCategoryIds' => 'FaceCategoryIds',
        'scene'           => 'Scene',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->analyseTypes) {
            $res['AnalyseTypes'] = $this->analyseTypes;
        }
        if (null !== $this->industry) {
            $res['Industry'] = $this->industry;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->faceCategoryIds) {
            $res['FaceCategoryIds'] = $this->faceCategoryIds;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
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
        if (isset($map['AnalyseTypes'])) {
            $model->analyseTypes = $map['AnalyseTypes'];
        }
        if (isset($map['Industry'])) {
            $model->industry = $map['Industry'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['FaceCategoryIds'])) {
            $model->faceCategoryIds = $map['FaceCategoryIds'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }

        return $model;
    }
}
