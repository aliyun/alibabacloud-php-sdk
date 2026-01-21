<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson\assertions;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson\authInfo;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson\blockedUrlList;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson\browserHeaders;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson\browserHosts;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson\browserInfo;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson\configVariables;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson\expectExistString;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson\expectNonExistString;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson\quicTarget;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson\steps;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson\trafficHijackElementBlacklist;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson\trafficHijackElementWhitelist;

class optionJson extends Model
{
    /**
     * @var assertions
     */
    public $assertions;

    /**
     * @var int
     */
    public $attempts;

    /**
     * @var authInfo
     */
    public $authInfo;

    /**
     * @var blockedUrlList
     */
    public $blockedUrlList;

    /**
     * @var browserHeaders
     */
    public $browserHeaders;

    /**
     * @var browserHosts
     */
    public $browserHosts;

    /**
     * @var browserInfo
     */
    public $browserInfo;

    /**
     * @var bool
     */
    public $browserInsecure;

    /**
     * @var string
     */
    public $browserTaskVersion;

    /**
     * @var configVariables
     */
    public $configVariables;

    /**
     * @var string
     */
    public $cookie;

    /**
     * @var bool
     */
    public $diagnosisMtr;

    /**
     * @var bool
     */
    public $diagnosisPing;

    /**
     * @var string
     */
    public $dnsHijackWhitelist;

    /**
     * @var string
     */
    public $dnsMatchRule;

    /**
     * @var string
     */
    public $dnsServer;

    /**
     * @var string
     */
    public $dnsType;

    /**
     * @var bool
     */
    public $emptyMessage;

    /**
     * @var bool
     */
    public $enablePacketCapture;

    /**
     * @var expectExistString
     */
    public $expectExistString;

    /**
     * @var expectNonExistString
     */
    public $expectNonExistString;

    /**
     * @var string
     */
    public $expectValue;

    /**
     * @var float
     */
    public $failureRate;

    /**
     * @var string
     */
    public $header;

    /**
     * @var int
     */
    public $hops;

    /**
     * @var string
     */
    public $hostBinding;

    /**
     * @var int
     */
    public $hostBindingType;

    /**
     * @var string
     */
    public $httpMethod;

    /**
     * @var int
     */
    public $icmpTimeoutMillis;

    /**
     * @var string
     */
    public $ipNetwork;

    /**
     * @var string
     */
    public $isBase64Encode;

    /**
     * @var int
     */
    public $matchRule;

    /**
     * @var string
     */
    public $minTlsVersion;

    /**
     * @var string
     */
    public $password;

    /**
     * @var int
     */
    public $pingNum;

    /**
     * @var int
     */
    public $pingPort;

    /**
     * @var string
     */
    public $pingType;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $privateCrtFileName;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var bool
     */
    public $quicEnabled;

    /**
     * @var quicTarget
     */
    public $quicTarget;

    /**
     * @var string
     */
    public $requestContent;

    /**
     * @var string
     */
    public $requestFormat;

    /**
     * @var string
     */
    public $responseContent;

    /**
     * @var string
     */
    public $responseFormat;

    /**
     * @var int
     */
    public $retryDelay;

    /**
     * @var int
     */
    public $safeLink;

    /**
     * @var bool
     */
    public $screenShot;

    /**
     * @var bool
     */
    public $scrollEnd;

    /**
     * @var steps
     */
    public $steps;

    /**
     * @var bool
     */
    public $strictMode;

    /**
     * @var int
     */
    public $timeOut;

    /**
     * @var string
     */
    public $traceRegion;

    /**
     * @var string
     */
    public $traceType;

    /**
     * @var trafficHijackElementBlacklist
     */
    public $trafficHijackElementBlacklist;

    /**
     * @var int
     */
    public $trafficHijackElementCount;

    /**
     * @var trafficHijackElementWhitelist
     */
    public $trafficHijackElementWhitelist;

    /**
     * @var bool
     */
    public $usePrivateCrt;

    /**
     * @var string
     */
    public $username;

