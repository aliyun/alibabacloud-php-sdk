<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models;

use AlibabaCloud\Tea\Model;

class UpdateRuleByIdRequest extends Model
{
    /**
     * @description baseMeAgentId
     *
     * @var int
     */
    public $baseMeAgentId;

    /**
     * @example false
     *
     * @var bool
     */
    public $isCopy;

    /**
     * @example {}
     *
     * @var string
     */
    public $jsonStrForRule;

    /**
     * @example 1
     *
     * @var bool
     */
    public $returnRelatedSchemes;

    /**
     * @example 1
     *
     * @var int
     */
    public $ruleId;
    protected $_name = [
        'baseMeAgentId'        => 'BaseMeAgentId',
        'isCopy'               => 'IsCopy',
        'jsonStrForRule'       => 'JsonStrForRule',
        'returnRelatedSchemes' => 'ReturnRelatedSchemes',
        'ruleId'               => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseMeAgentId) {
            $res['BaseMeAgentId'] = $this->baseMeAgentId;
        }
        if (null !== $this->isCopy) {
            $res['IsCopy'] = $this->isCopy;
        }
        if (null !== $this->jsonStrForRule) {
            $res['JsonStrForRule'] = $this->jsonStrForRule;
        }
        if (null !== $this->returnRelatedSchemes) {
            $res['ReturnRelatedSchemes'] = $this->returnRelatedSchemes;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRuleByIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseMeAgentId'])) {
            $model->baseMeAgentId = $map['BaseMeAgentId'];
        }
        if (isset($map['IsCopy'])) {
            $model->isCopy = $map['IsCopy'];
        }
        if (isset($map['JsonStrForRule'])) {
            $model->jsonStrForRule = $map['JsonStrForRule'];
        }
        if (isset($map['ReturnRelatedSchemes'])) {
            $model->returnRelatedSchemes = $map['ReturnRelatedSchemes'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
