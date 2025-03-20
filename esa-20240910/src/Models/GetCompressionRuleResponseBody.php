<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class GetCompressionRuleResponseBody extends Model
{
    /**
     * @description Brotli compression. Possible values:
     * - on: Enabled.
     * - off: Disabled.
     *
     * @example on
     *
     * @var string
     */
    public $brotli;

    /**
     * @description Configuration ID.
     *
     * @example 35281609698****
     *
     * @var int
     */
    public $configId;

    /**
     * @description Configuration type. Possible values:
     * - global: Global configuration.
     * - rule: Rule-based configuration.
     *
     * @example rule
     *
     * @var string
     */
    public $configType;

    /**
     * @description Gzip compression. Possible values:
     * - on: Enabled.
     * - off: Disabled.
     *
     * @example on
     *
     * @var string
     */
    public $gzip;

    /**
     * @description Request ID.
     *
     * @example 186C6DF2-D96A-5102-B04E-FB92C16C9867
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Rule content, using conditional expressions to match user requests. This parameter is not required when adding a global configuration. There are two usage scenarios:
     * - Match all incoming requests: Set the value to true
     * - Match specific requests: Set the value to a custom expression, for example: (http.host eq \\"video.example.com\\")
     *
     * @example (http.host eq "video.example.com")
     *
     * @var string
     */
    public $rule;

    /**
     * @description Rule switch. This parameter is not required when adding a global configuration. Possible values:
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
     * @description Rule execution order. The smaller the value, the higher the priority.
     *
     * @example 1
     *
     * @var int
     */
    public $sequence;

    /**
     * @description The version number of the site configuration. For sites with version management enabled, this parameter can specify the effective version of the configuration, defaulting to version 0.
     *
     * @example 0
     *
     * @var int
     */
    public $siteVersion;

    /**
     * @description Zstd compression. Value range:
     * - on: enabled.
     * - off: disabled.
     *
     * @example on
     *
     * @var string
     */
    public $zstd;
    protected $_name = [
        'brotli' => 'Brotli',
        'configId' => 'ConfigId',
        'configType' => 'ConfigType',
        'gzip' => 'Gzip',
        'requestId' => 'RequestId',
        'rule' => 'Rule',
        'ruleEnable' => 'RuleEnable',
        'ruleName' => 'RuleName',
        'sequence' => 'Sequence',
        'siteVersion' => 'SiteVersion',
        'zstd' => 'Zstd',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->brotli) {
            $res['Brotli'] = $this->brotli;
        }
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->configType) {
            $res['ConfigType'] = $this->configType;
        }
        if (null !== $this->gzip) {
            $res['Gzip'] = $this->gzip;
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
        if (null !== $this->zstd) {
            $res['Zstd'] = $this->zstd;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCompressionRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Brotli'])) {
            $model->brotli = $map['Brotli'];
        }
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['ConfigType'])) {
            $model->configType = $map['ConfigType'];
        }
        if (isset($map['Gzip'])) {
            $model->gzip = $map['Gzip'];
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
        if (isset($map['Zstd'])) {
            $model->zstd = $map['Zstd'];
        }

        return $model;
    }
}
