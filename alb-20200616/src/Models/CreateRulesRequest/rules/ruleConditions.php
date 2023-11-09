<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest\rules;

use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest\rules\ruleConditions\cookieConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest\rules\ruleConditions\headerConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest\rules\ruleConditions\hostConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest\rules\ruleConditions\methodConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest\rules\ruleConditions\pathConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest\rules\ruleConditions\queryStringConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest\rules\ruleConditions\responseHeaderConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest\rules\ruleConditions\responseStatusCodeConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest\rules\ruleConditions\sourceIpConfig;
use AlibabaCloud\Tea\Model;

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
     * @description The ID of the asynchronous task.
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
