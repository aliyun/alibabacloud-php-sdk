<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models\DeleteRuleResponseBody;

use AlibabaCloud\Tea\Model;

class model extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $ruleType;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $ruleRId;

    /**
     * @var string
     */
    public $relatedAdSlots;

    /**
     * @var string
     */
    public $extInfo;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var int
     */
    public $version;

    /**
     * @var int
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $ruleConfig;
    protected $_name = [
        'status'         => 'Status',
        'ruleType'       => 'RuleType',
        'createTime'     => 'CreateTime',
        'ruleRId'        => 'RuleRId',
        'relatedAdSlots' => 'RelatedAdSlots',
        'extInfo'        => 'ExtInfo',
        'ruleName'       => 'RuleName',
        'ruleId'         => 'RuleId',
        'version'        => 'Version',
        'modifyTime'     => 'ModifyTime',
        'tenantId'       => 'TenantId',
        'ruleConfig'     => 'RuleConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->ruleRId) {
            $res['RuleRId'] = $this->ruleRId;
        }
        if (null !== $this->relatedAdSlots) {
            $res['RelatedAdSlots'] = $this->relatedAdSlots;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->ruleConfig) {
            $res['RuleConfig'] = $this->ruleConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['RuleRId'])) {
            $model->ruleRId = $map['RuleRId'];
        }
        if (isset($map['RelatedAdSlots'])) {
            $model->relatedAdSlots = $map['RelatedAdSlots'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['RuleConfig'])) {
            $model->ruleConfig = $map['RuleConfig'];
        }

        return $model;
    }
}
