<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sasti\V20200512\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainReportResponseBody extends Model
{
    /**
     * @var string
     */
    public $attackCntByThreatType;

    /**
     * @var string
     */
    public $attackPreferenceTop5;

    /**
     * @var string
     */
    public $basic;

    /**
     * @var string
     */
    public $confidence;

    /**
     * @var string
     */
    public $context;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $group;

    /**
     * @var string
     */
    public $intelligences;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $scenario;

    /**
     * @var string
     */
    public $sslCert;

    /**
     * @var string
     */
    public $threatLevel;

    /**
     * @var string
     */
    public $threatTypes;

    /**
     * @var string
     */
    public $whois;
    protected $_name = [
        'attackCntByThreatType' => 'AttackCntByThreatType',
        'attackPreferenceTop5'  => 'AttackPreferenceTop5',
        'basic'                 => 'Basic',
        'confidence'            => 'Confidence',
        'context'               => 'Context',
        'domain'                => 'Domain',
        'group'                 => 'Group',
        'intelligences'         => 'Intelligences',
        'requestId'             => 'RequestId',
        'scenario'              => 'Scenario',
        'sslCert'               => 'SslCert',
        'threatLevel'           => 'ThreatLevel',
        'threatTypes'           => 'ThreatTypes',
        'whois'                 => 'Whois',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attackCntByThreatType) {
            $res['AttackCntByThreatType'] = $this->attackCntByThreatType;
        }
        if (null !== $this->attackPreferenceTop5) {
            $res['AttackPreferenceTop5'] = $this->attackPreferenceTop5;
        }
        if (null !== $this->basic) {
            $res['Basic'] = $this->basic;
        }
        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }
        if (null !== $this->context) {
            $res['Context'] = $this->context;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->intelligences) {
            $res['Intelligences'] = $this->intelligences;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scenario) {
            $res['Scenario'] = $this->scenario;
        }
        if (null !== $this->sslCert) {
            $res['SslCert'] = $this->sslCert;
        }
        if (null !== $this->threatLevel) {
            $res['ThreatLevel'] = $this->threatLevel;
        }
        if (null !== $this->threatTypes) {
            $res['ThreatTypes'] = $this->threatTypes;
        }
        if (null !== $this->whois) {
            $res['Whois'] = $this->whois;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainReportResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttackCntByThreatType'])) {
            $model->attackCntByThreatType = $map['AttackCntByThreatType'];
        }
        if (isset($map['AttackPreferenceTop5'])) {
            $model->attackPreferenceTop5 = $map['AttackPreferenceTop5'];
        }
        if (isset($map['Basic'])) {
            $model->basic = $map['Basic'];
        }
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }
        if (isset($map['Context'])) {
            $model->context = $map['Context'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['Intelligences'])) {
            $model->intelligences = $map['Intelligences'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Scenario'])) {
            $model->scenario = $map['Scenario'];
        }
        if (isset($map['SslCert'])) {
            $model->sslCert = $map['SslCert'];
        }
        if (isset($map['ThreatLevel'])) {
            $model->threatLevel = $map['ThreatLevel'];
        }
        if (isset($map['ThreatTypes'])) {
            $model->threatTypes = $map['ThreatTypes'];
        }
        if (isset($map['Whois'])) {
            $model->whois = $map['Whois'];
        }

        return $model;
    }
}
