<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models;

use AlibabaCloud\Tea\Model;

class RuleCountInfo extends Model
{
    /**
     * @var int
     */
    public $autoReview;

    /**
     * @var BusinessCategoryBasicInfo[]
     */
    public $businessCategoryBasicInfoList;

    /**
     * @var string[]
     */
    public $businessCategoryNameList;

    /**
     * @var int[]
     */
    public $businessRange;

    /**
     * @var int
     */
    public $checkNumber;

    /**
     * @var string
     */
    public $comments;

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
    public $fullCycle;

    /**
     * @var mixed
     */
    public $graphFlow;

    /**
     * @var int
     */
    public $hitNumber;

    /**
     * @var float
     */
    public $hitRate;

    /**
     * @var float
     */
    public $hitRealViolationRate;

    /**
     * @var int
     */
    public $isDelete;

    /**
     * @var bool
     */
    public $isSelect;

    /**
     * @var string
     */
    public $jobName;

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
    public $preReviewNumber;

    /**
     * @var int
     */
    public $problemNumber;

    /**
     * @var int
     */
    public $qualityCheckType;

    /**
     * @var int
     */
    public $realViolationNumber;

    /**
     * @var float
     */
    public $reviewAccuracyRate;

    /**
     * @var int
     */
    public $reviewNumber;

    /**
     * @var float
     */
    public $reviewRate;

    /**
     * @var string
     */
    public $reviewStatusName;

    /**
     * @var int
     */
    public $rid;

    /**
     * @var int
     */
    public $ruleScoreSingleType;

    /**
     * @var int
     */
    public $ruleScoreType;

    /**
     * @var int
     */
    public $ruleType;

    /**
     * @var int
     */
    public $scoreSubId;

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
    public $type;

    /**
     * @var string
     */
    public $typeName;

    /**
     * @var int
     */
    public $unReviewNumber;

