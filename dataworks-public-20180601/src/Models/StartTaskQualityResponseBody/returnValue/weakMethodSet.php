<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\StartTaskQualityResponseBody\returnValue;

use AlibabaCloud\Tea\Model;

class weakMethodSet extends Model
{
    /**
     * @var string
     */
    public $colName;

    /**
     * @var bool
     */
    public $isColRule;

    /**
     * @var bool
     */
    public $isSqlRule;

    /**
     * @var bool
     */
    public $isStrongRule;

    /**
     * @var string
     */
    public $methodName;

    /**
     * @var int
     */
    public $ruleId;
    protected $_name = [
        'colName'      => 'ColName',
        'isColRule'    => 'IsColRule',
        'isSqlRule'    => 'IsSqlRule',
        'isStrongRule' => 'IsStrongRule',
        'methodName'   => 'MethodName',
        'ruleId'       => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->colName) {
            $res['ColName'] = $this->colName;
        }
        if (null !== $this->isColRule) {
            $res['IsColRule'] = $this->isColRule;
        }
        if (null !== $this->isSqlRule) {
            $res['IsSqlRule'] = $this->isSqlRule;
        }
        if (null !== $this->isStrongRule) {
            $res['IsStrongRule'] = $this->isStrongRule;
        }
        if (null !== $this->methodName) {
            $res['MethodName'] = $this->methodName;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return weakMethodSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColName'])) {
            $model->colName = $map['ColName'];
        }
        if (isset($map['IsColRule'])) {
            $model->isColRule = $map['IsColRule'];
        }
        if (isset($map['IsSqlRule'])) {
            $model->isSqlRule = $map['IsSqlRule'];
        }
        if (isset($map['IsStrongRule'])) {
            $model->isStrongRule = $map['IsStrongRule'];
        }
        if (isset($map['MethodName'])) {
            $model->methodName = $map['MethodName'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
