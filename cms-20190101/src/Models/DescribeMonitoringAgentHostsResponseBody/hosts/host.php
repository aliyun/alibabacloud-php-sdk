<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentHostsResponseBody\hosts;

use AlibabaCloud\Tea\Model;

class host extends Model
{
    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var string
     */
    public $natIp;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $isAliyunHost;

    /**
     * @var string
     */
    public $eipAddress;

    /**
     * @var string
     */
    public $agentVersion;

    /**
     * @var string
     */
    public $ipGroup;

    /**
     * @var string
     */
    public $eipId;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @var string
     */
    public $operatingSystem;
    protected $_name = [
        'serialNumber'       => 'SerialNumber',
        'natIp'              => 'NatIp',
        'hostName'           => 'HostName',
        'aliUid'             => 'AliUid',
        'networkType'        => 'NetworkType',
        'instanceId'         => 'InstanceId',
        'isAliyunHost'       => 'isAliyunHost',
        'eipAddress'         => 'EipAddress',
        'agentVersion'       => 'AgentVersion',
        'ipGroup'            => 'IpGroup',
        'eipId'              => 'EipId',
        'region'             => 'Region',
        'instanceTypeFamily' => 'InstanceTypeFamily',
        'operatingSystem'    => 'OperatingSystem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->natIp) {
            $res['NatIp'] = $this->natIp;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->isAliyunHost) {
            $res['isAliyunHost'] = $this->isAliyunHost;
        }
        if (null !== $this->eipAddress) {
            $res['EipAddress'] = $this->eipAddress;
        }
        if (null !== $this->agentVersion) {
            $res['AgentVersion'] = $this->agentVersion;
        }
        if (null !== $this->ipGroup) {
            $res['IpGroup'] = $this->ipGroup;
        }
        if (null !== $this->eipId) {
            $res['EipId'] = $this->eipId;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }
        if (null !== $this->operatingSystem) {
            $res['OperatingSystem'] = $this->operatingSystem;
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
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['NatIp'])) {
            $model->natIp = $map['NatIp'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['isAliyunHost'])) {
            $model->isAliyunHost = $map['isAliyunHost'];
        }
        if (isset($map['EipAddress'])) {
            $model->eipAddress = $map['EipAddress'];
        }
        if (isset($map['AgentVersion'])) {
            $model->agentVersion = $map['AgentVersion'];
        }
        if (isset($map['IpGroup'])) {
            $model->ipGroup = $map['IpGroup'];
        }
        if (isset($map['EipId'])) {
            $model->eipId = $map['EipId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
        }
        if (isset($map['OperatingSystem'])) {
            $model->operatingSystem = $map['OperatingSystem'];
        }

        return $model;
    }
}
