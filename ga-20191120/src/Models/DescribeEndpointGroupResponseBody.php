<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeEndpointGroupResponseBody\endpointConfigurations;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeEndpointGroupResponseBody\portOverrides;
use AlibabaCloud\Tea\Model;

class DescribeEndpointGroupResponseBody extends Model
{
    /**
     * @var string
     */
    public $acceleratorId;

    /**
     * @var string
     */
    public $accessLogSwitch;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enableAccessLog;

    /**
     * @var endpointConfigurations[]
     */
    public $endpointConfigurations;

    /**
     * @var string
     */
    public $endpointGroupId;

    /**
     * @var string[]
     */
    public $endpointGroupIpList;

    /**
     * @var string
     */
    public $endpointGroupRegion;

    /**
     * @var string
     */
    public $endpointGroupType;

    /**
     * @var string[]
     */
    public $endpointGroupUnconfirmedIpList;

    /**
     * @var string
     */
    public $endpointRequestProtocol;

    /**
     * @var string[]
     */
    public $forwardingRuleIds;

    /**
     * @var bool
     */
    public $healthCheckEnabled;

    /**
     * @var int
     */
    public $healthCheckIntervalSeconds;

    /**
     * @var string
     */
    public $healthCheckPath;

    /**
     * @var int
     */
    public $healthCheckPort;

    /**
     * @var string
     */
    public $healthCheckProtocol;

    /**
     * @var string
     */
    public $listenerId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var portOverrides[]
     */
    public $portOverrides;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $slsLogStoreName;

    /**
     * @var string
     */
    public $slsProjectName;

