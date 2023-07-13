<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QuerySceneRuleResponseBody\data;

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
     * @example 1582098176000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $ruleDescription;

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
    public $ruleStatus;
    protected $_name = [
        'gmtCreate'       => 'GmtCreate',
        'gmtModified'     => 'GmtModified',
        'ruleDescription' => 'RuleDescription',
        'ruleId'          => 'RuleId',
        'ruleName'        => 'RuleName',
        'ruleStatus'      => 'RuleStatus',
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
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->ruleDescription) {
            $res['RuleDescription'] = $this->ruleDescription;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleStatus) {
            $res['RuleStatus'] = $this->ruleStatus;
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
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['RuleDescription'])) {
            $model->ruleDescription = $map['RuleDescription'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleStatus'])) {
            $model->ruleStatus = $map['RuleStatus'];
        }

        return $model;
    }
}
