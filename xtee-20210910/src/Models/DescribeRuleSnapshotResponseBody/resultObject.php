<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRuleSnapshotResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $bizVersion;

    /**
     * @var string
     */
    public $eventCode;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $logicExpression;

    /**
     * @var string
     */
    public $memo;

    /**
     * @var string
     */
    public $ruleActions;

    /**
     * @var string
     */
    public $ruleExpressions;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $ruleStatus;
    protected $_name = [
        'bizVersion'      => 'bizVersion',
        'eventCode'       => 'eventCode',
        'eventName'       => 'eventName',
        'gmtCreate'       => 'gmtCreate',
        'gmtModified'     => 'gmtModified',
        'logicExpression' => 'logicExpression',
        'memo'            => 'memo',
        'ruleActions'     => 'ruleActions',
        'ruleExpressions' => 'ruleExpressions',
        'ruleId'          => 'ruleId',
        'ruleName'        => 'ruleName',
        'ruleStatus'      => 'ruleStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizVersion) {
            $res['bizVersion'] = $this->bizVersion;
        }
        if (null !== $this->eventCode) {
            $res['eventCode'] = $this->eventCode;
        }
        if (null !== $this->eventName) {
            $res['eventName'] = $this->eventName;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->logicExpression) {
            $res['logicExpression'] = $this->logicExpression;
        }
        if (null !== $this->memo) {
            $res['memo'] = $this->memo;
        }
        if (null !== $this->ruleActions) {
            $res['ruleActions'] = $this->ruleActions;
        }
        if (null !== $this->ruleExpressions) {
            $res['ruleExpressions'] = $this->ruleExpressions;
        }
        if (null !== $this->ruleId) {
            $res['ruleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['ruleName'] = $this->ruleName;
        }
        if (null !== $this->ruleStatus) {
            $res['ruleStatus'] = $this->ruleStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bizVersion'])) {
            $model->bizVersion = $map['bizVersion'];
        }
        if (isset($map['eventCode'])) {
            $model->eventCode = $map['eventCode'];
        }
        if (isset($map['eventName'])) {
            $model->eventName = $map['eventName'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['logicExpression'])) {
            $model->logicExpression = $map['logicExpression'];
        }
        if (isset($map['memo'])) {
            $model->memo = $map['memo'];
        }
        if (isset($map['ruleActions'])) {
            $model->ruleActions = $map['ruleActions'];
        }
        if (isset($map['ruleExpressions'])) {
            $model->ruleExpressions = $map['ruleExpressions'];
        }
        if (isset($map['ruleId'])) {
            $model->ruleId = $map['ruleId'];
        }
        if (isset($map['ruleName'])) {
            $model->ruleName = $map['ruleName'];
        }
        if (isset($map['ruleStatus'])) {
            $model->ruleStatus = $map['ruleStatus'];
        }

        return $model;
    }
}
