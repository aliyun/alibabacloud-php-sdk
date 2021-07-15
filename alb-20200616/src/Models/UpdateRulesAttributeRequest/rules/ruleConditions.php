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
     * @description Cookie条件配置
     *
     * @var cookieConfig
     */
    public $cookieConfig;

    /**
     * @description HTTP标头条件配置
     *
     * @var headerConfig
     */
    public $headerConfig;

    /**
     * @description 主机名条件配置
     *
     * @var hostConfig
     */
    public $hostConfig;

    /**
     * @description HTTP请求方法条件配置
     *
     * @var methodConfig
     */
    public $methodConfig;

    /**
     * @description 查询字符串条件配置
     *
     * @var pathConfig
     */
    public $pathConfig;

    /**
     * @description 查询字符串条件配置
     *
     * @var queryStringConfig
     */
    public $queryStringConfig;

    /**
     * @description 返回HTTP标头
     *
     * @var responseHeaderConfig
     */
    public $responseHeaderConfig;

    /**
     * @description 返回状态码条件
     *
     * @var responseStatusCodeConfig
     */
    public $responseStatusCodeConfig;

    /**
     * @description 条件类型
     *
     * @var string
     */
    public $type;

    /**
     * @description 基于源IP业务流量匹配
     *
     * @var sourceIpConfig
     */
    public $sourceIpConfig;
    protected $_name = [
        'cookieConfig'             => 'CookieConfig',
        'headerConfig'             => 'HeaderConfig',
        'hostConfig'               => 'HostConfig',
        'methodConfig'             => 'MethodConfig',
        'pathConfig'               => 'PathConfig',
        'queryStringConfig'        => 'QueryStringConfig',
        'responseHeaderConfig'     => 'ResponseHeaderConfig',
        'responseStatusCodeConfig' => 'ResponseStatusCodeConfig',
        'type'                     => 'Type',
        'sourceIpConfig'           => 'SourceIpConfig',
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->sourceIpConfig) {
            $res['SourceIpConfig'] = null !== $this->sourceIpConfig ? $this->sourceIpConfig->toMap() : null;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['SourceIpConfig'])) {
            $model->sourceIpConfig = sourceIpConfig::fromMap($map['SourceIpConfig']);
        }

        return $model;
    }
}
