<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class DescribeRulesRequest extends Model
{
    /**
     * @description The content type of the sensitive data detection rule. Valid values:
     *
     *   **0**: keyword
     *   **2**: regular expression
     *
     * @example 2
     *
     * @var int
     */
    public $category;

    /**
     * @description The type of the content in the sensitive data detection rule. Valid values include **1**, **2**, **3**, **4**, and **5**. The value 1 indicates attempts to exploit SQL injections. The value 2 indicates bypass by using SQL injections. The value 3 indicates abuse of stored procedures. The value 4 indicates buffer overflow. The value 5 indicates SQL injections based on errors.
     *
     * @example 1
     *
     * @var int
     */
    public $contentCategory;

    /**
     * @description The page number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The type of the sensitive data detection rule. Valid values:
     *
     *   **0**: built-in rule
     *   **1**: custom rule
     *
     * @example 1
     *
     * @var int
     */
    public $customType;

    /**
     * @description This parameter is deprecated.
     *
     * @example 2
     *
     * @var int
     */
    public $featureType;

    /**
     * @description The parent group type of the rule.
     *
     * @example 4_1
     *
     * @var string
     */
    public $groupId;

    /**
     * @description Specifies whether to allow earlier versions of request parameters to support keywords that are supported in later versions of request parameters. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * > To specify keywords as the content type of the sensitive data detection rule, you can set the Category parameter to 0 for earlier versions of request parameters and set the Category parameter to 5 for later versions of request parameters. You can specify the KeywordCompatible parameter based on your business requirements.
     * @example true
     *
     * @var bool
     */
    public $keywordCompatible;

    /**
     * @description The language of the content within the request and response. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The match type. Valid values:
     *
     *   1: rule-based match
     *   2: dictionary-based match
     *
     * @example 1
     *
     * @var int
     */
    public $matchType;

    /**
     * @description The name of the sensitive data detection rule. Fuzzy match is supported.
     *
     * @example \*\*\* rule
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 12
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The name of the service to which the data asset belongs. Valid values include **MaxCompute, OSS, ADS, OTS, and RDS**.
     *
     * @example MaxCompute
     *
     * @var int
     */
    public $productCode;

    /**
     * @description The ID of the service to which the sensitive data detection rule is applied. Valid values include **1**, **2**, **3**, **4**, and **5**. The value 1 indicates MaxCompute. The value 2 indicates Object Storage Service (OSS). The value 3 indicates AnalyticDB for MySQL. The value 4 indicates Tablestore. The value 5 indicates ApsaraDB RDS.
     *
     * @example 1
     *
     * @var int
     */
    public $productId;

    /**
     * @description The sensitivity level of the sensitive data that hits the sensitive data detection rule. Valid values:
     *
     *   **1**: N/A, which indicates that no sensitive data is detected.
     *   **2**: S1, which indicates the low sensitivity level.
     *   **3**: S2, which indicates the medium sensitivity level.
     *   **4**: S3, which indicates the high sensitivity level.
     *   **5**: S4, which indicates the highest sensitivity level.
     *
     * @example 2
     *
     * @var int
     */
    public $riskLevelId;

    /**
     * @description The type of the sensitive data detection rule. Valid values:
     *
     *   **1**: sensitive data detection rule
     *   **2**: audit rule
     *   **3**: anomalous event detection rule
     *   **99**: custom rule
     *
     * @example 1
     *
     * @var int
     */
    public $ruleType;

    /**
     * @description The status of the sensitive data detection rule. Valid values:
     *
     *   **1**: enabled
     *   **0**: disabled
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The type of the data asset. Valid values:
     *
     *   **0**: all data assets
     *   **1**: structured data asset
     *   **2**: unstructured data asset
     *
     * > If you set the parameter to 1 or 2, rules that support all data assets and rules that support the queried data asset type are returned.
     * @example 1
     *
     * @var int
     */
    public $supportForm;

    /**
     * @description The severity level of the alert. Valid values:
     *
     *   **1**: low
     *   **2**: medium
     *   **3**: high
     *
     * @example 2
     *
     * @var int
     */
    public $warnLevel;
    protected $_name = [
        'category'          => 'Category',
        'contentCategory'   => 'ContentCategory',
        'currentPage'       => 'CurrentPage',
        'customType'        => 'CustomType',
        'featureType'       => 'FeatureType',
        'groupId'           => 'GroupId',
        'keywordCompatible' => 'KeywordCompatible',
        'lang'              => 'Lang',
        'matchType'         => 'MatchType',
        'name'              => 'Name',
        'pageSize'          => 'PageSize',
        'productCode'       => 'ProductCode',
        'productId'         => 'ProductId',
        'riskLevelId'       => 'RiskLevelId',
        'ruleType'          => 'RuleType',
        'status'            => 'Status',
        'supportForm'       => 'SupportForm',
        'warnLevel'         => 'WarnLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->contentCategory) {
            $res['ContentCategory'] = $this->contentCategory;
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

    /**
     * @param array $map
     *
     * @return DescribeRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['ContentCategory'])) {
            $model->contentCategory = $map['ContentCategory'];
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
