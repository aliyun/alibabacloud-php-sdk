<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeRulesResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $auditMode;

    /**
     * @var int
     */
    public $category;

    /**
     * @var string
     */
    public $categoryName;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $contentCategory;

    /**
     * @var int
     */
    public $customType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $hitTotalCount;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $loginName;

    /**
     * @var string
     */
    public $majorKey;

    /**
     * @var int
     */
    public $matchType;

    /**
     * @var string
     */
    public $modelRuleIds;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var int
     */
    public $productId;

    /**
     * @var int
     */
    public $riskLevelId;

    /**
     * @var string
     */
    public $riskLevelName;

    /**
     * @var string
     */
    public $statExpress;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $supportForm;

    /**
     * @var string
     */
    public $target;

    /**
     * @var string
     */
    public $templateRuleIds;

    /**
     * @var int
     */
    public $threatAnalysisStatus;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var int
     */
    public $warnLevel;
    protected $_name = [
        'auditMode' => 'AuditMode',
        'category' => 'Category',
        'categoryName' => 'CategoryName',
        'content' => 'Content',
        'contentCategory' => 'ContentCategory',
        'customType' => 'CustomType',
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'groupId' => 'GroupId',
        'hitTotalCount' => 'HitTotalCount',
        'id' => 'Id',
        'loginName' => 'LoginName',
        'majorKey' => 'MajorKey',
        'matchType' => 'MatchType',
        'modelRuleIds' => 'ModelRuleIds',
        'name' => 'Name',
        'productCode' => 'ProductCode',
        'productId' => 'ProductId',
        'riskLevelId' => 'RiskLevelId',
        'riskLevelName' => 'RiskLevelName',
        'statExpress' => 'StatExpress',
        'status' => 'Status',
        'supportForm' => 'SupportForm',
        'target' => 'Target',
        'templateRuleIds' => 'TemplateRuleIds',
        'threatAnalysisStatus' => 'ThreatAnalysisStatus',
        'userId' => 'UserId',
        'warnLevel' => 'WarnLevel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auditMode) {
            $res['AuditMode'] = $this->auditMode;
        }

        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->contentCategory) {
            $res['ContentCategory'] = $this->contentCategory;
        }

        if (null !== $this->customType) {
            $res['CustomType'] = $this->customType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->hitTotalCount) {
            $res['HitTotalCount'] = $this->hitTotalCount;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->loginName) {
            $res['LoginName'] = $this->loginName;
        }

        if (null !== $this->majorKey) {
            $res['MajorKey'] = $this->majorKey;
        }

        if (null !== $this->matchType) {
            $res['MatchType'] = $this->matchType;
        }

        if (null !== $this->modelRuleIds) {
            $res['ModelRuleIds'] = $this->modelRuleIds;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        if (null !== $this->riskLevelId) {
            $res['RiskLevelId'] = $this->riskLevelId;
        }

        if (null !== $this->riskLevelName) {
            $res['RiskLevelName'] = $this->riskLevelName;
        }

        if (null !== $this->statExpress) {
            $res['StatExpress'] = $this->statExpress;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->supportForm) {
            $res['SupportForm'] = $this->supportForm;
        }

        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }

        if (null !== $this->templateRuleIds) {
            $res['TemplateRuleIds'] = $this->templateRuleIds;
        }

        if (null !== $this->threatAnalysisStatus) {
            $res['ThreatAnalysisStatus'] = $this->threatAnalysisStatus;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->warnLevel) {
            $res['WarnLevel'] = $this->warnLevel;
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
        if (isset($map['AuditMode'])) {
            $model->auditMode = $map['AuditMode'];
        }

        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['ContentCategory'])) {
            $model->contentCategory = $map['ContentCategory'];
        }

        if (isset($map['CustomType'])) {
            $model->customType = $map['CustomType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['HitTotalCount'])) {
            $model->hitTotalCount = $map['HitTotalCount'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['LoginName'])) {
            $model->loginName = $map['LoginName'];
        }

        if (isset($map['MajorKey'])) {
            $model->majorKey = $map['MajorKey'];
        }

        if (isset($map['MatchType'])) {
            $model->matchType = $map['MatchType'];
        }

        if (isset($map['ModelRuleIds'])) {
            $model->modelRuleIds = $map['ModelRuleIds'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        if (isset($map['RiskLevelId'])) {
            $model->riskLevelId = $map['RiskLevelId'];
        }

        if (isset($map['RiskLevelName'])) {
            $model->riskLevelName = $map['RiskLevelName'];
        }

        if (isset($map['StatExpress'])) {
            $model->statExpress = $map['StatExpress'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SupportForm'])) {
            $model->supportForm = $map['SupportForm'];
        }

        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }

        if (isset($map['TemplateRuleIds'])) {
            $model->templateRuleIds = $map['TemplateRuleIds'];
        }

        if (isset($map['ThreatAnalysisStatus'])) {
            $model->threatAnalysisStatus = $map['ThreatAnalysisStatus'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['WarnLevel'])) {
            $model->warnLevel = $map['WarnLevel'];
        }

        return $model;
    }
}
