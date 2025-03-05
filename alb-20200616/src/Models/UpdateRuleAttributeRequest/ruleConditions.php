<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRuleAttributeRequest;

use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRuleAttributeRequest\ruleConditions\cookieConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRuleAttributeRequest\ruleConditions\headerConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRuleAttributeRequest\ruleConditions\hostConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRuleAttributeRequest\ruleConditions\methodConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRuleAttributeRequest\ruleConditions\pathConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRuleAttributeRequest\ruleConditions\queryStringConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRuleAttributeRequest\ruleConditions\responseHeaderConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRuleAttributeRequest\ruleConditions\responseStatusCodeConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRuleAttributeRequest\ruleConditions\sourceIpConfig;
use AlibabaCloud\Tea\Model;

class ruleConditions extends Model
{
    /**
     * @description The key-value pairs of the cookie.
     *
     * @var cookieConfig
     */
    public $cookieConfig;

    /**
     * @description The configuration of the header.
     *
     * @var headerConfig
     */
    public $headerConfig;

    /**
     * @description The configurations of the hosts.
     *
     * @var hostConfig
     */
    public $hostConfig;

    /**
     * @description The configuration of the request method.
     *
     * @var methodConfig
     */
    public $methodConfig;

    /**
     * @description The configurations of the forwarding URL.
     *
     * @var pathConfig
     */
    public $pathConfig;

    /**
     * @description The configurations of the query strings.
     *
     * @var queryStringConfig
     */
    public $queryStringConfig;

    /**
     * @description The configuration of headers.
     *
     * @var responseHeaderConfig
     */
    public $responseHeaderConfig;

    /**
     * @description The configurations of the response status codes.
     *
     * @var responseStatusCodeConfig
     */
    public $responseStatusCodeConfig;

    /**
     * @description Traffic matching based on source IP addresses. You can specify at most five IP addresses, including CIDR blocks.
     *
     * @var sourceIpConfig
     */
    public $sourceIpConfig;

    /**
     * @description The type of forwarding rule. You can specify at most seven types of forwarding rule. Valid values:
     *
     *   **Host**: Requests are forwarded based on hosts.
     *   **Path**: Requests are forwarded based on paths.
     *   **Header**: Requests are forwarded based on HTTP headers.
     *   **QueryString**: Requests are forwarded based on query strings.
     *   **Method**: Requests are forwarded based on request methods.
     *   **Cookie**: Requests are forwarded based on cookies.
     *   **SourceIp**: Responses are forwarded based on source IP addresses.
     *   **ResponseHeader**: Requests are forwarded based on HTTP response headers.
     *   **ResponseStatusCode**: Requests are forwarded based on response status codes.
     *
     * @example Host
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'cookieConfig'             => 'CookieConfig',
        'headerConfig'             => 'HeaderConfig',
        'hostConfig'               => 'HostConfig',
        'methodConfig'             => 'MethodConfig',
        'pathConfig'               => 'PathConfig',
        'queryStringConfig'        => 'QueryStringConfig',
        'responseHeaderConfig'     => 'ResponseHeaderConfig',
        'responseStatusCodeConfig' => 'ResponseStatusCodeConfig',
        'sourceIpConfig'           => 'SourceIpConfig',
        'type'                     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cookieConfig) {
            $res['CookieConfig'] = null !== $this->cookieConfig ? $this->cookieConfig->toMap() : null;
        }
        if (null !== $this->headerConfig) {
            $res['HeaderConfig'] = null !== $this->headerConfig ? $this->headerConfig->toMap() : null;
        }
        if (null !== $this->hostConfig) {
            $res['HostConfig'] = null !== $this->hostConfig ? $this->hostConfig->toMap() : null;
        }
        if (null !== $this->methodConfig) {
            $res['MethodConfig'] = null !== $this->methodConfig ? $this->methodConfig->toMap() : null;
        }
        if (null !== $this->pathConfig) {
            $res['PathConfig'] = null !== $this->pathConfig ? $this->pathConfig->toMap() : null;
        }
        if (null !== $this->queryStringConfig) {
            $res['QueryStringConfig'] = null !== $this->queryStringConfig ? $this->queryStringConfig->toMap() : null;
        }
        if (null !== $this->responseHeaderConfig) {
            $res['ResponseHeaderConfig'] = null !== $this->responseHeaderConfig ? $this->responseHeaderConfig->toMap() : null;
        }
        if (null !== $this->responseStatusCodeConfig) {
            $res['ResponseStatusCodeConfig'] = null !== $this->responseStatusCodeConfig ? $this->responseStatusCodeConfig->toMap() : null;
        }
        if (null !== $this->sourceIpConfig) {
            $res['SourceIpConfig'] = null !== $this->sourceIpConfig ? $this->sourceIpConfig->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleConditions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CookieConfig'])) {
            $model->cookieConfig = cookieConfig::fromMap($map['CookieConfig']);
        }
        if (isset($map['HeaderConfig'])) {
            $model->headerConfig = headerConfig::fromMap($map['HeaderConfig']);
        }
        if (isset($map['HostConfig'])) {
            $model->hostConfig = hostConfig::fromMap($map['HostConfig']);
        }
        if (isset($map['MethodConfig'])) {
            $model->methodConfig = methodConfig::fromMap($map['MethodConfig']);
        }
        if (isset($map['PathConfig'])) {
            $model->pathConfig = pathConfig::fromMap($map['PathConfig']);
        }
        if (isset($map['QueryStringConfig'])) {
            $model->queryStringConfig = queryStringConfig::fromMap($map['QueryStringConfig']);
        }
        if (isset($map['ResponseHeaderConfig'])) {
            $model->responseHeaderConfig = responseHeaderConfig::fromMap($map['ResponseHeaderConfig']);
        }
        if (isset($map['ResponseStatusCodeConfig'])) {
            $model->responseStatusCodeConfig = responseStatusCodeConfig::fromMap($map['ResponseStatusCodeConfig']);
        }
        if (isset($map['SourceIpConfig'])) {
            $model->sourceIpConfig = sourceIpConfig::fromMap($map['SourceIpConfig']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
