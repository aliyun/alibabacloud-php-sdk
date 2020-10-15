<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkInterfacesResponse\networkInterfaceSets;

use AlibabaCloud\Tea\Model;

class networkInterfaceSet extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $primaryIp;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @var string
     */
    public $macAddress;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $primaryIpType;
    protected $_name = [
        'status'             => 'Status',
        'primaryIp'          => 'PrimaryIp',
        'ensRegionId'        => 'EnsRegionId',
        'instanceId'         => 'InstanceId',
        'vSwitchId'          => 'VSwitchId',
        'networkInterfaceId' => 'NetworkInterfaceId',
        'macAddress'         => 'MacAddress',
        'creationTime'       => 'CreationTime',
        'primaryIpType'      => 'PrimaryIpType',
    ];

    public function validate()
    {
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('primaryIp', $this->primaryIp, true);
        Model::validateRequired('ensRegionId', $this->ensRegionId, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('vSwitchId', $this->vSwitchId, true);
        Model::validateRequired('networkInterfaceId', $this->networkInterfaceId, true);
        Model::validateRequired('macAddress', $this->macAddress, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('primaryIpType', $this->primaryIpType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->primaryIp) {
            $res['PrimaryIp'] = $this->primaryIp;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }
        if (null !== $this->macAddress) {
            $res['MacAddress'] = $this->macAddress;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->primaryIpType) {
            $res['PrimaryIpType'] = $this->primaryIpType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkInterfaceSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['PrimaryIp'])) {
            $model->primaryIp = $map['PrimaryIp'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }
        if (isset($map['MacAddress'])) {
            $model->macAddress = $map['MacAddress'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['PrimaryIpType'])) {
            $model->primaryIpType = $map['PrimaryIpType'];
        }

        return $model;
    }
}
