<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeRequest\rules;

use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeRequest\rules\ruleConditions\cookieConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeRequest\rules\ruleConditions\headerConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeRequest\rules\ruleConditions\hostConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeRequest\rules\ruleConditions\methodConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeRequest\rules\ruleConditions\pathConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeRequest\rules\ruleConditions\queryStringConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeRequest\rules\ruleConditions\responseHeaderConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeRequest\rules\ruleConditions\responseStatusCodeConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeRequest\rules\ruleConditions\sourceIpConfig;
use AlibabaCloud\Tea\Model;

class ruleConditions extends Model
{
    /**
     * @description The match conditions for cookies. You can add up to 20 match conditions.
     *
     * @var cookieConfig
     */
    public $cookieConfig;

    /**
     * @description The match conditions for HTTP headers. You can specify up to 20 match conditions.
     *
     * @var headerConfig
     */
    public $headerConfig;

    /**
     * @description The match conditions for hostnames. You can specify up to 20 match conditions.
     *
     * @var hostConfig
     */
    public $hostConfig;

    /**
     * @description The match conditions for HTTP request methods. Valid values of N: **1** to **20**.
     *
     * @var methodConfig
     */
    public $methodConfig;

    /**
     * @description The match conditions for query strings. You can specify up to 20 match conditions.
     *
     * @var pathConfig
     */
    public $pathConfig;

    /**
     * @description The match conditions for query strings. You can specify up to 20 match conditions.
     *
     * @var queryStringConfig
     */
    public $queryStringConfig;

    /**
     * @description The configuration of the HTTP response header. You can specify the configurations of up to 20 HTTP response header.
     *
     * @var responseHeaderConfig
     */
    public $responseHeaderConfig;

    /**
     * @description The match conditions for response status codes. This parameter is required and takes effect when **Type** is set to **ResponseStatusCode**. You can specify up to 20 match conditions.
     *
     * @var responseStatusCodeConfig
     */
    public $responseStatusCodeConfig;

    /**
     * @description The configuration of the source IP addresses based on which user traffic is matched. You can specify up to 20 configuration records.
     *
     * @var sourceIpConfig
     */
    public $sourceIpConfig;

    /**
     * @description The type of action specified in the forwarding rule. You can specify up to 11 types of actions. Valid values:
     *
     *   **ForwardGroup**: forwards a request to multiple vServer groups.
     *   **Redirect**: redirects a request.
     *   **FixedResponse**: returns a custom response.
     *   **Rewrite**: rewrites a request.
     *   **InsertHeader**: inserts a header.
     *   **RemoveHeaderConfig**: deletes a header.
     *   **TrafficLimitConfig**: throttles network traffic.
     *   **TrafficMirrorConfig**: mirrors traffic.
     *   **CorsConfig**: forwards requests based on CORS.
     *
     * The following action types are supported:
     *
     *   **FinalType**: the last action to be performed in a forwarding rule. Each forwarding rule can contain only one FinalType action. You can specify a **ForwardGroup**, **Redirect**, or **FixedResponse** action as the FinalType action.
     *   **ExtType**: the action or the actions to be performed before the **FinalType** action. A forwarding rule can contain one or more **ExtType** actions. To specify an ExtType action, you must specify a **FinalType** action. You can specify multiple **InsertHeader** actions or one **Rewrite** action.
     *
     * @example ForwardGroup
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
