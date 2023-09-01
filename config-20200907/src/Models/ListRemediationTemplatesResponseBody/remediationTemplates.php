<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListRemediationTemplatesResponseBody;

use AlibabaCloud\Tea\Model;

class remediationTemplates extends Model
{
    /**
     * @description The type of the remediation template. Valid value: OOS, which indicates Operation Orchestration Service.
     *
     * @example OOS
     *
     * @var string
     */
    public $remediationType;

    /**
     * @description The definition of the remediation template.
     *
     * @example {
     * }
     * @var string
     */
    public $templateDefinition;

    /**
     * @description The description of the remediation template.
     *
     * @example Configure encryption rules for OSSBucket through the PutBucketEncryption interface. Be aware of the risks and exercise caution.
     *
     * @var string
     */
    public $templateDescription;

    /**
     * @description The ID of the remediation template.
     *
     * @example ACS-OSS-PutBucketAcl
     *
     * @var string
     */
    public $templateIdentifier;

    /**
     * @description The name of the remediation template.
     *
     * @example Set the ACL of an OSS bucket to private
     *
     * @var string
     */
    public $templateName;
    protected $_name = [
        'remediationType'     => 'RemediationType',
        'templateDefinition'  => 'TemplateDefinition',
        'templateDescription' => 'TemplateDescription',
        'templateIdentifier'  => 'TemplateIdentifier',
        'templateName'        => 'TemplateName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remediationType) {
            $res['RemediationType'] = $this->remediationType;
        }
        if (null !== $this->templateDefinition) {
            $res['TemplateDefinition'] = $this->templateDefinition;
        }
        if (null !== $this->templateDescription) {
            $res['TemplateDescription'] = $this->templateDescription;
        }
        if (null !== $this->templateIdentifier) {
            $res['TemplateIdentifier'] = $this->templateIdentifier;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return remediationTemplates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RemediationType'])) {
            $model->remediationType = $map['RemediationType'];
        }
        if (isset($map['TemplateDefinition'])) {
            $model->templateDefinition = $map['TemplateDefinition'];
        }
        if (isset($map['TemplateDescription'])) {
            $model->templateDescription = $map['TemplateDescription'];
        }
        if (isset($map['TemplateIdentifier'])) {
            $model->templateIdentifier = $map['TemplateIdentifier'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
