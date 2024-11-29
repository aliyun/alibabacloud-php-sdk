<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteFunctionRequest;

use AlibabaCloud\Tea\Model;

class httpsBasicConfiguration extends Model
{
    /**
     * @example TLS_ECDHE_ECDSA_WITH_CHACHA20_POLY1305_SHA256
     *
     * @var string
     */
    public $ciphersuite;

    /**
     * @example all
     *
     * @var string
     */
    public $ciphersuiteGroup;

    /**
     * @example on
     *
     * @var string
     */
    public $http2;

    /**
     * @example on
     *
     * @var string
     */
    public $http3;

    /**
     * @example on
     *
     * @var string
     */
    public $https;

    /**
     * @example on
     *
     * @var string
     */
    public $ocspStapling;

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

    /**
     * @example on
     *
     * @var string
     */
    public $tls10;

    /**
     * @example on
     *
     * @var string
     */
    public $tls11;

    /**
     * @example on
     *
     * @var string
     */
    public $tls12;

    /**
     * @example on
     *
     * @var string
     */
    public $tls13;
    protected $_name = [
        'ciphersuite'      => 'Ciphersuite',
        'ciphersuiteGroup' => 'CiphersuiteGroup',
        'http2'            => 'Http2',
        'http3'            => 'Http3',
        'https'            => 'Https',
        'ocspStapling'     => 'OcspStapling',
        'rule'             => 'Rule',
        'ruleEnable'       => 'RuleEnable',
        'ruleName'         => 'RuleName',
        'tls10'            => 'Tls10',
        'tls11'            => 'Tls11',
        'tls12'            => 'Tls12',
        'tls13'            => 'Tls13',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ciphersuite) {
            $res['Ciphersuite'] = $this->ciphersuite;
        }
        if (null !== $this->ciphersuiteGroup) {
            $res['CiphersuiteGroup'] = $this->ciphersuiteGroup;
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
        if (null !== $this->rule) {
            $res['Rule'] = $this->rule;
        }
        if (null !== $this->ruleEnable) {
            $res['RuleEnable'] = $this->ruleEnable;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
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
     * @return httpsBasicConfiguration
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
        if (isset($map['Rule'])) {
            $model->rule = $map['Rule'];
        }
        if (isset($map['RuleEnable'])) {
            $model->ruleEnable = $map['RuleEnable'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
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
