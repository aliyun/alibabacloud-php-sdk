<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListEndpointGroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListEndpointGroupsResponseBody\endpointGroups\endpointConfigurations;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListEndpointGroupsResponseBody\endpointGroups\endpointPrivateIpList;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListEndpointGroupsResponseBody\endpointGroups\portOverrides;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListEndpointGroupsResponseBody\endpointGroups\serviceManagedInfos;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListEndpointGroupsResponseBody\endpointGroups\tags;

class endpointGroups extends Model
{
    /**
     * @var string
     */
    public $acceleratorId;

    /**
     * @var string
     */
    public $description;

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
    public $endpointIpVersion;

    /**
     * @var endpointPrivateIpList[]
     */
    public $endpointPrivateIpList;

    /**
     * @var string
     */
    public $endpointProtocolVersion;

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
     * @var string
     */
    public $healthCheckHost;

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
    public $serviceId;

    /**
     * @var bool
     */
    public $serviceManaged;

    /**
     * @var serviceManagedInfos[]
     */
    public $serviceManagedInfos;

    /**
     * @var string
     */
    public $state;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var int
     */
    public $thresholdCount;

    /**
     * @var int
     */
    public $trafficPercentage;
    protected $_name = [
        'acceleratorId' => 'AcceleratorId',
        'description' => 'Description',
        'endpointConfigurations' => 'EndpointConfigurations',
        'endpointGroupId' => 'EndpointGroupId',
        'endpointGroupIpList' => 'EndpointGroupIpList',
        'endpointGroupRegion' => 'EndpointGroupRegion',
        'endpointGroupType' => 'EndpointGroupType',
        'endpointGroupUnconfirmedIpList' => 'EndpointGroupUnconfirmedIpList',
        'endpointIpVersion' => 'EndpointIpVersion',
        'endpointPrivateIpList' => 'EndpointPrivateIpList',
        'endpointProtocolVersion' => 'EndpointProtocolVersion',
        'endpointRequestProtocol' => 'EndpointRequestProtocol',
        'forwardingRuleIds' => 'ForwardingRuleIds',
        'healthCheckEnabled' => 'HealthCheckEnabled',
        'healthCheckHost' => 'HealthCheckHost',
        'healthCheckIntervalSeconds' => 'HealthCheckIntervalSeconds',
        'healthCheckPath' => 'HealthCheckPath',
        'healthCheckPort' => 'HealthCheckPort',
        'healthCheckProtocol' => 'HealthCheckProtocol',
        'listenerId' => 'ListenerId',
        'name' => 'Name',
        'portOverrides' => 'PortOverrides',
        'serviceId' => 'ServiceId',
        'serviceManaged' => 'ServiceManaged',
        'serviceManagedInfos' => 'ServiceManagedInfos',
        'state' => 'State',
        'tags' => 'Tags',
        'thresholdCount' => 'ThresholdCount',
        'trafficPercentage' => 'TrafficPercentage',
    ];

