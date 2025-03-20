<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreateCompressionRuleRequest extends Model
{
    /**
     * @description Brotli compression. Value range:
     *
     * - on: Enable.
     * - off: Disable.
     *
     * @example on
     *
     * @var string
     */
    public $brotli;

    /**
     * @description Gzip compression. Value range:
     *
     * - on: Enable.
     * - off: Disable.
     *
     * @example on
     *
     * @var string
     */
    public $gzip;

    /**
     * @description Rule content, using conditional expressions to match user requests. This parameter is not required when adding a global configuration. There are two usage scenarios:
     * - To match all incoming requests: Set the value to true
     * - To match specific requests: Set the value to a custom expression, for example: (http.host eq \\"video.example.com\\")
     *
     * @example (http.host eq "video.example.com")
     *
     * @var string
     */
    public $rule;

    /**
     * @description Rule switch. This parameter is not required when adding a global configuration. Value range:
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
     * @description Site ID, which can be obtained by calling the [ListSites](https://help.aliyun.com/document_detail/2850189.html) interface.
     *
     * This parameter is required.
     *
     * @example 1231231221***
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The version number of the site configuration. For sites with version management enabled, you can use this parameter to specify the effective version of the site configuration, defaulting to version 0.
     *
     * @example 0
     *
     * @var int
     */
    public $siteVersion;

    /**
     * @description Zstd compression. Value range:
     *
     * - on: Enable.
     * - off: Disable.
     *
     * @example on
     *
     * @var string
     */
    public $zstd;
    protected $_name = [
        'brotli' => 'Brotli',
        'gzip' => 'Gzip',
        'rule' => 'Rule',
        'ruleEnable' => 'RuleEnable',
        'ruleName' => 'RuleName',
        'siteId' => 'SiteId',
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
        if (null !== $this->gzip) {
            $res['Gzip'] = $this->gzip;
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
        if (null !== $this->zstd) {
            $res['Zstd'] = $this->zstd;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCompressionRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Brotli'])) {
            $model->brotli = $map['Brotli'];
        }
        if (isset($map['Gzip'])) {
            $model->gzip = $map['Gzip'];
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
        if (isset($map['Zstd'])) {
            $model->zstd = $map['Zstd'];
        }

        return $model;
    }
}
