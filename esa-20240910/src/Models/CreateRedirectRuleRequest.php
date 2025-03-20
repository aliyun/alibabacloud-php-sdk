<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreateRedirectRuleRequest extends Model
{
    /**
     * @description Preserve query string. Value range:
     *
     * - on: Enabled.
     * - off: Disabled.
     *
     * This parameter is required.
     *
     * @example on
     *
     * @var string
     */
    public $reserveQueryString;

    /**
     * @description Rule content, using conditional expressions to match user requests. This parameter is not required when adding a global configuration. There are two usage scenarios:
     * - To match all incoming requests: Set the value to true
     * - To match specific requests: Set the value to a custom expression, e.g., (http.host eq \\"video.example.com\\")
     *
     * @example (http.host eq "video.example.com")
     *
     * @var string
     */
    public $rule;

    /**
     * @description Rule switch. This parameter is not required when adding a global configuration. Value range:
     * - on: Enabled.
     * - off: Disabled.
     *
     * @example on
     *
     * @var string
     */
    public $ruleEnable;

    /**
     * @description Rule name. This parameter is not required when adding a global configuration.
     *
     * @example rule_example
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description Site ID, which can be obtained by calling the [ListSites](https://help.aliyun.com/document_detail/2850189.html) interface.
     *
     * This parameter is required.
     *
     * @example 123456****
     *
     * @var int
     */
    public $siteId;

    /**
     * @description Version number of the site configuration. For sites with version management enabled, you can use this parameter to specify the version of the site for which the configuration will take effect. The default is version 0.
     *
     * @example 0
     *
     * @var int
     */
    public $siteVersion;

    /**
     * @description Response status code used by the node to respond to the client with the redirect address. Value range:
     *
     * - 301
     * - 302
     * - 303
     * - 307
     * - 308
     *
     * This parameter is required.
     *
     * @example 301
     *
     * @var string
     */
    public $statusCode;

    /**
     * @description Target URL after redirection.
     *
     * This parameter is required.
     *
     * @example http://www.exapmle.com/index.html
     *
     * @var string
     */
    public $targetUrl;

    /**
     * @description Redirect type. Value range:
     *
     * - static: Static mode.
     * - dynamic: Dynamic mode.
     *
     * This parameter is required.
     *
     * @example static
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'reserveQueryString' => 'ReserveQueryString',
        'rule' => 'Rule',
        'ruleEnable' => 'RuleEnable',
        'ruleName' => 'RuleName',
        'siteId' => 'SiteId',
        'siteVersion' => 'SiteVersion',
        'statusCode' => 'StatusCode',
        'targetUrl' => 'TargetUrl',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->reserveQueryString) {
            $res['ReserveQueryString'] = $this->reserveQueryString;
        }
        if (null !== $this->rule) {
            $res['Rule'] = $this->rule;
        }
        if (null !== $this->ruleEnable) {
            $res['RuleEnable'] = $this->ruleEnable;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->siteVersion) {
            $res['SiteVersion'] = $this->siteVersion;
        }
        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }
        if (null !== $this->targetUrl) {
            $res['TargetUrl'] = $this->targetUrl;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRedirectRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReserveQueryString'])) {
            $model->reserveQueryString = $map['ReserveQueryString'];
        }
        if (isset($map['Rule'])) {
            $model->rule = $map['Rule'];
        }
        if (isset($map['RuleEnable'])) {
            $model->ruleEnable = $map['RuleEnable'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['SiteVersion'])) {
            $model->siteVersion = $map['SiteVersion'];
        }
        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }
        if (isset($map['TargetUrl'])) {
            $model->targetUrl = $map['TargetUrl'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
