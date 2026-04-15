<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;

class UpdateResponseRuleRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $regionId;

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
    public $responseTriggerType;
    protected $_name = [
        'lang' => 'Lang',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'regionId' => 'RegionId',
        'responseActionConfig' => 'ResponseActionConfig',
        'responseActionType' => 'ResponseActionType',
        'responseExecutionCondition' => 'ResponseExecutionCondition',
        'responseRuleId' => 'ResponseRuleId',
        'responseRuleName' => 'ResponseRuleName',
        'responseRulePriority' => 'ResponseRulePriority',
        'responseRuleStatus' => 'ResponseRuleStatus',
        'responseTriggerType' => 'ResponseTriggerType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

        if (null !== $this->responseTriggerType) {
            $res['ResponseTriggerType'] = $this->responseTriggerType;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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

        if (isset($map['ResponseTriggerType'])) {
            $model->responseTriggerType = $map['ResponseTriggerType'];
        }

        return $model;
    }
}
