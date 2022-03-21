<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors;

use AlibabaCloud\Tea\Model;

class optionJson extends Model
{
    /**
     * @var int
     */
    public $attempts;

    /**
     * @var int
     */
    public $authentication;

    /**
     * @var string
     */
    public $cookie;

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
    public $timeOut;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'attempts'        => 'attempts',
        'authentication'  => 'authentication',
        'cookie'          => 'cookie',
        'dnsMatchRule'    => 'dns_match_rule',
        'dnsServer'       => 'dns_server',
        'dnsType'         => 'dns_type',
        'expectValue'     => 'expect_value',
        'failureRate'     => 'failure_rate',
        'header'          => 'header',
        'httpMethod'      => 'http_method',
        'isBase64Encode'  => 'isBase64Encode',
        'matchRule'       => 'match_rule',
        'password'        => 'password',
        'pingNum'         => 'ping_num',
        'port'            => 'port',
        'protocol'        => 'protocol',
        'requestContent'  => 'request_content',
        'requestFormat'   => 'request_format',
        'responseContent' => 'response_content',
        'responseFormat'  => 'response_format',
        'timeOut'         => 'time_out',
        'username'        => 'username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attempts) {
            $res['attempts'] = $this->attempts;
        }
        if (null !== $this->authentication) {
            $res['authentication'] = $this->authentication;
        }
        if (null !== $this->cookie) {
            $res['cookie'] = $this->cookie;
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
        if (null !== $this->timeOut) {
            $res['time_out'] = $this->timeOut;
        }
        if (null !== $this->username) {
            $res['username'] = $this->username;
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
        if (isset($map['attempts'])) {
            $model->attempts = $map['attempts'];
        }
        if (isset($map['authentication'])) {
            $model->authentication = $map['authentication'];
        }
        if (isset($map['cookie'])) {
            $model->cookie = $map['cookie'];
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
        if (isset($map['time_out'])) {
            $model->timeOut = $map['time_out'];
        }
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }

        return $model;
    }
}
