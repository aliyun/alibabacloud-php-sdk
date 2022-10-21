<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models;

use AlibabaCloud\Tea\Model;

class RuleInfo extends Model
{
    /**
     * @var int
     */
    public $autoReview;

    /**
     * @var string[]
     */
    public $businessCategoryNameList;

    /**
     * @var int
     */
    public $checkType;

    /**
     * @var string
     */
    public $comments;

    /**
     * @var int
     */
    public $configType;

    /**
     * @var string
     */
    public $createEmpName;

    /**
     * @var string
     */
    public $createEmpid;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $deny;

    /**
     * @var RuleTestDialogue[]
     */
    public $dialogues;

    /**
     * @var int
     */
    public $effective;

    /**
     * @var string
     */
    public $effectiveEndTime;

    /**
     * @var string
     */
    public $effectiveStartTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $externalProperty;

    /**
     * @var int
     */
    public $fullCycle;

    /**
     * @var mixed
     */
    public $graphFlow;

    /**
     * @var int
     */
    public $isDelete;

    /**
     * @var int
     */
    public $isOnline;

    /**
     * @var string
     */
    public $lambda;

    /**
     * @var string
     */
    public $lastUpdateEmpName;

    /**
     * @var string
     */
    public $lastUpdateEmpid;

    /**
     * @var string
     */
    public $lastUpdateTime;

    /**
     * @var int
     */
    public $level;

    /**
     * @var int
     */
    public $meet;

    /**
     * @var int
     */
    public $modifyType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $operationMode;

    /**
     * @var int
     */
    public $qualityCheckType;

    /**
     * @var string
     */
    public $rid;

    /**
     * @var string
     */
    public $ruleCategoryName;

    /**
     * @var int
     */
    public $ruleScoreType;

    /**
     * @var int
     */
    public $ruleType;

    /**
     * @var SchemeCheckType
     */
    public $schemeCheckType;

    /**
     * @var int
     */
    public $schemeId;

    /**
     * @var string
     */
    public $schemeName;

    /**
     * @var int
     */
    public $schemeRuleMappingId;

    /**
     * @var bool
     */
    public $scoreDeleted;

    /**
     * @var int
     */
    public $scoreId;

    /**
     * @var string
     */
    public $scoreName;

    /**
     * @var int
     */
    public $scoreNum;

    /**
     * @var int
     */
    public $scoreNumType;

    /**
     * @var int
     */
    public $scoreRuleHitType;

    /**
     * @var int
     */
    public $scoreSubId;

    /**
     * @var string
     */
    public $scoreSubName;

    /**
     * @var int
     */
    public $scoreType;

    /**
     * @var int
     */
    public $sortIndex;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $targetType;

    /**
     * @var int
     */
    public $taskFlowId;

    /**
     * @var int
     */
    public $taskFlowType;

