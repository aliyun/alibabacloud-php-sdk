<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DescribeLivePubExperienceMetricDataRequest extends Model
{
    /**
     * @var string
     */
    public $beginTs;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $endTs;

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
    public $terminalType;
    protected $_name = [
        'beginTs'      => 'BeginTs',
        'domain'       => 'Domain',
        'endTs'        => 'EndTs',
        'metricType'   => 'MetricType',
        'os'           => 'Os',
        'pubProtocol'  => 'PubProtocol',
        'terminalType' => 'TerminalType',
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
        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
        }
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->pubProtocol) {
            $res['PubProtocol'] = $this->pubProtocol;
        }
        if (null !== $this->terminalType) {
            $res['TerminalType'] = $this->terminalType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLivePubExperienceMetricDataRequest
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
        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['PubProtocol'])) {
            $model->pubProtocol = $map['PubProtocol'];
        }
        if (isset($map['TerminalType'])) {
            $model->terminalType = $map['TerminalType'];
        }

        return $model;
    }
}
