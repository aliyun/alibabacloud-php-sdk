<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class AddRecognizeRuleRequest extends Model
{
    /**
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
     * @example 1
     *
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $levelName;

    /**
     * @example 0ce67949-0810-400f-a24a-cc5ffafe1024
     *
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeParent;

    /**
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
     * @example e1970541-6cf5-4d23-b101-d5b66f6e1024
     *
     * @var string
     */
    public $templateId;

    /**
     * @example 10241024
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'accountName'          => 'AccountName',
        'colExclude'           => 'ColExclude',
        'colScan'              => 'ColScan',
        'commentScan'          => 'CommentScan',
        'contentScan'          => 'ContentScan',
        'hitThreshold'         => 'HitThreshold',
        'level'                => 'Level',
        'levelName'            => 'LevelName',
        'nodeId'               => 'NodeId',
        'nodeParent'           => 'NodeParent',
        'operationType'        => 'OperationType',
        'recognizeRules'       => 'RecognizeRules',
        'recognizeRulesType'   => 'RecognizeRulesType',
        'sensitiveDescription' => 'SensitiveDescription',
        'sensitiveName'        => 'SensitiveName',
        'status'               => 'Status',
        'templateId'           => 'TemplateId',
        'tenantId'             => 'TenantId',
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
        if (null !== $this->level) {
            $res['Level'] = $this->level;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddRecognizeRuleRequest
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
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
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

        return $model;
    }
}
