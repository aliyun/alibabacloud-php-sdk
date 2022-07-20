<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveSubMetricDataRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $beginTs;

    /**
     * @var string
     */
    public $definition;

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
    public $itemConfigs;

    /**
     * @var string
     */
    public $metricType;

    /**
     * @var string
     */
    public $network;

    /**
     * @var string
     */
    public $os;

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
    public $subProtocol;

    /**
     * @var string
     */
    public $terminalType;
    protected $_name = [
        'appName'         => 'AppName',
        'beginTs'         => 'BeginTs',
        'definition'      => 'Definition',
        'endTs'           => 'EndTs',
        'experienceLevel' => 'ExperienceLevel',
        'itemConfigs'     => 'ItemConfigs',
        'metricType'      => 'MetricType',
        'network'         => 'Network',
        'os'              => 'Os',
        'sdkVersion'      => 'SdkVersion',
        'streamName'      => 'StreamName',
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
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }
        if (null !== $this->endTs) {
            $res['EndTs'] = $this->endTs;
        }
        if (null !== $this->experienceLevel) {
            $res['ExperienceLevel'] = $this->experienceLevel;
        }
        if (null !== $this->itemConfigs) {
            $res['ItemConfigs'] = $this->itemConfigs;
        }
        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
        }
        if (null !== $this->network) {
            $res['Network'] = $this->network;
        }
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->sdkVersion) {
            $res['SdkVersion'] = $this->sdkVersion;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
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
     * @return DescribeLiveSubMetricDataRequest
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
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }
        if (isset($map['EndTs'])) {
            $model->endTs = $map['EndTs'];
        }
        if (isset($map['ExperienceLevel'])) {
            $model->experienceLevel = $map['ExperienceLevel'];
        }
        if (isset($map['ItemConfigs'])) {
            $model->itemConfigs = $map['ItemConfigs'];
        }
        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }
        if (isset($map['Network'])) {
            $model->network = $map['Network'];
        }
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['SdkVersion'])) {
            $model->sdkVersion = $map['SdkVersion'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
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
