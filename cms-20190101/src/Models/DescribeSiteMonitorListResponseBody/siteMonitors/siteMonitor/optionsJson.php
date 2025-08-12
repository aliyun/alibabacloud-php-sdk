<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorListResponseBody\siteMonitors\siteMonitor;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorListResponseBody\siteMonitors\siteMonitor\optionsJson\assertions;

class optionsJson extends Model
{
    /**
     * @var string
     */
    public $acceptableResponseCode;

    /**
     * @var assertions
     */
    public $assertions;

    /**
     * @var int
     */
    public $attempts;

    /**
     * @var int
     */
    public $authentication;

    /**
     * @var bool
     */
    public $certVerify;

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
    public $enableOperatorDns;

    /**
     * @var float
     */
    public $failureRate;

    /**
     * @var string
     */
    public $header;

    /**
     * @var string
     */
    public $httpMethod;

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
    public $password;

    /**
     * @var int
     */
    public $pingNum;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var bool
     */
    public $proxyProtocol;

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
    public $timeOut;

    /**
     * @var bool
     */
    public $unfollowRedirect;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'acceptableResponseCode' => 'acceptable_response_code',
        'assertions' => 'assertions',
        'attempts' => 'attempts',
        'authentication' => 'authentication',
        'certVerify' => 'cert_verify',
        'cookie' => 'cookie',
        'diagnosisMtr' => 'diagnosis_mtr',
        'diagnosisPing' => 'diagnosis_ping',
        'dnsMatchRule' => 'dns_match_rule',
        'dnsServer' => 'dns_server',
        'dnsType' => 'dns_type',
        'enableOperatorDns' => 'enable_operator_dns',
        'failureRate' => 'failure_rate',
        'header' => 'header',
        'httpMethod' => 'http_method',
        'isBase64Encode' => 'isBase64Encode',
        'matchRule' => 'match_rule',
        'password' => 'password',
        'pingNum' => 'ping_num',
        'port' => 'port',
        'protocol' => 'protocol',
        'proxyProtocol' => 'proxy_protocol',
        'requestContent' => 'request_content',
        'requestFormat' => 'request_format',
        'responseContent' => 'response_content',
        'responseFormat' => 'response_format',
        'retryDelay' => 'retry_delay',
        'timeOut' => 'time_out',
        'unfollowRedirect' => 'unfollow_redirect',
        'username' => 'username',
    ];

    public function validate()
    {
        if (null !== $this->assertions) {
            $this->assertions->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptableResponseCode) {
            $res['acceptable_response_code'] = $this->acceptableResponseCode;
        }

        if (null !== $this->assertions) {
            $res['assertions'] = null !== $this->assertions ? $this->assertions->toArray($noStream) : $this->assertions;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