    /**
     * @var string
     */
    public $userGroup;
    protected $_name = [
        'autoReview'                    => 'AutoReview',
        'businessCategoryBasicInfoList' => 'BusinessCategoryBasicInfoList',
        'businessCategoryNameList'      => 'BusinessCategoryNameList',
        'businessRange'                 => 'BusinessRange',
        'checkNumber'                   => 'CheckNumber',
        'comments'                      => 'Comments',
        'createEmpName'                 => 'CreateEmpName',
        'createEmpid'                   => 'CreateEmpid',
        'createTime'                    => 'CreateTime',
        'deny'                          => 'Deny',
        'effective'                     => 'Effective',
        'effectiveEndTime'              => 'EffectiveEndTime',
        'effectiveStartTime'            => 'EffectiveStartTime',
        'endTime'                       => 'EndTime',
        'fullCycle'                     => 'FullCycle',
        'graphFlow'                     => 'GraphFlow',
        'hitNumber'                     => 'HitNumber',
        'hitRate'                       => 'HitRate',
        'hitRealViolationRate'          => 'HitRealViolationRate',
        'isDelete'                      => 'IsDelete',
        'isSelect'                      => 'IsSelect',
        'jobName'                       => 'JobName',
        'lastUpdateEmpName'             => 'LastUpdateEmpName',
        'lastUpdateEmpid'               => 'LastUpdateEmpid',
        'lastUpdateTime'                => 'LastUpdateTime',
        'name'                          => 'Name',
        'operationMode'                 => 'OperationMode',
        'preReviewNumber'               => 'PreReviewNumber',
        'problemNumber'                 => 'ProblemNumber',
        'qualityCheckType'              => 'QualityCheckType',
        'realViolationNumber'           => 'RealViolationNumber',
        'reviewAccuracyRate'            => 'ReviewAccuracyRate',
        'reviewNumber'                  => 'ReviewNumber',
        'reviewRate'                    => 'ReviewRate',
        'reviewStatusName'              => 'ReviewStatusName',
        'rid'                           => 'Rid',
        'ruleScoreSingleType'           => 'RuleScoreSingleType',
        'ruleScoreType'                 => 'RuleScoreType',
        'ruleType'                      => 'RuleType',
        'scoreSubId'                    => 'ScoreSubId',
        'startTime'                     => 'StartTime',
        'status'                        => 'Status',
        'targetType'                    => 'TargetType',
        'type'                          => 'Type',
        'typeName'                      => 'TypeName',
        'unReviewNumber'                => 'UnReviewNumber',
        'userGroup'                     => 'UserGroup',
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
        if (null !== $this->businessCategoryBasicInfoList) {
            $res['BusinessCategoryBasicInfoList'] = [];
            if (null !== $this->businessCategoryBasicInfoList && \is_array($this->businessCategoryBasicInfoList)) {
                $n = 0;
                foreach ($this->businessCategoryBasicInfoList as $item) {
                    $res['BusinessCategoryBasicInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->businessCategoryNameList) {
            $res['BusinessCategoryNameList'] = $this->businessCategoryNameList;
        }
        if (null !== $this->businessRange) {
            $res['BusinessRange'] = $this->businessRange;
        }
        if (null !== $this->checkNumber) {
            $res['CheckNumber'] = $this->checkNumber;
        }
        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
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
        if (null !== $this->fullCycle) {
            $res['FullCycle'] = $this->fullCycle;
        }
        if (null !== $this->graphFlow) {
            $res['GraphFlow'] = $this->graphFlow;
        }
        if (null !== $this->hitNumber) {
            $res['HitNumber'] = $this->hitNumber;
        }
        if (null !== $this->hitRate) {
            $res['HitRate'] = $this->hitRate;
        }
        if (null !== $this->hitRealViolationRate) {
            $res['HitRealViolationRate'] = $this->hitRealViolationRate;
        }
        if (null !== $this->isDelete) {
            $res['IsDelete'] = $this->isDelete;
        }
        if (null !== $this->isSelect) {
            $res['IsSelect'] = $this->isSelect;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->operationMode) {
            $res['OperationMode'] = $this->operationMode;
        }
        if (null !== $this->preReviewNumber) {
            $res['PreReviewNumber'] = $this->preReviewNumber;
        }
        if (null !== $this->problemNumber) {
            $res['ProblemNumber'] = $this->problemNumber;
        }
        if (null !== $this->qualityCheckType) {
            $res['QualityCheckType'] = $this->qualityCheckType;
        }
        if (null !== $this->realViolationNumber) {
            $res['RealViolationNumber'] = $this->realViolationNumber;
        }
        if (null !== $this->reviewAccuracyRate) {
            $res['ReviewAccuracyRate'] = $this->reviewAccuracyRate;
        }
        if (null !== $this->reviewNumber) {
            $res['ReviewNumber'] = $this->reviewNumber;
        }
        if (null !== $this->reviewRate) {
            $res['ReviewRate'] = $this->reviewRate;
        }
        if (null !== $this->reviewStatusName) {
            $res['ReviewStatusName'] = $this->reviewStatusName;
        }
        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
        }
        if (null !== $this->ruleScoreSingleType) {
            $res['RuleScoreSingleType'] = $this->ruleScoreSingleType;
        }
        if (null !== $this->ruleScoreType) {
            $res['RuleScoreType'] = $this->ruleScoreType;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->scoreSubId) {
            $res['ScoreSubId'] = $this->scoreSubId;
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->typeName) {
            $res['TypeName'] = $this->typeName;
        }
        if (null !== $this->unReviewNumber) {
            $res['UnReviewNumber'] = $this->unReviewNumber;
        }
        if (null !== $this->userGroup) {
            $res['UserGroup'] = $this->userGroup;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RuleCountInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoReview'])) {
            $model->autoReview = $map['AutoReview'];
        }
        if (isset($map['BusinessCategoryBasicInfoList'])) {
            if (!empty($map['BusinessCategoryBasicInfoList'])) {
                $model->businessCategoryBasicInfoList = [];
                $n                                    = 0;
                foreach ($map['BusinessCategoryBasicInfoList'] as $item) {
                    $model->businessCategoryBasicInfoList[$n++] = null !== $item ? BusinessCategoryBasicInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['BusinessCategoryNameList'])) {
            if (!empty($map['BusinessCategoryNameList'])) {
                $model->businessCategoryNameList = $map['BusinessCategoryNameList'];
            }
        }
        if (isset($map['BusinessRange'])) {
            if (!empty($map['BusinessRange'])) {
                $model->businessRange = $map['BusinessRange'];
            }
        }
        if (isset($map['CheckNumber'])) {
            $model->checkNumber = $map['CheckNumber'];
        }
        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
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
        if (isset($map['FullCycle'])) {
            $model->fullCycle = $map['FullCycle'];
        }
        if (isset($map['GraphFlow'])) {
            $model->graphFlow = $map['GraphFlow'];
        }
        if (isset($map['HitNumber'])) {
            $model->hitNumber = $map['HitNumber'];
        }
        if (isset($map['HitRate'])) {
            $model->hitRate = $map['HitRate'];
        }
        if (isset($map['HitRealViolationRate'])) {
            $model->hitRealViolationRate = $map['HitRealViolationRate'];
        }
        if (isset($map['IsDelete'])) {
            $model->isDelete = $map['IsDelete'];
        }
        if (isset($map['IsSelect'])) {
            $model->isSelect = $map['IsSelect'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OperationMode'])) {
            $model->operationMode = $map['OperationMode'];
        }
        if (isset($map['PreReviewNumber'])) {
            $model->preReviewNumber = $map['PreReviewNumber'];
        }
        if (isset($map['ProblemNumber'])) {
            $model->problemNumber = $map['ProblemNumber'];
        }
        if (isset($map['QualityCheckType'])) {
            $model->qualityCheckType = $map['QualityCheckType'];
        }
        if (isset($map['RealViolationNumber'])) {
            $model->realViolationNumber = $map['RealViolationNumber'];
        }
        if (isset($map['ReviewAccuracyRate'])) {
            $model->reviewAccuracyRate = $map['ReviewAccuracyRate'];
        }
        if (isset($map['ReviewNumber'])) {
            $model->reviewNumber = $map['ReviewNumber'];
        }
        if (isset($map['ReviewRate'])) {
            $model->reviewRate = $map['ReviewRate'];
        }
        if (isset($map['ReviewStatusName'])) {
            $model->reviewStatusName = $map['ReviewStatusName'];
        }
        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }
        if (isset($map['RuleScoreSingleType'])) {
            $model->ruleScoreSingleType = $map['RuleScoreSingleType'];
        }
        if (isset($map['RuleScoreType'])) {
            $model->ruleScoreType = $map['RuleScoreType'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['ScoreSubId'])) {
            $model->scoreSubId = $map['ScoreSubId'];
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
        }
        if (isset($map['UnReviewNumber'])) {
            $model->unReviewNumber = $map['UnReviewNumber'];
        }
        if (isset($map['UserGroup'])) {
            $model->userGroup = $map['UserGroup'];
        }

        return $model;
    }
}
