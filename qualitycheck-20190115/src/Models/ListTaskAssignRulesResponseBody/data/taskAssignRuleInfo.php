<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponseBody\data\taskAssignRuleInfo\agents;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponseBody\data\taskAssignRuleInfo\reviewers;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponseBody\data\taskAssignRuleInfo\rules;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponseBody\data\taskAssignRuleInfo\samplingMode;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponseBody\data\taskAssignRuleInfo\skillGroups;

class taskAssignRuleInfo extends Model
{
    /**
     * @var agents
     */
    public $agents;

    /**
     * @var string
     */
    public $agentsStr;

    /**
     * @var int
     */
    public $assignmentType;

    /**
     * @var int
     */
    public $callTimeEnd;

    /**
     * @var int
     */
    public $callTimeStart;

    /**
     * @var int
     */
    public $callType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $durationMax;

    /**
     * @var int
     */
    public $durationMin;

    /**
     * @var int
     */
    public $enabled;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var reviewers
     */
    public $reviewers;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var rules
     */
    public $rules;

    /**
     * @var samplingMode
     */
    public $samplingMode;

    /**
     * @var skillGroups
     */
    public $skillGroups;

    /**
     * @var string
     */
    public $skillGroupsStr;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'agents' => 'Agents',
        'agentsStr' => 'AgentsStr',
        'assignmentType' => 'AssignmentType',
        'callTimeEnd' => 'CallTimeEnd',
        'callTimeStart' => 'CallTimeStart',
        'callType' => 'CallType',
        'createTime' => 'CreateTime',
        'durationMax' => 'DurationMax',
        'durationMin' => 'DurationMin',
        'enabled' => 'Enabled',
        'priority' => 'Priority',
        'reviewers' => 'Reviewers',
        'ruleId' => 'RuleId',
        'ruleName' => 'RuleName',
        'rules' => 'Rules',
        'samplingMode' => 'SamplingMode',
        'skillGroups' => 'SkillGroups',
        'skillGroupsStr' => 'SkillGroupsStr',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (null !== $this->agents) {
            $this->agents->validate();
        }
        if (null !== $this->reviewers) {
            $this->reviewers->validate();
        }
        if (null !== $this->rules) {
            $this->rules->validate();
        }
        if (null !== $this->samplingMode) {
            $this->samplingMode->validate();
        }
        if (null !== $this->skillGroups) {
            $this->skillGroups->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agents) {
            $res['Agents'] = null !== $this->agents ? $this->agents->toArray($noStream) : $this->agents;
        }

        if (null !== $this->agentsStr) {
            $res['AgentsStr'] = $this->agentsStr;
        }

        if (null !== $this->assignmentType) {
            $res['AssignmentType'] = $this->assignmentType;
        }

        if (null !== $this->callTimeEnd) {
            $res['CallTimeEnd'] = $this->callTimeEnd;
        }

        if (null !== $this->callTimeStart) {
            $res['CallTimeStart'] = $this->callTimeStart;
        }

        if (null !== $this->callType) {
            $res['CallType'] = $this->callType;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->durationMax) {
            $res['DurationMax'] = $this->durationMax;
        }

        if (null !== $this->durationMin) {
            $res['DurationMin'] = $this->durationMin;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->reviewers) {
            $res['Reviewers'] = null !== $this->reviewers ? $this->reviewers->toArray($noStream) : $this->reviewers;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->rules) {
            $res['Rules'] = null !== $this->rules ? $this->rules->toArray($noStream) : $this->rules;
        }

        if (null !== $this->samplingMode) {
            $res['SamplingMode'] = null !== $this->samplingMode ? $this->samplingMode->toArray($noStream) : $this->samplingMode;
        }

        if (null !== $this->skillGroups) {
            $res['SkillGroups'] = null !== $this->skillGroups ? $this->skillGroups->toArray($noStream) : $this->skillGroups;
        }

        if (null !== $this->skillGroupsStr) {
            $res['SkillGroupsStr'] = $this->skillGroupsStr;
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
        if (isset($map['Agents'])) {
            $model->agents = agents::fromMap($map['Agents']);
        }

        if (isset($map['AgentsStr'])) {
            $model->agentsStr = $map['AgentsStr'];
        }

        if (isset($map['AssignmentType'])) {
            $model->assignmentType = $map['AssignmentType'];
        }

        if (isset($map['CallTimeEnd'])) {
            $model->callTimeEnd = $map['CallTimeEnd'];
        }

        if (isset($map['CallTimeStart'])) {
            $model->callTimeStart = $map['CallTimeStart'];
        }

        if (isset($map['CallType'])) {
            $model->callType = $map['CallType'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DurationMax'])) {
            $model->durationMax = $map['DurationMax'];
        }

        if (isset($map['DurationMin'])) {
            $model->durationMin = $map['DurationMin'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['Reviewers'])) {
            $model->reviewers = reviewers::fromMap($map['Reviewers']);
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['Rules'])) {
            $model->rules = rules::fromMap($map['Rules']);
        }

        if (isset($map['SamplingMode'])) {
            $model->samplingMode = samplingMode::fromMap($map['SamplingMode']);
        }

        if (isset($map['SkillGroups'])) {
            $model->skillGroups = skillGroups::fromMap($map['SkillGroups']);
        }

        if (isset($map['SkillGroupsStr'])) {
            $model->skillGroupsStr = $map['SkillGroupsStr'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
