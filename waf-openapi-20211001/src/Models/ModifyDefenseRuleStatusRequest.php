<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class ModifyDefenseRuleStatusRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var int
     */
    public $ruleStatus;

    /**
     * @var int
     */
    public $templateId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'ruleId'     => 'RuleId',
        'ruleStatus' => 'RuleStatus',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleStatus) {
            $res['RuleStatus'] = $this->ruleStatus;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDefenseRuleStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleStatus'])) {
            $model->ruleStatus = $map['RuleStatus'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
