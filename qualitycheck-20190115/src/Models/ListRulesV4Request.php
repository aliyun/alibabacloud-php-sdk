<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models;

use AlibabaCloud\Tea\Model;

class ListRulesV4Request extends Model
{
    /**
     * @description baseMeAgentId
     *
     * @var int
     */
    public $baseMeAgentId;

    /**
     * @var string
     */
    public $businessName;

    /**
     * @var int
     */
    public $businessRange;

    /**
     * @var string
     */
    public $categoryName;

    /**
     * @example false
     *
     * @var bool
     */
    public $countTotal;

    /**
     * @example 1
     *
     * @var string
     */
    public $createEmpid;

    /**
     * @example 1
     *
     * @var int
     */
    public $createUserId;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example 2021-11-29 19:11:09
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 1
     *
     * @var string
     */
    public $lastUpdateEmpid;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $requireInfos;

    /**
     * @example 895EAD5312634F5AA708E3B3FA79662E
     *
     * @var int
     */
    public $rid;

    /**
     * @example xx
     *
     * @var string
     */
    public $ruleIdOrRuleName;

    /**
     * @example 1
     *
     * @var int
     */
    public $ruleScoreSingleType;

    /**
     * @example 1
     *
     * @var int
     */
    public $ruleType;

    /**
     * @example 1000000090
     *
     * @var int
     */
    public $schemeId;

    /**
     * @example 0
     *
     * @var int
     */
    public $sourceType;

    /**
     * @example 2021-11-29 18:11:09
     *
     * @var string
     */
    public $startTime;

    /**
     * @example 2
     *
     * @var int
     */
    public $status;

    /**
     * @example 1
     *
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $typeName;

    /**
     * @example 2021-11-29 18:11:09
     *
     * @var string
     */
    public $updateEndTime;

    /**
     * @example 2021-11-29 16:11:09
     *
     * @var string
     */
    public $updateStartTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $updateUserId;
    protected $_name = [
        'baseMeAgentId'       => 'BaseMeAgentId',
        'businessName'        => 'BusinessName',
        'businessRange'       => 'BusinessRange',
        'categoryName'        => 'CategoryName',
        'countTotal'          => 'CountTotal',
        'createEmpid'         => 'CreateEmpid',
        'createUserId'        => 'CreateUserId',
        'currentPage'         => 'CurrentPage',
        'endTime'             => 'EndTime',
        'lastUpdateEmpid'     => 'LastUpdateEmpid',
        'pageNumber'          => 'PageNumber',
        'pageSize'            => 'PageSize',
        'requireInfos'        => 'RequireInfos',
        'rid'                 => 'Rid',
        'ruleIdOrRuleName'    => 'RuleIdOrRuleName',
        'ruleScoreSingleType' => 'RuleScoreSingleType',
        'ruleType'            => 'RuleType',
        'schemeId'            => 'SchemeId',
        'sourceType'          => 'SourceType',
        'startTime'           => 'StartTime',
        'status'              => 'Status',
        'type'                => 'Type',
        'typeName'            => 'TypeName',
        'updateEndTime'       => 'UpdateEndTime',
        'updateStartTime'     => 'UpdateStartTime',
        'updateUserId'        => 'UpdateUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseMeAgentId) {
            $res['BaseMeAgentId'] = $this->baseMeAgentId;
        }
        if (null !== $this->businessName) {
            $res['BusinessName'] = $this->businessName;
        }
        if (null !== $this->businessRange) {
            $res['BusinessRange'] = $this->businessRange;
        }
        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }
        if (null !== $this->countTotal) {
            $res['CountTotal'] = $this->countTotal;
        }
        if (null !== $this->createEmpid) {
            $res['CreateEmpid'] = $this->createEmpid;
        }
        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->lastUpdateEmpid) {
            $res['LastUpdateEmpid'] = $this->lastUpdateEmpid;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requireInfos) {
            $res['RequireInfos'] = $this->requireInfos;
        }
        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
        }
        if (null !== $this->ruleIdOrRuleName) {
            $res['RuleIdOrRuleName'] = $this->ruleIdOrRuleName;
        }
        if (null !== $this->ruleScoreSingleType) {
            $res['RuleScoreSingleType'] = $this->ruleScoreSingleType;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->schemeId) {
            $res['SchemeId'] = $this->schemeId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
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
        if (null !== $this->typeName) {
            $res['TypeName'] = $this->typeName;
        }
        if (null !== $this->updateEndTime) {
            $res['UpdateEndTime'] = $this->updateEndTime;
        }
        if (null !== $this->updateStartTime) {
            $res['UpdateStartTime'] = $this->updateStartTime;
        }
        if (null !== $this->updateUserId) {
            $res['UpdateUserId'] = $this->updateUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRulesV4Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseMeAgentId'])) {
            $model->baseMeAgentId = $map['BaseMeAgentId'];
        }
        if (isset($map['BusinessName'])) {
            $model->businessName = $map['BusinessName'];
        }
        if (isset($map['BusinessRange'])) {
            $model->businessRange = $map['BusinessRange'];
        }
        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }
        if (isset($map['CountTotal'])) {
            $model->countTotal = $map['CountTotal'];
        }
        if (isset($map['CreateEmpid'])) {
            $model->createEmpid = $map['CreateEmpid'];
        }
        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['LastUpdateEmpid'])) {
            $model->lastUpdateEmpid = $map['LastUpdateEmpid'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequireInfos'])) {
            if (!empty($map['RequireInfos'])) {
                $model->requireInfos = $map['RequireInfos'];
            }
        }
        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }
        if (isset($map['RuleIdOrRuleName'])) {
            $model->ruleIdOrRuleName = $map['RuleIdOrRuleName'];
        }
        if (isset($map['RuleScoreSingleType'])) {
            $model->ruleScoreSingleType = $map['RuleScoreSingleType'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['SchemeId'])) {
            $model->schemeId = $map['SchemeId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
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
        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
        }
        if (isset($map['UpdateEndTime'])) {
            $model->updateEndTime = $map['UpdateEndTime'];
        }
        if (isset($map['UpdateStartTime'])) {
            $model->updateStartTime = $map['UpdateStartTime'];
        }
        if (isset($map['UpdateUserId'])) {
            $model->updateUserId = $map['UpdateUserId'];
        }

        return $model;
    }
}
