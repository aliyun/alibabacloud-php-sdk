<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;

class CreateNatRateLimitRuleRequest extends Model
{
    /**
     * @var string
     */
    public $bandwidthLimit;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $dryRun;

    /**
     * @var string
     */
    public $matchType;

    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $ruleDescription;

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
    public $tunnelIndex;
    protected $_name = [
        'bandwidthLimit' => 'BandwidthLimit',
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
        'matchType' => 'MatchType',
        'natGatewayId' => 'NatGatewayId',
        'regionId' => 'RegionId',
        'ruleDescription' => 'RuleDescription',
        'ruleName' => 'RuleName',
        'sourceCIDRs' => 'SourceCIDRs',
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

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->matchType) {
            $res['MatchType'] = $this->matchType;
        }

        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->ruleDescription) {
            $res['RuleDescription'] = $this->ruleDescription;
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

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['MatchType'])) {
            $model->matchType = $map['MatchType'];
        }

        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RuleDescription'])) {
            $model->ruleDescription = $map['RuleDescription'];
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

        if (isset($map['TunnelIndex'])) {
            $model->tunnelIndex = $map['TunnelIndex'];
        }

        return $model;
    }
}
