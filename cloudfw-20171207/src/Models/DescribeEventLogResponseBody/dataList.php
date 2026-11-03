<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeEventLogResponseBody;

use AlibabaCloud\Dara\Model;

class dataList extends Model
{
    /**
     * @var string
     */
    public $applicationName;

    /**
     * @var string
     */
    public $attackApp;

    /**
     * @var int
     */
    public $attackType;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $dstIP;

    /**
     * @var int
     */
    public $dstPort;

    /**
     * @var string
     */
    public $hitContent;

    /**
     * @var string
     */
    public $hitType;

    /**
     * @var string
     */
    public $ipProtocol;

    /**
     * @var int
     */
    public $memberUid;

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
    public $ruleResult;

    /**
     * @var int
     */
    public $ruleSource;

    /**
     * @var string
     */
    public $sni;

    /**
     * @var string
     */
    public $srcIP;

    /**
     * @var int
     */
    public $srcPort;

    /**
     * @var string
     */
    public $sslCipher;

    /**
     * @var string
     */
    public $sslErrorIndex;

    /**
     * @var string
     */
    public $sslErrorMsg;

    /**
     * @var string
     */
    public $sslHandshakeRes;

    /**
     * @var string
     */
    public $sslProtocol;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $url;

    /**
     * @var int
     */
    public $vulLevel;
    protected $_name = [
        'applicationName' => 'ApplicationName',
        'attackApp' => 'AttackApp',
        'attackType' => 'AttackType',
        'direction' => 'Direction',
        'dstIP' => 'DstIP',
        'dstPort' => 'DstPort',
        'hitContent' => 'HitContent',
        'hitType' => 'HitType',
        'ipProtocol' => 'IpProtocol',
        'memberUid' => 'MemberUid',
        'ruleId' => 'RuleId',
        'ruleName' => 'RuleName',
        'ruleResult' => 'RuleResult',
        'ruleSource' => 'RuleSource',
        'sni' => 'Sni',
        'srcIP' => 'SrcIP',
        'srcPort' => 'SrcPort',
        'sslCipher' => 'SslCipher',
        'sslErrorIndex' => 'SslErrorIndex',
        'sslErrorMsg' => 'SslErrorMsg',
        'sslHandshakeRes' => 'SslHandshakeRes',
        'sslProtocol' => 'SslProtocol',
        'startTime' => 'StartTime',
        'url' => 'Url',
        'vulLevel' => 'VulLevel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }

        if (null !== $this->attackApp) {
            $res['AttackApp'] = $this->attackApp;
        }

        if (null !== $this->attackType) {
            $res['AttackType'] = $this->attackType;
        }

        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }

        if (null !== $this->dstIP) {
            $res['DstIP'] = $this->dstIP;
        }

        if (null !== $this->dstPort) {
            $res['DstPort'] = $this->dstPort;
        }

        if (null !== $this->hitContent) {
            $res['HitContent'] = $this->hitContent;
        }

        if (null !== $this->hitType) {
            $res['HitType'] = $this->hitType;
        }

        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
        }

        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->ruleResult) {
            $res['RuleResult'] = $this->ruleResult;
        }

        if (null !== $this->ruleSource) {
            $res['RuleSource'] = $this->ruleSource;
        }

        if (null !== $this->sni) {
            $res['Sni'] = $this->sni;
        }

        if (null !== $this->srcIP) {
            $res['SrcIP'] = $this->srcIP;
        }

        if (null !== $this->srcPort) {
            $res['SrcPort'] = $this->srcPort;
        }

        if (null !== $this->sslCipher) {
            $res['SslCipher'] = $this->sslCipher;
        }

        if (null !== $this->sslErrorIndex) {
            $res['SslErrorIndex'] = $this->sslErrorIndex;
        }

        if (null !== $this->sslErrorMsg) {
            $res['SslErrorMsg'] = $this->sslErrorMsg;
        }

        if (null !== $this->sslHandshakeRes) {
            $res['SslHandshakeRes'] = $this->sslHandshakeRes;
        }

        if (null !== $this->sslProtocol) {
            $res['SslProtocol'] = $this->sslProtocol;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        if (null !== $this->vulLevel) {
            $res['VulLevel'] = $this->vulLevel;
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
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }

        if (isset($map['AttackApp'])) {
            $model->attackApp = $map['AttackApp'];
        }

        if (isset($map['AttackType'])) {
            $model->attackType = $map['AttackType'];
        }

        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }

        if (isset($map['DstIP'])) {
            $model->dstIP = $map['DstIP'];
        }

        if (isset($map['DstPort'])) {
            $model->dstPort = $map['DstPort'];
        }

        if (isset($map['HitContent'])) {
            $model->hitContent = $map['HitContent'];
        }

        if (isset($map['HitType'])) {
            $model->hitType = $map['HitType'];
        }

        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }

        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['RuleResult'])) {
            $model->ruleResult = $map['RuleResult'];
        }

        if (isset($map['RuleSource'])) {
            $model->ruleSource = $map['RuleSource'];
        }

        if (isset($map['Sni'])) {
            $model->sni = $map['Sni'];
        }

        if (isset($map['SrcIP'])) {
            $model->srcIP = $map['SrcIP'];
        }

        if (isset($map['SrcPort'])) {
            $model->srcPort = $map['SrcPort'];
        }

        if (isset($map['SslCipher'])) {
            $model->sslCipher = $map['SslCipher'];
        }

        if (isset($map['SslErrorIndex'])) {
            $model->sslErrorIndex = $map['SslErrorIndex'];
        }

        if (isset($map['SslErrorMsg'])) {
            $model->sslErrorMsg = $map['SslErrorMsg'];
        }

        if (isset($map['SslHandshakeRes'])) {
            $model->sslHandshakeRes = $map['SslHandshakeRes'];
        }

        if (isset($map['SslProtocol'])) {
            $model->sslProtocol = $map['SslProtocol'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        if (isset($map['VulLevel'])) {
            $model->vulLevel = $map['VulLevel'];
        }

        return $model;
    }
}
