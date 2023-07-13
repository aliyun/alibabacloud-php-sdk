<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceSceneRuleResponseBody\data;

use AlibabaCloud\Tea\Model;

class ruleList extends Model
{
    /**
     * @example 1582004185000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1
     *
     * @var int
     */
    public $isExisted;

    /**
     * @example f041397879ad4d89822811d741******
     *
     * @var string
     */
    public $ruleId;

    /**
     * @example test
     *
     * @var string
     */
    public $ruleName;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'gmtCreate' => 'GmtCreate',
        'isExisted' => 'IsExisted',
        'ruleId'    => 'RuleId',
        'ruleName'  => 'RuleName',
        'status'    => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->isExisted) {
            $res['IsExisted'] = $this->isExisted;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['IsExisted'])) {
            $model->isExisted = $map['IsExisted'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
