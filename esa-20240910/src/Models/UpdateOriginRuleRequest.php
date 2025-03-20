<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class UpdateOriginRuleRequest extends Model
{
    /**
     * @description Configuration ID.
     *
     * This parameter is required.
     *
     * @example 35281609698****
     *
     * @var int
     */
    public $configId;

    /**
     * @description Rewrite the DNS resolution record of the origin request.
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
     * @description Port of the origin server when using HTTP protocol for origin pull.
     *
     * @example 8080
     *
     * @var string
     */
    public $originHttpPort;

    /**
     * @description Port of the origin server when using HTTPS protocol for origin pull.
     *
     * @example 4433
     *
     * @var string
     */
    public $originHttpsPort;

    /**
     * @description mTLS switch. Valid values:
     * - on: Enable.
     * - off: Disable.
     *
     * @example on
     *
     * @var string
     */
    public $originMtls;

    /**
     * @description Protocol used for the origin request. Valid values:
     * - http: Use HTTP protocol for origin pull.
     * - https: Use HTTPS protocol for origin pull.
     * - follow: Follow the client\\"s protocol for origin pull.
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
     * @description Origin certificate verification switch. Valid values:
     * - on: Enable.
     * - off: Disable.
     *
     * @example on
     *
     * @var string
     */
    public $originVerify;

    /**
     * @description Use range chunking for origin pull file download. Valid values:
     * - on: Enable.
     * - off: Disable.
     * - force: Force.
     *
     * @example on
     *
     * @var string
     */
    public $range;

    /**
     * @var string
     */
    public $rangeChunkSize;

    /**
     * @description Rule content, used to match user requests with conditional expressions. This parameter is not required when adding a global configuration. There are two usage scenarios:
     * - Match all incoming requests: Set the value to true
     * - Match specific requests: Set the value to a custom expression, for example: (http.host eq \\"video.example.com\\")
     *
     * @example (http.host eq \\"video.example.com\\")
     *
     * @var string
     */
    public $rule;

    /**
     * @description Rule switch. This parameter is not required when adding a global configuration. Valid values:
     * - on: Enable.
     * - off: Disable.
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
     * @description Site ID, which can be obtained by calling the [ListSites](~~ListSites~~) interface.
     *
     * This parameter is required.
     *
     * @example 5407498413****
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'configId' => 'ConfigId',
        'dnsRecord' => 'DnsRecord',
        'originHost' => 'OriginHost',
        'originHttpPort' => 'OriginHttpPort',
        'originHttpsPort' => 'OriginHttpsPort',
        'originMtls' => 'OriginMtls',
        'originScheme' => 'OriginScheme',
        'originSni' => 'OriginSni',
        'originVerify' => 'OriginVerify',
        'range' => 'Range',
        'rangeChunkSize' => 'RangeChunkSize',
        'rule' => 'Rule',
        'ruleEnable' => 'RuleEnable',
        'ruleName' => 'RuleName',
        'siteId' => 'SiteId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
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
        if (null !== $this->rangeChunkSize) {
            $res['RangeChunkSize'] = $this->rangeChunkSize;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateOriginRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
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
        if (isset($map['RangeChunkSize'])) {
            $model->rangeChunkSize = $map['RangeChunkSize'];
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

        return $model;
    }
}
