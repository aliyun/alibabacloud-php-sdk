<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class template extends Model
{
    /**
     * @description The scenario in which the template is used. For more information, see the description of the **DefenseScene** parameter in the [CreateDefenseRule](~~CreateDefenseRule~~) topic.
     *
     * @example waf_group
     *
     * @var string
     */
    public $defenseScene;

    /**
     * @var string
     */
    public $defenseSubScene;

    /**
     * @description The description of the protection rule template.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The most recent time when the protection rule template was modified.
     *
     * @example 1665283642000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description The ID of the protection rule template.
     *
     * @example 10097
     *
     * @var int
     */
    public $templateId;

    /**
     * @description The name of the protection rule template.
     *
     * @example test0621
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The origin of the protection rule template. If the value of this parameter is custom, the protection rule template is created by the user.
     *
     * @example custom
     *
     * @var string
     */
    public $templateOrigin;

    /**
     * @description The status of the protection rule template. Valid values:
     *
     *   **0:** disabled.
     *   **1:** enabled.
     *
     * @example 1
     *
     * @var int
     */
    public $templateStatus;

    /**
     * @description The type of the protection rule template. Valid values:
     *
     *   **user_default:** default template.
     *   **user_custom:** custom template.
     *
     * @example user_default
     *
     * @var string
     */
    public $templateType;
    protected $_name = [
        'defenseScene'    => 'DefenseScene',
        'defenseSubScene' => 'DefenseSubScene',
        'description'     => 'Description',
        'gmtModified'     => 'GmtModified',
        'templateId'      => 'TemplateId',
        'templateName'    => 'TemplateName',
        'templateOrigin'  => 'TemplateOrigin',
        'templateStatus'  => 'TemplateStatus',
        'templateType'    => 'TemplateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defenseScene) {
            $res['DefenseScene'] = $this->defenseScene;
        }
        if (null !== $this->defenseSubScene) {
            $res['DefenseSubScene'] = $this->defenseSubScene;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->templateOrigin) {
            $res['TemplateOrigin'] = $this->templateOrigin;
        }
        if (null !== $this->templateStatus) {
            $res['TemplateStatus'] = $this->templateStatus;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
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
        if (isset($map['DefenseScene'])) {
            $model->defenseScene = $map['DefenseScene'];
        }
        if (isset($map['DefenseSubScene'])) {
            $model->defenseSubScene = $map['DefenseSubScene'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TemplateOrigin'])) {
            $model->templateOrigin = $map['TemplateOrigin'];
        }
        if (isset($map['TemplateStatus'])) {
            $model->templateStatus = $map['TemplateStatus'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