    /**
     * @var string[]
     */
    public $triggers;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $weight;
    protected $_name = [
        'autoReview'               => 'AutoReview',
        'businessCategoryNameList' => 'BusinessCategoryNameList',
        'checkType'                => 'CheckType',
        'comments'                 => 'Comments',
        'configType'               => 'ConfigType',
        'createEmpName'            => 'CreateEmpName',
        'createEmpid'              => 'CreateEmpid',
        'createTime'               => 'CreateTime',
        'deny'                     => 'Deny',
        'dialogues'                => 'Dialogues',
        'effective'                => 'Effective',
        'effectiveEndTime'         => 'EffectiveEndTime',
        'effectiveStartTime'       => 'EffectiveStartTime',
        'endTime'                  => 'EndTime',
        'externalProperty'         => 'ExternalProperty',
        'fullCycle'                => 'FullCycle',
        'graphFlow'                => 'GraphFlow',
        'isDelete'                 => 'IsDelete',
        'isOnline'                 => 'IsOnline',
        'lambda'                   => 'Lambda',
        'lastUpdateEmpName'        => 'LastUpdateEmpName',
        'lastUpdateEmpid'          => 'LastUpdateEmpid',
        'lastUpdateTime'           => 'LastUpdateTime',
        'level'                    => 'Level',
        'meet'                     => 'Meet',
        'modifyType'               => 'ModifyType',
        'name'                     => 'Name',
        'operationMode'            => 'OperationMode',
        'qualityCheckType'         => 'QualityCheckType',
        'rid'                      => 'Rid',
        'ruleCategoryName'         => 'RuleCategoryName',
        'ruleScoreType'            => 'RuleScoreType',
        'ruleType'                 => 'RuleType',
        'schemeCheckType'          => 'SchemeCheckType',
        'schemeId'                 => 'SchemeId',
        'schemeName'               => 'SchemeName',
        'schemeRuleMappingId'      => 'SchemeRuleMappingId',
        'scoreDeleted'             => 'ScoreDeleted',
        'scoreId'                  => 'ScoreId',
        'scoreName'                => 'ScoreName',
        'scoreNum'                 => 'ScoreNum',
        'scoreNumType'             => 'ScoreNumType',
        'scoreRuleHitType'         => 'ScoreRuleHitType',
        'scoreSubId'               => 'ScoreSubId',
        'scoreSubName'             => 'ScoreSubName',
        'scoreType'                => 'ScoreType',
        'sortIndex'                => 'SortIndex',
        'startTime'                => 'StartTime',
        'status'                   => 'Status',
        'targetType'               => 'TargetType',
        'taskFlowId'               => 'TaskFlowId',
        'taskFlowType'             => 'TaskFlowType',
        'triggers'                 => 'Triggers',
        'type'                     => 'Type',
        'weight'                   => 'Weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoReview) {
            $res['AutoReview'] = $this->autoReview;
        }
        if (null !== $this->businessCategoryNameList) {
            $res['BusinessCategoryNameList'] = $this->businessCategoryNameList;
        }
        if (null !== $this->checkType) {
            $res['CheckType'] = $this->checkType;
        }
        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }
        if (null !== $this->configType) {
            $res['ConfigType'] = $this->configType;
        }
        if (null !== $this->createEmpName) {
            $res['CreateEmpName'] = $this->createEmpName;
        }
        if (null !== $this->createEmpid) {
            $res['CreateEmpid'] = $this->createEmpid;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->deny) {
            $res['Deny'] = $this->deny;
        }
        if (null !== $this->dialogues) {
            $res['Dialogues'] = [];
            if (null !== $this->dialogues && \is_array($this->dialogues)) {
                $n = 0;
                foreach ($this->dialogues as $item) {
                    $res['Dialogues'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->effective) {
            $res['Effective'] = $this->effective;
        }
        if (null !== $this->effectiveEndTime) {
            $res['EffectiveEndTime'] = $this->effectiveEndTime;
        }
        if (null !== $this->effectiveStartTime) {
            $res['EffectiveStartTime'] = $this->effectiveStartTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->externalProperty) {
            $res['ExternalProperty'] = $this->externalProperty;
        }
        if (null !== $this->fullCycle) {
            $res['FullCycle'] = $this->fullCycle;
        }
        if (null !== $this->graphFlow) {
            $res['GraphFlow'] = $this->graphFlow;
        }
        if (null !== $this->isDelete) {
            $res['IsDelete'] = $this->isDelete;
        }
        if (null !== $this->isOnline) {
            $res['IsOnline'] = $this->isOnline;
        }
        if (null !== $this->lambda) {
            $res['Lambda'] = $this->lambda;
        }
        if (null !== $this->lastUpdateEmpName) {
            $res['LastUpdateEmpName'] = $this->lastUpdateEmpName;
        }
        if (null !== $this->lastUpdateEmpid) {
            $res['LastUpdateEmpid'] = $this->lastUpdateEmpid;
        }
        if (null !== $this->lastUpdateTime) {
            $res['LastUpdateTime'] = $this->lastUpdateTime;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->meet) {
            $res['Meet'] = $this->meet;
        }
        if (null !== $this->modifyType) {
            $res['ModifyType'] = $this->modifyType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->operationMode) {
            $res['OperationMode'] = $this->operationMode;
        }
        if (null !== $this->qualityCheckType) {
            $res['QualityCheckType'] = $this->qualityCheckType;
        }
        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
        }
        if (null !== $this->ruleCategoryName) {
            $res['RuleCategoryName'] = $this->ruleCategoryName;
        }
        if (null !== $this->ruleScoreType) {
            $res['RuleScoreType'] = $this->ruleScoreType;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->schemeCheckType) {
            $res['SchemeCheckType'] = null !== $this->schemeCheckType ? $this->schemeCheckType->toMap() : null;
        }
        if (null !== $this->schemeId) {
            $res['SchemeId'] = $this->schemeId;
        }
        if (null !== $this->schemeName) {
            $res['SchemeName'] = $this->schemeName;
        }
        if (null !== $this->schemeRuleMappingId) {
            $res['SchemeRuleMappingId'] = $this->schemeRuleMappingId;
        }
        if (null !== $this->scoreDeleted) {
            $res['ScoreDeleted'] = $this->scoreDeleted;
        }
        if (null !== $this->scoreId) {
            $res['ScoreId'] = $this->scoreId;
        }
        if (null !== $this->scoreName) {
            $res['ScoreName'] = $this->scoreName;
        }
        if (null !== $this->scoreNum) {
            $res['ScoreNum'] = $this->scoreNum;
        }
        if (null !== $this->scoreNumType) {
            $res['ScoreNumType'] = $this->scoreNumType;
        }
        if (null !== $this->scoreRuleHitType) {
            $res['ScoreRuleHitType'] = $this->scoreRuleHitType;
        }
        if (null !== $this->scoreSubId) {
            $res['ScoreSubId'] = $this->scoreSubId;
        }
        if (null !== $this->scoreSubName) {
            $res['ScoreSubName'] = $this->scoreSubName;
        }
        if (null !== $this->scoreType) {
            $res['ScoreType'] = $this->scoreType;
        }
        if (null !== $this->sortIndex) {
            $res['SortIndex'] = $this->sortIndex;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->taskFlowId) {
            $res['TaskFlowId'] = $this->taskFlowId;
        }
        if (null !== $this->taskFlowType) {
            $res['TaskFlowType'] = $this->taskFlowType;
        }
        if (null !== $this->triggers) {
            $res['Triggers'] = $this->triggers;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RuleInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoReview'])) {
            $model->autoReview = $map['AutoReview'];
        }
        if (isset($map['BusinessCategoryNameList'])) {
            if (!empty($map['BusinessCategoryNameList'])) {
                $model->businessCategoryNameList = $map['BusinessCategoryNameList'];
            }
        }
        if (isset($map['CheckType'])) {
            $model->checkType = $map['CheckType'];
        }
        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }
        if (isset($map['ConfigType'])) {
            $model->configType = $map['ConfigType'];
        }
        if (isset($map['CreateEmpName'])) {
            $model->createEmpName = $map['CreateEmpName'];
        }
        if (isset($map['CreateEmpid'])) {
            $model->createEmpid = $map['CreateEmpid'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Deny'])) {
            $model->deny = $map['Deny'];
        }
        if (isset($map['Dialogues'])) {
            if (!empty($map['Dialogues'])) {
                $model->dialogues = [];
                $n                = 0;
                foreach ($map['Dialogues'] as $item) {
                    $model->dialogues[$n++] = null !== $item ? RuleTestDialogue::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Effective'])) {
            $model->effective = $map['Effective'];
        }
        if (isset($map['EffectiveEndTime'])) {
            $model->effectiveEndTime = $map['EffectiveEndTime'];
        }
        if (isset($map['EffectiveStartTime'])) {
            $model->effectiveStartTime = $map['EffectiveStartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExternalProperty'])) {
            $model->externalProperty = $map['ExternalProperty'];
        }
        if (isset($map['FullCycle'])) {
            $model->fullCycle = $map['FullCycle'];
        }
        if (isset($map['GraphFlow'])) {
            $model->graphFlow = $map['GraphFlow'];
        }
        if (isset($map['IsDelete'])) {
            $model->isDelete = $map['IsDelete'];
        }
        if (isset($map['IsOnline'])) {
            $model->isOnline = $map['IsOnline'];
        }
        if (isset($map['Lambda'])) {
            $model->lambda = $map['Lambda'];
        }
        if (isset($map['LastUpdateEmpName'])) {
            $model->lastUpdateEmpName = $map['LastUpdateEmpName'];
        }
        if (isset($map['LastUpdateEmpid'])) {
            $model->lastUpdateEmpid = $map['LastUpdateEmpid'];
        }
        if (isset($map['LastUpdateTime'])) {
            $model->lastUpdateTime = $map['LastUpdateTime'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Meet'])) {
            $model->meet = $map['Meet'];
        }
        if (isset($map['ModifyType'])) {
            $model->modifyType = $map['ModifyType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OperationMode'])) {
            $model->operationMode = $map['OperationMode'];
        }
        if (isset($map['QualityCheckType'])) {
            $model->qualityCheckType = $map['QualityCheckType'];
        }
        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }
        if (isset($map['RuleCategoryName'])) {
            $model->ruleCategoryName = $map['RuleCategoryName'];
        }
        if (isset($map['RuleScoreType'])) {
            $model->ruleScoreType = $map['RuleScoreType'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['SchemeCheckType'])) {
            $model->schemeCheckType = SchemeCheckType::fromMap($map['SchemeCheckType']);
        }
        if (isset($map['SchemeId'])) {
            $model->schemeId = $map['SchemeId'];
        }
        if (isset($map['SchemeName'])) {
            $model->schemeName = $map['SchemeName'];
        }
        if (isset($map['SchemeRuleMappingId'])) {
            $model->schemeRuleMappingId = $map['SchemeRuleMappingId'];
        }
        if (isset($map['ScoreDeleted'])) {
            $model->scoreDeleted = $map['ScoreDeleted'];
        }
        if (isset($map['ScoreId'])) {
            $model->scoreId = $map['ScoreId'];
        }
        if (isset($map['ScoreName'])) {
            $model->scoreName = $map['ScoreName'];
        }
        if (isset($map['ScoreNum'])) {
            $model->scoreNum = $map['ScoreNum'];
        }
        if (isset($map['ScoreNumType'])) {
            $model->scoreNumType = $map['ScoreNumType'];
        }
        if (isset($map['ScoreRuleHitType'])) {
            $model->scoreRuleHitType = $map['ScoreRuleHitType'];
        }
        if (isset($map['ScoreSubId'])) {
            $model->scoreSubId = $map['ScoreSubId'];
        }
        if (isset($map['ScoreSubName'])) {
            $model->scoreSubName = $map['ScoreSubName'];
        }
        if (isset($map['ScoreType'])) {
            $model->scoreType = $map['ScoreType'];
        }
        if (isset($map['SortIndex'])) {
            $model->sortIndex = $map['SortIndex'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['TaskFlowId'])) {
            $model->taskFlowId = $map['TaskFlowId'];
        }
        if (isset($map['TaskFlowType'])) {
            $model->taskFlowType = $map['TaskFlowType'];
        }
        if (isset($map['Triggers'])) {
            if (!empty($map['Triggers'])) {
                $model->triggers = $map['Triggers'];
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
