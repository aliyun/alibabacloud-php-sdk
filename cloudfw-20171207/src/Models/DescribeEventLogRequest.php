<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeEventLogRequest extends Model
{
    /**
     * @var int
     */
    public $attackType;

    /**
     * @var string
     */
    public $currentPage;

    /**
     * @var string
     */
    public $dstIP;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $firewallType;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $logType;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $ruleResult;

    /**
     * @var string
     */
    public $sourceCode;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $srcIP;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'attackType' => 'AttackType',
        'currentPage' => 'CurrentPage',
        'dstIP' => 'DstIP',
        'endTime' => 'EndTime',
        'firewallType' => 'FirewallType',
        'lang' => 'Lang',
        'logType' => 'LogType',
        'pageSize' => 'PageSize',
        'ruleResult' => 'RuleResult',
        'sourceCode' => 'SourceCode',
        'sourceIp' => 'SourceIp',
        'srcIP' => 'SrcIP',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attackType) {
            $res['AttackType'] = $this->attackType;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->dstIP) {
            $res['DstIP'] = $this->dstIP;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->firewallType) {
            $res['FirewallType'] = $this->firewallType;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->logType) {
            $res['LogType'] = $this->logType;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->ruleResult) {
            $res['RuleResult'] = $this->ruleResult;
        }

        if (null !== $this->sourceCode) {
            $res['SourceCode'] = $this->sourceCode;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        if (null !== $this->srcIP) {
            $res['SrcIP'] = $this->srcIP;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['AttackType'])) {
            $model->attackType = $map['AttackType'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['DstIP'])) {
            $model->dstIP = $map['DstIP'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['FirewallType'])) {
            $model->firewallType = $map['FirewallType'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['LogType'])) {
            $model->logType = $map['LogType'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RuleResult'])) {
            $model->ruleResult = $map['RuleResult'];
        }

        if (isset($map['SourceCode'])) {
            $model->sourceCode = $map['SourceCode'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        if (isset($map['SrcIP'])) {
            $model->srcIP = $map['SrcIP'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
