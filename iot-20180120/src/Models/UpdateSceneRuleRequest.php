<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class UpdateSceneRuleRequest extends Model
{
    /**
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $ruleContent;

    /**
     * @var string
     */
    public $ruleDescription;

    /**
     * @example f041397879ad4d89822811d741******
     *
     * @var string
     */
    public $ruleId;

    /**
     * @example test
     *
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'iotInstanceId'   => 'IotInstanceId',
        'ruleContent'     => 'RuleContent',
        'ruleDescription' => 'RuleDescription',
        'ruleId'          => 'RuleId',
        'ruleName'        => 'RuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->ruleContent) {
            $res['RuleContent'] = $this->ruleContent;
        }
        if (null !== $this->ruleDescription) {
            $res['RuleDescription'] = $this->ruleDescription;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSceneRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['RuleContent'])) {
            $model->ruleContent = $map['RuleContent'];
        }
        if (isset($map['RuleDescription'])) {
            $model->ruleDescription = $map['RuleDescription'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}
