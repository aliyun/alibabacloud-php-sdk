<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class EditRecognizeRuleRequest extends Model
{
    /**
     * @description The Alibaba Cloud account that is used to create the sensitive data identification rule. Enter the username of the Alibaba Cloud account.
     *
     * This parameter is required.
     * @example dsg-uat
     *
     * @var string
     */
    public $accountName;

    /**
     * @description Excludes fields. The system does not identify fields that are assigned with values.
     *
     *   The value must be in the ${Project name}.${Table name}.${Field name} or ${Project name}.${Schema name}.${Table name}.${Field name} format.
     *   *Wildcards are supported. For example, the asterisk (\\*) in default.table.column1\\* can be used to match any content following default.table.column1, such as default.table.column10.
     *
     * @example default.qujian.*6
     *
     * @var string
     */
    public $colExclude;

    /**
     * @description Scans fields. The system identifies only fields that are assigned with values.
     *
     *   The value must be in the ${Project name}.${Table name}.${Field name} or ${Project name}.${Schema name}.${Table name}.${Field name} format.
     *   *Wildcards are supported. For example, the asterisk (\\*) in default.table.column1\\* can be used to match any content following default.table.column1, such as default.table.column10.
     *
     * @example default.qujian.*
     *
     * @var string
     */
    public $colScan;

    /**
     * @description Scans content. The value is the text of each field comment in your data asset. Fuzzy match is supported.
     *
     * @example test
     *
     * @var string
     */
    public $commentScan;

    /**
     * @description Identifies content. You can call the [QuerySensNodeInfo](https://help.aliyun.com/document_detail/2747189.html) operation to query the value of the current parameter for a built-in sensitive field.
     *
     * @example {"_clazz":"com.alipay.dsgclient.sdk.dsg.fastscan.engine.cond.NationalityCond"}
     *
     * @var string
     */
    public $contentScan;

    /**
     * @description The hit ratio threshold. If more than 60%, which is a sample hit ratio threshold, of all sample data records hit the Name Entity Recognition (NER) model, the sensitive field is hit. The value can be an integer from 0 to 100.
     *
     * @example 50
     *
     * @var int
     */
    public $hitThreshold;

    /**
     * @description The name of the sensitivity level. You can call the [QueryDefaultTemplate](https://help.aliyun.com/document_detail/2743948.html) operation to obtain the name of the sensitivity level in the related template.
     *
     * @var string
     */
    public $levelName;

    /**
     * @description The ID of the data category. You can call the [QuerySensClassification](https://help.aliyun.com/document_detail/2746850.html) operation to query the ID of all data categories. Then, you can select a data category to create a sensitive field. Enter the ID of the selected data category.
     *
     * This parameter is required.
     * @example 0ce67949-0810-400f-a24a-cc5ffafe1024
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The information about the parent data category of the current data category. You can call the [QuerySensClassification](https://help.aliyun.com/document_detail/2746850.html) operation to obtain the ID of a data category.
     *
     * This parameter is required.
     * @var string
     */
    public $nodeParent;

    /**
     * @description The type of the arithmetic operation. Valid values:
     *
     *   0: OR
     *   1: AND
     *
     * This parameter is required.
     * @example 0
     *
     * @var int
     */
    public $operationType;

    /**
     * @description The content of the sensitive data identification rule. You can call the [QuerySensNodeInfo](https://help.aliyun.com/document_detail/2747189.html) operation to query the value of the current parameter for a built-in sensitive field.
     *
     * @example {"contentRule":{"_clazz":"com.alipay.dsgclient.sdk.dsg.fastscan.engine.cond.GenderCond"},"_clazz":"com.alipay.dsg.dal.model.RuleContent"}
     *
     * @var string
     */
    public $recognizeRules;

    /**
     * @description The type of the sensitive data identification rule. Valid values:
     *
     *   1: regular expression
     *   2: built-in rule
     *   3: sample library
     *   4: self-generated data identification model
     *
     * @example 1
     *
     * @var string
     */
    public $recognizeRulesType;

    /**
     * @description The description of the sensitive field. Enter a string that is less than 128 characters in length.
     *
     * @var string
     */
    public $sensitiveDescription;

    /**
     * @description The sensitive field ID. You can call the [QuerySensNodeInfo](https://help.aliyun.com/document_detail/2747189.html) operation to query the IDs of all sensitive fields. You can also call the [QueryRecognizeRuleDetail](https://help.aliyun.com/document_detail/2766023.html) operation to query the IDs of specific sensitive fields.
     *
     * This parameter is required.
     * @example 1a928de7-3962-4e07-93ac-e1973baa1024
     *
     * @var string
     */
    public $sensitiveId;

    /**
     * @description The name of the custom sensitive field. Enter a string that is less than 128 characters in length.
     *
     * This parameter is required.
     * @var string
     */
    public $sensitiveName;

    /**
     * @description The status of the sensitive field. Valid values:
     *
     *   0: draft
     *   1: effective
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description The template ID. You can call the [QueryDefaultTemplate](https://help.aliyun.com/document_detail/2743948.html) operation to obtain the template ID.
     *
     * This parameter is required.
     * @example e1970541-6cf5-4d23-b101-d5b66f6e1024
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The tenant ID. To obtain the tenant ID, perform the following steps: Log on to the [DataWorks console](https://workbench.data.aliyun.com/console). Find your workspace and go to the DataStudio page. On the DataStudio page, click the logon username in the upper-right corner and click User Info in the Menu section.
     *
     * This parameter is required.
     * @example 10241024
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The sensitivity level of the sensitive field. You can select one from all sensitivity levels that are defined in a template as the sensitivity level of the sensitive field, such as level 1 to level 10.
     *
     * This parameter is required.
     * @example 1
     *
     * @var string
     */
    public $level;
    protected $_name = [
        'accountName'          => 'AccountName',
        'colExclude'           => 'ColExclude',
        'colScan'              => 'ColScan',
        'commentScan'          => 'CommentScan',
        'contentScan'          => 'ContentScan',
        'hitThreshold'         => 'HitThreshold',
        'levelName'            => 'LevelName',
        'nodeId'               => 'NodeId',
        'nodeParent'           => 'NodeParent',
        'operationType'        => 'OperationType',
        'recognizeRules'       => 'RecognizeRules',
        'recognizeRulesType'   => 'RecognizeRulesType',
        'sensitiveDescription' => 'SensitiveDescription',
        'sensitiveId'          => 'SensitiveId',
        'sensitiveName'        => 'SensitiveName',
        'status'               => 'Status',
        'templateId'           => 'TemplateId',
        'tenantId'             => 'TenantId',
        'level'                => 'level',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->colExclude) {
            $res['ColExclude'] = $this->colExclude;
        }
        if (null !== $this->colScan) {
            $res['ColScan'] = $this->colScan;
        }
        if (null !== $this->commentScan) {
            $res['CommentScan'] = $this->commentScan;
        }
        if (null !== $this->contentScan) {
            $res['ContentScan'] = $this->contentScan;
        }
        if (null !== $this->hitThreshold) {
            $res['HitThreshold'] = $this->hitThreshold;
        }
        if (null !== $this->levelName) {
            $res['LevelName'] = $this->levelName;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeParent) {
            $res['NodeParent'] = $this->nodeParent;
        }
        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }
        if (null !== $this->recognizeRules) {
            $res['RecognizeRules'] = $this->recognizeRules;
        }
        if (null !== $this->recognizeRulesType) {
            $res['RecognizeRulesType'] = $this->recognizeRulesType;
        }
        if (null !== $this->sensitiveDescription) {
            $res['SensitiveDescription'] = $this->sensitiveDescription;
        }
        if (null !== $this->sensitiveId) {
            $res['SensitiveId'] = $this->sensitiveId;
        }
        if (null !== $this->sensitiveName) {
            $res['SensitiveName'] = $this->sensitiveName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->level) {
            $res['level'] = $this->level;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EditRecognizeRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['ColExclude'])) {
            $model->colExclude = $map['ColExclude'];
        }
        if (isset($map['ColScan'])) {
            $model->colScan = $map['ColScan'];
        }
        if (isset($map['CommentScan'])) {
            $model->commentScan = $map['CommentScan'];
        }
        if (isset($map['ContentScan'])) {
            $model->contentScan = $map['ContentScan'];
        }
        if (isset($map['HitThreshold'])) {
            $model->hitThreshold = $map['HitThreshold'];
        }
        if (isset($map['LevelName'])) {
            $model->levelName = $map['LevelName'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeParent'])) {
            $model->nodeParent = $map['NodeParent'];
        }
        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }
        if (isset($map['RecognizeRules'])) {
            $model->recognizeRules = $map['RecognizeRules'];
        }
        if (isset($map['RecognizeRulesType'])) {
            $model->recognizeRulesType = $map['RecognizeRulesType'];
        }
        if (isset($map['SensitiveDescription'])) {
            $model->sensitiveDescription = $map['SensitiveDescription'];
        }
        if (isset($map['SensitiveId'])) {
            $model->sensitiveId = $map['SensitiveId'];
        }
        if (isset($map['SensitiveName'])) {
            $model->sensitiveName = $map['SensitiveName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['level'])) {
            $model->level = $map['level'];
        }

        return $model;
    }
}
