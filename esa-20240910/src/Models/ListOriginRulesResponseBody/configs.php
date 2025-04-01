<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListOriginRulesResponseBody;

use AlibabaCloud\Dara\Model;

class configs extends Model
{
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
    public $dnsRecord;

    /**
     * @var string
     */
    public $originHost;

    /**
     * @var string
     */
    public $originHttpPort;

    /**
     * @var string
     */
    public $originHttpsPort;

    /**
     * @var string
     */
    public $originMtls;

    /**
     * @var string
     */
    public $originReadTimeout;

    /**
     * @var string
     */
    public $originScheme;

    /**
     * @var string
     */
    public $originSni;

    /**
     * @var string
     */
    public $originVerify;

    /**
     * @var string
     */
    public $range;

    /**
     * @var string
     */
    public $rangeChunkSize;

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
        'configId' => 'ConfigId',
        'configType' => 'ConfigType',
        'dnsRecord' => 'DnsRecord',
        'originHost' => 'OriginHost',
        'originHttpPort' => 'OriginHttpPort',
        'originHttpsPort' => 'OriginHttpsPort',
        'originMtls' => 'OriginMtls',
        'originReadTimeout' => 'OriginReadTimeout',
        'originScheme' => 'OriginScheme',
        'originSni' => 'OriginSni',
        'originVerify' => 'OriginVerify',
        'range' => 'Range',
        'rangeChunkSize' => 'RangeChunkSize',
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
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }

        if (null !== $this->configType) {
            $res['ConfigType'] = $this->configType;
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

        if (null !== $this->originReadTimeout) {
            $res['OriginReadTimeout'] = $this->originReadTimeout;
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
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }

        if (isset($map['ConfigType'])) {
            $model->configType = $map['ConfigType'];
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

        if (isset($map['OriginReadTimeout'])) {
            $model->originReadTimeout = $map['OriginReadTimeout'];
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

        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
        }

        if (isset($map['SiteVersion'])) {
            $model->siteVersion = $map['SiteVersion'];
        }

        return $model;
    }
}
