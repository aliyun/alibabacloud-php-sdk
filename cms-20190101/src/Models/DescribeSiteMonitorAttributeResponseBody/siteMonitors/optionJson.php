<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson\assertions;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson\blockedUrlList;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson\browserHeaders;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson\browserHosts;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson\browserInfo;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson\expectExistString;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson\expectNonExistString;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson\trafficHijackElementBlacklist;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson\trafficHijackElementWhitelist;
use AlibabaCloud\Tea\Model;

class optionJson extends Model
{
    /**
     * @var assertions
     */
    public $assertions;

    /**
     * @description The number of retries after a DNS failure occurred.
     *
     * @example 3
     *
     * @var int
     */
    public $attempts;

    /**
     * @description Indicates whether the security authentication feature is enabled. Valid values:
     *
     *   0: The feature is disabled.
     *   1: The feature is enabled.
     *
     * @example 1
     *
     * @var int
     */
    public $authentication;

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
     * @example false
     *
     * @var bool
     */
    public $browserInsecure;

    /**
     * @example 1
     *
     * @var string
     */
    public $browserTaskVersion;

    /**
     * @description The cookie of the HTTP request.
     *
     * @example lang=en
     *
     * @var string
     */
    public $cookie;

    /**
     * @example false
     *
     * @var bool
     */
    public $diagnosisMtr;

    /**
     * @example false
     *
     * @var bool
     */
    public $diagnosisPing;

    /**
     * @example www.taobao.com:www.taobao.com.danuoyi.tbcache.com
     *
     * @var string
     */
    public $dnsHijackWhitelist;

    /**
     * @description The relationship between the list of expected aliases or IP addresses and the list of DNS results. Valid values:
     *
     *   IN_DNS: The list of expected values is a subset of the list of DNS results.
     *   DNS_IN: The list of DNS results is a subset of the list of expected values.
     *   EQUAL: The list of DNS results is the same as the list of expected values.
     *   ANY: The list of DNS results intersects with the list of expected values.
     *
     * @example IN_DNS
     *
     * @var string
     */
    public $dnsMatchRule;

    /**
     * @description The IP address of the DNS server.
     *
     * >  This parameter is returned only if the TaskType parameter is set to DNS.
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $dnsServer;

    /**
     * @description The type of the DNS record. This parameter is returned only if the TaskType parameter is set to DNS. Valid values:
     *
     *   A (default): a record that specifies an IP address related to the specified host name or domain name.
     *   CNAME: a record that maps multiple domain names to a domain name.
     *   NS: a record that specifies a DNS server used to parse domain names.
     *   MX: a record that links domain names to the address of a mail server.
     *   TXT: a record that stores the text information of host name or domain names. The text must be 1 to 512 bytes in length. The TXT record serves as a Sender Policy Framework (SPF) record to fight against spam.
     *
     * @example A
     *
     * @var string
     */
    public $dnsType;

    /**
     * @var expectExistString
     */
    public $expectExistString;

    /**
     * @var expectNonExistString
     */
    public $expectNonExistString;

    /**
     * @description The domain name or alias to be parsed.
     *
     * >  This parameter is returned only if the TaskType parameter is set to DNS.
     * @example dns_server
     *
     * @var string
     */
    public $expectValue;

    /**
     * @description The packet loss rate.
     *
     * >  This parameter is returned only if the TaskType parameter is set to PING.
     * @example 0.4
     *
     * @var float
     */
    public $failureRate;

    /**
     * @description The header of the HTTP request.
     *
     * @example testKey:testValue
     *
     * @var string
     */
    public $header;

    /**
     * @description The HTTP request method. Valid values:
     *
     *   get
     *   post
     *   head
     *
     * @example get
     *
     * @var string
     */
    public $httpMethod;

    /**
     * @example true
     *
     * @var string
     */
    public $isBase64Encode;

    /**
     * @description Indicates whether the alert rule is included. Valid values:
     *
     *   0: The alert rule is included.
     *   1: The alert rule is excluded.
     *
     * @example 1
     *
     * @var int
     */
    public $matchRule;

