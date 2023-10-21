<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorListResponseBody\siteMonitors\siteMonitor;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorListResponseBody\siteMonitors\siteMonitor\optionsJson\assertions;
use AlibabaCloud\Tea\Model;

class optionsJson extends Model
{
    /**
     * @description The acceptable status code.
     *
     * >  We recommend that you configure assertions.
     * @example 400
     *
     * @var string
     */
    public $acceptableResponseCode;

    /**
     * @description The assertions.
     *
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
     *   0: The feature is enabled.
     *   1: The feature is disabled.
     *
     * @example 1
     *
     * @var int
     */
    public $authentication;

    /**
     * @description Indicates whether the certificate is verified. Valid values:
     *
     *   false (default value): The certificate is not verified.
     *   true: The certificate is verified.
     *
     * @example false
     *
     * @var bool
     */
    public $certVerify;

    /**
     * @description The cookie of the HTTP request.
     *
     * @example lang=en
     *
     * @var string
     */
    public $cookie;

    /**
     * @description Indicates whether MTR is automatically used to diagnose network issues if a task fails. Valid values:
     *
     *   false (default value): MTR is not automatically used to diagnose network issues if a task fails.
     *   true: MTR is automatically used to diagnose network issues if a task fails.
     *
     * @example false
     *
     * @var bool
     */
    public $diagnosisMtr;

    /**
     * @description Indicates whether ping requests are automatically sent to detect network latency if a detection task fails. Valid values:
     *
     *   false (default value): Ping requests are not automatically sent to detect network latency if a detection task fails.
     *   true: Ping requests are automatically sent to detect network latency if a detection task fails.
     *
     * @example false
     *
     * @var bool
     */
    public $diagnosisPing;

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
     * @description The domain name or IP address of the DNS server.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $dnsServer;

    /**
     * @description The type of the DNS record. This parameter is returned only if the TaskType parameter is set to DNS. Valid values:
     *
     *   A (default value): a record that specifies an IP address related to the specified host name or domain name.
     *   CNAME: a record that maps multiple domain names to a domain name.
     *   NS: a record that specifies a DNS server used to parse domain names.
     *   MX: a record that links domain names to the address of a mail server.
     *   TXT: a record that stores the text information of host name or domain names. The text must be 1 to 512 bytes in length. The TXT record serves as a Sender Policy Framework (SPF) record to fight against spam.
     *   AAAA: a record that maps a domain name to the relevant IPv6 address.
     *
     * @example A
     *
     * @var string
     */
    public $dnsType;

    /**
     * @description Indicates whether the DNS server of the carrier is used.
     *
     *   true (default value): The DNS server of the carrier is used.
     *   false: The DNS server of the carrier is not used. The default DNS server or the specified DNS server is used.
     *
     * @example true
     *
     * @var bool
     */
    public $enableOperatorDns;

    /**
     * @description The packet loss rate.
     *
     * >  This parameter is returned only if the TaskType parameter is set to PING.
     * @example 0.5
     *
     * @var float
     */
    public $failureRate;

    /**
     * @description The header of the HTTP request. An HTTP header is a key-value pair in which the key and the value are separated by a colon (:). The format is `key1:value1`. Each HTTP header occupies a line.
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
     * @description Indicates whether the password is decoded by using the Base64 algorithm. Valid values:
     *
     *   true: The password is decoded by using the Base64 algorithm.
     *   false (default value): The password is not decoded by using the Base64 algorithm.
     *
     * @example false
     *
     * @var string
     */
    public $isBase64Encode;

    /**
     * @description Indicates whether the alert rule is included. Valid values:
     *
     *   0: The alert rule is included.
     *   1: The alert rule is not included.
     *
     * @example 0
     *
     * @var int
     */
    public $matchRule;

    /**
     * @description The password of the SMTP, POP3, or FTP protocol.
     *
     * @example 123****
     *
     * @var string
     */
    public $password;

    /**
     * @description The number of hops for the PING protocol.
     *
     * @example 20
     *
     * @var int
     */
    public $pingNum;

    /**
     * @description The port number of the TCP, UDP, SMTP, or POP3 protocol.
     *
     * @example 80
     *
     * @var int
     */
    public $port;

    /**
     * @description The protocol type of DNS detection. Valid values:
     *
     *   udp (default value)
     *   tcp
     *   tcp-tls
     *
     * @example udp
     *
     * @var string
     */
    public $protocol;

    /**
     * @description Indicates whether the PROXY protocol is enabled. Valid values:
     *
     *   false (default value): The PROXY protocol is disabled.
     *   true: The PROXY protocol is enabled.
     *
     * @example false
     *
     * @var bool
     */
    public $proxyProtocol;

    /**
     * @description The content of the HTTP request.
     *
     * @example cf0f85
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
     * @example hex
     *
     * @var string
     */
    public $requestFormat;

    /**
     * @description The response to the HTTP request.
     *
     *   Hexadecimal format: If the request content is a byte string and cannot be represented in printable characters, you can convert the byte string to printable characters in the hexadecimal format. If you convert the byte string to printable characters in the hexadecimal format, one byte is converted to two hexadecimal characters. For example, (byte)1 is converted to `01` and (byte)27 is converted to `1B`. If the request content is a binary array in the Java format, for example, `{(byte)1, (byte)27}`, you can convert the binary array to `011b` or `011B`. Hexadecimal characters are not case-sensitive in site monitoring tasks. You can enter `011B` in the request content and set the request_format parameter to hex.
     *   Text format: Common text refers to strings that consist of printable characters.
     *
     * @example cf0f85
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
     * @example hex
     *
     * @var string
     */
    public $responseFormat;

