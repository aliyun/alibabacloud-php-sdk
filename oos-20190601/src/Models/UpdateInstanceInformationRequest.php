<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class UpdateInstanceInformationRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $agentVersion;

    /**
     * @var string
     */
    public $platformType;

    /**
     * @var string
     */
    public $platformName;

    /**
     * @var string
     */
    public $platformVersion;

    /**
     * @var string
     */
    public $ipAddress;

    /**
     * @var string
     */
    public $computerName;

    /**
     * @var string
     */
    public $agentName;
    protected $_name = [
        'regionId'        => 'RegionId',
        'instanceId'      => 'InstanceId',
        'agentVersion'    => 'AgentVersion',
        'platformType'    => 'PlatformType',
        'platformName'    => 'PlatformName',
        'platformVersion' => 'PlatformVersion',
        'ipAddress'       => 'IpAddress',
        'computerName'    => 'ComputerName',
        'agentName'       => 'AgentName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->agentVersion) {
            $res['AgentVersion'] = $this->agentVersion;
        }
        if (null !== $this->platformType) {
            $res['PlatformType'] = $this->platformType;
        }
        if (null !== $this->platformName) {
            $res['PlatformName'] = $this->platformName;
        }
        if (null !== $this->platformVersion) {
            $res['PlatformVersion'] = $this->platformVersion;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->computerName) {
            $res['ComputerName'] = $this->computerName;
        }
        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateInstanceInformationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['AgentVersion'])) {
            $model->agentVersion = $map['AgentVersion'];
        }
        if (isset($map['PlatformType'])) {
            $model->platformType = $map['PlatformType'];
        }
        if (isset($map['PlatformName'])) {
            $model->platformName = $map['PlatformName'];
        }
        if (isset($map['PlatformVersion'])) {
            $model->platformVersion = $map['PlatformVersion'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['ComputerName'])) {
            $model->computerName = $map['ComputerName'];
        }
        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }

        return $model;
    }
}
