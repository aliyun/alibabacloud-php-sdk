<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListNatRateLimitRulesResponseBody;

use AlibabaCloud\Dara\Model;

class ruleInfos extends Model
{
    /**
     * @var string
     */
    public $bandwidthLimit;

    /**
     * @var string
     */
    public $matchType;

    /**
     * @var string
     */
    public $ruleDescription;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string[]
     */
    public $sourceCIDRs;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tunnelIndex;
    protected $_name = [
        'bandwidthLimit' => 'BandwidthLimit',
        'matchType' => 'MatchType',
        'ruleDescription' => 'RuleDescription',
        'ruleId' => 'RuleId',
        'ruleName' => 'RuleName',
        'sourceCIDRs' => 'SourceCIDRs',
        'status' => 'Status',
        'tunnelIndex' => 'TunnelIndex',
    ];

    public function validate()
    {
        if (\is_array($this->sourceCIDRs)) {
            Model::validateArray($this->sourceCIDRs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandwidthLimit) {
            $res['BandwidthLimit'] = $this->bandwidthLimit;
        }

        if (null !== $this->matchType) {
            $res['MatchType'] = $this->matchType;
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

        if (null !== $this->sourceCIDRs) {
            if (\is_array($this->sourceCIDRs)) {
                $res['SourceCIDRs'] = [];
                $n1 = 0;
                foreach ($this->sourceCIDRs as $item1) {
                    $res['SourceCIDRs'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tunnelIndex) {
            $res['TunnelIndex'] = $this->tunnelIndex;
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
        if (isset($map['BandwidthLimit'])) {
            $model->bandwidthLimit = $map['BandwidthLimit'];
        }

        if (isset($map['MatchType'])) {
            $model->matchType = $map['MatchType'];
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

        if (isset($map['SourceCIDRs'])) {
            if (!empty($map['SourceCIDRs'])) {
                $model->sourceCIDRs = [];
                $n1 = 0;
                foreach ($map['SourceCIDRs'] as $item1) {
                    $model->sourceCIDRs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TunnelIndex'])) {
            $model->tunnelIndex = $map['TunnelIndex'];
        }

        return $model;
    }
}
