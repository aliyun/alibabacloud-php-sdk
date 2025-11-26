<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeTrafficLogRequest extends Model
{
    /**
     * @var string
     */
    public $aclPreRuleId;

    /**
     * @var string
     */
    public $aclPreState;

    /**
     * @var string
     */
    public $appDpiState;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $assetRegion;

    /**
     * @var string
     */
    public $attackType;

    /**
     * @var string
     */
    public $currentPage;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $domainUrl;

    /**
     * @var string
     */
    public $dstIP;

    /**
     * @var string
     */
    public $dstPort;

    /**
     * @var string
     */
    public $dstVpcId;

    /**
     * @var string
     */
    public $dstVpcRegionNo;

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
    public $flowType;

    /**
     * @var string
     */
    public $ipProtocol;

    /**
     * @var string
     */
    public $ipVersion;

    /**
     * @var string
     */
    public $isp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $location;

    /**
     * @var int
     */
    public $memberUid;

    /**
     * @var string
     */
    public $natFirewallId;

    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleResult;

    /**
     * @var string
     */
    public $ruleSource;

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
    public $srcPort;

    /**
     * @var string
     */
    public $srcPrivateIP;

    /**
     * @var string
     */
    public $srcVpcId;

    /**
     * @var string
     */
    public $srcVpcRegionNo;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $tlsScopeId;

    /**
     * @var string
     */
    public $vpcFirewallId;

    /**
     * @var string
     */
    public $vulLevel;
    protected $_name = [
        'aclPreRuleId' => 'AclPreRuleId',
        'aclPreState' => 'AclPreState',
        'appDpiState' => 'AppDpiState',
        'appId' => 'AppId',
        'assetRegion' => 'AssetRegion',
        'attackType' => 'AttackType',
        'currentPage' => 'CurrentPage',
        'direction' => 'Direction',
        'domainName' => 'DomainName',
        'domainUrl' => 'DomainUrl',
        'dstIP' => 'DstIP',
        'dstPort' => 'DstPort',
        'dstVpcId' => 'DstVpcId',
        'dstVpcRegionNo' => 'DstVpcRegionNo',
        'endTime' => 'EndTime',
        'firewallType' => 'FirewallType',
        'flowType' => 'FlowType',
        'ipProtocol' => 'IpProtocol',
        'ipVersion' => 'IpVersion',
        'isp' => 'Isp',
        'lang' => 'Lang',
        'location' => 'Location',
        'memberUid' => 'MemberUid',
        'natFirewallId' => 'NatFirewallId',
        'natGatewayId' => 'NatGatewayId',
        'pageSize' => 'PageSize',
        'ruleId' => 'RuleId',
        'ruleResult' => 'RuleResult',
        'ruleSource' => 'RuleSource',
        'sourceCode' => 'SourceCode',
        'sourceIp' => 'SourceIp',
        'srcIP' => 'SrcIP',
        'srcPort' => 'SrcPort',
        'srcPrivateIP' => 'SrcPrivateIP',
        'srcVpcId' => 'SrcVpcId',
        'srcVpcRegionNo' => 'SrcVpcRegionNo',
        'startTime' => 'StartTime',
        'tlsScopeId' => 'TlsScopeId',
        'vpcFirewallId' => 'VpcFirewallId',
        'vulLevel' => 'VulLevel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclPreRuleId) {
            $res['AclPreRuleId'] = $this->aclPreRuleId;
        }

        if (null !== $this->aclPreState) {
            $res['AclPreState'] = $this->aclPreState;
        }

        if (null !== $this->appDpiState) {
            $res['AppDpiState'] = $this->appDpiState;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->assetRegion) {
            $res['AssetRegion'] = $this->assetRegion;
        }

        if (null !== $this->attackType) {
            $res['AttackType'] = $this->attackType;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->domainUrl) {
            $res['DomainUrl'] = $this->domainUrl;
        }

        if (null !== $this->dstIP) {
            $res['DstIP'] = $this->dstIP;
        }

        if (null !== $this->dstPort) {
            $res['DstPort'] = $this->dstPort;
        }

        if (null !== $this->dstVpcId) {
            $res['DstVpcId'] = $this->dstVpcId;
        }

        if (null !== $this->dstVpcRegionNo) {
            $res['DstVpcRegionNo'] = $this->dstVpcRegionNo;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->firewallType) {
            $res['FirewallType'] = $this->firewallType;
        }

        if (null !== $this->flowType) {
            $res['FlowType'] = $this->flowType;
        }

        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
        }

        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }

        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }

        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }

        if (null !== $this->natFirewallId) {
            $res['NatFirewallId'] = $this->natFirewallId;
        }

        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->ruleResult) {
            $res['RuleResult'] = $this->ruleResult;
        }

        if (null !== $this->ruleSource) {
            $res['RuleSource'] = $this->ruleSource;
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

        if (null !== $this->srcPort) {
            $res['SrcPort'] = $this->srcPort;
        }

        if (null !== $this->srcPrivateIP) {
            $res['SrcPrivateIP'] = $this->srcPrivateIP;
        }

        if (null !== $this->srcVpcId) {
            $res['SrcVpcId'] = $this->srcVpcId;
        }

        if (null !== $this->srcVpcRegionNo) {
            $res['SrcVpcRegionNo'] = $this->srcVpcRegionNo;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->tlsScopeId) {
            $res['TlsScopeId'] = $this->tlsScopeId;
        }

        if (null !== $this->vpcFirewallId) {
            $res['VpcFirewallId'] = $this->vpcFirewallId;
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
        if (isset($map['AclPreRuleId'])) {
            $model->aclPreRuleId = $map['AclPreRuleId'];
        }

        if (isset($map['AclPreState'])) {
            $model->aclPreState = $map['AclPreState'];
        }

        if (isset($map['AppDpiState'])) {
            $model->appDpiState = $map['AppDpiState'];
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AssetRegion'])) {
            $model->assetRegion = $map['AssetRegion'];
        }

        if (isset($map['AttackType'])) {
            $model->attackType = $map['AttackType'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['DomainUrl'])) {
            $model->domainUrl = $map['DomainUrl'];
        }

        if (isset($map['DstIP'])) {
            $model->dstIP = $map['DstIP'];
        }

        if (isset($map['DstPort'])) {
            $model->dstPort = $map['DstPort'];
        }

        if (isset($map['DstVpcId'])) {
            $model->dstVpcId = $map['DstVpcId'];
        }

        if (isset($map['DstVpcRegionNo'])) {
            $model->dstVpcRegionNo = $map['DstVpcRegionNo'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['FirewallType'])) {
            $model->firewallType = $map['FirewallType'];
        }

        if (isset($map['FlowType'])) {
            $model->flowType = $map['FlowType'];
        }

        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }

        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }

        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }

        if (isset($map['NatFirewallId'])) {
            $model->natFirewallId = $map['NatFirewallId'];
        }

        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['RuleResult'])) {
            $model->ruleResult = $map['RuleResult'];
        }

        if (isset($map['RuleSource'])) {
            $model->ruleSource = $map['RuleSource'];
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

        if (isset($map['SrcPort'])) {
            $model->srcPort = $map['SrcPort'];
        }

        if (isset($map['SrcPrivateIP'])) {
            $model->srcPrivateIP = $map['SrcPrivateIP'];
        }

        if (isset($map['SrcVpcId'])) {
            $model->srcVpcId = $map['SrcVpcId'];
        }

        if (isset($map['SrcVpcRegionNo'])) {
            $model->srcVpcRegionNo = $map['SrcVpcRegionNo'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TlsScopeId'])) {
            $model->tlsScopeId = $map['TlsScopeId'];
        }

        if (isset($map['VpcFirewallId'])) {
            $model->vpcFirewallId = $map['VpcFirewallId'];
        }

        if (isset($map['VulLevel'])) {
            $model->vulLevel = $map['VulLevel'];
        }

        return $model;
    }
}
