<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class CreateHttpsApplicationConfigurationRequest extends Model
{
    /**
     * @var string
     */
    public $altSvc;
    /**
     * @var string
     */
    public $altSvcClear;
    /**
     * @var string
     */
    public $altSvcMa;
    /**
     * @var string
     */
    public $altSvcPersist;
    /**
     * @var string
     */
    public $hsts;
    /**
     * @var string
     */
    public $hstsIncludeSubdomains;
    /**
     * @var string
     */
    public $hstsMaxAge;
    /**
     * @var string
     */
    public $hstsPreload;
    /**
     * @var string
     */
    public $httpsForce;
    /**
     * @var string
     */
    public $httpsForceCode;
    /**
     * @var string
     */
    public $rule;
    /**
     * @var string
     */
    public $ruleEnable;
    /**
     * @var string
     */
    public $ruleName;
    /**
     * @var int
     */
    public $siteId;
    /**
     * @var int
     */
    public $siteVersion;
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
        'siteId'                => 'SiteId',
        'siteVersion'           => 'SiteVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        if (null !== $this->siteVersion) {
            $res['SiteVersion'] = $this->siteVersion;
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

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        if (isset($map['SiteVersion'])) {
            $model->siteVersion = $map['SiteVersion'];
        }

        return $model;
    }
}
