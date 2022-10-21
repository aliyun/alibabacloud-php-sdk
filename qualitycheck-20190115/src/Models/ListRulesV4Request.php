<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models;

use AlibabaCloud\Tea\Model;

class ListRulesV4Request extends Model
{
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
     * @var bool
     */
    public $countTotal;

    /**
     * @var string
     */
    public $createEmpid;

    /**
     * @var int
     */
    public $createUserId;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $lastUpdateEmpid;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $requireInfos;

    /**
     * @var int
     */
    public $rid;

    /**
     * @var string
     */
    public $ruleIdOrRuleName;

    /**
     * @var int
     */
    public $ruleScoreSingleType;

    /**
     * @var int
     */
    public $ruleType;

    /**
     * @var int
     */
    public $schemeId;

    /**
     * @var int
     */
    public $sourceType;

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
    public $typeName;

    /**
     * @var string
     */
    public $updateEndTime;

    /**
     * @var string
     */
    public $updateStartTime;

    /**
     * @var int
     */
    public $updateUserId;
    protected $_name = [
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