    /**
     * @example tlsv1.2
     *
     * @var string
     */
    public $minTlsVersion;

    /**
     * @description The password of the SMTP, POP3, or FTP protocol.
     *
     * @example 123****
     *
     * @var string
     */
    public $password;

    /**
     * @description The heartbeat of the PING protocol.
     *
     * @example 29
     *
     * @var int
     */
    public $pingNum;

    /**
     * @example 80
     *
     * @var int
     */
    public $pingPort;

    /**
     * @example icmp,tcp,udp
     *
     * @var string
     */
    public $pingType;

    /**
     * @description The port number of the TCP, UDP, SMTP, or POP3 protocol.
     *
     * @example 110
     *
     * @var int
     */
    public $port;

    /**
     * @description The protocol that is used to send the request.
     *
     * @example TCP
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The content of the HTTP request.
     *
     * @example aa=bb
     *
     * @var string
     */
    public $requestContent;

    /**
     * @description The format of the HTTP request. Valid values:
     *
     *   hex: hexadecimal
     *   txt: text
     *
     * @example txt
     *
     * @var string
     */
    public $requestFormat;

    /**
     * @description The response to the HTTP request.
     *
     * @example txt
     *
     * @var string
     */
    public $responseContent;

    /**
     * @description The format of the HTTP response. Valid values:
     *
     *   hex: hexadecimal
     *   txt: text
     *
     * @example txt
     *
     * @var string
     */
    public $responseFormat;

    /**
     * @example 0
     *
     * @var int
     */
    public $retryDelay;

    /**
     * @example false
     *
     * @var bool
     */
    public $strictMode;

    /**
     * @description The timeout period. Unit: milliseconds.
     *
     * @example 3
     *
     * @var int
     */
    public $timeOut;

    /**
     * @var trafficHijackElementBlacklist
     */
    public $trafficHijackElementBlacklist;

    /**
     * @example 0
     *
     * @var int
     */
    public $trafficHijackElementCount;

    /**
     * @var trafficHijackElementWhitelist
     */
    public $trafficHijackElementWhitelist;

    /**
     * @description The username of the FTP, SMTP, or POP3 protocol.
     *
     * @example testUser
     *
     * @var string
     */
    public $username;

