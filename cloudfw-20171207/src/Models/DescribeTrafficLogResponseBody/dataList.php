<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrafficLogResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrafficLogResponseBody\dataList\dstVpc;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrafficLogResponseBody\dataList\rules;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrafficLogResponseBody\dataList\srcVpc;

class dataList extends Model
{
    /**
     * @var string
     */
    public $aclPreRuleId;

    /**
     * @var string
     */
    public $aclPreRuleName;

    /**
     * @var string
     */
    public $aclPreState;

    /**
     * @var string
     */
    public $appDpiState;

    /**
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

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
    public $cityId;

    /**
     * @var string
     */
    public $closeReason;

    /**
     * @var string
     */
    public $cloudInstanceId;

    /**
     * @var string
     */
    public $countryId;

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
     * @var int
     */
    public $dstPort;

    /**
     * @var dstVpc
     */
    public $dstVpc;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $ext;

    /**
     * @var string
     */
    public $inBytes;

    /**
     * @var string
     */
    public $inPackets;

    /**
     * @var string
     */
    public $ipProtocol;

    /**
     * @var string
     */
    public $isp;

    /**
     * @var string
     */
    public $ispId;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $memberUid;

    /**
     * @var string
     */
    public $outBytes;

    /**
     * @var string
     */
    public $outPackets;

    /**
     * @var int
     */
    public $packetBytes;

    /**
     * @var int
     */
    public $packetCount;

    /**
     * @var string
     */
    public $privateIp;

    /**
     * @var int
     */
    public $privatePort;

    /**
     * @var string
     */
    public $regionId;

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
     * @var string
     */
    public $ruleSource;

    /**
     * @var rules[]
     */
    public $rules;

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
    public $srcPrivateIP;

    /**
     * @var srcVpc
     */
    public $srcVpc;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $tlsRuleId;

    /**
     * @var string
     */
    public $tlsRuleName;

    /**
     * @var string
     */
    public $tlsScopeId;

    /**
     * @var string
     */
    public $vpcFirewallId;

    /**
     * @var int
     */
    public $vulLevel;
    protected $_name = [
        'aclPreRuleId' => 'AclPreRuleId',
        'aclPreRuleName' => 'AclPreRuleName',
        'aclPreState' => 'AclPreState',
        'appDpiState' => 'AppDpiState',
        'appId' => 'AppId',
        'appName' => 'AppName',
        'attackApp' => 'AttackApp',
        'attackType' => 'AttackType',
        'cityId' => 'CityId',
        'closeReason' => 'CloseReason',
        'cloudInstanceId' => 'CloudInstanceId',
        'countryId' => 'CountryId',
        'direction' => 'Direction',
        'domainName' => 'DomainName',
        'domainUrl' => 'DomainUrl',
        'dstIP' => 'DstIP',
        'dstPort' => 'DstPort',
        'dstVpc' => 'DstVpc',
        'endTime' => 'EndTime',
        'ext' => 'Ext',
        'inBytes' => 'InBytes',
        'inPackets' => 'InPackets',
        'ipProtocol' => 'IpProtocol',
        'isp' => 'Isp',
        'ispId' => 'IspId',
        'location' => 'Location',
        'memberUid' => 'MemberUid',
        'outBytes' => 'OutBytes',
        'outPackets' => 'OutPackets',
        'packetBytes' => 'PacketBytes',
        'packetCount' => 'PacketCount',
        'privateIp' => 'PrivateIp',
        'privatePort' => 'PrivatePort',
        'regionId' => 'RegionId',
        'ruleId' => 'RuleId',
        'ruleName' => 'RuleName',
        'ruleResult' => 'RuleResult',
        'ruleSource' => 'RuleSource',
        'rules' => 'Rules',
        'srcIP' => 'SrcIP',
        'srcPort' => 'SrcPort',
        'srcPrivateIP' => 'SrcPrivateIP',
        'srcVpc' => 'SrcVpc',
        'startTime' => 'StartTime',
        'tlsRuleId' => 'TlsRuleId',
        'tlsRuleName' => 'TlsRuleName',
        'tlsScopeId' => 'TlsScopeId',
        'vpcFirewallId' => 'VpcFirewallId',
        'vulLevel' => 'VulLevel',
    ];

