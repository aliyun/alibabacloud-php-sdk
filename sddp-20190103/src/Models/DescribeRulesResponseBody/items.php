<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeRulesResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
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
     * @description The name of the content type of the sensitive data detection rule.
     *
     * @example Regular expression
     *
     * @var string
     */
    public $categoryName;

    /**
     * @description The content in the sensitive data detection rule.
     *
     * @example (?:\\D|^)((?:(?:25[0-4]|2[0-4]\\d|1\\d{2}|[1-9]\\d{1})\\.)(?:(?:25[0-5]|2[0-4]\\d|[01]?\\d?\\d)\\.){2}(?:25[0-5]|2[0-4]\\d|1[0-9]\\d|[1-9]\\d|[1-9]))(?:\\D|$)
     *
     * @var string
     */
    public $content;

    /**
     * @description The type of the content in the sensitive data detection rule. Valid values include **1**, **2**, **3**, **4**, and **5**. The value 1 indicates attempts to exploit SQL injections. The value 2 indicates bypass by using SQL injections. The value 3 indicates abuse of stored procedures. The value 4 indicates buffer overflow. The value 5 indicates SQL injections based on errors.
     *
     * @example 1
     *
     * @var string
     */
    public $contentCategory;

    /**
     * @description The type of the sensitive data detection rule.
     *
     *   0: built-in rule
     *   1: custom rule
     *
     * @example 1
     *
     * @var int
     */
    public $customType;

    /**
     * @description The description of the sensitive data detection rule.
     *
     * @example The sensitive data detection rule is used to detect IP addresses.
     *
     * @var string
     */
    public $description;

    /**
     * @description The display name of the account that is used to create the sensitive data detection rule.
     *
     * @example ****test
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The time when the sensitive data detection rule is created. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1545277010000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description The time when the sensitive data detection rule is modified. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1545277010000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description The parent group type of the rule.
     *
     * @example 4_1
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The number of times that the sensitive data detection rule is hit.
     *
     * @example 3
     *
     * @var int
     */
    public $hitTotalCount;

    /**
     * @description The ID of the sensitive data detection rule.
     *
     * @example 20000
     *
     * @var int
     */
    public $id;

    /**
     * @description The username of the account that is used to create the sensitive data detection rule.
     *
     * @example det1111
     *
     * @var string
     */
    public $loginName;

    /**
     * @description The key of the primary dimension.
     *
     * @example key
     *
     * @var string
     */
    public $majorKey;

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
     * @example IP address
     *
     * @var string
     */
    public $name;

    /**
     * @description The name of the service to which the data asset belongs. Valid values include **MaxCompute, OSS, ADS, OTS, and RDS**.
     *
     * @example MaxCompute
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The ID of the service to which the sensitive data detection rule is applied. Valid values include **1**, **2**, **3**, **4**, and **5**. The value 1 indicates MaxCompute. The value 2 indicates OSS. The value 3 indicates AnalyticDB for MySQL. The value 4 indicates Tablestore. The value 5 indicates ApsaraDB RDS.
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
     * @description The sensitivity level of data that hits the sensitive data detection rule. Valid values:
     *
     *   **N/A**: No sensitive data is detected.
     *   **S1**: indicates the low sensitivity level.
     *   **S2**: indicates the medium sensitivity level.
     *   **S3**: indicates the high sensitivity level.
     *   **S4**: indicates the highest sensitivity level.
     *
     * @example S2
     *
     * @var string
     */
    public $riskLevelName;

    /**
     * @description The statistical expression.
     *
     * @example 1
     *
     * @var string
     */
    public $statExpress;

    /**
     * @description The status of the sensitive data detection rule. Valid values:
     *
     *   **0**: disabled
     *   **1**: enabled
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $supportForm;

    /**
     * @description The name of the service to which the data asset belongs. Valid values include **MaxCompute, OSS, ADS, OTS, and RDS**.
     *
     * @example MaxCompute
     *
     * @var string
     */
    public $target;

    /**
     * @description The ID of the account that is used to create the sensitive data detection rule.
     *
     * @example 0
     *
     * @var int
     */
    public $userId;

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
        'category'        => 'Category',
        'categoryName'    => 'CategoryName',
        'content'         => 'Content',
        'contentCategory' => 'ContentCategory',
        'customType'      => 'CustomType',
        'description'     => 'Description',
        'displayName'     => 'DisplayName',
        'gmtCreate'       => 'GmtCreate',
        'gmtModified'     => 'GmtModified',
        'groupId'         => 'GroupId',
        'hitTotalCount'   => 'HitTotalCount',
        'id'              => 'Id',
        'loginName'       => 'LoginName',
        'majorKey'        => 'MajorKey',
        'matchType'       => 'MatchType',
        'name'            => 'Name',
        'productCode'     => 'ProductCode',
        'productId'       => 'ProductId',
        'riskLevelId'     => 'RiskLevelId',
        'riskLevelName'   => 'RiskLevelName',
        'statExpress'     => 'StatExpress',
        'status'          => 'Status',
        'supportForm'     => 'SupportForm',
        'target'          => 'Target',
        'userId'          => 'UserId',
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
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->warnLevel) {
            $res['WarnLevel'] = $this->warnLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['WarnLevel'])) {
            $model->warnLevel = $map['WarnLevel'];
        }

        return $model;
    }
}
