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
     * @description 支持扫描防护
     *
     * @var bool
     */
    public $antiScan;

    /**
     * @description 扫描防护模板数
     *
     * @var int
     */
    public $antiScanTemplateMaxCount;

    /**
     * @description 最大回源数
     *
     * @var int
     */
    public $backendMaxCount;

    /**
     * @description 基础防护
     *
     * @var bool
     */
    public $baseWafGroup;

    /**
     * @description 基础防护规则
     *
     * @var int
     */
    public $baseWafGroupRuleInTemplateMaxCount;

    /**
     * @description 基础防护规则最大数量
     *
     * @var int
     */
    public $baseWafGroupRuleTemplateMaxCount;

    /**
     * @description 最大可添加CNAME数
     *
     * @var int
     */
    public $cnameResourceMaxCount;

    /**
     * @description 支持自定义响应
     *
     * @var bool
     */
    public $customResponse;

    /**
     * @description 自定义响应模板包含规则数
     *
     * @var int
     */
    public $customResponseRuleInTemplateMaxCount;

    /**
     * @description 自定义响应模板数
     *
     * @var int
     */
    public $customResponseTemplateMaxCount;

    /**
     * @description 支持自定义规则
     *
     * @var bool
     */
    public $customRule;

    /**
     * @description 包含字符串
     *
     * @var string
     */
    public $customRuleAction;

    /**
     * @description 自定义规则匹配条件
     *
     * @var string
     */
    public $customRuleCondition;

    /**
     * @description 自定义规则模板包含规则数
     *
     * @var int
     */
    public $customRuleInTemplateMaxCount;

    /**
     * @description 自定义规则限速对象
     *
     * @var string
     */
    public $customRuleRatelimitor;

    /**
     * @description 自定义规则模板数
     *
     * @var int
     */
    public $customRuleTemplateMaxCount;

    /**
     * @description 最大防护组数量
     *
     * @var int
     */
    public $defenseGroupMaxCount;

    /**
     * @description 一个防护组内最大包含对象数量
     *
     * @var int
     */
    public $defenseObjectInGroupMaxCount;

    /**
     * @description 一个模板内关联对象的最大数量
     *
     * @var int
     */
    public $defenseObjectInTemplateMaxCount;

    /**
     * @description 最大防护对象数量
     *
     * @var int
     */
    public $defenseObjectMaxCount;

    /**
     * @description 独享IP
     *
     * @var bool
     */
    public $exclusiveIp;

    /**
     * @description Gslb
     *
     * @var bool
     */
    public $gslb;

    /**
     * @description HTTP端口可用范围
     *
     * @var string
     */
    public $httpPorts;

    /**
     * @description HTTPS端口可用范围
     *
     * @var string
     */
    public $httpsPorts;

    /**
     * @description 支持IP黑名单
     *
     * @var bool
     */
    public $ipBlacklist;

    /**
     * @description IP黑名单规则包含IP数
     *
     * @var int
     */
    public $ipBlacklistIpInRuleMaxCount;

    /**
     * @description IP黑名单模板包含规则数
     *
     * @var int
     */
    public $ipBlacklistRuleInTemplateMaxCount;

    /**
     * @description /黑名单模板数
     *
     * @var int
     */
    public $ipBlacklistTemplateMaxCount;

    /**
     * @description Ipv6
     *
     * @var bool
     */
    public $ipv6;

    /**
     * @description 日志服务是否开启
     *
     * @var bool
     */
    public $logService;

    /**
     * @description 是否支持重保
     *
     * @var bool
     */
    public $majorProtection;

    /**
     * @description 重保模板的最大数量
     *
     * @var int
     */
    public $majorProtectionTemplateMaxCount;

    /**
     * @description 海量IP单次上传文件IP的最大数量
     *
     * @var int
     */
    public $vastIpBlacklistInFileMaxCount;

    /**
     * @description 海量IP单次页面操作的最大数量
     *
     * @var int
     */
    public $vastIpBlacklistInOperationMaxCount;

    /**
     * @description 海量IP的最大数量（单用户）
     *
     * @var int
     */
    public $vastIpBlacklistMaxCount;

    /**
     * @description 是否支持白名单
     *
     * @var bool
     */
    public $whitelist;

    /**
     * @description 白名单规则匹配条件
     *
     * @var string
     */
    public $whitelistLogical;

    /**
     * @description 白名单规则匹配条件
     *
     * @var string
     */
    public $whitelistRuleCondition;

    /**
     * @description 白名单模板包含规则数
     *
     * @var int
     */
    public $whitelistRuleInTemplateMaxCount;

    /**
     * @description 白名单模板数
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
