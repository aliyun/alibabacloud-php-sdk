<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateRuleRequest;

use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRuleRequest\ruleConditions\cookieConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRuleRequest\ruleConditions\headerConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRuleRequest\ruleConditions\hostConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRuleRequest\ruleConditions\methodConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRuleRequest\ruleConditions\pathConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRuleRequest\ruleConditions\queryStringConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRuleRequest\ruleConditions\sourceIpConfig;
use AlibabaCloud\Tea\Model;

class ruleConditions extends Model
{
    /**
     * @description The configurations of the cookies.
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
     * @description The configurations of the host.
     *
     * @var hostConfig
     */
    public $hostConfig;

    /**
     * @description The configurations of the request methods.
     *
     * @var methodConfig
     */
    public $methodConfig;

    /**
     * @description The configurations of the URLs.
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
     * @description The configuration of the source IP-based forwarding rule. This parameter is required and takes effect only when **Type** is set to **SourceIP**.
     *
     * @var sourceIpConfig
     */
    public $sourceIpConfig;

    /**
     * @description The type of forwarding rule. Valid values:
     *
     *   **Host**: Requests are distributed based on hosts.
     *   **Path**: Requests are distributed based on paths.
     *   **Header**: Requests are distributed based on HTTP headers.
     *   **QueryString**: Requests are distributed based on query strings.
     *   **Method**: Requests are distributed based on request methods.
     *   **Cookie**: Requests are distributed based on cookies.
     *   **SourceIp**: Requests are distributed based on source IP addresses.
     *
     * @example Host
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'cookieConfig'      => 'CookieConfig',
        'headerConfig'      => 'HeaderConfig',
        'hostConfig'        => 'HostConfig',
        'methodConfig'      => 'MethodConfig',
        'pathConfig'        => 'PathConfig',
        'queryStringConfig' => 'QueryStringConfig',
        'sourceIpConfig'    => 'SourceIpConfig',
        'type'              => 'Type',
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
        if (isset($map['SourceIpConfig'])) {
            $model->sourceIpConfig = sourceIpConfig::fromMap($map['SourceIpConfig']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
