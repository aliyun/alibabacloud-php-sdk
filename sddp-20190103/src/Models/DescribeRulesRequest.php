<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Dara\Model;

class DescribeRulesRequest extends Model
{
    /**
     * @var int
     */
    public $category;

    /**
     * @var int
     */
    public $contentCategory;

    /**
     * @var string
     */
    public $cooperationChannel;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $customType;

    /**
     * @var int
     */
    public $featureType;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var bool
     */
    public $keywordCompatible;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $matchType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
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
     * @var int
     */
    public $ruleType;

    /**
     * @var bool
     */
    public $simplify;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $supportForm;

    /**
     * @var int
     */
    public $warnLevel;
    protected $_name = [
        'category' => 'Category',
        'contentCategory' => 'ContentCategory',
        'cooperationChannel' => 'CooperationChannel',
        'currentPage' => 'CurrentPage',
        'customType' => 'CustomType',
        'featureType' => 'FeatureType',
        'groupId' => 'GroupId',
        'keywordCompatible' => 'KeywordCompatible',
        'lang' => 'Lang',
        'matchType' => 'MatchType',
        'name' => 'Name',
        'pageSize' => 'PageSize',
        'productCode' => 'ProductCode',
        'productId' => 'ProductId',
        'riskLevelId' => 'RiskLevelId',
        'ruleType' => 'RuleType',
        'simplify' => 'Simplify',
        'status' => 'Status',
        'supportForm' => 'SupportForm',
        'warnLevel' => 'WarnLevel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->contentCategory) {
            $res['ContentCategory'] = $this->contentCategory;
        }

        if (null !== $this->cooperationChannel) {
            $res['CooperationChannel'] = $this->cooperationChannel;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->customType) {
            $res['CustomType'] = $this->customType;
        }

        if (null !== $this->featureType) {
            $res['FeatureType'] = $this->featureType;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->keywordCompatible) {
            $res['KeywordCompatible'] = $this->keywordCompatible;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->matchType) {
            $res['MatchType'] = $this->matchType;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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

        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }

        if (null !== $this->simplify) {
            $res['Simplify'] = $this->simplify;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->supportForm) {
            $res['SupportForm'] = $this->supportForm;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['ContentCategory'])) {
            $model->contentCategory = $map['ContentCategory'];
        }

        if (isset($map['CooperationChannel'])) {
            $model->cooperationChannel = $map['CooperationChannel'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['CustomType'])) {
            $model->customType = $map['CustomType'];
        }

        if (isset($map['FeatureType'])) {
            $model->featureType = $map['FeatureType'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['KeywordCompatible'])) {
            $model->keywordCompatible = $map['KeywordCompatible'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['MatchType'])) {
            $model->matchType = $map['MatchType'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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

        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }

        if (isset($map['Simplify'])) {
            $model->simplify = $map['Simplify'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SupportForm'])) {
            $model->supportForm = $map['SupportForm'];
        }

        if (isset($map['WarnLevel'])) {
            $model->warnLevel = $map['WarnLevel'];
        }

        return $model;
    }
}
