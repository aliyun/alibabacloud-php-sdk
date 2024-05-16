<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class EditRecognizeRuleRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example dsg-uat
     *
     * @var string
     */
    public $accountName;

    /**
     * @example default.qujian.*6
     *
     * @var string
     */
    public $colExclude;

    /**
     * @example default.qujian.*
     *
     * @var string
     */
    public $colScan;

    /**
     * @example test
     *
     * @var string
     */
    public $commentScan;

    /**
     * @example {"_clazz":"com.alipay.dsgclient.sdk.dsg.fastscan.engine.cond.NationalityCond"}
     *
     * @var string
     */
    public $contentScan;

    /**
     * @example 50
     *
     * @var int
     */
    public $hitThreshold;

    /**
     * @var string
     */
    public $levelName;

    /**
     * @description This parameter is required.
     *
     * @example 0ce67949-0810-400f-a24a-cc5ffafe1024
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $nodeParent;

    /**
     * @description This parameter is required.
     *
     * @example 0
     *
     * @var int
     */
    public $operationType;

    /**
     * @example {"contentRule":{"_clazz":"com.alipay.dsgclient.sdk.dsg.fastscan.engine.cond.GenderCond"},"_clazz":"com.alipay.dsg.dal.model.RuleContent"}
     *
     * @var string
     */
    public $recognizeRules;

    /**
     * @example 1
     *
     * @var string
     */
    public $recognizeRulesType;

    /**
     * @var string
     */
    public $sensitiveDescription;

    /**
     * @description This parameter is required.
     *
     * @example 1a928de7-3962-4e07-93ac-e1973baa1024
     *
     * @var string
     */
    public $sensitiveId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $sensitiveName;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description This parameter is required.
     *
     * @example e1970541-6cf5-4d23-b101-d5b66f6e1024
     *
     * @var string
     */
    public $templateId;

    /**
     * @description This parameter is required.
     *
     * @example 10241024
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description This parameter is required.
     *
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
