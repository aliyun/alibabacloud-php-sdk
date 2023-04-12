<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\EvaluatePreConfigRulesResponseBody\resourceEvaluations;

use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @description The reason why the resource was evaluated as incompliant.
     *
     * @example {\"configuration\":\"false\",\"desiredValue\":\"True\",\"operator\":\"StringEquals\",\"property\":\"$.DeletionProtection\"}
     *
     * @var string
     */
    public $annotation;

    /**
     * @description The compliance type of the resource that was evaluated by using the evaluation rule. Valid values:
     *
     *   COMPLIANT: The resource was evaluated as compliant.
     *   NON_COMPLIANT: The resource was evaluated as incompliant.
     *   NOT_APPLICABLE: The evaluation rule does not apply to the resource.
     *
     * @example NON_COMPLIANT
     *
     * @var string
     */
    public $complianceType;

    /**
     * @description The URL of the topic that describes how the managed rule remediates the incompliant configurations.
     *
     * @example https://example.aliyundoc.com
     *
     * @var string
     */
    public $helpUrl;

    /**
     * @description The identifier of the evaluation rule.
     *
     * @example ecs-instance-deletion-protection-enabled
     *
     * @var string
     */
    public $identifier;
    protected $_name = [
        'annotation'     => 'Annotation',
        'complianceType' => 'ComplianceType',
        'helpUrl'        => 'HelpUrl',
        'identifier'     => 'Identifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->annotation) {
            $res['Annotation'] = $this->annotation;
        }
        if (null !== $this->complianceType) {
            $res['ComplianceType'] = $this->complianceType;
        }
        if (null !== $this->helpUrl) {
            $res['HelpUrl'] = $this->helpUrl;
        }
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Annotation'])) {
            $model->annotation = $map['Annotation'];
        }
        if (isset($map['ComplianceType'])) {
            $model->complianceType = $map['ComplianceType'];
        }
        if (isset($map['HelpUrl'])) {
            $model->helpUrl = $map['HelpUrl'];
        }
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }

        return $model;
    }
}
