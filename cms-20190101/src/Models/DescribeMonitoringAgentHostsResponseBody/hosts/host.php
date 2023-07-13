<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentHostsResponseBody\hosts;

use AlibabaCloud\Tea\Model;

class host extends Model
{
    /**
     * @description The version of the CloudMonitor agent.
     *
     * @example 3.4.6
     *
     * @var string
     */
    public $agentVersion;

    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 103201326074****
     *
     * @var int
     */
    public $aliUid;

    /**
     * @description The elastic IP address (EIP) of the host.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $eipAddress;

    /**
     * @description The ID of the EIP.
     *
     * @example eip-bp16i16k9gcezyfrp****
     *
     * @var string
     */
    public $eipId;

    /**
     * @description The name of the host.
     *
     * @example hostIP
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The ID of the instance.
     *
     * @example i-a2d5q7pm3f9yr212****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of the ECS instance.
     *
     * @example ecs.n4
     *
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @description The IP address of the host.
     *
     * > Multiple IP addresses are separated with commas (,).
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $ipGroup;

    /**
     * @description The IP address of the Network Address Translation (NAT) gateway.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $natIp;

    /**
     * @description The network type.
     *
     * @example vpc
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The operating system.
     *
     * @example Linux
     *
     * @var string
     */
    public $operatingSystem;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The serial number of the host. A host that is not provided by Alibaba Cloud has a serial number instead of an instance ID.
     *
     * > This parameter can be used to accurately search for a monitored host.
     * @example x12335-6cc8-4a22-9f21-1a00a719****
     *
     * @var string
     */
    public $serialNumber;

    /**
     * @description Indicates whether the host is provided by Alibaba Cloud. Valid values:
     *
     *   true: The host is provided by Alibaba Cloud.
     *   false: The host is not provided by Alibaba Cloud.
     *
     * @example true
     *
     * @var bool
     */
    public $isAliyunHost;
    protected $_name = [
        'agentVersion'       => 'AgentVersion',
        'aliUid'             => 'AliUid',
        'eipAddress'         => 'EipAddress',
        'eipId'              => 'EipId',
        'hostName'           => 'HostName',
        'instanceId'         => 'InstanceId',
        'instanceTypeFamily' => 'InstanceTypeFamily',
        'ipGroup'            => 'IpGroup',
        'natIp'              => 'NatIp',
        'networkType'        => 'NetworkType',
        'operatingSystem'    => 'OperatingSystem',
        'region'             => 'Region',
        'serialNumber'       => 'SerialNumber',
        'isAliyunHost'       => 'isAliyunHost',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentVersion) {
            $res['AgentVersion'] = $this->agentVersion;
        }
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->eipAddress) {
            $res['EipAddress'] = $this->eipAddress;
        }
        if (null !== $this->eipId) {
            $res['EipId'] = $this->eipId;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }
        if (null !== $this->ipGroup) {
            $res['IpGroup'] = $this->ipGroup;
        }
        if (null !== $this->natIp) {
            $res['NatIp'] = $this->natIp;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->operatingSystem) {
            $res['OperatingSystem'] = $this->operatingSystem;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->isAliyunHost) {
            $res['isAliyunHost'] = $this->isAliyunHost;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return host
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentVersion'])) {
            $model->agentVersion = $map['AgentVersion'];
        }
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['EipAddress'])) {
            $model->eipAddress = $map['EipAddress'];
        }
        if (isset($map['EipId'])) {
            $model->eipId = $map['EipId'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
        }
        if (isset($map['IpGroup'])) {
            $model->ipGroup = $map['IpGroup'];
        }
        if (isset($map['NatIp'])) {
            $model->natIp = $map['NatIp'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['OperatingSystem'])) {
            $model->operatingSystem = $map['OperatingSystem'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['isAliyunHost'])) {
            $model->isAliyunHost = $map['isAliyunHost'];
        }

        return $model;
    }
}