    public function validate()
    {
        if (\is_array($this->endpointConfigurations)) {
            Model::validateArray($this->endpointConfigurations);
        }
        if (\is_array($this->endpointGroupIpList)) {
            Model::validateArray($this->endpointGroupIpList);
        }
        if (\is_array($this->endpointGroupUnconfirmedIpList)) {
            Model::validateArray($this->endpointGroupUnconfirmedIpList);
        }
        if (\is_array($this->endpointPrivateIpList)) {
            Model::validateArray($this->endpointPrivateIpList);
        }
        if (\is_array($this->forwardingRuleIds)) {
            Model::validateArray($this->forwardingRuleIds);
        }
        if (\is_array($this->portOverrides)) {
            Model::validateArray($this->portOverrides);
        }
        if (\is_array($this->serviceManagedInfos)) {
            Model::validateArray($this->serviceManagedInfos);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->endpointConfigurations) {
            if (\is_array($this->endpointConfigurations)) {
                $res['EndpointConfigurations'] = [];
                $n1 = 0;
                foreach ($this->endpointConfigurations as $item1) {
                    $res['EndpointConfigurations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endpointGroupId) {
            $res['EndpointGroupId'] = $this->endpointGroupId;
        }

        if (null !== $this->endpointGroupIpList) {
            if (\is_array($this->endpointGroupIpList)) {
                $res['EndpointGroupIpList'] = [];
                $n1 = 0;
                foreach ($this->endpointGroupIpList as $item1) {
                    $res['EndpointGroupIpList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endpointGroupRegion) {
            $res['EndpointGroupRegion'] = $this->endpointGroupRegion;
        }

        if (null !== $this->endpointGroupType) {
            $res['EndpointGroupType'] = $this->endpointGroupType;
        }

        if (null !== $this->endpointGroupUnconfirmedIpList) {
            if (\is_array($this->endpointGroupUnconfirmedIpList)) {
                $res['EndpointGroupUnconfirmedIpList'] = [];
                $n1 = 0;
                foreach ($this->endpointGroupUnconfirmedIpList as $item1) {
                    $res['EndpointGroupUnconfirmedIpList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endpointIpVersion) {
            $res['EndpointIpVersion'] = $this->endpointIpVersion;
        }

        if (null !== $this->endpointPrivateIpList) {
            if (\is_array($this->endpointPrivateIpList)) {
                $res['EndpointPrivateIpList'] = [];
                $n1 = 0;
                foreach ($this->endpointPrivateIpList as $item1) {
                    $res['EndpointPrivateIpList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endpointProtocolVersion) {
            $res['EndpointProtocolVersion'] = $this->endpointProtocolVersion;
        }

        if (null !== $this->endpointRequestProtocol) {
            $res['EndpointRequestProtocol'] = $this->endpointRequestProtocol;
        }

        if (null !== $this->forwardingRuleIds) {
            if (\is_array($this->forwardingRuleIds)) {
                $res['ForwardingRuleIds'] = [];
                $n1 = 0;
                foreach ($this->forwardingRuleIds as $item1) {
                    $res['ForwardingRuleIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->healthCheckEnabled) {
            $res['HealthCheckEnabled'] = $this->healthCheckEnabled;
        }

        if (null !== $this->healthCheckHost) {
            $res['HealthCheckHost'] = $this->healthCheckHost;
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
            if (\is_array($this->portOverrides)) {
                $res['PortOverrides'] = [];
                $n1 = 0;
                foreach ($this->portOverrides as $item1) {
                    $res['PortOverrides'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        if (null !== $this->serviceManaged) {
            $res['ServiceManaged'] = $this->serviceManaged;
        }

        if (null !== $this->serviceManagedInfos) {
            if (\is_array($this->serviceManagedInfos)) {
                $res['ServiceManagedInfos'] = [];
                $n1 = 0;
                foreach ($this->serviceManagedInfos as $item1) {
                    $res['ServiceManagedInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->thresholdCount) {
            $res['ThresholdCount'] = $this->thresholdCount;
        }

        if (null !== $this->trafficPercentage) {
            $res['TrafficPercentage'] = $this->trafficPercentage;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EndpointConfigurations'])) {
            if (!empty($map['EndpointConfigurations'])) {
                $model->endpointConfigurations = [];
                $n1 = 0;
                foreach ($map['EndpointConfigurations'] as $item1) {
                    $model->endpointConfigurations[$n1] = endpointConfigurations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EndpointGroupId'])) {
            $model->endpointGroupId = $map['EndpointGroupId'];
        }

        if (isset($map['EndpointGroupIpList'])) {
            if (!empty($map['EndpointGroupIpList'])) {
                $model->endpointGroupIpList = [];
                $n1 = 0;
                foreach ($map['EndpointGroupIpList'] as $item1) {
                    $model->endpointGroupIpList[$n1] = $item1;
                    ++$n1;
                }
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
                $model->endpointGroupUnconfirmedIpList = [];
                $n1 = 0;
                foreach ($map['EndpointGroupUnconfirmedIpList'] as $item1) {
                    $model->endpointGroupUnconfirmedIpList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EndpointIpVersion'])) {
            $model->endpointIpVersion = $map['EndpointIpVersion'];
        }

        if (isset($map['EndpointPrivateIpList'])) {
            if (!empty($map['EndpointPrivateIpList'])) {
                $model->endpointPrivateIpList = [];
                $n1 = 0;
                foreach ($map['EndpointPrivateIpList'] as $item1) {
                    $model->endpointPrivateIpList[$n1] = endpointPrivateIpList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EndpointProtocolVersion'])) {
            $model->endpointProtocolVersion = $map['EndpointProtocolVersion'];
        }

        if (isset($map['EndpointRequestProtocol'])) {
            $model->endpointRequestProtocol = $map['EndpointRequestProtocol'];
        }

        if (isset($map['ForwardingRuleIds'])) {
            if (!empty($map['ForwardingRuleIds'])) {
                $model->forwardingRuleIds = [];
                $n1 = 0;
                foreach ($map['ForwardingRuleIds'] as $item1) {
                    $model->forwardingRuleIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['HealthCheckEnabled'])) {
            $model->healthCheckEnabled = $map['HealthCheckEnabled'];
        }

        if (isset($map['HealthCheckHost'])) {
            $model->healthCheckHost = $map['HealthCheckHost'];
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
                $n1 = 0;
                foreach ($map['PortOverrides'] as $item1) {
                    $model->portOverrides[$n1] = portOverrides::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        if (isset($map['ServiceManaged'])) {
            $model->serviceManaged = $map['ServiceManaged'];
        }

        if (isset($map['ServiceManagedInfos'])) {
            if (!empty($map['ServiceManagedInfos'])) {
                $model->serviceManagedInfos = [];
                $n1 = 0;
                foreach ($map['ServiceManagedInfos'] as $item1) {
                    $model->serviceManagedInfos[$n1] = serviceManagedInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ThresholdCount'])) {
            $model->thresholdCount = $map['ThresholdCount'];
        }

        if (isset($map['TrafficPercentage'])) {
            $model->trafficPercentage = $map['TrafficPercentage'];
        }

        return $model;
    }
}
