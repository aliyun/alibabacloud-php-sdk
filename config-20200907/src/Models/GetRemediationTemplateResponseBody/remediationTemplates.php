<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetRemediationTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class remediationTemplates extends Model
{
    /**
     * @example alb-delete-protection-enabled
     *
     * @var string
     */
    public $managedRuleIdentifier;

    /**
     * @example OOS
     *
     * @var string
     */
    public $remediationType;

    /**
     * @var string
     */
    public $templateDefinition;

    /**
     * @var string
     */
    public $templateDescription;

    /**
     * @example ACS-ALB-BulkyEnableDeletionProtection
     *
     * @var string
     */
    public $templateIdentifier;

    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'managedRuleIdentifier' => 'ManagedRuleIdentifier',
        'remediationType'       => 'RemediationType',
        'templateDefinition'    => 'TemplateDefinition',
        'templateDescription'   => 'TemplateDescription',
        'templateIdentifier'    => 'TemplateIdentifier',
        'templateName'          => 'TemplateName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->managedRuleIdentifier) {
            $res['ManagedRuleIdentifier'] = $this->managedRuleIdentifier;
        }
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
        if (isset($map['ManagedRuleIdentifier'])) {
            $model->managedRuleIdentifier = $map['ManagedRuleIdentifier'];
        }
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
