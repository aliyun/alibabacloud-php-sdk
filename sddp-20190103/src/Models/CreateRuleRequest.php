<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Dara\Model;

class CreateRuleRequest extends Model
{
    /**
     * @var int
     */
    public $category;

    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $contentCategory;

    /**
     * @var string
     */
    public $description;

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
     * @var int
     */
    public $ruleType;

    /**
     * @var string
     */
    public $sourceIp;

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
    public $warnLevel;
    protected $_name = [
        'category' => 'Category',
        'content' => 'Content',
        'contentCategory' => 'ContentCategory',
        'description' => 'Description',
        'lang' => 'Lang',
        'matchType' => 'MatchType',
        'modelRuleIds' => 'ModelRuleIds',
        'name' => 'Name',
        'productCode' => 'ProductCode',
        'productId' => 'ProductId',
        'riskLevelId' => 'RiskLevelId',
        'ruleType' => 'RuleType',
        'sourceIp' => 'SourceIp',
        'statExpress' => 'StatExpress',
        'status' => 'Status',
        'supportForm' => 'SupportForm',
        'target' => 'Target',
        'templateRuleIds' => 'TemplateRuleIds',
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

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->contentCategory) {
            $res['ContentCategory'] = $this->contentCategory;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
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

        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
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

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['ContentCategory'])) {
            $model->contentCategory = $map['ContentCategory'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
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

        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
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

        if (isset($map['WarnLevel'])) {
            $model->warnLevel = $map['WarnLevel'];
        }

        return $model;
    }
}
