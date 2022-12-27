<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkInterfacesResponseBody\networkInterfaceSets;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkInterfacesResponseBody\networkInterfaceSets\networkInterfaceSet\privateIpSets;
use AlibabaCloud\Tea\Model;

class networkInterfaceSet extends Model
{
    /**
     * @example 2022-02-22T03:53:25Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example id-jakarta-1
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @example i-5siavnr3
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 00:16:3e:08:60:0a
     *
     * @var string
     */
    public $macAddress;

    /**
     * @example eni-uf686a5
     *
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @example 12.23.3.4
     *
     * @var string
     */
    public $primaryIp;

    /**
     * @example private
     *
     * @var string
     */
    public $primaryIpType;

    /**
     * @var privateIpSets
     */
    public $privateIpSets;

    /**
     * @example In_use
     *
     * @var string
     */
    public $status;

    /**
     * @example vsw-5rqswx1trlsj9
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'creationTime'       => 'CreationTime',
        'ensRegionId'        => 'EnsRegionId',
        'instanceId'         => 'InstanceId',
        'macAddress'         => 'MacAddress',
        'networkInterfaceId' => 'NetworkInterfaceId',
        'primaryIp'          => 'PrimaryIp',
        'primaryIpType'      => 'PrimaryIpType',
        'privateIpSets'      => 'PrivateIpSets',
        'status'             => 'Status',
        'vSwitchId'          => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->macAddress) {
            $res['MacAddress'] = $this->macAddress;
        }
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }
        if (null !== $this->primaryIp) {
            $res['PrimaryIp'] = $this->primaryIp;
        }
        if (null !== $this->primaryIpType) {
            $res['PrimaryIpType'] = $this->primaryIpType;
        }
        if (null !== $this->privateIpSets) {
            $res['PrivateIpSets'] = null !== $this->privateIpSets ? $this->privateIpSets->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MacAddress'])) {
            $model->macAddress = $map['MacAddress'];
        }
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }
        if (isset($map['PrimaryIp'])) {
            $model->primaryIp = $map['PrimaryIp'];
        }
        if (isset($map['PrimaryIpType'])) {
            $model->primaryIpType = $map['PrimaryIpType'];
        }
        if (isset($map['PrivateIpSets'])) {
            $model->privateIpSets = privateIpSets::fromMap($map['PrivateIpSets']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