    /**
     * @var int
     */
    public $waitTimeAfterCompletion;
    protected $_name = [
        'assertions' => 'assertions',
        'attempts' => 'attempts',
        'authInfo' => 'auth_info',
        'blockedUrlList' => 'blocked_url_list',
        'browserHeaders' => 'browser_headers',
        'browserHosts' => 'browser_hosts',
        'browserInfo' => 'browser_info',
        'browserInsecure' => 'browser_insecure',
        'browserTaskVersion' => 'browser_task_version',
        'configVariables' => 'config_variables',
        'cookie' => 'cookie',
        'diagnosisMtr' => 'diagnosis_mtr',
        'diagnosisPing' => 'diagnosis_ping',
        'dnsHijackWhitelist' => 'dns_hijack_whitelist',
        'dnsMatchRule' => 'dns_match_rule',
        'dnsServer' => 'dns_server',
        'dnsType' => 'dns_type',
        'emptyMessage' => 'empty_message',
        'enablePacketCapture' => 'enable_packet_capture',
        'expectExistString' => 'expect_exist_string',
        'expectNonExistString' => 'expect_non_exist_string',
        'expectValue' => 'expect_value',
        'failureRate' => 'failure_rate',
        'header' => 'header',
        'hops' => 'hops',
        'hostBinding' => 'host_binding',
        'hostBindingType' => 'host_binding_type',
        'httpMethod' => 'http_method',
        'icmpTimeoutMillis' => 'icmp_timeout_millis',
        'ipNetwork' => 'ip_network',
        'isBase64Encode' => 'isBase64Encode',
        'matchRule' => 'match_rule',
        'minTlsVersion' => 'min_tls_version',
        'password' => 'password',
        'pingNum' => 'ping_num',
        'pingPort' => 'ping_port',
        'pingType' => 'ping_type',
        'port' => 'port',
        'privateCrtFileName' => 'private_crt_file_name',
        'protocol' => 'protocol',
        'quicEnabled' => 'quic_enabled',
        'quicTarget' => 'quic_target',
        'requestContent' => 'request_content',
        'requestFormat' => 'request_format',
        'responseContent' => 'response_content',
        'responseFormat' => 'response_format',
        'retryDelay' => 'retry_delay',
        'safeLink' => 'safe_link',
        'screenShot' => 'screen_shot',
        'scrollEnd' => 'scroll_end',
        'steps' => 'steps',
        'strictMode' => 'strict_mode',
        'timeOut' => 'time_out',
        'traceRegion' => 'trace_region',
        'traceType' => 'trace_type',
        'trafficHijackElementBlacklist' => 'traffic_hijack_element_blacklist',
        'trafficHijackElementCount' => 'traffic_hijack_element_count',
        'trafficHijackElementWhitelist' => 'traffic_hijack_element_whitelist',
        'usePrivateCrt' => 'use_private_crt',
        'username' => 'username',
        'waitTimeAfterCompletion' => 'waitTime_after_completion',
    ];

