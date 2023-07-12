<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceSceneRuleResponse\data;

use AlibabaCloud\Tea\Model;

class ruleList extends Model
{
    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $isExisted;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleName;

    /**
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
        Model::validateRequired('gmtCreate', $this->gmtCreate, true);
        Model::validateRequired('isExisted', $this->isExisted, true);
        Model::validateRequired('ruleId', $this->ruleId, true);
        Model::validateRequired('ruleName', $this->ruleName, true);
        Model::validateRequired('status', $this->status, true);
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