    /**
     * @var string
     */
    public $slsRegion;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $thresholdCount;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $trafficPercentage;
    protected $_name = [
        'acceleratorId'                  => 'AcceleratorId',
        'accessLogSwitch'                => 'AccessLogSwitch',
        'description'                    => 'Description',
        'enableAccessLog'                => 'EnableAccessLog',
        'endpointConfigurations'         => 'EndpointConfigurations',
        'endpointGroupId'                => 'EndpointGroupId',
        'endpointGroupIpList'            => 'EndpointGroupIpList',
        'endpointGroupRegion'            => 'EndpointGroupRegion',
        'endpointGroupType'              => 'EndpointGroupType',
        'endpointGroupUnconfirmedIpList' => 'EndpointGroupUnconfirmedIpList',
        'endpointRequestProtocol'        => 'EndpointRequestProtocol',
        'forwardingRuleIds'              => 'ForwardingRuleIds',
        'healthCheckEnabled'             => 'HealthCheckEnabled',
        'healthCheckIntervalSeconds'     => 'HealthCheckIntervalSeconds',
        'healthCheckPath'                => 'HealthCheckPath',
        'healthCheckPort'                => 'HealthCheckPort',
        'healthCheckProtocol'            => 'HealthCheckProtocol',
        'listenerId'                     => 'ListenerId',
        'name'                           => 'Name',
        'portOverrides'                  => 'PortOverrides',
        'requestId'                      => 'RequestId',
        'slsLogStoreName'                => 'SlsLogStoreName',
        'slsProjectName'                 => 'SlsProjectName',
        'slsRegion'                      => 'SlsRegion',
        'state'                          => 'State',
        'thresholdCount'                 => 'ThresholdCount',
        'totalCount'                     => 'TotalCount',
        'trafficPercentage'              => 'TrafficPercentage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }
        if (null !== $this->accessLogSwitch) {
            $res['AccessLogSwitch'] = $this->accessLogSwitch;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->enableAccessLog) {
            $res['EnableAccessLog'] = $this->enableAccessLog;
        }
        if (null !== $this->endpointConfigurations) {
            $res['EndpointConfigurations'] = [];
            if (null !== $this->endpointConfigurations && \is_array($this->endpointConfigurations)) {
                $n = 0;
                foreach ($this->endpointConfigurations as $item) {
                    $res['EndpointConfigurations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->endpointGroupId) {
            $res['EndpointGroupId'] = $this->endpointGroupId;
        }
        if (null !== $this->endpointGroupIpList) {
            $res['EndpointGroupIpList'] = $this->endpointGroupIpList;
        }
        if (null !== $this->endpointGroupRegion) {
            $res['EndpointGroupRegion'] = $this->endpointGroupRegion;
        }
        if (null !== $this->endpointGroupType) {
            $res['EndpointGroupType'] = $this->endpointGroupType;
        }
        if (null !== $this->endpointGroupUnconfirmedIpList) {
            $res['EndpointGroupUnconfirmedIpList'] = $this->endpointGroupUnconfirmedIpList;
        }
        if (null !== $this->endpointRequestProtocol) {
            $res['EndpointRequestProtocol'] = $this->endpointRequestProtocol;
        }
        if (null !== $this->forwardingRuleIds) {
            $res['ForwardingRuleIds'] = $this->forwardingRuleIds;
        }
        if (null !== $this->healthCheckEnabled) {
            $res['HealthCheckEnabled'] = $this->healthCheckEnabled;
        }
        if (null !== $this->healthCheckIntervalSeconds) {
            $res['HealthCheckIntervalSeconds'] = $this->healthCheckIntervalSeconds;
        }
        if (null !== $this->healthCheckPath) {
            $res['HealthCheckPath'] = $this->healthCheckPath;
        }
        if (null !== $this->healthCheckPort) {
            $res['HealthCheckPort'] = $this->healthCheckPort;
        }
        if (null !== $this->healthCheckProtocol) {
            $res['HealthCheckProtocol'] = $this->healthCheckProtocol;
        }
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->portOverrides) {
            $res['PortOverrides'] = [];
            if (null !== $this->portOverrides && \is_array($this->portOverrides)) {
                $n = 0;
                foreach ($this->portOverrides as $item) {
                    $res['PortOverrides'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->slsLogStoreName) {
            $res['SlsLogStoreName'] = $this->slsLogStoreName;
        }
        if (null !== $this->slsProjectName) {
            $res['SlsProjectName'] = $this->slsProjectName;
        }
        if (null !== $this->slsRegion) {
            $res['SlsRegion'] = $this->slsRegion;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->thresholdCount) {
            $res['ThresholdCount'] = $this->thresholdCount;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->trafficPercentage) {
            $res['TrafficPercentage'] = $this->trafficPercentage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEndpointGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['AccessLogSwitch'])) {
            $model->accessLogSwitch = $map['AccessLogSwitch'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnableAccessLog'])) {
            $model->enableAccessLog = $map['EnableAccessLog'];
        }
        if (isset($map['EndpointConfigurations'])) {
            if (!empty($map['EndpointConfigurations'])) {
                $model->endpointConfigurations = [];
                $n                             = 0;
                foreach ($map['EndpointConfigurations'] as $item) {
                    $model->endpointConfigurations[$n++] = null !== $item ? endpointConfigurations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EndpointGroupId'])) {
            $model->endpointGroupId = $map['EndpointGroupId'];
        }
        if (isset($map['EndpointGroupIpList'])) {
            if (!empty($map['EndpointGroupIpList'])) {
                $model->endpointGroupIpList = $map['EndpointGroupIpList'];
            }
        }
        if (isset($map['EndpointGroupRegion'])) {
            $model->endpointGroupRegion = $map['EndpointGroupRegion'];
        }
        if (isset($map['EndpointGroupType'])) {
            $model->endpointGroupType = $map['EndpointGroupType'];
        }
        if (isset($map['EndpointGroupUnconfirmedIpList'])) {
            if (!empty($map['EndpointGroupUnconfirmedIpList'])) {
                $model->endpointGroupUnconfirmedIpList = $map['EndpointGroupUnconfirmedIpList'];
            }
        }
        if (isset($map['EndpointRequestProtocol'])) {
            $model->endpointRequestProtocol = $map['EndpointRequestProtocol'];
        }
        if (isset($map['ForwardingRuleIds'])) {
            if (!empty($map['ForwardingRuleIds'])) {
                $model->forwardingRuleIds = $map['ForwardingRuleIds'];
            }
        }
        if (isset($map['HealthCheckEnabled'])) {
            $model->healthCheckEnabled = $map['HealthCheckEnabled'];
        }
        if (isset($map['HealthCheckIntervalSeconds'])) {
            $model->healthCheckIntervalSeconds = $map['HealthCheckIntervalSeconds'];
        }
        if (isset($map['HealthCheckPath'])) {
            $model->healthCheckPath = $map['HealthCheckPath'];
        }
        if (isset($map['HealthCheckPort'])) {
            $model->healthCheckPort = $map['HealthCheckPort'];
        }
        if (isset($map['HealthCheckProtocol'])) {
            $model->healthCheckProtocol = $map['HealthCheckProtocol'];
        }
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PortOverrides'])) {
            if (!empty($map['PortOverrides'])) {
                $model->portOverrides = [];
                $n                    = 0;
                foreach ($map['PortOverrides'] as $item) {
                    $model->portOverrides[$n++] = null !== $item ? portOverrides::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SlsLogStoreName'])) {
            $model->slsLogStoreName = $map['SlsLogStoreName'];
        }
        if (isset($map['SlsProjectName'])) {
            $model->slsProjectName = $map['SlsProjectName'];
        }
        if (isset($map['SlsRegion'])) {
            $model->slsRegion = $map['SlsRegion'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['ThresholdCount'])) {
            $model->thresholdCount = $map['ThresholdCount'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['TrafficPercentage'])) {
            $model->trafficPercentage = $map['TrafficPercentage'];
        }

        return $model;
    }
}
