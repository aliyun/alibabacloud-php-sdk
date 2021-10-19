<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeRiskEventGroupRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $currentPage;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $ruleSource;

    /**
     * @var string
     */
    public $ruleResult;

    /**
     * @var string
     */
    public $srcIP;

    /**
     * @var string
     */
    public $dstIP;

    /**
     * @var string
     */
    public $vulLevel;

    /**
     * @var string
     */
    public $firewallType;

    /**
     * @var string
     */
    public $srcNetworkInstanceId;

    /**
     * @var string
     */
    public $dstNetworkInstanceId;

    /**
     * @var string
     */
    public $attackType;

    /**
     * @var string
     */
    public $noLocation;

    /**
     * @var string[]
     */
    public $attackApp;
    protected $_name = [
        'lang'                 => 'Lang',
        'startTime'            => 'StartTime',
        'endTime'              => 'EndTime',
        'direction'            => 'Direction',
        'pageSize'             => 'PageSize',
        'currentPage'          => 'CurrentPage',
        'dataType'             => 'DataType',
        'ruleSource'           => 'RuleSource',
        'ruleResult'           => 'RuleResult',
        'srcIP'                => 'SrcIP',
        'dstIP'                => 'DstIP',
        'vulLevel'             => 'VulLevel',
        'firewallType'         => 'FirewallType',
        'srcNetworkInstanceId' => 'SrcNetworkInstanceId',
        'dstNetworkInstanceId' => 'DstNetworkInstanceId',
        'attackType'           => 'AttackType',
        'noLocation'           => 'NoLocation',
        'attackApp'            => 'AttackApp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->ruleSource) {
            $res['RuleSource'] = $this->ruleSource;
        }
        if (null !== $this->ruleResult) {
            $res['RuleResult'] = $this->ruleResult;
        }
        if (null !== $this->srcIP) {
            $res['SrcIP'] = $this->srcIP;
        }
        if (null !== $this->dstIP) {
            $res['DstIP'] = $this->dstIP;
        }
        if (null !== $this->vulLevel) {
            $res['VulLevel'] = $this->vulLevel;
        }
        if (null !== $this->firewallType) {
            $res['FirewallType'] = $this->firewallType;
        }
        if (null !== $this->srcNetworkInstanceId) {
            $res['SrcNetworkInstanceId'] = $this->srcNetworkInstanceId;
        }
        if (null !== $this->dstNetworkInstanceId) {
            $res['DstNetworkInstanceId'] = $this->dstNetworkInstanceId;
        }
        if (null !== $this->attackType) {
            $res['AttackType'] = $this->attackType;
        }
        if (null !== $this->noLocation) {
            $res['NoLocation'] = $this->noLocation;
        }
        if (null !== $this->attackApp) {
            $res['AttackApp'] = $this->attackApp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRiskEventGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['RuleSource'])) {
            $model->ruleSource = $map['RuleSource'];
        }
        if (isset($map['RuleResult'])) {
            $model->ruleResult = $map['RuleResult'];
        }
        if (isset($map['SrcIP'])) {
            $model->srcIP = $map['SrcIP'];
        }
        if (isset($map['DstIP'])) {
            $model->dstIP = $map['DstIP'];
        }
        if (isset($map['VulLevel'])) {
            $model->vulLevel = $map['VulLevel'];
        }
        if (isset($map['FirewallType'])) {
            $model->firewallType = $map['FirewallType'];
        }
        if (isset($map['SrcNetworkInstanceId'])) {
            $model->srcNetworkInstanceId = $map['SrcNetworkInstanceId'];
        }
        if (isset($map['DstNetworkInstanceId'])) {
            $model->dstNetworkInstanceId = $map['DstNetworkInstanceId'];
        }
        if (isset($map['AttackType'])) {
            $model->attackType = $map['AttackType'];
        }
        if (isset($map['NoLocation'])) {
            $model->noLocation = $map['NoLocation'];
        }
        if (isset($map['AttackApp'])) {
            if (!empty($map['AttackApp'])) {
                $model->attackApp = $map['AttackApp'];
            }
        }

        return $model;
    }
}
