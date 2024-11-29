<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteFunctionRequest;

use AlibabaCloud\Tea\Model;

class originRules extends Model
{
    /**
     * @description The hostname that overrides the resolved hostname of an incoming request.
     *
     * @example test.example.com
     *
     * @var string
     */
    public $dnsRecord;

    /**
     * @description The Host header in origin requests.
     *
     * @example origin.example.com
     *
     * @var string
     */
    public $originHost;

    /**
     * @example 8080
     *
     * @var string
     */
    public $originHttpPort;

    /**
     * @example 4433
     *
     * @var string
     */
    public $originHttpsPort;

    /**
     * @description The protocol used for origin requests. Valid values:
     *
     *   http: HTTP.
     *   https: HTTPS.
     *   follow: follows the protocol used by the client.
     *
     * @example http
     *
     * @var string
     */
    public $originScheme;

    /**
     * @description The SNI in origin requests.
     *
     * @example origin.example.com
     *
     * @var string
     */
    public $originSni;

    /**
     * @example on
     *
     * @var string
     */
    public $range;

    /**
     * @description The rule content.
     *
     * @example [{"MatchType":"http.request.method","MatchOperator":"eq","MatchValue":"GET","Negate":false}]
     *
     * @var string
     */
    public $rule;

    /**
     * @description Specifies whether to enable the rule. Valid values:
     *
     *   on
     *   off
     *
     * @example on
     *
     * @var string
     */
    public $ruleEnable;

    /**
     * @description The rule name.
     *
     * @example rule_example
     *
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'dnsRecord'       => 'DnsRecord',
        'originHost'      => 'OriginHost',
        'originHttpPort'  => 'OriginHttpPort',
        'originHttpsPort' => 'OriginHttpsPort',
        'originScheme'    => 'OriginScheme',
        'originSni'       => 'OriginSni',
        'range'           => 'Range',
        'rule'            => 'Rule',
        'ruleEnable'      => 'RuleEnable',
        'ruleName'        => 'RuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->originScheme) {
            $res['OriginScheme'] = $this->originScheme;
        }
        if (null !== $this->originSni) {
            $res['OriginSni'] = $this->originSni;
        }
        if (null !== $this->range) {
            $res['Range'] = $this->range;
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
     * @return originRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['OriginScheme'])) {
            $model->originScheme = $map['OriginScheme'];
        }
        if (isset($map['OriginSni'])) {
            $model->originSni = $map['OriginSni'];
        }
        if (isset($map['Range'])) {
            $model->range = $map['Range'];
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
