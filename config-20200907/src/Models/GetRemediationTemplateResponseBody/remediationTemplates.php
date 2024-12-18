<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetRemediationTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class remediationTemplates extends Model
{
    /**
     * @description The ID of the supported rule template.
     *
     * This parameter is required.
     * @example alb-delete-protection-enabled
     *
     * @var string
     */
    public $managedRuleIdentifier;

    /**
     * @description The type of the automatic remediation template. The value is set to OOS.
     *
     * @example OOS
     *
     * @var string
     */
    public $remediationType;

    /**
     * @description The parameters of the automatic remediation template.
     *
     * @example {\\"Parameters\\":{\\"regionId\\":{\\"AssociationProperty\\":\\"RegionId\\",\\"CreateDated\\":\\"2023-09-08T16:36:15\\",\\"Default\\":\\"{regionId}\\",\\"Description\\":{\\"en\\":\\"regionId\\",\\"zh-cn\\":\\"regionId\\"},\\"Id\\":538,\\"MaxKeyLength\\":\\"125\\",\\"MaxValueLength\\":\\"255\\",\\"ModifiedDate\\":\\"2023-09-08T16:36:15\\",\\"Name\\":\\"regionId\\",\\"Optional\\":1,\\"TemplateIdentifier\\":\\"ACS-ALB-BulkyEnableDeletionProtection\\",\\"Type\\":\\"String\\",\\"Version\\":\\"LASTEST\\"},\\"loadBalancerIds\\":{\\"CreateDated\\":\\"2023-09-08T16:36:16\\",\\"Default\\":\\"[\\\\\\"{resourceId}\\\\\\"]\\",\\"Description\\":{\\"en\\":\\"loadBalancerIds\\",\\"zh-cn\\":\\"loadBalancerIds\\"},\\"Id\\":539,\\"MaxKeyLength\\":\\"125\\",\\"MaxValueLength\\":\\"255\\",\\"ModifiedDate\\":\\"2023-09-08T16:36:16\\",\\"Name\\":\\"loadBalancerIds\\",\\"Optional\\":1,\\"TemplateIdentifier\\":\\"ACS-ALB-BulkyEnableDeletionProtection\\",\\"Type\\":\\"ARRAY\\",\\"Version\\":\\"LASTEST\\"}}}
     *
     * @var string
     */
    public $templateDefinition;

    /**
     * @description The description of the automatic remediation template.
     *
     * This parameter is required.
     * @example 调用接口EnableDeletionProtection，开启ALB实例删除保护，请您知晓风险谨慎操作。
     *
     * @var string
     */
    public $templateDescription;

    /**
     * @description The ID of the automatic remediation template.
     *
     * @example ACS-ALB-BulkyEnableDeletionProtection
     *
     * @var string
     */
    public $templateIdentifier;

    /**
     * @description The name of the automatic remediation template.
     *
     * @example 开启ALB实例删除保护
     *
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
