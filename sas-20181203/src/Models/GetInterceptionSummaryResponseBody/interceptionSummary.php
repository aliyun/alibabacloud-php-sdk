<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetInterceptionSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class interceptionSummary extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $closeClusterCount;

    /**
     * @example 0
     *
     * @var int
     */
    public $closeRuleCount;

    /**
     * @example 0
     *
     * @var int
     */
    public $clusterCount;

    /**
     * @example 0
     *
     * @var int
     */
    public $openClusterCount;

    /**
     * @example 0
     *
     * @var int
     */
    public $openRuleCount;

    /**
     * @example 0
     *
     * @var int
     */
    public $riskCount180Day;

    /**
     * @example 0
     *
     * @var int
     */
    public $riskCount30Day;

    /**
     * @example 0
     *
     * @var int
     */
    public $riskCountToday;

    /**
     * @example 0
     *
     * @var int
     */
    public $ruleCount;
    protected $_name = [
        'closeClusterCount' => 'CloseClusterCount',
        'closeRuleCount'    => 'CloseRuleCount',
        'clusterCount'      => 'ClusterCount',
        'openClusterCount'  => 'OpenClusterCount',
        'openRuleCount'     => 'OpenRuleCount',
        'riskCount180Day'   => 'RiskCount180Day',
        'riskCount30Day'    => 'RiskCount30Day',
        'riskCountToday'    => 'RiskCountToday',
        'ruleCount'         => 'RuleCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->closeClusterCount) {
            $res['CloseClusterCount'] = $this->closeClusterCount;
        }
        if (null !== $this->closeRuleCount) {
            $res['CloseRuleCount'] = $this->closeRuleCount;
        }
        if (null !== $this->clusterCount) {
            $res['ClusterCount'] = $this->clusterCount;
        }
        if (null !== $this->openClusterCount) {
            $res['OpenClusterCount'] = $this->openClusterCount;
        }
        if (null !== $this->openRuleCount) {
            $res['OpenRuleCount'] = $this->openRuleCount;
        }
        if (null !== $this->riskCount180Day) {
            $res['RiskCount180Day'] = $this->riskCount180Day;
        }
        if (null !== $this->riskCount30Day) {
            $res['RiskCount30Day'] = $this->riskCount30Day;
        }
        if (null !== $this->riskCountToday) {
            $res['RiskCountToday'] = $this->riskCountToday;
        }
        if (null !== $this->ruleCount) {
            $res['RuleCount'] = $this->ruleCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return interceptionSummary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloseClusterCount'])) {
            $model->closeClusterCount = $map['CloseClusterCount'];
        }
        if (isset($map['CloseRuleCount'])) {
            $model->closeRuleCount = $map['CloseRuleCount'];
        }
        if (isset($map['ClusterCount'])) {
            $model->clusterCount = $map['ClusterCount'];
        }
        if (isset($map['OpenClusterCount'])) {
            $model->openClusterCount = $map['OpenClusterCount'];
        }
        if (isset($map['OpenRuleCount'])) {
            $model->openRuleCount = $map['OpenRuleCount'];
        }
        if (isset($map['RiskCount180Day'])) {
            $model->riskCount180Day = $map['RiskCount180Day'];
        }
        if (isset($map['RiskCount30Day'])) {
            $model->riskCount30Day = $map['RiskCount30Day'];
        }
        if (isset($map['RiskCountToday'])) {
            $model->riskCountToday = $map['RiskCountToday'];
        }
        if (isset($map['RuleCount'])) {
            $model->ruleCount = $map['RuleCount'];
        }

        return $model;
    }
}
