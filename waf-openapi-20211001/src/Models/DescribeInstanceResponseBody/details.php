<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class details extends Model
{
    /**
     * @description The maximum number of IP addresses that can be added to the match content of a match condition. For more information, see [Match conditions](https://help.aliyun.com/document_detail/374354.html).
     *
     * @example 100
     *
     * @var int
     */
    public $aclRuleMaxIpCount;

    /**
     * @description Indicates whether the scan protection module is supported. Valid values:
     *
     *   **true:** The scan protection module is supported.
     *   **false:** The scan protection module is not supported.
     *
     * @example true
     *
     * @var bool
     */
    public $antiScan;

    /**
     * @description The maximum number of scan protection rule templates that can be configured.
     *
     * @example 20
     *
     * @var int
     */
    public $antiScanTemplateMaxCount;

    /**
     * @description The maximum number of back-to-origin IP addresses that can be configured.
     *
     * @example 20
     *
     * @var int
     */
    public $backendMaxCount;

    /**
     * @description Indicates whether the basic protection rule module is supported. Valid values:
     *
     *   **true:** The basic protection rule module is supported.
     *   **false:** The basic protection rule module is not supported.
     *
     * @example true
     *
     * @var bool
     */
    public $baseWafGroup;

    /**
     * @description The maximum number of protection rules that can be included in a basic protection rule template.
     *
     * @example 100
     *
     * @var int
     */
    public $baseWafGroupRuleInTemplateMaxCount;

    /**
     * @description The maximum number of basic protection rule templates that can be configured.
     *
     * @example 20
     *
     * @var int
     */
    public $baseWafGroupRuleTemplateMaxCount;

    /**
     * @description Indicates whether the bot management module is supported. Valid values:
     *
     *   **true:** The bot management module is supported.
     *   **false:** The bot management module is not supported.
     *
     * @example true
     *
     * @var bool
     */
    public $bot;

    /**
     * @description Indicates whether bot management for app protection is supported. Valid values:
     *
     *   **true:** Bot management for app protection is supported.
     *   **false:** Bot management for app protection is not supported.
     *
     * @example true
     *
     * @var string
     */
    public $botApp;

    /**
     * @description The maximum number of bot management rule templates that can be configured.
     *
     * @example 50
     *
     * @var int
     */
    public $botTemplateMaxCount;

    /**
     * @description Indicates whether bot management for website protection is supported. Valid values:
     *
     *   **true:** Bot management for website protection is supported.
     *   **false:** Bot management for website protection is not supported.
     *
     * @example true
     *
     * @var string
     */
    public $botWeb;

    /**
     * @description The maximum number of CNAMEs that can be added.
     *
     * @example 1000
     *
     * @var int
     */
    public $cnameResourceMaxCount;

    /**
     * @description Indicates whether the custom response module is supported. Valid values:
     *
     *   **true:** The custom response module is supported.
     *   **false:** The custom response module is not supported.
     *
     * @example true
     *
     * @var bool
     */
    public $customResponse;

    /**
     * @description The maximum number of rules that can be included in a custom response rule template.
     *
     * @example 100
     *
     * @var int
     */
    public $customResponseRuleInTemplateMaxCount;

    /**
     * @description The maximum number of custom response rule templates that can be configured.
     *
     * @example 20
     *
     * @var int
     */
    public $customResponseTemplateMaxCount;

    /**
     * @description Indicates whether the custom rule module is supported. Valid values:
     *
     *   **true:** The custom rule module is supported.
     *   **false:** The custom rule module is not supported.
     *
     * @example true
     *
     * @var bool
     */
    public $customRule;

    /**
     * @description The action that can be included in a custom rule.
     *
     * @example block
     *
     * @var string
     */
    public $customRuleAction;

    /**
     * @description The match conditions that can be used in a custom rule. For more information, see **Match condition parameters** in the "**Parameters of custom rules (custom_acl)**" section in the [CreateDefenseRule](~~CreateDefenseRule~~) topic.
     *
     * @example URL
     *
     * @var string
     */
    public $customRuleCondition;

    /**
     * @description The maximum number of rules that can be included in a custom rule template.
     *
     * @example 100
     *
     * @var int
     */
    public $customRuleInTemplateMaxCount;

    /**
     * @description The statistical object for rate limiting in a custom rule.
     *
     * @example header
     *
     * @var string
     */
    public $customRuleRatelimitor;

    /**
     * @description The maximum number of custom rule templates that can be configured.
     *
     * @example 20
     *
     * @var int
     */
    public $customRuleTemplateMaxCount;

    /**
     * @description The maximum number of protected object groups that can be configured.
     *
     * @example 100
     *
     * @var int
     */
    public $defenseGroupMaxCount;

    /**
     * @description The maximum number of protected objects that can be included in a protected object group.
     *
     * @example 100
     *
     * @var int
     */
    public $defenseObjectInGroupMaxCount;

    /**
     * @description The maximum number of protected objects to which a protection rule template can be applied.
     *
     * @example 100
     *
     * @var int
     */
    public $defenseObjectInTemplateMaxCount;

    /**
     * @description The maximum number of protected objects that can be configured.
     *
     * @example 20,000
     *
     * @var int
     */
    public $defenseObjectMaxCount;

    /**
     * @description Indicates whether the data leakage prevention module is supported. Valid values:
     *
     *   **true:** The data leakage prevention module is supported.
     *   **false:** The data leakage prevention module is not supported.
     *
     * @example true
     *
     * @var bool
     */
    public $dlp;

    /**
     * @description The maximum number of rules that can be included in a data leakage prevention rule template.
     *
     * @example 50
     *
     * @var int
     */
    public $dlpRuleInTemplateMaxCount;

    /**
     * @description The maximum number of data leakage prevention rule templates that can be configured.
     *
     * @example 50
     *
     * @var int
     */
    public $dlpTemplateMaxCount;

    /**
     * @description Indicates whether exclusive IP addresses are supported. Valid values:
     *
     *   **true:** Exclusive IP addresses are supported.
     *   **false:** Exclusive IP addresses are not supported.
     *
     * @example true
     *
     * @var bool
     */
    public $exclusiveIp;

    /**
     * @description Indicates whether global server load balancing (GSLB) is supported. Valid values:
     *
     *   **true:** GSLB is supported.
     *   **false:** GSLB is not supported.
     *
     * @example true
     *
     * @var bool
     */
    public $gslb;

    /**
     * @description The HTTP port range that is supported. For more information, see [View supported ports](https://help.aliyun.com/document_detail/385578.html).
     *
     * @example 80
     *
     * @var string
     */
    public $httpPorts;

    /**
     * @description The HTTPS port range that is supported. For more information, see [View supported ports](https://help.aliyun.com/document_detail/385578.html).
     *
     * @example 443
     *
     * @var string
     */
    public $httpsPorts;

    /**
     * @description Indicates whether the IP address blacklist module is supported. Valid values:
     *
     *   **true:** The IP address blacklist module is supported.
     *   **false:** The IP address blacklist module is not supported.
     *
     * @example true
     *
     * @var bool
     */
    public $ipBlacklist;

    /**
     * @description The maximum number of IP addresses that can be added to an IP address blacklist rule.
     *
     * @example 200
     *
     * @var int
     */
    public $ipBlacklistIpInRuleMaxCount;

    /**
     * @description The maximum number of rules that can be included in an IP address blacklist rule template.
     *
     * @example 100
     *
     * @var int
     */
    public $ipBlacklistRuleInTemplateMaxCount;

    /**
     * @description The maximum number of IP address blacklist rule templates that can be configured.
     *
     * @example 20
     *
     * @var int
     */
    public $ipBlacklistTemplateMaxCount;

    /**
     * @description Indicates whether IPv6 is supported. Valid values:
     *
     *   **true:** IPv6 is supported.
     *   **false:** IPv6 is not supported.
     *
     * @example true
     *
     * @var bool
     */
    public $ipv6;

    /**
     * @description Indicates whether the log collection feature is supported. Valid values:
     *
     *   **true:** The log collection feature is supported.
     *   **false:** The log collection feature is not supported.
     *
     * @example true
     *
     * @var bool
     */
    public $logService;

    /**
     * @description Indicates whether major event protection is supported. Valid values:
     *
     *   **true:** Major event protection is supported.
     *   **false:** Major event protection is not supported.
     *
     * @example true
     *
     * @var bool
     */
    public $majorProtection;

    /**
     * @description The maximum number of major event protection rule templates that can be configured.
     *
     * @example 20
     *
     * @var int
     */
    public $majorProtectionTemplateMaxCount;

    /**
     * @description Indicates whether the website tamper-proofing module is supported. Valid values:
     *
     *   **true:** The website tamper-proofing module is supported.
     *   **false:** The website tamper-proofing module is not supported.
     *
     * @example true
     *
     * @var bool
     */
    public $tamperproof;

    /**
     * @description The maximum number of rules that can be included in a website tamper-proofing rule template.
     *
     * @example 50
     *
     * @var int
     */
    public $tamperproofRuleInTemplateMaxCount;

    /**
     * @description The maximum number of website tamper-proofing rule templates that can be configured.
     *
     * @example 50
     *
     * @var int
     */
    public $tamperproofTemplateMaxCount;

    /**
     * @description The maximum number of IP addresses or CIDR blocks that can be added to an IP address blacklist in a batch.
     *
     * @example 2,000
     *
     * @var int
     */
    public $vastIpBlacklistInFileMaxCount;

    /**
     * @description The maximum number of IP addresses or CIDR blocks that can be added to an IP address blacklist on a page.
     *
     * @example 500
     *
     * @var int
     */
    public $vastIpBlacklistInOperationMaxCount;

    /**
     * @description The maximum number of IP addresses or CIDR blocks that can be added to an IP address blacklist per Alibaba Cloud account.
     *
     * @example 50,000
     *
     * @var int
     */
    public $vastIpBlacklistMaxCount;

    /**
     * @description Indicates whether the whitelist module is supported. Valid values:
     *
     *   **true:** The whitelist module is supported.
     *   **false:** The whitelist module is not supported.
     *
     * @example true
     *
     * @var bool
     */
    public $whitelist;

    /**
     * @description The logical operators that can be used in a whitelist rule. For more information, see **Match condition parameters** in the "**Parameters of whitelist rules (whitelist)**" section in the [CreateDefenseRule](~~CreateDefenseRule~~) topic.
     *
     * @example contain
     *
     * @var string
     */
    public $whitelistLogical;

    /**
     * @description The match fields that can be used in a whitelist rule. For more information, see **Match condition parameters** in the "**Parameters of whitelist rules (whitelist)**" section in the [CreateDefenseRule](~~CreateDefenseRule~~) topic.
     *
     * @example URL
     *
     * @var string
     */
    public $whitelistRuleCondition;

    /**
     * @description The maximum number of rules that can be included in a whitelist rule template.
     *
     * @example 100
     *
     * @var int
     */
    public $whitelistRuleInTemplateMaxCount;

    /**
     * @description The maximum number of whitelist rule templates that can be configured.
     *
     * @example 20
     *
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
