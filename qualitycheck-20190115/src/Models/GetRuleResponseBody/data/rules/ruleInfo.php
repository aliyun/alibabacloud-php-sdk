<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleResponseBody\data\rules;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleResponseBody\data\rules\ruleInfo\businessCategoryNameList;
use AlibabaCloud\Tea\Model;

class ruleInfo extends Model
{
    /**
     * @var int
     */
    public $autoReview;

    /**
     * @var businessCategoryNameList
     */
    public $businessCategoryNameList;

    /**
     * @var string
     */
    public $comments;

    /**
     * @var string
     */
    public $createEmpid;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $endTime;

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
     * @var string
     */
    public $rid;

    /**
     * @var string
     */
    public $ruleLambda;

    /**
     * @var int
     */
    public $ruleScoreType;

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
    public $scoreSubId;

    /**
     * @var string
     */
    public $scoreSubName;

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
    public $type;

    /**
     * @var string
     */
    public $weight;
    protected $_name = [
        'autoReview'               => 'AutoReview',
        'businessCategoryNameList' => 'BusinessCategoryNameList',
        'comments'                 => 'Comments',
        'createEmpid'              => 'CreateEmpid',
        'createTime'               => 'CreateTime',
        'endTime'                  => 'EndTime',
        'isDelete'                 => 'IsDelete',
        'isOnline'                 => 'IsOnline',
        'lastUpdateEmpid'          => 'LastUpdateEmpid',
        'lastUpdateTime'           => 'LastUpdateTime',
        'name'                     => 'Name',
        'rid'                      => 'Rid',
        'ruleLambda'               => 'RuleLambda',
        'ruleScoreType'            => 'RuleScoreType',
        'scoreId'                  => 'ScoreId',
        'scoreName'                => 'ScoreName',
        'scoreSubId'               => 'ScoreSubId',
        'scoreSubName'             => 'ScoreSubName',
        'startTime'                => 'StartTime',
        'status'                   => 'Status',
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
            $res['BusinessCategoryNameList'] = null !== $this->businessCategoryNameList ? $this->businessCategoryNameList->toMap() : null;
        }
        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }
        if (null !== $this->createEmpid) {
            $res['CreateEmpid'] = $this->createEmpid;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->isDelete) {
            $res['IsDelete'] = $this->isDelete;
        }
        if (null !== $this->isOnline) {
            $res['IsOnline'] = $this->isOnline;
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
        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
        }
        if (null !== $this->ruleLambda) {
            $res['RuleLambda'] = $this->ruleLambda;
        }
        if (null !== $this->ruleScoreType) {
            $res['RuleScoreType'] = $this->ruleScoreType;
        }
        if (null !== $this->scoreId) {
            $res['ScoreId'] = $this->scoreId;
        }
        if (null !== $this->scoreName) {
            $res['ScoreName'] = $this->scoreName;
        }
        if (null !== $this->scoreSubId) {
            $res['ScoreSubId'] = $this->scoreSubId;
        }
        if (null !== $this->scoreSubName) {
            $res['ScoreSubName'] = $this->scoreSubName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
     * @return ruleInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoReview'])) {
            $model->autoReview = $map['AutoReview'];
        }
        if (isset($map['BusinessCategoryNameList'])) {
            $model->businessCategoryNameList = businessCategoryNameList::fromMap($map['BusinessCategoryNameList']);
        }
        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }
        if (isset($map['CreateEmpid'])) {
            $model->createEmpid = $map['CreateEmpid'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['IsDelete'])) {
            $model->isDelete = $map['IsDelete'];
        }
        if (isset($map['IsOnline'])) {
            $model->isOnline = $map['IsOnline'];
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
        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }
        if (isset($map['RuleLambda'])) {
            $model->ruleLambda = $map['RuleLambda'];
        }
        if (isset($map['RuleScoreType'])) {
            $model->ruleScoreType = $map['RuleScoreType'];
        }
        if (isset($map['ScoreId'])) {
            $model->scoreId = $map['ScoreId'];
        }
        if (isset($map['ScoreName'])) {
            $model->scoreName = $map['ScoreName'];
        }
        if (isset($map['ScoreSubId'])) {
            $model->scoreSubId = $map['ScoreSubId'];
        }
        if (isset($map['ScoreSubName'])) {
            $model->scoreSubName = $map['ScoreSubName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
