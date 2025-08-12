<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentHostsResponseBody\hosts;

use AlibabaCloud\Dara\Model;

class host extends Model
{
    /**
     * @var string
     */
    public $agentVersion;

    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $eipAddress;

    /**
     * @var string
     */
    public $eipId;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @var string
     */
    public $ipGroup;

    /**
     * @var string
     */
    public $natIp;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $operatingSystem;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var bool
     */
    public $isAliyunHost;
    protected $_name = [
        'agentVersion' => 'AgentVersion',
        'aliUid' => 'AliUid',
        'eipAddress' => 'EipAddress',
        'eipId' => 'EipId',
        'hostName' => 'HostName',
        'instanceId' => 'InstanceId',
        'instanceTypeFamily' => 'InstanceTypeFamily',
        'ipGroup' => 'IpGroup',
        'natIp' => 'NatIp',
        'networkType' => 'NetworkType',
        'operatingSystem' => 'OperatingSystem',
        'region' => 'Region',
        'serialNumber' => 'SerialNumber',
        'isAliyunHost' => 'isAliyunHost',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
