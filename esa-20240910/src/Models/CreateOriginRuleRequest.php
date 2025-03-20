<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreateOriginRuleRequest extends Model
{
    /**
     * @description Rewrite the DNS resolution record for the origin request.
     *
     * @example test.example.com
     *
     * @var string
     */
    public $dnsRecord;

    /**
     * @description The HOST carried in the origin request.
     *
     * @example origin.example.com
     *
     * @var string
     */
    public $originHost;

    /**
     * @description Port of the origin server when using the HTTP protocol for origin requests.
     *
     * @example 8080
     *
     * @var string
     */
    public $originHttpPort;

    /**
     * @description Port of the origin server when using the HTTPS protocol for origin requests.
     *
     * @example 4433
     *
     * @var string
     */
    public $originHttpsPort;

    /**
     * @description mTLS switch. Possible values:
     * - on: Enable.
     * - off: Disable.
     *
     * @example on
     *
     * @var string
     */
    public $originMtls;

    /**
     * @description Protocol used for the origin request. Possible values:
     * - http: Use HTTP protocol for origin requests.
     * - https: Use HTTPS protocol for origin requests.
     * - follow: Follow the client\\"s protocol for origin requests.
     *
     * @example http
     *
     * @var string
     */
    public $originScheme;

    /**
     * @description SNI carried in the origin request.
     *
     * @example origin.example.com
     *
     * @var string
     */
    public $originSni;

    /**
     * @description Origin certificate verification switch. Possible values:
     * - on: Enable.
     * - off: Disable.
     *
     * @example on
     *
     * @var string
     */
    public $originVerify;

    /**
     * @description Use range chunking for origin downloads. Possible values:
     * - on: Enable
     * - off: Disable
     * - force: Force
     *
     * @example on
     *
     * @var string
     */
    public $range;

    /**
     * @description Rule content, using conditional expressions to match user requests. This parameter is not required when adding global configurations. There are two usage scenarios:
     * - Match all incoming requests: Set the value to true
     * - Match specific requests: Set the value to a custom expression, for example: (http.host eq \\"video.example.com\\")
     *
     * @example (http.host eq \\"video.example.com\\")
     *
     * @var string
     */
    public $rule;

    /**
     * @description Rule switch. This parameter is not required when adding global configurations. Possible values:
     * - on: Enable.
     * - off: Disable.
     *
     * @example on
     *
     * @var string
     */
    public $ruleEnable;

    /**
     * @description Rule name. This parameter is not required when adding global configurations.
     *
     * @example rule_example
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description Site ID, which can be obtained by calling the [ListSites](~~ListSites~~) interface.
     *
     * This parameter is required.
     *
     * @example 340035003106221
     *
     * @var int
     */
    public $siteId;

    /**
     * @description Version number of the site configuration. For sites with version management enabled, you can use this parameter to specify the version of the site where the configuration takes effect. The default is version 0.
     *
     * @example 1
     *
     * @var int
     */
    public $siteVersion;
    protected $_name = [
        'dnsRecord' => 'DnsRecord',
        'originHost' => 'OriginHost',
        'originHttpPort' => 'OriginHttpPort',
        'originHttpsPort' => 'OriginHttpsPort',
        'originMtls' => 'OriginMtls',
        'originScheme' => 'OriginScheme',
        'originSni' => 'OriginSni',
        'originVerify' => 'OriginVerify',
        'range' => 'Range',
        'rule' => 'Rule',
        'ruleEnable' => 'RuleEnable',
        'ruleName' => 'RuleName',
        'siteId' => 'SiteId',
        'siteVersion' => 'SiteVersion',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dnsRecord) {
            $res['DnsRecord'] = $this->dnsRecord;
        }
        if (null !== $this->originHost) {
            $res['OriginHost'] = $this->originHost;
        }
        if (null !== $this->originHttpPort) {
            $res['OriginHttpPort'] = $this->originHttpPort;
        }
        if (null !== $this->originHttpsPort) {
            $res['OriginHttpsPort'] = $this->originHttpsPort;
        }
        if (null !== $this->originMtls) {
            $res['OriginMtls'] = $this->originMtls;
        }
        if (null !== $this->originScheme) {
            $res['OriginScheme'] = $this->originScheme;
        }
        if (null !== $this->originSni) {
            $res['OriginSni'] = $this->originSni;
        }
        if (null !== $this->originVerify) {
            $res['OriginVerify'] = $this->originVerify;
        }
        if (null !== $this->range) {
            $res['Range'] = $this->range;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOriginRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DnsRecord'])) {
            $model->dnsRecord = $map['DnsRecord'];
        }
        if (isset($map['OriginHost'])) {
            $model->originHost = $map['OriginHost'];
        }
        if (isset($map['OriginHttpPort'])) {
            $model->originHttpPort = $map['OriginHttpPort'];
        }
        if (isset($map['OriginHttpsPort'])) {
            $model->originHttpsPort = $map['OriginHttpsPort'];
        }
        if (isset($map['OriginMtls'])) {
            $model->originMtls = $map['OriginMtls'];
        }
        if (isset($map['OriginScheme'])) {
            $model->originScheme = $map['OriginScheme'];
        }
        if (isset($map['OriginSni'])) {
            $model->originSni = $map['OriginSni'];
        }
        if (isset($map['OriginVerify'])) {
            $model->originVerify = $map['OriginVerify'];
        }
        if (isset($map['Range'])) {
            $model->range = $map['Range'];
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

        return $model;
    }
}
