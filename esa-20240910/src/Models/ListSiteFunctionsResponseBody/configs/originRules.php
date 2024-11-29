<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListSiteFunctionsResponseBody\configs;

use AlibabaCloud\Tea\Model;

class originRules extends Model
{
    /**
     * @var int
     */
    public $configId;

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
    public $originScheme;

    /**
     * @var string
     */
    public $originSni;

    /**
     * @var string
     */
    public $range;

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
     * @var string
     */
    public $sequence;
    protected $_name = [
        'configId'        => 'ConfigId',
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
        'sequence'        => 'Sequence',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
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
        if (null !== $this->sequence) {
            $res['Sequence'] = $this->sequence;
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
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
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
        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
        }

        return $model;
    }
}
