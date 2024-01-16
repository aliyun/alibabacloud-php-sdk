<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class ModifyRuleRequest extends Model
{
    /**
     * @description The content type of the sensitive data detection rule. Valid values:
     *
     *   **2**: regular expression
     *   **3**: algorithm
     *   **5**: keyword
     *
     * @example 2
     *
     * @var int
     */
    public $category;

    /**
     * @description The content of the sensitive data detection rule. You can specify a regular expression, an algorithm, or keywords that are used to match sensitive fields or text.
     *
     * @example (?:\\D|^)((?:(?:25[0-4]|2[0-4]\\d|1\\d{2}|[1-9]\\d{1})\\.)(?:(?:25[0-5]|2[0-4]\\d|[01]?\\d?\\d)\\.){2}(?:25[0-5]|2[0-4]\\d|1[0-9]\\d|[1-9]\\d|[1-9]))(?:\\D|$)
     *
     * @var string
     */
    public $content;

    /**
     * @description The ID of the sensitive data detection rule.
     *
     * You can call the [DescribeRules](~~DescribeRules~~) operation to obtain the rule ID.
     * @example 1****
     *
     * @var int
     */
    public $id;

    /**
     * @description The language of the content within the request and response. Default value: **zh_cn**. Valid values:
     *
     *   **zh_cn**: Simplified Chinese
     *   **en_us**: English
     *
     * @example zh_cn
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
     * You can call the [DescribeRules](~~DescribeRules~~) operation to obtain the rule name.
     * @example esw
     *
     * @var string
     */
    public $name;

    /**
     * @description The service to which the sensitive data detection rule is applied. Valid values include **MaxCompute, OSS, ADS, OTS, and RDS**.
     *
     * @example RDS
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The ID of the service to which the sensitive data detection rule is applied. Valid values include **1**, **2**, **3**, **4**, and **5**. The value 1 indicates MaxCompute. The value 2 indicates Object Storage Service (OSS). The value 3 indicates AnalyticDB for MySQL. The value 4 indicates Tablestore. The value 5 indicates ApsaraDB RDS.
     *
     * @example 5
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
     *   **1**: data detection rule
     *   **2**: audit rule
     *   **3**: anomalous event detection rule
     *
     * @example 1
     *
     * @var int
     */
    public $ruleType;

    /**
     * @description The data assets supported by the sensitive data detection rule. Valid values:
     *
     *   **0**: all data assets
     *   **1**: structured data assets
     *   **2**: unstructured data assets
     *
     * @example 1
     *
     * @var int
     */
    public $supportForm;

    /**
     * @description The risk level of the alert that is triggered by the sensitive data detection rule. Valid values:
     *
     *   **1**: low level
     *   **2**: medium level
     *   **3**: high level
     *
     * @example 1
     *
     * @var int
     */
    public $warnLevel;
    protected $_name = [
        'category'    => 'Category',
        'content'     => 'Content',
        'id'          => 'Id',
        'lang'        => 'Lang',
        'matchType'   => 'MatchType',
        'name'        => 'Name',
        'productCode' => 'ProductCode',
        'productId'   => 'ProductId',
        'riskLevelId' => 'RiskLevelId',
        'ruleType'    => 'RuleType',
        'supportForm' => 'SupportForm',
        'warnLevel'   => 'WarnLevel',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
     * @return ModifyRuleRequest
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
        if (isset($map['SupportForm'])) {
            $model->supportForm = $map['SupportForm'];
        }
        if (isset($map['WarnLevel'])) {
            $model->warnLevel = $map['WarnLevel'];
        }

        return $model;
    }
}
