<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponseBody\data;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponseBody\data\taskAssignRuleInfo\agents;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponseBody\data\taskAssignRuleInfo\reviewers;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponseBody\data\taskAssignRuleInfo\rules;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponseBody\data\taskAssignRuleInfo\skillGroups;
use AlibabaCloud\Tea\Model;

class taskAssignRuleInfo extends Model
{
    /**
     * @var string
     */
    public $skillGroupsStr;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var int
     */
    public $durationMax;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $agentsStr;

    /**
     * @var int
     */
    public $durationMin;

    /**
     * @var rules
     */
    public $rules;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var skillGroups
     */
    public $skillGroups;

    /**
     * @var agents
     */
    public $agents;

    /**
     * @var int
     */
    public $callType;

    /**
     * @var int
     */
    public $enabled;

    /**
     * @var reviewers
     */
    public $reviewers;
    protected $_name = [
        'skillGroupsStr' => 'SkillGroupsStr',
        'updateTime'     => 'UpdateTime',
        'durationMax'    => 'DurationMax',
        'createTime'     => 'CreateTime',
        'priority'       => 'Priority',
        'agentsStr'      => 'AgentsStr',
        'durationMin'    => 'DurationMin',
        'rules'          => 'Rules',
        'ruleId'         => 'RuleId',
        'skillGroups'    => 'SkillGroups',
        'agents'         => 'Agents',
        'callType'       => 'CallType',
        'enabled'        => 'Enabled',
        'reviewers'      => 'Reviewers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->skillGroupsStr) {
            $res['SkillGroupsStr'] = $this->skillGroupsStr;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->durationMax) {
            $res['DurationMax'] = $this->durationMax;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->agentsStr) {
            $res['AgentsStr'] = $this->agentsStr;
        }
        if (null !== $this->durationMin) {
            $res['DurationMin'] = $this->durationMin;
        }
        if (null !== $this->rules) {
            $res['Rules'] = null !== $this->rules ? $this->rules->toMap() : null;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->skillGroups) {
            $res['SkillGroups'] = null !== $this->skillGroups ? $this->skillGroups->toMap() : null;
        }
        if (null !== $this->agents) {
            $res['Agents'] = null !== $this->agents ? $this->agents->toMap() : null;
        }
        if (null !== $this->callType) {
            $res['CallType'] = $this->callType;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->reviewers) {
            $res['Reviewers'] = null !== $this->reviewers ? $this->reviewers->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskAssignRuleInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SkillGroupsStr'])) {
            $model->skillGroupsStr = $map['SkillGroupsStr'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['DurationMax'])) {
            $model->durationMax = $map['DurationMax'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['AgentsStr'])) {
            $model->agentsStr = $map['AgentsStr'];
        }
        if (isset($map['DurationMin'])) {
            $model->durationMin = $map['DurationMin'];
        }
        if (isset($map['Rules'])) {
            $model->rules = rules::fromMap($map['Rules']);
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['SkillGroups'])) {
            $model->skillGroups = skillGroups::fromMap($map['SkillGroups']);
        }
        if (isset($map['Agents'])) {
            $model->agents = agents::fromMap($map['Agents']);
        }
        if (isset($map['CallType'])) {
            $model->callType = $map['CallType'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['Reviewers'])) {
            $model->reviewers = reviewers::fromMap($map['Reviewers']);
        }

        return $model;
    }
}
