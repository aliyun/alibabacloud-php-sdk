<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class UpdateHttpsApplicationConfigurationRequest extends Model
{
    /**
     * @description Feature switch, default is disabled. Value range:
     * - on: Enabled.
     * - off: Disabled.
     *
     * @example on
     *
     * @var string
     */
    public $altSvc;

    /**
     * @description Whether the Alt-Svc header includes the clear parameter, default is disabled. Value range:
     * - on: Enabled.
     * - off: Disabled.
     *
     * @example on
     *
     * @var string
     */
    public $altSvcClear;

    /**
     * @description Alt-Svc validity period, in seconds, default is 86400 seconds.
     *
     * @example 86400
     *
     * @var string
     */
    public $altSvcMa;

    /**
     * @description Whether the Alt-Svc header includes the persist parameter, default is disabled. Value range:
     * - on: Enabled.
     * - off: Disabled.
     *
     * @example on
     *
     * @var string
     */
    public $altSvcPersist;

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
     * @description Whether to enable HSTS, default is disabled. Value range:
     * - on: Enabled.
     * - off: Disabled.
     *
     * @example on
     *
     * @var string
     */
    public $hsts;

    /**
     * @description Whether to include subdomains in HSTS, default is disabled. Value range:
     * - on: Enabled.
     * - off: Disabled.
     *
     * @example on
     *
     * @var string
     */
    public $hstsIncludeSubdomains;

    /**
     * @description HSTS expiration time, in seconds.
     *
     * @example 3600
     *
     * @var string
     */
    public $hstsMaxAge;

    /**
     * @description Whether to enable HSTS preload, default is disabled. Value range:
     * - on: Enabled.
     * - off: Disabled.
     *
     * @example on
     *
     * @var string
     */
    public $hstsPreload;

    /**
     * @description Whether to enable forced HTTPS, default is disabled. Value range:
     * - on: Enabled.
     * - off: Disabled.
     *
     * @example on
     *
     * @var string
     */
    public $httpsForce;

    /**
     * @description Forced HTTPS redirect status code, value range:
     * - 301
     * - 302
     * - 307
     * - 308
     *
     * @example 301
     *
     * @var string
     */
    public $httpsForceCode;

    /**
     * @description Rule content, using conditional expressions to match user requests. This parameter is not required when adding a global configuration. There are two usage scenarios:
     * - Match all incoming requests: Set the value to true
     * - Match specific requests: Set the value to a custom expression, for example: (http.host eq \\"video.example.com\\")
     *
     * @example (http.host eq \\"video.example.com\\")
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
     * @description Site ID, which can be obtained by calling the [ListSites](~~ListSites~~) interface.
     *
     * This parameter is required.
     *
     * @example 123456****
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'altSvc' => 'AltSvc',
        'altSvcClear' => 'AltSvcClear',
        'altSvcMa' => 'AltSvcMa',
        'altSvcPersist' => 'AltSvcPersist',
        'configId' => 'ConfigId',
        'hsts' => 'Hsts',
        'hstsIncludeSubdomains' => 'HstsIncludeSubdomains',
        'hstsMaxAge' => 'HstsMaxAge',
        'hstsPreload' => 'HstsPreload',
        'httpsForce' => 'HttpsForce',
        'httpsForceCode' => 'HttpsForceCode',
        'rule' => 'Rule',
        'ruleEnable' => 'RuleEnable',
        'ruleName' => 'RuleName',
        'siteId' => 'SiteId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->altSvc) {
            $res['AltSvc'] = $this->altSvc;
        }
        if (null !== $this->altSvcClear) {
            $res['AltSvcClear'] = $this->altSvcClear;
        }
        if (null !== $this->altSvcMa) {
            $res['AltSvcMa'] = $this->altSvcMa;
        }
        if (null !== $this->altSvcPersist) {
            $res['AltSvcPersist'] = $this->altSvcPersist;
        }
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->hsts) {
            $res['Hsts'] = $this->hsts;
        }
        if (null !== $this->hstsIncludeSubdomains) {
            $res['HstsIncludeSubdomains'] = $this->hstsIncludeSubdomains;
        }
        if (null !== $this->hstsMaxAge) {
            $res['HstsMaxAge'] = $this->hstsMaxAge;
        }
        if (null !== $this->hstsPreload) {
            $res['HstsPreload'] = $this->hstsPreload;
        }
        if (null !== $this->httpsForce) {
            $res['HttpsForce'] = $this->httpsForce;
        }
        if (null !== $this->httpsForceCode) {
            $res['HttpsForceCode'] = $this->httpsForceCode;
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
     * @return UpdateHttpsApplicationConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AltSvc'])) {
            $model->altSvc = $map['AltSvc'];
        }
        if (isset($map['AltSvcClear'])) {
            $model->altSvcClear = $map['AltSvcClear'];
        }
        if (isset($map['AltSvcMa'])) {
            $model->altSvcMa = $map['AltSvcMa'];
        }
        if (isset($map['AltSvcPersist'])) {
            $model->altSvcPersist = $map['AltSvcPersist'];
        }
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['Hsts'])) {
            $model->hsts = $map['Hsts'];
        }
        if (isset($map['HstsIncludeSubdomains'])) {
            $model->hstsIncludeSubdomains = $map['HstsIncludeSubdomains'];
        }
        if (isset($map['HstsMaxAge'])) {
            $model->hstsMaxAge = $map['HstsMaxAge'];
        }
        if (isset($map['HstsPreload'])) {
            $model->hstsPreload = $map['HstsPreload'];
        }
        if (isset($map['HttpsForce'])) {
            $model->httpsForce = $map['HttpsForce'];
        }
        if (isset($map['HttpsForceCode'])) {
            $model->httpsForceCode = $map['HttpsForceCode'];
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
