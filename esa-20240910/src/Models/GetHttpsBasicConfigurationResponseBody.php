<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class GetHttpsBasicConfigurationResponseBody extends Model
{
    /**
     * @description Custom cipher suite, indicating the specific encryption algorithm selected when CiphersuiteGroup is set to custom.
     *
     * @example TLS_ECDHE_ECDSA_WITH_CHACHA20_POLY1305_SHA256
     *
     * @var string
     */
    public $ciphersuite;

    /**
     * @description Cipher suite group, default is all cipher suites. Value range:
     *
     * - all: All cipher suites.
     * - strict: Strong cipher suites.
     * - custom: Custom cipher suites.
     *
     * @example all
     *
     * @var string
     */
    public $ciphersuiteGroup;

    /**
     * @description Configuration ID.
     *
     * @example 352816096987136
     *
     * @var int
     */
    public $configId;

    /**
     * @description Configuration type, which can be used to query global or rule configurations. Value range:
     * - global: Query global configuration;
     * - rule: Query rule configuration;
     *
     * @example global
     *
     * @var string
     */
    public $configType;

    /**
     * @description Whether to enable HTTP2, default is enabled. Value range:
     *
     * - on: Enable.
     * - off: Disable.
     *
     * @example on
     *
     * @var string
     */
    public $http2;

    /**
     * @description Whether to enable HTTP3, which is enabled by default. The value can be:
     * - on: Enabled.
     * - off: Disabled.
     *
     * @example on
     *
     * @var string
     */
    public $http3;

    /**
     * @description Whether to enable HTTPS, default is enabled. Value range:
     *
     * - on: Enable.
     * - off: Disable.
     *
     * @example on
     *
     * @var string
     */
    public $https;

    /**
     * @description Whether to enable OCSP, default is disabled. Value range:
     *
     * - on: Enable.
     * - off: Disable.
     *
     * @example on
     *
     * @var string
     */
    public $ocspStapling;

    /**
     * @description Request ID.
     *
     * @example C370DAF1-C838-4288-A1A0-9A87633D2***
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Matching rule content.
     *
     * @example (http.host eq \\"video.example.com\\")
     *
     * @var string
     */
    public $rule;

    /**
     * @description Rule switch. Value range:
     *
     * - on: Enable.
     * - off: Disable.
     *
     * @example on
     *
     * @var string
     */
    public $ruleEnable;

    /**
     * @description Rule name.
     *
     * @example rule_example
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description Rule execution sequence.
     *
     * @example 1
     *
     * @var int
     */
    public $sequence;

    /**
     * @description Whether to enable TLS1.0, default is disabled. Value range:
     * - on: Enable.
     * - off: Disable.
     *
     * @example on
     *
     * @var string
     */
    public $tls10;

    /**
     * @description Whether to enable TLS1.1, default is disabled. Value range:
     * - on: Enable.
     * - off: Disable.
     *
     * @example on
     *
     * @var string
     */
    public $tls11;

    /**
     * @description Whether to enable TLS1.2, default is disabled. Value range:
     * - on: Enable.
     * - off: Disable.
     *
     * @example on
     *
     * @var string
     */
    public $tls12;

    /**
     * @description Whether to enable TLS1.3, default is disabled. Value range:
     * - on: Enable.
     * - off: Disable.
     *
     * @example on
     *
     * @var string
     */
    public $tls13;
    protected $_name = [
        'ciphersuite' => 'Ciphersuite',
        'ciphersuiteGroup' => 'CiphersuiteGroup',
        'configId' => 'ConfigId',
        'configType' => 'ConfigType',
        'http2' => 'Http2',
        'http3' => 'Http3',
        'https' => 'Https',
        'ocspStapling' => 'OcspStapling',
        'requestId' => 'RequestId',
        'rule' => 'Rule',
        'ruleEnable' => 'RuleEnable',
        'ruleName' => 'RuleName',
        'sequence' => 'Sequence',
        'tls10' => 'Tls10',
        'tls11' => 'Tls11',
        'tls12' => 'Tls12',
        'tls13' => 'Tls13',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ciphersuite) {
            $res['Ciphersuite'] = $this->ciphersuite;
        }
        if (null !== $this->ciphersuiteGroup) {
            $res['CiphersuiteGroup'] = $this->ciphersuiteGroup;
        }
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->configType) {
            $res['ConfigType'] = $this->configType;
        }
        if (null !== $this->http2) {
            $res['Http2'] = $this->http2;
        }
        if (null !== $this->http3) {
            $res['Http3'] = $this->http3;
        }
        if (null !== $this->https) {
            $res['Https'] = $this->https;
        }
        if (null !== $this->ocspStapling) {
            $res['OcspStapling'] = $this->ocspStapling;
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
        if (null !== $this->tls10) {
            $res['Tls10'] = $this->tls10;
        }
        if (null !== $this->tls11) {
            $res['Tls11'] = $this->tls11;
        }
        if (null !== $this->tls12) {
            $res['Tls12'] = $this->tls12;
        }
        if (null !== $this->tls13) {
            $res['Tls13'] = $this->tls13;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHttpsBasicConfigurationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ciphersuite'])) {
            $model->ciphersuite = $map['Ciphersuite'];
        }
        if (isset($map['CiphersuiteGroup'])) {
            $model->ciphersuiteGroup = $map['CiphersuiteGroup'];
        }
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['ConfigType'])) {
            $model->configType = $map['ConfigType'];
        }
        if (isset($map['Http2'])) {
            $model->http2 = $map['Http2'];
        }
        if (isset($map['Http3'])) {
            $model->http3 = $map['Http3'];
        }
        if (isset($map['Https'])) {
            $model->https = $map['Https'];
        }
        if (isset($map['OcspStapling'])) {
            $model->ocspStapling = $map['OcspStapling'];
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
        if (isset($map['Tls10'])) {
            $model->tls10 = $map['Tls10'];
        }
        if (isset($map['Tls11'])) {
            $model->tls11 = $map['Tls11'];
        }
        if (isset($map['Tls12'])) {
            $model->tls12 = $map['Tls12'];
        }
        if (isset($map['Tls13'])) {
            $model->tls13 = $map['Tls13'];
        }

        return $model;
    }
}