    public function validate()
    {
        if (null !== $this->assertions) {
            $this->assertions->validate();
        }
        if (null !== $this->authInfo) {
            $this->authInfo->validate();
        }
        if (null !== $this->blockedUrlList) {
            $this->blockedUrlList->validate();
        }
        if (null !== $this->browserHeaders) {
            $this->browserHeaders->validate();
        }
        if (null !== $this->browserHosts) {
            $this->browserHosts->validate();
        }
        if (null !== $this->browserInfo) {
            $this->browserInfo->validate();
        }
        if (null !== $this->configVariables) {
            $this->configVariables->validate();
        }
        if (null !== $this->expectExistString) {
            $this->expectExistString->validate();
        }
        if (null !== $this->expectNonExistString) {
            $this->expectNonExistString->validate();
        }
        if (null !== $this->quicTarget) {
            $this->quicTarget->validate();
        }
        if (null !== $this->steps) {
            $this->steps->validate();
        }
        if (null !== $this->trafficHijackElementBlacklist) {
            $this->trafficHijackElementBlacklist->validate();
        }
        if (null !== $this->trafficHijackElementWhitelist) {
            $this->trafficHijackElementWhitelist->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assertions) {
            $res['assertions'] = null !== $this->assertions ? $this->assertions->toArray($noStream) : $this->assertions;
        }

        if (null !== $this->attempts) {
            $res['attempts'] = $this->attempts;
        }

        if (null !== $this->authInfo) {
            $res['auth_info'] = null !== $this->authInfo ? $this->authInfo->toArray($noStream) : $this->authInfo;
        }

        if (null !== $this->blockedUrlList) {
            $res['blocked_url_list'] = null !== $this->blockedUrlList ? $this->blockedUrlList->toArray($noStream) : $this->blockedUrlList;
        }

        if (null !== $this->browserHeaders) {
            $res['browser_headers'] = null !== $this->browserHeaders ? $this->browserHeaders->toArray($noStream) : $this->browserHeaders;
        }

        if (null !== $this->browserHosts) {
            $res['browser_hosts'] = null !== $this->browserHosts ? $this->browserHosts->toArray($noStream) : $this->browserHosts;
        }

        if (null !== $this->browserInfo) {
            $res['browser_info'] = null !== $this->browserInfo ? $this->browserInfo->toArray($noStream) : $this->browserInfo;
        }

        if (null !== $this->browserInsecure) {
            $res['browser_insecure'] = $this->browserInsecure;
        }

        if (null !== $this->browserTaskVersion) {
            $res['browser_task_version'] = $this->browserTaskVersion;
        }

        if (null !== $this->configVariables) {
            $res['config_variables'] = null !== $this->configVariables ? $this->configVariables->toArray($noStream) : $this->configVariables;
        }

        if (null !== $this->cookie) {
            $res['cookie'] = $this->cookie;
        }

        if (null !== $this->diagnosisMtr) {
            $res['diagnosis_mtr'] = $this->diagnosisMtr;
        }

        if (null !== $this->diagnosisPing) {
            $res['diagnosis_ping'] = $this->diagnosisPing;
        }

        if (null !== $this->dnsHijackWhitelist) {
            $res['dns_hijack_whitelist'] = $this->dnsHijackWhitelist;
        }

        if (null !== $this->dnsMatchRule) {
            $res['dns_match_rule'] = $this->dnsMatchRule;
        }

        if (null !== $this->dnsServer) {
            $res['dns_server'] = $this->dnsServer;
        }

        if (null !== $this->dnsType) {
            $res['dns_type'] = $this->dnsType;
        }

        if (null !== $this->emptyMessage) {
            $res['empty_message'] = $this->emptyMessage;
        }

        if (null !== $this->enablePacketCapture) {
            $res['enable_packet_capture'] = $this->enablePacketCapture;
        }

        if (null !== $this->expectExistString) {
            $res['expect_exist_string'] = null !== $this->expectExistString ? $this->expectExistString->toArray($noStream) : $this->expectExistString;
        }

        if (null !== $this->expectNonExistString) {
            $res['expect_non_exist_string'] = null !== $this->expectNonExistString ? $this->expectNonExistString->toArray($noStream) : $this->expectNonExistString;
        }

        if (null !== $this->expectValue) {
            $res['expect_value'] = $this->expectValue;
        }

        if (null !== $this->failureRate) {
            $res['failure_rate'] = $this->failureRate;
        }

        if (null !== $this->header) {
            $res['header'] = $this->header;
        }

        if (null !== $this->hops) {
            $res['hops'] = $this->hops;
        }

        if (null !== $this->hostBinding) {
            $res['host_binding'] = $this->hostBinding;
        }

        if (null !== $this->hostBindingType) {
            $res['host_binding_type'] = $this->hostBindingType;
        }

        if (null !== $this->httpMethod) {
            $res['http_method'] = $this->httpMethod;
        }

        if (null !== $this->icmpTimeoutMillis) {
            $res['icmp_timeout_millis'] = $this->icmpTimeoutMillis;
        }

        if (null !== $this->ipNetwork) {
            $res['ip_network'] = $this->ipNetwork;
        }

        if (null !== $this->isBase64Encode) {
            $res['isBase64Encode'] = $this->isBase64Encode;
        }

        if (null !== $this->matchRule) {
            $res['match_rule'] = $this->matchRule;
        }

        if (null !== $this->minTlsVersion) {
            $res['min_tls_version'] = $this->minTlsVersion;
        }

        if (null !== $this->password) {
            $res['password'] = $this->password;
        }

        if (null !== $this->pingNum) {
            $res['ping_num'] = $this->pingNum;
        }

        if (null !== $this->pingPort) {
            $res['ping_port'] = $this->pingPort;
        }

        if (null !== $this->pingType) {
            $res['ping_type'] = $this->pingType;
        }

        if (null !== $this->port) {
            $res['port'] = $this->port;
        }

        if (null !== $this->privateCrtFileName) {
            $res['private_crt_file_name'] = $this->privateCrtFileName;
        }

        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }

        if (null !== $this->quicEnabled) {
            $res['quic_enabled'] = $this->quicEnabled;
        }

        if (null !== $this->quicTarget) {
            $res['quic_target'] = null !== $this->quicTarget ? $this->quicTarget->toArray($noStream) : $this->quicTarget;
        }

        if (null !== $this->requestContent) {
            $res['request_content'] = $this->requestContent;
        }

        if (null !== $this->requestFormat) {
            $res['request_format'] = $this->requestFormat;
        }

