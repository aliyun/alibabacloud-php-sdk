<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteFunctionRequest;

use AlibabaCloud\Tea\Model;

class httpsApplicationConfiguration extends Model
{
    /**
     * @example on
     *
     * @var string
     */
    public $altSvc;

    /**
     * @example on
     *
     * @var string
     */
    public $altSvcClear;

    /**
     * @example 86400
     *
     * @var string
     */
    public $altSvcMa;

    /**
     * @example on
     *
     * @var string
     */
    public $altSvcPersist;

    /**
     * @example on
     *
     * @var string
     */
    public $hsts;

    /**
     * @example on
     *
     * @var string
     */
    public $hstsIncludeSubdomains;

    /**
     * @example 3600
     *
     * @var string
     */
    public $hstsMaxAge;

    /**
     * @example on
     *
     * @var string
     */
    public $hstsPreload;

    /**
     * @example on
     *
     * @var string
     */
    public $httpsForce;

    /**
     * @example 301
     *
     * @var string
     */
    public $httpsForceCode;

    /**
     * @example (http.host eq \\"video.example.com\\")
     *
     * @var string
     */
    public $rule;

    /**
     * @example on
     *
     * @var string
     */
    public $ruleEnable;

    /**
     * @example rule_example
     *
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'altSvc'                => 'AltSvc',
        'altSvcClear'           => 'AltSvcClear',
        'altSvcMa'              => 'AltSvcMa',
        'altSvcPersist'         => 'AltSvcPersist',
        'hsts'                  => 'Hsts',
        'hstsIncludeSubdomains' => 'HstsIncludeSubdomains',
        'hstsMaxAge'            => 'HstsMaxAge',
        'hstsPreload'           => 'HstsPreload',
        'httpsForce'            => 'HttpsForce',
        'httpsForceCode'        => 'HttpsForceCode',
        'rule'                  => 'Rule',
        'ruleEnable'            => 'RuleEnable',
        'ruleName'              => 'RuleName',
    ];

    public function validate()
    {
    }

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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return httpsApplicationConfiguration
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

        return $model;
    }
}
