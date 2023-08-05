<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetInterceptionSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class interceptionSummary extends Model
{
    /**
     * @description The number of clusters that are not protected.
     *
     * @example 0
     *
     * @var int
     */
    public $closeClusterCount;

    /**
     * @description The number of disabled cluster defense rules.
     *
     * @example 0
     *
     * @var int
     */
    public $closeRuleCount;

    /**
     * @description The total number of clusters.
     *
     * @example 0
     *
     * @var int
     */
    public $clusterCount;

    /**
     * @description The total number of interception records for the specified cluster.
     *
     * @example 0
     *
     * @var int
     */
    public $interceptionCountInDays;

    /**
     * @description The number of clusters that are protected.
     *
     * @example 0
     *
     * @var int
     */
    public $openClusterCount;

    /**
     * @description The number of enabled cluster defense rules.
     *
     * @example 0
     *
     * @var int
     */
    public $openRuleCount;

    /**
     * @description The number of security risks that are detected in the last 180 days.
     *
     * @example 0
     *
     * @var int
     */
    public $riskCount180Day;

    /**
     * @description The number of security risks that are detected in the last 30 days.
     *
     * @example 0
     *
     * @var int
     */
    public $riskCount30Day;

    /**
     * @description The number of security risks that are detected in the last 24 hours.
     *
     * @example 0
     *
     * @var int
     */
    public $riskCountToday;

    /**
     * @description The total number of cluster defense rules.
     *
     * @example 0
     *
     * @var int
     */
    public $ruleCount;
    protected $_name = [
        'closeClusterCount'       => 'CloseClusterCount',
        'closeRuleCount'          => 'CloseRuleCount',
        'clusterCount'            => 'ClusterCount',
        'interceptionCountInDays' => 'InterceptionCountInDays',
        'openClusterCount'        => 'OpenClusterCount',
        'openRuleCount'           => 'OpenRuleCount',
        'riskCount180Day'         => 'RiskCount180Day',
        'riskCount30Day'          => 'RiskCount30Day',
        'riskCountToday'          => 'RiskCountToday',
        'ruleCount'               => 'RuleCount',
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
        if (null !== $this->interceptionCountInDays) {
            $res['InterceptionCountInDays'] = $this->interceptionCountInDays;
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
        if (isset($map['InterceptionCountInDays'])) {
            $model->interceptionCountInDays = $map['InterceptionCountInDays'];
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