    /**
     * @example 3
     *
     * @var int
     */
    public $waitTimeAfterCompletion;
    protected $_name = [
        'assertions'                    => 'assertions',
        'attempts'                      => 'attempts',
        'authentication'                => 'authentication',
        'blockedUrlList'                => 'blocked_url_list',
        'browserHeaders'                => 'browser_headers',
        'browserHosts'                  => 'browser_hosts',
        'browserInfo'                   => 'browser_info',
        'browserInsecure'               => 'browser_insecure',
        'browserTaskVersion'            => 'browser_task_version',
        'cookie'                        => 'cookie',
        'diagnosisMtr'                  => 'diagnosis_mtr',
        'diagnosisPing'                 => 'diagnosis_ping',
        'dnsHijackWhitelist'            => 'dns_hijack_whitelist',
        'dnsMatchRule'                  => 'dns_match_rule',
        'dnsServer'                     => 'dns_server',
        'dnsType'                       => 'dns_type',
        'expectExistString'             => 'expect_exist_string',
        'expectNonExistString'          => 'expect_non_exist_string',
        'expectValue'                   => 'expect_value',
        'failureRate'                   => 'failure_rate',
        'header'                        => 'header',
        'httpMethod'                    => 'http_method',
        'isBase64Encode'                => 'isBase64Encode',
        'matchRule'                     => 'match_rule',
        'minTlsVersion'                 => 'min_tls_version',
        'password'                      => 'password',
        'pingNum'                       => 'ping_num',
        'pingPort'                      => 'ping_port',
        'pingType'                      => 'ping_type',
        'port'                          => 'port',
        'protocol'                      => 'protocol',
        'requestContent'                => 'request_content',
        'requestFormat'                 => 'request_format',
        'responseContent'               => 'response_content',
        'responseFormat'                => 'response_format',
        'retryDelay'                    => 'retry_delay',
        'strictMode'                    => 'strict_mode',
        'timeOut'                       => 'time_out',
        'trafficHijackElementBlacklist' => 'traffic_hijack_element_blacklist',
        'trafficHijackElementCount'     => 'traffic_hijack_element_count',
        'trafficHijackElementWhitelist' => 'traffic_hijack_element_whitelist',
        'username'                      => 'username',
        'waitTimeAfterCompletion'       => 'waitTime_after_completion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assertions) {
            $res['assertions'] = null !== $this->assertions ? $this->assertions->toMap() : null;
        }
        if (null !== $this->attempts) {
            $res['attempts'] = $this->attempts;
        }
        if (null !== $this->authentication) {
            $res['authentication'] = $this->authentication;
        }
        if (null !== $this->blockedUrlList) {
            $res['blocked_url_list'] = null !== $this->blockedUrlList ? $this->blockedUrlList->toMap() : null;
        }
        if (null !== $this->browserHeaders) {
            $res['browser_headers'] = null !== $this->browserHeaders ? $this->browserHeaders->toMap() : null;
        }
        if (null !== $this->browserHosts) {
            $res['browser_hosts'] = null !== $this->browserHosts ? $this->browserHosts->toMap() : null;
        }
        if (null !== $this->browserInfo) {
            $res['browser_info'] = null !== $this->browserInfo ? $this->browserInfo->toMap() : null;
        }
        if (null !== $this->browserInsecure) {
            $res['browser_insecure'] = $this->browserInsecure;
        }
        if (null !== $this->browserTaskVersion) {
            $res['browser_task_version'] = $this->browserTaskVersion;
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
        if (null !== $this->expectExistString) {
            $res['expect_exist_string'] = null !== $this->expectExistString ? $this->expectExistString->toMap() : null;
        }
        if (null !== $this->expectNonExistString) {
            $res['expect_non_exist_string'] = null !== $this->expectNonExistString ? $this->expectNonExistString->toMap() : null;
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
        if (null !== $this->httpMethod) {
            $res['http_method'] = $this->httpMethod;
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
        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
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
        if (null !== $this->strictMode) {
            $res['strict_mode'] = $this->strictMode;
        }
        if (null !== $this->timeOut) {
            $res['time_out'] = $this->timeOut;
        }
        if (null !== $this->trafficHijackElementBlacklist) {
            $res['traffic_hijack_element_blacklist'] = null !== $this->trafficHijackElementBlacklist ? $this->trafficHijackElementBlacklist->toMap() : null;
        }
        if (null !== $this->trafficHijackElementCount) {
            $res['traffic_hijack_element_count'] = $this->trafficHijackElementCount;
        }
        if (null !== $this->trafficHijackElementWhitelist) {
            $res['traffic_hijack_element_whitelist'] = null !== $this->trafficHijackElementWhitelist ? $this->trafficHijackElementWhitelist->toMap() : null;
        }
        if (null !== $this->username) {
            $res['username'] = $this->username;
        }
        if (null !== $this->waitTimeAfterCompletion) {
            $res['waitTime_after_completion'] = $this->waitTimeAfterCompletion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return optionJson
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['assertions'])) {
            $model->assertions = assertions::fromMap($map['assertions']);
        }
        if (isset($map['attempts'])) {
            $model->attempts = $map['attempts'];
        }
        if (isset($map['authentication'])) {
            $model->authentication = $map['authentication'];
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
        if (isset($map['http_method'])) {
            $model->httpMethod = $map['http_method'];
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
        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
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
        if (isset($map['strict_mode'])) {
            $model->strictMode = $map['strict_mode'];
        }
        if (isset($map['time_out'])) {
            $model->timeOut = $map['time_out'];
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
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }
        if (isset($map['waitTime_after_completion'])) {
            $model->waitTimeAfterCompletion = $map['waitTime_after_completion'];
        }

        return $model;
    }
}