        if (null !== $this->responseContent) {
            $res['response_content'] = $this->responseContent;
        }

        if (null !== $this->responseFormat) {
            $res['response_format'] = $this->responseFormat;
        }

        if (null !== $this->retryDelay) {
            $res['retry_delay'] = $this->retryDelay;
        }

        if (null !== $this->safeLink) {
            $res['safe_link'] = $this->safeLink;
        }

        if (null !== $this->screenShot) {
            $res['screen_shot'] = $this->screenShot;
        }

        if (null !== $this->scrollEnd) {
            $res['scroll_end'] = $this->scrollEnd;
        }

        if (null !== $this->steps) {
            $res['steps'] = null !== $this->steps ? $this->steps->toArray($noStream) : $this->steps;
        }

        if (null !== $this->strictMode) {
            $res['strict_mode'] = $this->strictMode;
        }

        if (null !== $this->timeOut) {
            $res['time_out'] = $this->timeOut;
        }

        if (null !== $this->traceRegion) {
            $res['trace_region'] = $this->traceRegion;
        }

        if (null !== $this->traceType) {
            $res['trace_type'] = $this->traceType;
        }

        if (null !== $this->trafficHijackElementBlacklist) {
            $res['traffic_hijack_element_blacklist'] = null !== $this->trafficHijackElementBlacklist ? $this->trafficHijackElementBlacklist->toArray($noStream) : $this->trafficHijackElementBlacklist;
        }

        if (null !== $this->trafficHijackElementCount) {
            $res['traffic_hijack_element_count'] = $this->trafficHijackElementCount;
        }

        if (null !== $this->trafficHijackElementWhitelist) {
            $res['traffic_hijack_element_whitelist'] = null !== $this->trafficHijackElementWhitelist ? $this->trafficHijackElementWhitelist->toArray($noStream) : $this->trafficHijackElementWhitelist;
        }

        if (null !== $this->usePrivateCrt) {
            $res['use_private_crt'] = $this->usePrivateCrt;
        }

        if (null !== $this->username) {
            $res['username'] = $this->username;
        }

        if (null !== $this->waitTimeAfterCompletion) {
            $res['waitTime_after_completion'] = $this->waitTimeAfterCompletion;
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
        if (isset($map['assertions'])) {
            $model->assertions = assertions::fromMap($map['assertions']);
        }

        if (isset($map['attempts'])) {
            $model->attempts = $map['attempts'];
        }

        if (isset($map['auth_info'])) {
            $model->authInfo = authInfo::fromMap($map['auth_info']);
        }

        if (isset($map['blocked_url_list'])) {
            $model->blockedUrlList = blockedUrlList::fromMap($map['blocked_url_list']);
        }

        if (isset($map['browser_headers'])) {
            $model->browserHeaders = browserHeaders::fromMap($map['browser_headers']);
        }

        if (isset($map['browser_hosts'])) {
            $model->browserHosts = browserHosts::fromMap($map['browser_hosts']);
        }

        if (isset($map['browser_info'])) {
            $model->browserInfo = browserInfo::fromMap($map['browser_info']);
        }

        if (isset($map['browser_insecure'])) {
            $model->browserInsecure = $map['browser_insecure'];
        }

        if (isset($map['browser_task_version'])) {
            $model->browserTaskVersion = $map['browser_task_version'];
        }

        if (isset($map['config_variables'])) {
            $model->configVariables = configVariables::fromMap($map['config_variables']);
        }

        if (isset($map['cookie'])) {
            $model->cookie = $map['cookie'];
        }

        if (isset($map['diagnosis_mtr'])) {
            $model->diagnosisMtr = $map['diagnosis_mtr'];
        }

        if (isset($map['diagnosis_ping'])) {
            $model->diagnosisPing = $map['diagnosis_ping'];
        }

        if (isset($map['dns_hijack_whitelist'])) {
            $model->dnsHijackWhitelist = $map['dns_hijack_whitelist'];
        }

        if (isset($map['dns_match_rule'])) {
            $model->dnsMatchRule = $map['dns_match_rule'];
        }

        if (isset($map['dns_server'])) {
            $model->dnsServer = $map['dns_server'];
        }

        if (isset($map['dns_type'])) {
            $model->dnsType = $map['dns_type'];
        }

        if (isset($map['empty_message'])) {
            $model->emptyMessage = $map['empty_message'];
        }

        if (isset($map['enable_packet_capture'])) {
            $model->enablePacketCapture = $map['enable_packet_capture'];
        }

        if (isset($map['expect_exist_string'])) {
            $model->expectExistString = expectExistString::fromMap($map['expect_exist_string']);
        }

        if (isset($map['expect_non_exist_string'])) {
            $model->expectNonExistString = expectNonExistString::fromMap($map['expect_non_exist_string']);
        }

        if (isset($map['expect_value'])) {
            $model->expectValue = $map['expect_value'];
        }

        if (isset($map['failure_rate'])) {
            $model->failureRate = $map['failure_rate'];
        }

        if (isset($map['header'])) {
            $model->header = $map['header'];
        }

        if (isset($map['hops'])) {
            $model->hops = $map['hops'];
        }

        if (isset($map['host_binding'])) {
            $model->hostBinding = $map['host_binding'];
        }

        if (isset($map['host_binding_type'])) {
            $model->hostBindingType = $map['host_binding_type'];
        }

        if (isset($map['http_method'])) {
            $model->httpMethod = $map['http_method'];
        }

        if (isset($map['icmp_timeout_millis'])) {
            $model->icmpTimeoutMillis = $map['icmp_timeout_millis'];
        }

        if (isset($map['ip_network'])) {
            $model->ipNetwork = $map['ip_network'];
        }

        if (isset($map['isBase64Encode'])) {
            $model->isBase64Encode = $map['isBase64Encode'];
        }

        if (isset($map['match_rule'])) {
            $model->matchRule = $map['match_rule'];
        }

        if (isset($map['min_tls_version'])) {
            $model->minTlsVersion = $map['min_tls_version'];
        }

        if (isset($map['password'])) {
            $model->password = $map['password'];
        }

        if (isset($map['ping_num'])) {
            $model->pingNum = $map['ping_num'];
        }

        if (isset($map['ping_port'])) {
            $model->pingPort = $map['ping_port'];
        }

        if (isset($map['ping_type'])) {
            $model->pingType = $map['ping_type'];
        }

        if (isset($map['port'])) {
            $model->port = $map['port'];
        }

        if (isset($map['private_crt_file_name'])) {
            $model->privateCrtFileName = $map['private_crt_file_name'];
        }

        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }

