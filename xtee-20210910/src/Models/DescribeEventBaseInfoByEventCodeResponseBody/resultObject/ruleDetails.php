<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventBaseInfoByEventCodeResponseBody\resultObject;

use AlibabaCloud\Tea\Model;

class ruleDetails extends Model
{
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
    public $ruleAuthType;

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
        'logicExpression' => 'logicExpression',
        'memo'            => 'memo',
        'ruleActions'     => 'ruleActions',
        'ruleAuthType'    => 'ruleAuthType',
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
        if (null !== $this->logicExpression) {
            $res['logicExpression'] = $this->logicExpression;
        }
        if (null !== $this->memo) {
            $res['memo'] = $this->memo;
        }
        if (null !== $this->ruleActions) {
            $res['ruleActions'] = $this->ruleActions;
        }
        if (null !== $this->ruleAuthType) {
            $res['ruleAuthType'] = $this->ruleAuthType;
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
     * @return ruleDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['logicExpression'])) {
            $model->logicExpression = $map['logicExpression'];
        }
        if (isset($map['memo'])) {
            $model->memo = $map['memo'];
        }
        if (isset($map['ruleActions'])) {
            $model->ruleActions = $map['ruleActions'];
        }
        if (isset($map['ruleAuthType'])) {
            $model->ruleAuthType = $map['ruleAuthType'];
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