    /**
     * @description The number of times a failed detection request is retried.
     *
     * @example 1
     *
     * @var int
     */
    public $retryDelay;

    /**
     * @description The timeout period. Unit: milliseconds.
     *
     * @example 3000
     *
     * @var int
     */
    public $timeOut;

    /**
     * @description Indicates whether redirects are followed if the status code 301 or 302 is returned. Valid values:
     *
     *   true: Redirects are not followed.
     *   false (default value): Redirects are followed.
     *
     * @example false
     *
     * @var bool
     */
    public $unfollowRedirect;

    /**
     * @description The username of the FTP, SMTP, or POP3 protocol.
     *
     * @example testUser
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'acceptableResponseCode' => 'acceptable_response_code',
        'assertions'             => 'assertions',
        'attempts'               => 'attempts',
        'authentication'         => 'authentication',
        'certVerify'             => 'cert_verify',
        'cookie'                 => 'cookie',
        'diagnosisMtr'           => 'diagnosis_mtr',
        'diagnosisPing'          => 'diagnosis_ping',
        'dnsMatchRule'           => 'dns_match_rule',
        'dnsServer'              => 'dns_server',
        'dnsType'                => 'dns_type',
        'enableOperatorDns'      => 'enable_operator_dns',
        'failureRate'            => 'failure_rate',
        'header'                 => 'header',
        'httpMethod'             => 'http_method',
        'isBase64Encode'         => 'isBase64Encode',
        'matchRule'              => 'match_rule',
        'password'               => 'password',
        'pingNum'                => 'ping_num',
        'port'                   => 'port',
        'protocol'               => 'protocol',
        'proxyProtocol'          => 'proxy_protocol',
        'requestContent'         => 'request_content',
        'requestFormat'          => 'request_format',
        'responseContent'        => 'response_content',
        'responseFormat'         => 'response_format',
        'retryDelay'             => 'retry_delay',
        'timeOut'                => 'time_out',
        'unfollowRedirect'       => 'unfollow_redirect',
        'username'               => 'username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptableResponseCode) {
            $res['acceptable_response_code'] = $this->acceptableResponseCode;
        }
        if (null !== $this->assertions) {
            $res['assertions'] = null !== $this->assertions ? $this->assertions->toMap() : null;
        }
        if (null !== $this->attempts) {
            $res['attempts'] = $this->attempts;
        }
        if (null !== $this->authentication) {
            $res['authentication'] = $this->authentication;
        }
        if (null !== $this->certVerify) {
            $res['cert_verify'] = $this->certVerify;
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
        if (null !== $this->dnsMatchRule) {
            $res['dns_match_rule'] = $this->dnsMatchRule;
        }
        if (null !== $this->dnsServer) {
            $res['dns_server'] = $this->dnsServer;
        }
        if (null !== $this->dnsType) {
            $res['dns_type'] = $this->dnsType;
        }
        if (null !== $this->enableOperatorDns) {
            $res['enable_operator_dns'] = $this->enableOperatorDns;
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
        if (null !== $this->password) {
            $res['password'] = $this->password;
        }
        if (null !== $this->pingNum) {
            $res['ping_num'] = $this->pingNum;
        }
        if (null !== $this->port) {
            $res['port'] = $this->port;
        }
        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }
        if (null !== $this->proxyProtocol) {
            $res['proxy_protocol'] = $this->proxyProtocol;
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
        if (null !== $this->timeOut) {
            $res['time_out'] = $this->timeOut;
        }
        if (null !== $this->unfollowRedirect) {
            $res['unfollow_redirect'] = $this->unfollowRedirect;
        }
        if (null !== $this->username) {
            $res['username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return optionsJson
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['acceptable_response_code'])) {
            $model->acceptableResponseCode = $map['acceptable_response_code'];
        }
        if (isset($map['assertions'])) {
            $model->assertions = assertions::fromMap($map['assertions']);
        }
        if (isset($map['attempts'])) {
            $model->attempts = $map['attempts'];
        }
        if (isset($map['authentication'])) {
            $model->authentication = $map['authentication'];
        }
        if (isset($map['cert_verify'])) {
            $model->certVerify = $map['cert_verify'];
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
        if (isset($map['dns_match_rule'])) {
            $model->dnsMatchRule = $map['dns_match_rule'];
        }
        if (isset($map['dns_server'])) {
            $model->dnsServer = $map['dns_server'];
        }
        if (isset($map['dns_type'])) {
            $model->dnsType = $map['dns_type'];
        }
        if (isset($map['enable_operator_dns'])) {
            $model->enableOperatorDns = $map['enable_operator_dns'];
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
        if (isset($map['password'])) {
            $model->password = $map['password'];
        }
        if (isset($map['ping_num'])) {
            $model->pingNum = $map['ping_num'];
        }
        if (isset($map['port'])) {
            $model->port = $map['port'];
        }
        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }
        if (isset($map['proxy_protocol'])) {
            $model->proxyProtocol = $map['proxy_protocol'];
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
        if (isset($map['time_out'])) {
            $model->timeOut = $map['time_out'];
        }
        if (isset($map['unfollow_redirect'])) {
            $model->unfollowRedirect = $map['unfollow_redirect'];
        }
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }

        return $model;
    }
}