        if (isset($map['quic_enabled'])) {
            $model->quicEnabled = $map['quic_enabled'];
        }

        if (isset($map['quic_target'])) {
            $model->quicTarget = quicTarget::fromMap($map['quic_target']);
        }

        if (isset($map['request_content'])) {
            $model->requestContent = $map['request_content'];
        }

        if (isset($map['request_format'])) {
            $model->requestFormat = $map['request_format'];
        }

        if (isset($map['response_content'])) {
            $model->responseContent = $map['response_content'];
        }

        if (isset($map['response_format'])) {
            $model->responseFormat = $map['response_format'];
        }

        if (isset($map['retry_delay'])) {
            $model->retryDelay = $map['retry_delay'];
        }

        if (isset($map['safe_link'])) {
            $model->safeLink = $map['safe_link'];
        }

        if (isset($map['screen_shot'])) {
            $model->screenShot = $map['screen_shot'];
        }

        if (isset($map['scroll_end'])) {
            $model->scrollEnd = $map['scroll_end'];
        }

        if (isset($map['steps'])) {
            $model->steps = steps::fromMap($map['steps']);
        }

        if (isset($map['strict_mode'])) {
            $model->strictMode = $map['strict_mode'];
        }

        if (isset($map['time_out'])) {
            $model->timeOut = $map['time_out'];
        }

        if (isset($map['trace_region'])) {
            $model->traceRegion = $map['trace_region'];
        }

        if (isset($map['trace_type'])) {
            $model->traceType = $map['trace_type'];
        }

        if (isset($map['traffic_hijack_element_blacklist'])) {
            $model->trafficHijackElementBlacklist = trafficHijackElementBlacklist::fromMap($map['traffic_hijack_element_blacklist']);
        }

        if (isset($map['traffic_hijack_element_count'])) {
            $model->trafficHijackElementCount = $map['traffic_hijack_element_count'];
        }

        if (isset($map['traffic_hijack_element_whitelist'])) {
            $model->trafficHijackElementWhitelist = trafficHijackElementWhitelist::fromMap($map['traffic_hijack_element_whitelist']);
        }

        if (isset($map['use_private_crt'])) {
            $model->usePrivateCrt = $map['use_private_crt'];
        }

        if (isset($map['username'])) {
            $model->username = $map['username'];
        }

        if (isset($map['waitTime_after_completion'])) {
            $model->waitTimeAfterCompletion = $map['waitTime_after_completion'];
        }

        return $model;
    }
}
