<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class details extends Model
{
    /**
     * @var int
     */
    public $aclRuleMaxIpCount;

    /**
     * @var bool
     */
    public $antiScan;

    /**
     * @var int
     */
    public $antiScanTemplateMaxCount;

    /**
     * @var int
     */
    public $backendMaxCount;

    /**
     * @var bool
     */
    public $baseWafGroup;

    /**
     * @var int
     */
    public $baseWafGroupRuleInTemplateMaxCount;

    /**
     * @var int
     */
    public $baseWafGroupRuleTemplateMaxCount;

    /**
     * @var bool
     */
    public $bot;

    /**
     * @var string
     */
    public $botApp;

    /**
     * @var int
     */
    public $botTemplateMaxCount;

    /**
     * @var string
     */
    public $botWeb;

    /**
     * @var int
     */
    public $cnameResourceMaxCount;

    /**
     * @var bool
     */
    public $customResponse;

    /**
     * @var int
     */
    public $customResponseRuleInTemplateMaxCount;

    /**
     * @var int
     */
    public $customResponseTemplateMaxCount;

    /**
     * @var bool
     */
    public $customRule;

    /**
     * @var string
     */
    public $customRuleAction;

    /**
     * @var string
     */
    public $customRuleCondition;

    /**
     * @var int
     */
    public $customRuleInTemplateMaxCount;

    /**
     * @var string
     */
    public $customRuleRatelimitor;

    /**
     * @var int
     */
    public $customRuleTemplateMaxCount;

    /**
     * @var int
     */
    public $defenseGroupMaxCount;

    /**
     * @var int
     */
    public $defenseObjectInGroupMaxCount;

    /**
     * @var int
     */
    public $defenseObjectInTemplateMaxCount;

    /**
     * @var int
     */
    public $defenseObjectMaxCount;

    /**
     * @var bool
     */
    public $dlp;

    /**
     * @var int
     */
    public $dlpRuleInTemplateMaxCount;

    /**
     * @var int
     */
    public $dlpTemplateMaxCount;

    /**
     * @var bool
     */
    public $exclusiveIp;

    /**
     * @var bool
     */
    public $gslb;

    /**
     * @var string
     */
    public $httpPorts;

    /**
     * @var string
     */
    public $httpsPorts;

    /**
     * @var bool
     */
    public $ipBlacklist;

    /**
     * @var int
     */
    public $ipBlacklistIpInRuleMaxCount;

    /**
     * @var int
     */
    public $ipBlacklistRuleInTemplateMaxCount;

    /**
     * @var int
     */
    public $ipBlacklistTemplateMaxCount;

    /**
     * @var bool
     */
    public $ipv6;

    /**
     * @var bool
     */
    public $logService;

    /**
     * @var bool
     */
    public $majorProtection;

    /**
     * @var int
     */
    public $majorProtectionTemplateMaxCount;

    /**
     * @var bool
     */
    public $tamperproof;

    /**
     * @var int
     */
    public $tamperproofRuleInTemplateMaxCount;

    /**
     * @var int
     */
    public $tamperproofTemplateMaxCount;

    /**
     * @var int
     */
    public $vastIpBlacklistInFileMaxCount;

    /**
     * @var int
     */
    public $vastIpBlacklistInOperationMaxCount;

    /**
     * @var int
     */
    public $vastIpBlacklistMaxCount;

    /**
     * @var bool
     */
    public $whitelist;

    /**
     * @var string
     */
    public $whitelistLogical;

    /**
     * @var string
     */
    public $whitelistRuleCondition;

    /**
     * @var int
     */
    public $whitelistRuleInTemplateMaxCount;

    /**
     * @var int
     */
    public $whitelistTemplateMaxCount;
    protected $_name = [
        'aclRuleMaxIpCount'                    => 'AclRuleMaxIpCount',
        'antiScan'                             => 'AntiScan',
        'antiScanTemplateMaxCount'             => 'AntiScanTemplateMaxCount',
        'backendMaxCount'                      => 'BackendMaxCount',
        'baseWafGroup'                         => 'BaseWafGroup',
        'baseWafGroupRuleInTemplateMaxCount'   => 'BaseWafGroupRuleInTemplateMaxCount',
        'baseWafGroupRuleTemplateMaxCount'     => 'BaseWafGroupRuleTemplateMaxCount',
        'bot'                                  => 'Bot',
        'botApp'                               => 'BotApp',
        'botTemplateMaxCount'                  => 'BotTemplateMaxCount',
        'botWeb'                               => 'BotWeb',
        'cnameResourceMaxCount'                => 'CnameResourceMaxCount',
        'customResponse'                       => 'CustomResponse',
        'customResponseRuleInTemplateMaxCount' => 'CustomResponseRuleInTemplateMaxCount',
        'customResponseTemplateMaxCount'       => 'CustomResponseTemplateMaxCount',
        'customRule'                           => 'CustomRule',
        'customRuleAction'                     => 'CustomRuleAction',
        'customRuleCondition'                  => 'CustomRuleCondition',
        'customRuleInTemplateMaxCount'         => 'CustomRuleInTemplateMaxCount',
        'customRuleRatelimitor'                => 'CustomRuleRatelimitor',
        'customRuleTemplateMaxCount'           => 'CustomRuleTemplateMaxCount',
        'defenseGroupMaxCount'                 => 'DefenseGroupMaxCount',
        'defenseObjectInGroupMaxCount'         => 'DefenseObjectInGroupMaxCount',
        'defenseObjectInTemplateMaxCount'      => 'DefenseObjectInTemplateMaxCount',
        'defenseObjectMaxCount'                => 'DefenseObjectMaxCount',
        'dlp'                                  => 'Dlp',
        'dlpRuleInTemplateMaxCount'            => 'DlpRuleInTemplateMaxCount',
        'dlpTemplateMaxCount'                  => 'DlpTemplateMaxCount',
        'exclusiveIp'                          => 'ExclusiveIp',
        'gslb'                                 => 'Gslb',
        'httpPorts'                            => 'HttpPorts',
        'httpsPorts'                           => 'HttpsPorts',
        'ipBlacklist'                          => 'IpBlacklist',
        'ipBlacklistIpInRuleMaxCount'          => 'IpBlacklistIpInRuleMaxCount',
        'ipBlacklistRuleInTemplateMaxCount'    => 'IpBlacklistRuleInTemplateMaxCount',
        'ipBlacklistTemplateMaxCount'          => 'IpBlacklistTemplateMaxCount',
        'ipv6'                                 => 'Ipv6',
        'logService'                           => 'LogService',
        'majorProtection'                      => 'MajorProtection',
        'majorProtectionTemplateMaxCount'      => 'MajorProtectionTemplateMaxCount',
        'tamperproof'                          => 'Tamperproof',
        'tamperproofRuleInTemplateMaxCount'    => 'TamperproofRuleInTemplateMaxCount',
        'tamperproofTemplateMaxCount'          => 'TamperproofTemplateMaxCount',
        'vastIpBlacklistInFileMaxCount'        => 'VastIpBlacklistInFileMaxCount',
        'vastIpBlacklistInOperationMaxCount'   => 'VastIpBlacklistInOperationMaxCount',
        'vastIpBlacklistMaxCount'              => 'VastIpBlacklistMaxCount',
        'whitelist'                            => 'Whitelist',
        'whitelistLogical'                     => 'WhitelistLogical',
        'whitelistRuleCondition'               => 'WhitelistRuleCondition',
        'whitelistRuleInTemplateMaxCount'      => 'WhitelistRuleInTemplateMaxCount',
        'whitelistTemplateMaxCount'            => 'WhitelistTemplateMaxCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclRuleMaxIpCount) {
            $res['AclRuleMaxIpCount'] = $this->aclRuleMaxIpCount;
        }
        if (null !== $this->antiScan) {
            $res['AntiScan'] = $this->antiScan;
        }
        if (null !== $this->antiScanTemplateMaxCount) {
            $res['AntiScanTemplateMaxCount'] = $this->antiScanTemplateMaxCount;
        }
        if (null !== $this->backendMaxCount) {
            $res['BackendMaxCount'] = $this->backendMaxCount;
        }
        if (null !== $this->baseWafGroup) {
            $res['BaseWafGroup'] = $this->baseWafGroup;
        }
        if (null !== $this->baseWafGroupRuleInTemplateMaxCount) {
            $res['BaseWafGroupRuleInTemplateMaxCount'] = $this->baseWafGroupRuleInTemplateMaxCount;
        }
        if (null !== $this->baseWafGroupRuleTemplateMaxCount) {
            $res['BaseWafGroupRuleTemplateMaxCount'] = $this->baseWafGroupRuleTemplateMaxCount;
        }
        if (null !== $this->bot) {
            $res['Bot'] = $this->bot;
        }
        if (null !== $this->botApp) {
            $res['BotApp'] = $this->botApp;
        }
        if (null !== $this->botTemplateMaxCount) {
            $res['BotTemplateMaxCount'] = $this->botTemplateMaxCount;
        }
        if (null !== $this->botWeb) {
            $res['BotWeb'] = $this->botWeb;
        }
        if (null !== $this->cnameResourceMaxCount) {
            $res['CnameResourceMaxCount'] = $this->cnameResourceMaxCount;
        }
        if (null !== $this->customResponse) {
            $res['CustomResponse'] = $this->customResponse;
        }
        if (null !== $this->customResponseRuleInTemplateMaxCount) {
            $res['CustomResponseRuleInTemplateMaxCount'] = $this->customResponseRuleInTemplateMaxCount;
        }
        if (null !== $this->customResponseTemplateMaxCount) {
            $res['CustomResponseTemplateMaxCount'] = $this->customResponseTemplateMaxCount;
        }
        if (null !== $this->customRule) {
            $res['CustomRule'] = $this->customRule;
        }
        if (null !== $this->customRuleAction) {
            $res['CustomRuleAction'] = $this->customRuleAction;
        }
        if (null !== $this->customRuleCondition) {
            $res['CustomRuleCondition'] = $this->customRuleCondition;
        }
        if (null !== $this->customRuleInTemplateMaxCount) {
            $res['CustomRuleInTemplateMaxCount'] = $this->customRuleInTemplateMaxCount;
        }
        if (null !== $this->customRuleRatelimitor) {
            $res['CustomRuleRatelimitor'] = $this->customRuleRatelimitor;
        }
        if (null !== $this->customRuleTemplateMaxCount) {
            $res['CustomRuleTemplateMaxCount'] = $this->customRuleTemplateMaxCount;
        }
        if (null !== $this->defenseGroupMaxCount) {
            $res['DefenseGroupMaxCount'] = $this->defenseGroupMaxCount;
        }
        if (null !== $this->defenseObjectInGroupMaxCount) {
            $res['DefenseObjectInGroupMaxCount'] = $this->defenseObjectInGroupMaxCount;
        }
        if (null !== $this->defenseObjectInTemplateMaxCount) {
            $res['DefenseObjectInTemplateMaxCount'] = $this->defenseObjectInTemplateMaxCount;
        }
        if (null !== $this->defenseObjectMaxCount) {
            $res['DefenseObjectMaxCount'] = $this->defenseObjectMaxCount;
        }
        if (null !== $this->dlp) {
            $res['Dlp'] = $this->dlp;
        }
        if (null !== $this->dlpRuleInTemplateMaxCount) {
            $res['DlpRuleInTemplateMaxCount'] = $this->dlpRuleInTemplateMaxCount;
        }
        if (null !== $this->dlpTemplateMaxCount) {
            $res['DlpTemplateMaxCount'] = $this->dlpTemplateMaxCount;
        }
        if (null !== $this->exclusiveIp) {
            $res['ExclusiveIp'] = $this->exclusiveIp;
        }
        if (null !== $this->gslb) {
            $res['Gslb'] = $this->gslb;
        }
        if (null !== $this->httpPorts) {
            $res['HttpPorts'] = $this->httpPorts;
        }
        if (null !== $this->httpsPorts) {
            $res['HttpsPorts'] = $this->httpsPorts;
        }
        if (null !== $this->ipBlacklist) {
            $res['IpBlacklist'] = $this->ipBlacklist;
        }
        if (null !== $this->ipBlacklistIpInRuleMaxCount) {
            $res['IpBlacklistIpInRuleMaxCount'] = $this->ipBlacklistIpInRuleMaxCount;
        }
        if (null !== $this->ipBlacklistRuleInTemplateMaxCount) {
            $res['IpBlacklistRuleInTemplateMaxCount'] = $this->ipBlacklistRuleInTemplateMaxCount;
        }
        if (null !== $this->ipBlacklistTemplateMaxCount) {
            $res['IpBlacklistTemplateMaxCount'] = $this->ipBlacklistTemplateMaxCount;
        }
        if (null !== $this->ipv6) {
            $res['Ipv6'] = $this->ipv6;
        }
        if (null !== $this->logService) {
            $res['LogService'] = $this->logService;
        }
        if (null !== $this->majorProtection) {
            $res['MajorProtection'] = $this->majorProtection;
        }
        if (null !== $this->majorProtectionTemplateMaxCount) {
            $res['MajorProtectionTemplateMaxCount'] = $this->majorProtectionTemplateMaxCount;
        }
        if (null !== $this->tamperproof) {
            $res['Tamperproof'] = $this->tamperproof;
        }
        if (null !== $this->tamperproofRuleInTemplateMaxCount) {
            $res['TamperproofRuleInTemplateMaxCount'] = $this->tamperproofRuleInTemplateMaxCount;
        }
        if (null !== $this->tamperproofTemplateMaxCount) {
            $res['TamperproofTemplateMaxCount'] = $this->tamperproofTemplateMaxCount;
        }
        if (null !== $this->vastIpBlacklistInFileMaxCount) {
            $res['VastIpBlacklistInFileMaxCount'] = $this->vastIpBlacklistInFileMaxCount;
        }
        if (null !== $this->vastIpBlacklistInOperationMaxCount) {
            $res['VastIpBlacklistInOperationMaxCount'] = $this->vastIpBlacklistInOperationMaxCount;
        }
        if (null !== $this->vastIpBlacklistMaxCount) {
            $res['VastIpBlacklistMaxCount'] = $this->vastIpBlacklistMaxCount;
        }
        if (null !== $this->whitelist) {
            $res['Whitelist'] = $this->whitelist;
        }
        if (null !== $this->whitelistLogical) {
            $res['WhitelistLogical'] = $this->whitelistLogical;
        }
        if (null !== $this->whitelistRuleCondition) {
            $res['WhitelistRuleCondition'] = $this->whitelistRuleCondition;
        }
        if (null !== $this->whitelistRuleInTemplateMaxCount) {
            $res['WhitelistRuleInTemplateMaxCount'] = $this->whitelistRuleInTemplateMaxCount;
        }
        if (null !== $this->whitelistTemplateMaxCount) {
            $res['WhitelistTemplateMaxCount'] = $this->whitelistTemplateMaxCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return details
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclRuleMaxIpCount'])) {
            $model->aclRuleMaxIpCount = $map['AclRuleMaxIpCount'];
        }
        if (isset($map['AntiScan'])) {
            $model->antiScan = $map['AntiScan'];
        }
        if (isset($map['AntiScanTemplateMaxCount'])) {
            $model->antiScanTemplateMaxCount = $map['AntiScanTemplateMaxCount'];
        }
        if (isset($map['BackendMaxCount'])) {
            $model->backendMaxCount = $map['BackendMaxCount'];
        }
        if (isset($map['BaseWafGroup'])) {
            $model->baseWafGroup = $map['BaseWafGroup'];
        }
        if (isset($map['BaseWafGroupRuleInTemplateMaxCount'])) {
            $model->baseWafGroupRuleInTemplateMaxCount = $map['BaseWafGroupRuleInTemplateMaxCount'];
        }
        if (isset($map['BaseWafGroupRuleTemplateMaxCount'])) {
            $model->baseWafGroupRuleTemplateMaxCount = $map['BaseWafGroupRuleTemplateMaxCount'];
        }
        if (isset($map['Bot'])) {
            $model->bot = $map['Bot'];
        }
        if (isset($map['BotApp'])) {
            $model->botApp = $map['BotApp'];
        }
        if (isset($map['BotTemplateMaxCount'])) {
            $model->botTemplateMaxCount = $map['BotTemplateMaxCount'];
        }
        if (isset($map['BotWeb'])) {
            $model->botWeb = $map['BotWeb'];
        }
        if (isset($map['CnameResourceMaxCount'])) {
            $model->cnameResourceMaxCount = $map['CnameResourceMaxCount'];
        }
        if (isset($map['CustomResponse'])) {
            $model->customResponse = $map['CustomResponse'];
        }
        if (isset($map['CustomResponseRuleInTemplateMaxCount'])) {
            $model->customResponseRuleInTemplateMaxCount = $map['CustomResponseRuleInTemplateMaxCount'];
        }
        if (isset($map['CustomResponseTemplateMaxCount'])) {
            $model->customResponseTemplateMaxCount = $map['CustomResponseTemplateMaxCount'];
        }
        if (isset($map['CustomRule'])) {
            $model->customRule = $map['CustomRule'];
        }
        if (isset($map['CustomRuleAction'])) {
            $model->customRuleAction = $map['CustomRuleAction'];
        }
        if (isset($map['CustomRuleCondition'])) {
            $model->customRuleCondition = $map['CustomRuleCondition'];
        }
        if (isset($map['CustomRuleInTemplateMaxCount'])) {
            $model->customRuleInTemplateMaxCount = $map['CustomRuleInTemplateMaxCount'];
        }
        if (isset($map['CustomRuleRatelimitor'])) {
            $model->customRuleRatelimitor = $map['CustomRuleRatelimitor'];
        }
        if (isset($map['CustomRuleTemplateMaxCount'])) {
            $model->customRuleTemplateMaxCount = $map['CustomRuleTemplateMaxCount'];
        }
        if (isset($map['DefenseGroupMaxCount'])) {
            $model->defenseGroupMaxCount = $map['DefenseGroupMaxCount'];
        }
        if (isset($map['DefenseObjectInGroupMaxCount'])) {
            $model->defenseObjectInGroupMaxCount = $map['DefenseObjectInGroupMaxCount'];
        }
        if (isset($map['DefenseObjectInTemplateMaxCount'])) {
            $model->defenseObjectInTemplateMaxCount = $map['DefenseObjectInTemplateMaxCount'];
        }
        if (isset($map['DefenseObjectMaxCount'])) {
            $model->defenseObjectMaxCount = $map['DefenseObjectMaxCount'];
        }
        if (isset($map['Dlp'])) {
            $model->dlp = $map['Dlp'];
        }
        if (isset($map['DlpRuleInTemplateMaxCount'])) {
            $model->dlpRuleInTemplateMaxCount = $map['DlpRuleInTemplateMaxCount'];
        }
        if (isset($map['DlpTemplateMaxCount'])) {
            $model->dlpTemplateMaxCount = $map['DlpTemplateMaxCount'];
        }
        if (isset($map['ExclusiveIp'])) {
            $model->exclusiveIp = $map['ExclusiveIp'];
        }
        if (isset($map['Gslb'])) {
            $model->gslb = $map['Gslb'];
        }
        if (isset($map['HttpPorts'])) {
            $model->httpPorts = $map['HttpPorts'];
        }
        if (isset($map['HttpsPorts'])) {
            $model->httpsPorts = $map['HttpsPorts'];
        }
        if (isset($map['IpBlacklist'])) {
            $model->ipBlacklist = $map['IpBlacklist'];
        }
        if (isset($map['IpBlacklistIpInRuleMaxCount'])) {
            $model->ipBlacklistIpInRuleMaxCount = $map['IpBlacklistIpInRuleMaxCount'];
        }
        if (isset($map['IpBlacklistRuleInTemplateMaxCount'])) {
            $model->ipBlacklistRuleInTemplateMaxCount = $map['IpBlacklistRuleInTemplateMaxCount'];
        }
        if (isset($map['IpBlacklistTemplateMaxCount'])) {
            $model->ipBlacklistTemplateMaxCount = $map['IpBlacklistTemplateMaxCount'];
        }
        if (isset($map['Ipv6'])) {
            $model->ipv6 = $map['Ipv6'];
        }
        if (isset($map['LogService'])) {
            $model->logService = $map['LogService'];
        }
        if (isset($map['MajorProtection'])) {
            $model->majorProtection = $map['MajorProtection'];
        }
        if (isset($map['MajorProtectionTemplateMaxCount'])) {
            $model->majorProtectionTemplateMaxCount = $map['MajorProtectionTemplateMaxCount'];
        }
        if (isset($map['Tamperproof'])) {
            $model->tamperproof = $map['Tamperproof'];
        }
        if (isset($map['TamperproofRuleInTemplateMaxCount'])) {
            $model->tamperproofRuleInTemplateMaxCount = $map['TamperproofRuleInTemplateMaxCount'];
        }
        if (isset($map['TamperproofTemplateMaxCount'])) {
            $model->tamperproofTemplateMaxCount = $map['TamperproofTemplateMaxCount'];
        }
        if (isset($map['VastIpBlacklistInFileMaxCount'])) {
            $model->vastIpBlacklistInFileMaxCount = $map['VastIpBlacklistInFileMaxCount'];
        }
        if (isset($map['VastIpBlacklistInOperationMaxCount'])) {
            $model->vastIpBlacklistInOperationMaxCount = $map['VastIpBlacklistInOperationMaxCount'];
        }
        if (isset($map['VastIpBlacklistMaxCount'])) {
            $model->vastIpBlacklistMaxCount = $map['VastIpBlacklistMaxCount'];
        }
        if (isset($map['Whitelist'])) {
            $model->whitelist = $map['Whitelist'];
        }
        if (isset($map['WhitelistLogical'])) {
            $model->whitelistLogical = $map['WhitelistLogical'];
        }
        if (isset($map['WhitelistRuleCondition'])) {
            $model->whitelistRuleCondition = $map['WhitelistRuleCondition'];
        }
        if (isset($map['WhitelistRuleInTemplateMaxCount'])) {
            $model->whitelistRuleInTemplateMaxCount = $map['WhitelistRuleInTemplateMaxCount'];
        }
        if (isset($map['WhitelistTemplateMaxCount'])) {
            $model->whitelistTemplateMaxCount = $map['WhitelistTemplateMaxCount'];
        }

        return $model;
    }
}
