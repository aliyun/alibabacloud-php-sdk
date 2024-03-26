<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseTemplatesResponseBody;

use AlibabaCloud\Tea\Model;

class templates extends Model
{
    /**
     * @description The scenario in which the protection template is used.
     *
     *   **waf_group**: basic protection.
     *   **antiscan**: scan protection.
     *   **ip_blacklist**: IP address blacklist.
     *   **custom_acl**: custom rule.
     *   **whitelist**: whitelist.
     *   **region_block**: region blacklist.
     *   **custom_response**: custom response.
     *   **cc**: HTTP flood protection.
     *   **tamperproof**: website tamper-proofing.
     *   **dlp**: data leakage prevention.
     *
     * @example whitelist
     *
     * @var string
     */
    public $defenseScene;

    /**
     * @description The sub-scenario in which the protection template is used. Valid values:
     *
     *   **web**: bot management for website protection.
     *   **app**: bot management for app protection.
     *   **basic**: bot management for basic protection.
     *
     * @example basic
     *
     * @var string
     */
    public $defenseSubScene;

    /**
     * @description The description of the protection template.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the protection template was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1683776070000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description The ID of the protection template.
     *
     * @example 12345
     *
     * @var int
     */
    public $templateId;

    /**
     * @description The name of the protection template.
     *
     * @example testTemplateName
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The origin of the protection template. The value custom indicates that the protection template is a custom template created by the user.
     *
     * @example custom
     *
     * @var string
     */
    public $templateOrigin;

    /**
     * @description The status of the protection template. Valid values:
     *
     *   **0**: disabled.
     *   **1**: enabled.
     *
     * @example 1
     *
     * @var int
     */
    public $templateStatus;

    /**
     * @description The type of the protection template. Valid values:
     *
     *   **user_default**: default template.
     *   **user_custom**: custom template.
     *
     * @example user_custom
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
     * @return templates
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
