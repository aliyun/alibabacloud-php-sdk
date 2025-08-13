<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class DeepCopyRuleRequest extends Model
{
    /**
     * @var string
     */
    public $createType;

    /**
     * @var string
     */
    public $custInsertInfo;

    /**
     * @var string
     */
    public $custWriteInfo;

    /**
     * @var string
     */
    public $expressionVariableInfo;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $queryExpressionVariableInfo;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $sourceRuleId;

    /**
     * @var string
     */
    public $sourceRuleIds;

    /**
     * @var string
     */
    public $targetEventCode;

    /**
     * @var string
     */
    public $targetEventName;
    protected $_name = [
        'createType' => 'CreateType',
        'custInsertInfo' => 'CustInsertInfo',
        'custWriteInfo' => 'CustWriteInfo',
        'expressionVariableInfo' => 'ExpressionVariableInfo',
        'lang' => 'Lang',
        'queryExpressionVariableInfo' => 'QueryExpressionVariableInfo',
        'regId' => 'RegId',
        'sourceRuleId' => 'SourceRuleId',
        'sourceRuleIds' => 'SourceRuleIds',
        'targetEventCode' => 'TargetEventCode',
        'targetEventName' => 'TargetEventName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createType) {
            $res['CreateType'] = $this->createType;
        }

        if (null !== $this->custInsertInfo) {
            $res['CustInsertInfo'] = $this->custInsertInfo;
        }

        if (null !== $this->custWriteInfo) {
            $res['CustWriteInfo'] = $this->custWriteInfo;
        }

        if (null !== $this->expressionVariableInfo) {
            $res['ExpressionVariableInfo'] = $this->expressionVariableInfo;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->queryExpressionVariableInfo) {
            $res['QueryExpressionVariableInfo'] = $this->queryExpressionVariableInfo;
        }

        if (null !== $this->regId) {
            $res['RegId'] = $this->regId;
        }

        if (null !== $this->sourceRuleId) {
            $res['SourceRuleId'] = $this->sourceRuleId;
        }

        if (null !== $this->sourceRuleIds) {
            $res['SourceRuleIds'] = $this->sourceRuleIds;
        }

        if (null !== $this->targetEventCode) {
            $res['TargetEventCode'] = $this->targetEventCode;
        }

        if (null !== $this->targetEventName) {
            $res['TargetEventName'] = $this->targetEventName;
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
        if (isset($map['CreateType'])) {
            $model->createType = $map['CreateType'];
        }

        if (isset($map['CustInsertInfo'])) {
            $model->custInsertInfo = $map['CustInsertInfo'];
        }

        if (isset($map['CustWriteInfo'])) {
            $model->custWriteInfo = $map['CustWriteInfo'];
        }

        if (isset($map['ExpressionVariableInfo'])) {
            $model->expressionVariableInfo = $map['ExpressionVariableInfo'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['QueryExpressionVariableInfo'])) {
            $model->queryExpressionVariableInfo = $map['QueryExpressionVariableInfo'];
        }

        if (isset($map['RegId'])) {
            $model->regId = $map['RegId'];
        }

        if (isset($map['SourceRuleId'])) {
            $model->sourceRuleId = $map['SourceRuleId'];
        }

        if (isset($map['SourceRuleIds'])) {
            $model->sourceRuleIds = $map['SourceRuleIds'];
        }

        if (isset($map['TargetEventCode'])) {
            $model->targetEventCode = $map['TargetEventCode'];
        }

        if (isset($map['TargetEventName'])) {
            $model->targetEventName = $map['TargetEventName'];
        }

        return $model;
    }
}
