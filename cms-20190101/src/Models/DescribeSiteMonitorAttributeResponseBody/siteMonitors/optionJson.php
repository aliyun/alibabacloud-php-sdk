<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors;

use AlibabaCloud\Tea\Model;

class optionJson extends Model
{
    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $requestFormat;

    /**
     * @var string
     */
    public $expectValue;

    /**
     * @var string
     */
    public $responseContent;

    /**
     * @var int
     */
    public $timeOut;

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
    public $cookie;

    /**
     * @var int
     */
    public $pingNum;

    /**
     * @var int
     */
    public $port;

    /**
     * @var int
     */
    public $authentication;

    /**
     * @var string
     */
    public $httpMethod;

    /**
     * @var int
     */
    public $matchRule;

    /**
     * @var string
     */
    public $requestContent;

    /**
     * @var string
     */
    public $username;

    /**
     * @var int
     */
    public $traceroute;

    /**
     * @var string
     */
    public $responseFormat;

    /**
     * @var string
     */
    public $dnsType;

    /**
     * @var string
     */
    public $dnsServer;
    protected $_name = [
        'password'        => 'password',
        'requestFormat'   => 'request_format',
        'expectValue'     => 'expect_value',
        'responseContent' => 'response_content',
        'timeOut'         => 'time_out',
        'failureRate'     => 'failure_rate',
        'header'          => 'header',
        'cookie'          => 'cookie',
        'pingNum'         => 'ping_num',
        'port'            => 'port',
        'authentication'  => 'authentication',
        'httpMethod'      => 'http_method',
        'matchRule'       => 'match_rule',
        'requestContent'  => 'request_content',
        'username'        => 'username',
        'traceroute'      => 'traceroute',
        'responseFormat'  => 'response_format',
        'dnsType'         => 'dns_type',
        'dnsServer'       => 'dns_server',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->password) {
            $res['password'] = $this->password;
        }
        if (null !== $this->requestFormat) {
            $res['request_format'] = $this->requestFormat;
        }
        if (null !== $this->expectValue) {
            $res['expect_value'] = $this->expectValue;
        }
        if (null !== $this->responseContent) {
            $res['response_content'] = $this->responseContent;
        }
        if (null !== $this->timeOut) {
            $res['time_out'] = $this->timeOut;
        }
        if (null !== $this->failureRate) {
            $res['failure_rate'] = $this->failureRate;
        }
        if (null !== $this->header) {
            $res['header'] = $this->header;
        }
        if (null !== $this->cookie) {
            $res['cookie'] = $this->cookie;
        }
        if (null !== $this->pingNum) {
            $res['ping_num'] = $this->pingNum;
        }
        if (null !== $this->port) {
            $res['port'] = $this->port;
        }
        if (null !== $this->authentication) {
            $res['authentication'] = $this->authentication;
        }
        if (null !== $this->httpMethod) {
            $res['http_method'] = $this->httpMethod;
        }
        if (null !== $this->matchRule) {
            $res['match_rule'] = $this->matchRule;
        }
        if (null !== $this->requestContent) {
            $res['request_content'] = $this->requestContent;
        }
        if (null !== $this->username) {
            $res['username'] = $this->username;
        }
        if (null !== $this->traceroute) {
            $res['traceroute'] = $this->traceroute;
        }
        if (null !== $this->responseFormat) {
            $res['response_format'] = $this->responseFormat;
        }
        if (null !== $this->dnsType) {
            $res['dns_type'] = $this->dnsType;
        }
        if (null !== $this->dnsServer) {
            $res['dns_server'] = $this->dnsServer;
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
        if (isset($map['password'])) {
            $model->password = $map['password'];
        }
        if (isset($map['request_format'])) {
            $model->requestFormat = $map['request_format'];
        }
        if (isset($map['expect_value'])) {
            $model->expectValue = $map['expect_value'];
        }
        if (isset($map['response_content'])) {
            $model->responseContent = $map['response_content'];
        }
        if (isset($map['time_out'])) {
            $model->timeOut = $map['time_out'];
        }
        if (isset($map['failure_rate'])) {
            $model->failureRate = $map['failure_rate'];
        }
        if (isset($map['header'])) {
            $model->header = $map['header'];
        }
        if (isset($map['cookie'])) {
            $model->cookie = $map['cookie'];
        }
        if (isset($map['ping_num'])) {
            $model->pingNum = $map['ping_num'];
        }
        if (isset($map['port'])) {
            $model->port = $map['port'];
        }
        if (isset($map['authentication'])) {
            $model->authentication = $map['authentication'];
        }
        if (isset($map['http_method'])) {
            $model->httpMethod = $map['http_method'];
        }
        if (isset($map['match_rule'])) {
            $model->matchRule = $map['match_rule'];
        }
        if (isset($map['request_content'])) {
            $model->requestContent = $map['request_content'];
        }
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }
        if (isset($map['traceroute'])) {
            $model->traceroute = $map['traceroute'];
        }
        if (isset($map['response_format'])) {
            $model->responseFormat = $map['response_format'];
        }
        if (isset($map['dns_type'])) {
            $model->dnsType = $map['dns_type'];
        }
        if (isset($map['dns_server'])) {
            $model->dnsServer = $map['dns_server'];
        }

        return $model;
    }
}
