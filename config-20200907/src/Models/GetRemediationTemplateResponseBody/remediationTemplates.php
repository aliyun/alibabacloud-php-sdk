<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetRemediationTemplateResponseBody;

use AlibabaCloud\Dara\Model;

class remediationTemplates extends Model
{
    /**
     * @var string
     */
    public $managedRuleIdentifier;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
