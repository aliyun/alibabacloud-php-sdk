<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveSubExperienceMetricDataRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $beginTs;

    /**
     * @var string
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
    public $subProtocol;

    /**
     * @var string
     */
    public $terminalType;
    protected $_name = [
        'appName'         => 'AppName',
        'beginTs'         => 'BeginTs',
        'endTs'           => 'EndTs',
        'experienceLevel' => 'ExperienceLevel',
        'metricType'      => 'MetricType',
        'os'              => 'Os',
        'subProtocol'     => 'SubProtocol',
        'terminalType'    => 'TerminalType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->beginTs) {
            $res['BeginTs'] = $this->beginTs;
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
        if (null !== $this->subProtocol) {
            $res['SubProtocol'] = $this->subProtocol;
        }
        if (null !== $this->terminalType) {
            $res['TerminalType'] = $this->terminalType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveSubExperienceMetricDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['BeginTs'])) {
            $model->beginTs = $map['BeginTs'];
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
        if (isset($map['SubProtocol'])) {
            $model->subProtocol = $map['SubProtocol'];
        }
        if (isset($map['TerminalType'])) {
            $model->terminalType = $map['TerminalType'];
        }

        return $model;
    }
}
