<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DescribeLivePubMetricDataRequest extends Model
{
    /**
     * @var int
     */
    public $beginTs;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $endTs;

    /**
     * @var string
     */
    public $experienceLevel;

    /**
     * @var string
     */
    public $metricType;

    /**
     * @var string
     */
    public $os;

    /**
     * @var string
     */
    public $pubProtocol;

    /**
     * @var string
     */
    public $sdkVersion;

    /**
     * @var string
     */
    public $streamName;

    /**
     * @var string
     */
    public $terminalType;
    protected $_name = [
        'beginTs'         => 'BeginTs',
        'domain'          => 'Domain',
        'endTs'           => 'EndTs',
        'experienceLevel' => 'ExperienceLevel',
        'metricType'      => 'MetricType',
        'os'              => 'Os',
        'pubProtocol'     => 'PubProtocol',
        'sdkVersion'      => 'SdkVersion',
        'streamName'      => 'StreamName',
        'terminalType'    => 'TerminalType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTs) {
            $res['BeginTs'] = $this->beginTs;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->endTs) {
            $res['EndTs'] = $this->endTs;
        }
        if (null !== $this->experienceLevel) {
            $res['ExperienceLevel'] = $this->experienceLevel;
        }
        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
        }
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->pubProtocol) {
            $res['PubProtocol'] = $this->pubProtocol;
        }
        if (null !== $this->sdkVersion) {
            $res['SdkVersion'] = $this->sdkVersion;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->terminalType) {
            $res['TerminalType'] = $this->terminalType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLivePubMetricDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTs'])) {
            $model->beginTs = $map['BeginTs'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['EndTs'])) {
            $model->endTs = $map['EndTs'];
        }
        if (isset($map['ExperienceLevel'])) {
            $model->experienceLevel = $map['ExperienceLevel'];
        }
        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['PubProtocol'])) {
            $model->pubProtocol = $map['PubProtocol'];
        }
        if (isset($map['SdkVersion'])) {
            $model->sdkVersion = $map['SdkVersion'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['TerminalType'])) {
            $model->terminalType = $map['TerminalType'];
        }

        return $model;
    }
}