    public function validate()
    {
        if (null !== $this->dstVpc) {
            $this->dstVpc->validate();
        }
        if (\is_array($this->rules)) {
            Model::validateArray($this->rules);
        }
        if (null !== $this->srcVpc) {
            $this->srcVpc->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclPreRuleId) {
            $res['AclPreRuleId'] = $this->aclPreRuleId;
        }

        if (null !== $this->aclPreRuleName) {
            $res['AclPreRuleName'] = $this->aclPreRuleName;
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

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->attackApp) {
            $res['AttackApp'] = $this->attackApp;
        }

        if (null !== $this->attackType) {
            $res['AttackType'] = $this->attackType;
        }

        if (null !== $this->cityId) {
            $res['CityId'] = $this->cityId;
        }

        if (null !== $this->closeReason) {
            $res['CloseReason'] = $this->closeReason;
        }

        if (null !== $this->cloudInstanceId) {
            $res['CloudInstanceId'] = $this->cloudInstanceId;
        }

        if (null !== $this->countryId) {
            $res['CountryId'] = $this->countryId;
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

        if (null !== $this->dstVpc) {
            $res['DstVpc'] = null !== $this->dstVpc ? $this->dstVpc->toArray($noStream) : $this->dstVpc;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->ext) {
            $res['Ext'] = $this->ext;
        }

        if (null !== $this->inBytes) {
            $res['InBytes'] = $this->inBytes;
        }

        if (null !== $this->inPackets) {
            $res['InPackets'] = $this->inPackets;
        }

        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
        }

        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }

        if (null !== $this->ispId) {
            $res['IspId'] = $this->ispId;
        }

        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }

        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }

        if (null !== $this->outBytes) {
            $res['OutBytes'] = $this->outBytes;
        }

        if (null !== $this->outPackets) {
            $res['OutPackets'] = $this->outPackets;
        }

        if (null !== $this->packetBytes) {
            $res['PacketBytes'] = $this->packetBytes;
        }

        if (null !== $this->packetCount) {
            $res['PacketCount'] = $this->packetCount;
        }

        if (null !== $this->privateIp) {
            $res['PrivateIp'] = $this->privateIp;
        }

        if (null !== $this->privatePort) {
            $res['PrivatePort'] = $this->privatePort;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

        if (null !== $this->rules) {
            if (\is_array($this->rules)) {
                $res['Rules'] = [];
                $n1 = 0;
                foreach ($this->rules as $item1) {
                    $res['Rules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->srcVpc) {
            $res['SrcVpc'] = null !== $this->srcVpc ? $this->srcVpc->toArray($noStream) : $this->srcVpc;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->tlsRuleId) {
            $res['TlsRuleId'] = $this->tlsRuleId;
        }

        if (null !== $this->tlsRuleName) {
            $res['TlsRuleName'] = $this->tlsRuleName;
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

        if (isset($map['AclPreRuleName'])) {
            $model->aclPreRuleName = $map['AclPreRuleName'];
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

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AttackApp'])) {
            $model->attackApp = $map['AttackApp'];
        }

        if (isset($map['AttackType'])) {
            $model->attackType = $map['AttackType'];
        }

        if (isset($map['CityId'])) {
            $model->cityId = $map['CityId'];
        }

        if (isset($map['CloseReason'])) {
            $model->closeReason = $map['CloseReason'];
        }

        if (isset($map['CloudInstanceId'])) {
            $model->cloudInstanceId = $map['CloudInstanceId'];
        }

        if (isset($map['CountryId'])) {
            $model->countryId = $map['CountryId'];
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

        if (isset($map['DstVpc'])) {
            $model->dstVpc = dstVpc::fromMap($map['DstVpc']);
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Ext'])) {
            $model->ext = $map['Ext'];
        }

        if (isset($map['InBytes'])) {
            $model->inBytes = $map['InBytes'];
        }

        if (isset($map['InPackets'])) {
            $model->inPackets = $map['InPackets'];
        }

        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }

        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }

        if (isset($map['IspId'])) {
            $model->ispId = $map['IspId'];
        }

        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }

        if (isset($map['OutBytes'])) {
            $model->outBytes = $map['OutBytes'];
        }

        if (isset($map['OutPackets'])) {
            $model->outPackets = $map['OutPackets'];
        }

        if (isset($map['PacketBytes'])) {
            $model->packetBytes = $map['PacketBytes'];
        }

        if (isset($map['PacketCount'])) {
            $model->packetCount = $map['PacketCount'];
        }

        if (isset($map['PrivateIp'])) {
            $model->privateIp = $map['PrivateIp'];
        }

        if (isset($map['PrivatePort'])) {
            $model->privatePort = $map['PrivatePort'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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

        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n1 = 0;
                foreach ($map['Rules'] as $item1) {
                    $model->rules[$n1] = rules::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['SrcVpc'])) {
            $model->srcVpc = srcVpc::fromMap($map['SrcVpc']);
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TlsRuleId'])) {
            $model->tlsRuleId = $map['TlsRuleId'];
        }

        if (isset($map['TlsRuleName'])) {
            $model->tlsRuleName = $map['TlsRuleName'];
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
