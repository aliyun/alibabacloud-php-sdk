<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class EditRecognizeRuleRequest extends Model
{
    /**
     * @var string
     */
    public $accountName;
    /**
     * @var string
     */
    public $colExclude;
    /**
     * @var string
     */
    public $colScan;
    /**
     * @var string
     */
    public $commentScan;
    /**
     * @var string
     */
    public $contentScan;
    /**
     * @var int
     */
    public $hitThreshold;
    /**
     * @var string
     */
    public $levelName;
    /**
     * @var string
     */
    public $nodeId;
    /**
     * @var string
     */
    public $nodeParent;
    /**
     * @var int
     */
    public $operationType;
    /**
     * @var string
     */
    public $recognizeRules;
    /**
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
    public $sensitiveId;
    /**
     * @var string
     */
    public $sensitiveName;
    /**
     * @var int
     */
    public $status;
    /**
     * @var string
     */
    public $templateId;
    /**
     * @var string
     */
    public $tenantId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
