<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class GetHttpsApplicationConfigurationResponseBody extends Model
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
     * @var int
     */
    public $configId;

    /**
     * @var string
     */
    public $configType;

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
    public $requestId;

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
    public $sequence;

    /**
     * @var int
     */
    public $siteVersion;
    protected $_name = [
        'altSvc' => 'AltSvc',
        'altSvcClear' => 'AltSvcClear',
        'altSvcMa' => 'AltSvcMa',
        'altSvcPersist' => 'AltSvcPersist',
        'configId' => 'ConfigId',
        'configType' => 'ConfigType',
        'hsts' => 'Hsts',
        'hstsIncludeSubdomains' => 'HstsIncludeSubdomains',
        'hstsMaxAge' => 'HstsMaxAge',
        'hstsPreload' => 'HstsPreload',
        'httpsForce' => 'HttpsForce',
        'httpsForceCode' => 'HttpsForceCode',
        'requestId' => 'RequestId',
        'rule' => 'Rule',
        'ruleEnable' => 'RuleEnable',
        'ruleName' => 'RuleName',
        'sequence' => 'Sequence',
        'siteVersion' => 'SiteVersion',
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

        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }

        if (null !== $this->configType) {
            $res['ConfigType'] = $this->configType;
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

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

        if (null !== $this->sequence) {
            $res['Sequence'] = $this->sequence;
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

        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }

        if (isset($map['ConfigType'])) {
            $model->configType = $map['ConfigType'];
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

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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

        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
        }

        if (isset($map['SiteVersion'])) {
            $model->siteVersion = $map['SiteVersion'];
        }

        return $model;
    }
}
