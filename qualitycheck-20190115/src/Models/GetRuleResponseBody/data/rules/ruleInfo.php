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
    public $type;

    /**
     * @var int
     */
    public $status;

    /**
     * @var businessCategoryNameList
     */
    public $businessCategoryNameList;

    /**
     * @var int
     */
    public $isOnline;

    /**
     * @var int
     */
    public $scoreSubId;

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
    public $lastUpdateEmpid;

    /**
     * @var int
     */
    public $isDelete;

    /**
     * @var string
     */
    public $rid;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $ruleScoreType;

    /**
     * @var string
     */
    public $weight;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $ruleLambda;

    /**
     * @var string
     */
    public $scoreSubName;

    /**
     * @var int
     */
    public $autoReview;

    /**
     * @var string
     */
    public $comments;

    /**
     * @var string
     */
    public $lastUpdateTime;

    /**
     * @var string
     */
    public $scoreName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $scoreId;
    protected $_name = [
        'type'                     => 'Type',
        'status'                   => 'Status',
        'businessCategoryNameList' => 'BusinessCategoryNameList',
        'isOnline'                 => 'IsOnline',
        'scoreSubId'               => 'ScoreSubId',
        'createEmpid'              => 'CreateEmpid',
        'createTime'               => 'CreateTime',
        'lastUpdateEmpid'          => 'LastUpdateEmpid',
        'isDelete'                 => 'IsDelete',
        'rid'                      => 'Rid',
        'endTime'                  => 'EndTime',
        'ruleScoreType'            => 'RuleScoreType',
        'weight'                   => 'Weight',
        'startTime'                => 'StartTime',
        'ruleLambda'               => 'RuleLambda',
        'scoreSubName'             => 'ScoreSubName',
        'autoReview'               => 'AutoReview',
        'comments'                 => 'Comments',
        'lastUpdateTime'           => 'LastUpdateTime',
        'scoreName'                => 'ScoreName',
        'name'                     => 'Name',
        'scoreId'                  => 'ScoreId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->businessCategoryNameList) {
            $res['BusinessCategoryNameList'] = null !== $this->businessCategoryNameList ? $this->businessCategoryNameList->toMap() : null;
        }
        if (null !== $this->isOnline) {
            $res['IsOnline'] = $this->isOnline;
        }
        if (null !== $this->scoreSubId) {
            $res['ScoreSubId'] = $this->scoreSubId;
        }
        if (null !== $this->createEmpid) {
            $res['CreateEmpid'] = $this->createEmpid;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->lastUpdateEmpid) {
            $res['LastUpdateEmpid'] = $this->lastUpdateEmpid;
        }
        if (null !== $this->isDelete) {
            $res['IsDelete'] = $this->isDelete;
        }
        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->ruleScoreType) {
            $res['RuleScoreType'] = $this->ruleScoreType;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->ruleLambda) {
            $res['RuleLambda'] = $this->ruleLambda;
        }
        if (null !== $this->scoreSubName) {
            $res['ScoreSubName'] = $this->scoreSubName;
        }
        if (null !== $this->autoReview) {
            $res['AutoReview'] = $this->autoReview;
        }
        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }
        if (null !== $this->lastUpdateTime) {
            $res['LastUpdateTime'] = $this->lastUpdateTime;
        }
        if (null !== $this->scoreName) {
            $res['ScoreName'] = $this->scoreName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->scoreId) {
            $res['ScoreId'] = $this->scoreId;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['BusinessCategoryNameList'])) {
            $model->businessCategoryNameList = businessCategoryNameList::fromMap($map['BusinessCategoryNameList']);
        }
        if (isset($map['IsOnline'])) {
            $model->isOnline = $map['IsOnline'];
        }
        if (isset($map['ScoreSubId'])) {
            $model->scoreSubId = $map['ScoreSubId'];
        }
        if (isset($map['CreateEmpid'])) {
            $model->createEmpid = $map['CreateEmpid'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['LastUpdateEmpid'])) {
            $model->lastUpdateEmpid = $map['LastUpdateEmpid'];
        }
        if (isset($map['IsDelete'])) {
            $model->isDelete = $map['IsDelete'];
        }
        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RuleScoreType'])) {
            $model->ruleScoreType = $map['RuleScoreType'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['RuleLambda'])) {
            $model->ruleLambda = $map['RuleLambda'];
        }
        if (isset($map['ScoreSubName'])) {
            $model->scoreSubName = $map['ScoreSubName'];
        }
        if (isset($map['AutoReview'])) {
            $model->autoReview = $map['AutoReview'];
        }
        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }
        if (isset($map['LastUpdateTime'])) {
            $model->lastUpdateTime = $map['LastUpdateTime'];
        }
        if (isset($map['ScoreName'])) {
            $model->scoreName = $map['ScoreName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ScoreId'])) {
            $model->scoreId = $map['ScoreId'];
        }

        return $model;
    }
}
