<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class CreateRuleRequest extends Model
{
    /**
     * @description The content type of the sensitive data detection rule. Valid values:
     *
     *   **0**: keyword
     *   **2**: regular expression
     *
     * @example 0
     *
     * @var int
     */
    public $category;

    /**
     * @description The content of the sensitive data detection rule. You can specify a regular expression or keywords that are used to match sensitive fields or text.
     *
     * This parameter is required.
     * @example (?:\\\\D|^)((?:(?:25[0-4]|2[0-4]\\\\d|1\\\\d{2}|[1-9]\\\\d{1})\\\\.)(?:(?:25[0-5]|2[0-4]\\\\d|[01]?\\\\d?\\\\d)\\\\.){2}(?:25[0-5]|2[0-4]\\\\d|1[0-9]\\\\d|[1-9]\\\\d|[1-9]))(?:\\\\D|$)
     *
     * @var string
     */
    public $content;

    /**
     * @description The type of the content in the sensitive data detection rule. Valid values include **1**, **2**, **3**, **4**, and **5**. The value 1 indicates attempts to exploit SQL injections. The value 2 indicates bypass by using SQL injections. The value 3 indicates abuse of stored procedures. The value 4 indicates buffer overflow. The value 5 indicates SQL injections based on errors.
     *
     * @example 1
     *
     * @var int
     */
    public $contentCategory;

    /**
     * @description The description of the rule.
     *
     * @example ID card
     *
     * @var string
     */
    public $description;

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
     *   **1**: rule-based match
     *   **2**: dictionary-based match
     *
     * @example 1
     *
     * @var int
     */
    public $matchType;

    /**
     * @description The name of the sensitive data detection rule.
     *
     * This parameter is required.
     * @example rule-tst
     *
     * @var string
     */
    public $name;

    /**
     * @description The name of the service to which data in the column of the table belongs. Valid values include **MaxCompute**, **OSS**, **ADS**, **OTS**, and **RDS**.
     *
     * @example RDS
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The ID of the service to which the data asset belongs. Valid values include **1**, **2**, **3**, **4**, and **5**. The value 1 indicates MaxCompute. The value 2 indicates Object Storage Service (OSS). The value 3 indicates AnalyticDB for MySQL. The value 4 indicates Tablestore. The value 5 indicates ApsaraDB RDS.
     *
     * @example 2
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
     * @description This parameter is deprecated.
     *
     * @example 39.170.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The statistical expression.
     *
     * @example 1
     *
     * @var string
     */
    public $statExpress;

    /**
     * @description Specifies whether to enable the sensitive data detection rule. Valid values:
     *
     *   **1**: yes
     *   **0**: no
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
     * @description The code of the service to which the sensitive data detection rule is applied. Valid values include **MaxCompute**, **OSS**, **ADS**, **OTS**, and **RDS**.
     *
     * @example MaxCompute
     *
     * @var string
     */
    public $target;

    /**
     * @description The risk level of the alert that is triggered. Valid values:
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
        'category'        => 'Category',
        'content'         => 'Content',
        'contentCategory' => 'ContentCategory',
        'description'     => 'Description',
        'lang'            => 'Lang',
        'matchType'       => 'MatchType',
        'name'            => 'Name',
        'productCode'     => 'ProductCode',
        'productId'       => 'ProductId',
        'riskLevelId'     => 'RiskLevelId',
        'ruleType'        => 'RuleType',
        'sourceIp'        => 'SourceIp',
        'statExpress'     => 'StatExpress',
        'status'          => 'Status',
        'supportForm'     => 'SupportForm',
        'target'          => 'Target',
        'warnLevel'       => 'WarnLevel',
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
        if (null !== $this->warnLevel) {
            $res['WarnLevel'] = $this->warnLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRuleRequest
     */
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
        if (isset($map['WarnLevel'])) {
            $model->warnLevel = $map['WarnLevel'];
        }

        return $model;
    }
}
