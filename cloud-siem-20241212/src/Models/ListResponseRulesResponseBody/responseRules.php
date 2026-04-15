<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListResponseRulesResponseBody;

use AlibabaCloud\Dara\Model;

class responseRules extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $responseActionConfig;

    /**
     * @var string
     */
    public $responseActionType;

    /**
     * @var string
     */
    public $responseExecutionCondition;

    /**
     * @var string
     */
    public $responseRuleId;

    /**
     * @var string
     */
    public $responseRuleName;

    /**
     * @var int
     */
    public $responseRulePriority;

    /**
     * @var int
     */
    public $responseRuleStatus;

    /**
     * @var string
     */
    public $responseRuleType;

    /**
     * @var string
     */
    public $responseTriggerType;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'responseActionConfig' => 'ResponseActionConfig',
        'responseActionType' => 'ResponseActionType',
        'responseExecutionCondition' => 'ResponseExecutionCondition',
        'responseRuleId' => 'ResponseRuleId',
        'responseRuleName' => 'ResponseRuleName',
        'responseRulePriority' => 'ResponseRulePriority',
        'responseRuleStatus' => 'ResponseRuleStatus',
        'responseRuleType' => 'ResponseRuleType',
        'responseTriggerType' => 'ResponseTriggerType',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->responseActionConfig) {
            $res['ResponseActionConfig'] = $this->responseActionConfig;
        }

        if (null !== $this->responseActionType) {
            $res['ResponseActionType'] = $this->responseActionType;
        }

        if (null !== $this->responseExecutionCondition) {
            $res['ResponseExecutionCondition'] = $this->responseExecutionCondition;
        }

        if (null !== $this->responseRuleId) {
            $res['ResponseRuleId'] = $this->responseRuleId;
        }

        if (null !== $this->responseRuleName) {
            $res['ResponseRuleName'] = $this->responseRuleName;
        }

        if (null !== $this->responseRulePriority) {
            $res['ResponseRulePriority'] = $this->responseRulePriority;
        }

        if (null !== $this->responseRuleStatus) {
            $res['ResponseRuleStatus'] = $this->responseRuleStatus;
        }

        if (null !== $this->responseRuleType) {
            $res['ResponseRuleType'] = $this->responseRuleType;
        }

        if (null !== $this->responseTriggerType) {
            $res['ResponseTriggerType'] = $this->responseTriggerType;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['ResponseActionConfig'])) {
            $model->responseActionConfig = $map['ResponseActionConfig'];
        }

        if (isset($map['ResponseActionType'])) {
            $model->responseActionType = $map['ResponseActionType'];
        }

        if (isset($map['ResponseExecutionCondition'])) {
            $model->responseExecutionCondition = $map['ResponseExecutionCondition'];
        }

        if (isset($map['ResponseRuleId'])) {
            $model->responseRuleId = $map['ResponseRuleId'];
        }

        if (isset($map['ResponseRuleName'])) {
            $model->responseRuleName = $map['ResponseRuleName'];
        }

        if (isset($map['ResponseRulePriority'])) {
            $model->responseRulePriority = $map['ResponseRulePriority'];
        }

        if (isset($map['ResponseRuleStatus'])) {
            $model->responseRuleStatus = $map['ResponseRuleStatus'];
        }

        if (isset($map['ResponseRuleType'])) {
            $model->responseRuleType = $map['ResponseRuleType'];
        }

        if (isset($map['ResponseTriggerType'])) {
            $model->responseTriggerType = $map['ResponseTriggerType'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
