<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListRemediationTemplatesResponseBody;

use AlibabaCloud\Tea\Model;

class remediationTemplates extends Model
{
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
    public $templateIdentifier;

    /**
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
