<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListRulesResponseBody\rules;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListRulesResponseBody\rules\ruleConditions\cookieConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListRulesResponseBody\rules\ruleConditions\headerConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListRulesResponseBody\rules\ruleConditions\hostConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListRulesResponseBody\rules\ruleConditions\methodConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListRulesResponseBody\rules\ruleConditions\pathConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListRulesResponseBody\rules\ruleConditions\queryStringConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListRulesResponseBody\rules\ruleConditions\responseHeaderConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListRulesResponseBody\rules\ruleConditions\responseStatusCodeConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListRulesResponseBody\rules\ruleConditions\sourceIpConfig;

class ruleConditions extends Model
{
    /**
     * @var cookieConfig
     */
    public $cookieConfig;
    /**
     * @var headerConfig
     */
    public $headerConfig;
    /**
     * @var hostConfig
     */
    public $hostConfig;
    /**
     * @var methodConfig
     */
    public $methodConfig;
    /**
     * @var pathConfig
     */
    public $pathConfig;
    /**
     * @var queryStringConfig
     */
    public $queryStringConfig;
    /**
     * @var responseHeaderConfig
     */
    public $responseHeaderConfig;
    /**
     * @var responseStatusCodeConfig
     */
    public $responseStatusCodeConfig;
    /**
     * @var sourceIpConfig
     */
    public $sourceIpConfig;
    /**
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
        if (null !== $this->cookieConfig) {
            $this->cookieConfig->validate();
        }
        if (null !== $this->headerConfig) {
            $this->headerConfig->validate();
        }
        if (null !== $this->hostConfig) {
            $this->hostConfig->validate();
        }
        if (null !== $this->methodConfig) {
            $this->methodConfig->validate();
        }
        if (null !== $this->pathConfig) {
            $this->pathConfig->validate();
        }
        if (null !== $this->queryStringConfig) {
            $this->queryStringConfig->validate();
        }
        if (null !== $this->responseHeaderConfig) {
            $this->responseHeaderConfig->validate();
        }
        if (null !== $this->responseStatusCodeConfig) {
            $this->responseStatusCodeConfig->validate();
        }
        if (null !== $this->sourceIpConfig) {
            $this->sourceIpConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cookieConfig) {
            $res['CookieConfig'] = null !== $this->cookieConfig ? $this->cookieConfig->toArray($noStream) : $this->cookieConfig;
        }

        if (null !== $this->headerConfig) {
            $res['HeaderConfig'] = null !== $this->headerConfig ? $this->headerConfig->toArray($noStream) : $this->headerConfig;
        }

        if (null !== $this->hostConfig) {
            $res['HostConfig'] = null !== $this->hostConfig ? $this->hostConfig->toArray($noStream) : $this->hostConfig;
        }

        if (null !== $this->methodConfig) {
            $res['MethodConfig'] = null !== $this->methodConfig ? $this->methodConfig->toArray($noStream) : $this->methodConfig;
        }

        if (null !== $this->pathConfig) {
            $res['PathConfig'] = null !== $this->pathConfig ? $this->pathConfig->toArray($noStream) : $this->pathConfig;
        }

        if (null !== $this->queryStringConfig) {
            $res['QueryStringConfig'] = null !== $this->queryStringConfig ? $this->queryStringConfig->toArray($noStream) : $this->queryStringConfig;
        }

        if (null !== $this->responseHeaderConfig) {
            $res['ResponseHeaderConfig'] = null !== $this->responseHeaderConfig ? $this->responseHeaderConfig->toArray($noStream) : $this->responseHeaderConfig;
        }

        if (null !== $this->responseStatusCodeConfig) {
            $res['ResponseStatusCodeConfig'] = null !== $this->responseStatusCodeConfig ? $this->responseStatusCodeConfig->toArray($noStream) : $this->responseStatusCodeConfig;
        }

        if (null !== $this->sourceIpConfig) {
            $res['SourceIpConfig'] = null !== $this->sourceIpConfig ? $this->sourceIpConfig->toArray($noStream) : $this->sourceIpConfig;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
