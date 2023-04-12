<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListRemediationTemplatesResponseBody;

use AlibabaCloud\Tea\Model;

class remediationTemplates extends Model
{
    /**
     * @description The type of the remediation template. Valid value: OOS, which stands for Operation Orchestration Service.
     *
     * @example OOS
     *
     * @var string
     */
    public $remediationType;

    /**
     * @description The configuration of the remediation template.
     *
     * @var string
     */
    public $templateDefinition;

    /**
     * @description The identifier of the remediation template.
     *
     * @example ACS-OSS-PutBucketAcl
     *
     * @var string
     */
    public $templateIdentifier;

    /**
     * @description The name of the remediation template.
     *
     * @var string
     */
    public $templateName;
    protected $_name = [
        'remediationType'    => 'RemediationType',
        'templateDefinition' => 'TemplateDefinition',
        'templateIdentifier' => 'TemplateIdentifier',
        'templateName'       => 'TemplateName',
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
        if (isset($map['TemplateIdentifier'])) {
            $model->templateIdentifier = $map['TemplateIdentifier'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
