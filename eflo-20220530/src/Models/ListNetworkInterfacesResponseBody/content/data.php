<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\ListNetworkInterfacesResponseBody\content;

use AlibabaCloud\SDK\Eflo\V20220530\Models\ListNetworkInterfacesResponseBody\content\data\privateIpAddressMacGroup;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListNetworkInterfacesResponseBody\content\data\subnetBaseInfo;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListNetworkInterfacesResponseBody\content\data\vpdBaseInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The time when the activation code was created.
     *
     * @example 1669734207000
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The port number of the AD server.
     *
     * @var string[]
     */
    public $ethernet;

    /**
     * @description The gateway.
     *
     * @example 10.0.0.253
     *
     * @var string
     */
    public $gateway;

    /**
     * @description The IP address of the instance.
     *
     * @example 10.0.0.13
     *
     * @var string
     */
    public $ip;

    /**
     * @description The NC type.
     *
     * Valid value:
     *
     *   CUSTOM_LNI_INTEGRATION: two-network one-in-one architecture Lingjun hosting network interface controller.
     *   CPU: CPU machine.
     *   ELASTIC_6.2: Machine
     *   GPU: GPU machine.
     *   DEFAULT: the old CPU machine.
     *   CUSTOM_LNI: two network separation architecture Lingjun hosting network interface controller.
     *
     * @example GPU
     *
     * @var string
     */
    public $ncType;

    /**
     * @description Lingjun network interface controller ID.
     *
     * @example lni-2ze50voovmtswn328ogm
     *
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @description The port name.
     *
     * @example bond0
     *
     * @var string
     */
    public $networkInterfaceName;

    /**
     * @description The ID of the machine to which the instance belongs.
     *
     * @example 2d53f5c204e7476dae69177e7fa6f19c
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description Secondary Private IP\\&MAC Address Collection
     *
     * @var privateIpAddressMacGroup[]
     */
    public $privateIpAddressMacGroup;

    /**
     * @description network interface controller private secondary IP quota.
     *
     * @example 6
     *
     * @var int
     */
    public $quota;

    /**
     * @description The region ID.
     *
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The address of the service network interface controller.
     *
     * @example 00-ff-84-15-ba-67
     *
     * @var string
     */
    public $serviceMac;

    /**
     * @description The task status.
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description Lingjun subnet (Subnet) basic information.
     *
     * @var subnetBaseInfo
     */
    public $subnetBaseInfo;

    /**
     * @description The tenant ID.
     *
     * @example 1620939556166279
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description Lingjun network segment (VPD) basic information.
     *
     * @var vpdBaseInfo
     */
    public $vpdBaseInfo;

    /**
     * @description The zone ID.
     *
     * @example cn-wulanchabu-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'createTime'               => 'CreateTime',
        'ethernet'                 => 'Ethernet',
        'gateway'                  => 'Gateway',
        'ip'                       => 'Ip',
        'ncType'                   => 'NcType',
        'networkInterfaceId'       => 'NetworkInterfaceId',
        'networkInterfaceName'     => 'NetworkInterfaceName',
        'nodeId'                   => 'NodeId',
        'privateIpAddressMacGroup' => 'PrivateIpAddressMacGroup',
        'quota'                    => 'Quota',
        'regionId'                 => 'RegionId',
        'serviceMac'               => 'ServiceMac',
        'status'                   => 'Status',
        'subnetBaseInfo'           => 'SubnetBaseInfo',
        'tenantId'                 => 'TenantId',
        'vpdBaseInfo'              => 'VpdBaseInfo',
        'zoneId'                   => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->ethernet) {
            $res['Ethernet'] = $this->ethernet;
        }
        if (null !== $this->gateway) {
            $res['Gateway'] = $this->gateway;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->ncType) {
            $res['NcType'] = $this->ncType;
        }
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }
        if (null !== $this->networkInterfaceName) {
            $res['NetworkInterfaceName'] = $this->networkInterfaceName;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->privateIpAddressMacGroup) {
            $res['PrivateIpAddressMacGroup'] = [];
            if (null !== $this->privateIpAddressMacGroup && \is_array($this->privateIpAddressMacGroup)) {
                $n = 0;
                foreach ($this->privateIpAddressMacGroup as $item) {
                    $res['PrivateIpAddressMacGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->quota) {
            $res['Quota'] = $this->quota;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serviceMac) {
            $res['ServiceMac'] = $this->serviceMac;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subnetBaseInfo) {
            $res['SubnetBaseInfo'] = null !== $this->subnetBaseInfo ? $this->subnetBaseInfo->toMap() : null;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->vpdBaseInfo) {
            $res['VpdBaseInfo'] = null !== $this->vpdBaseInfo ? $this->vpdBaseInfo->toMap() : null;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Ethernet'])) {
            if (!empty($map['Ethernet'])) {
                $model->ethernet = $map['Ethernet'];
            }
        }
        if (isset($map['Gateway'])) {
            $model->gateway = $map['Gateway'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['NcType'])) {
            $model->ncType = $map['NcType'];
        }
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }
        if (isset($map['NetworkInterfaceName'])) {
            $model->networkInterfaceName = $map['NetworkInterfaceName'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['PrivateIpAddressMacGroup'])) {
            if (!empty($map['PrivateIpAddressMacGroup'])) {
                $model->privateIpAddressMacGroup = [];
                $n                               = 0;
                foreach ($map['PrivateIpAddressMacGroup'] as $item) {
                    $model->privateIpAddressMacGroup[$n++] = null !== $item ? privateIpAddressMacGroup::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Quota'])) {
            $model->quota = $map['Quota'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServiceMac'])) {
            $model->serviceMac = $map['ServiceMac'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubnetBaseInfo'])) {
            $model->subnetBaseInfo = subnetBaseInfo::fromMap($map['SubnetBaseInfo']);
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['VpdBaseInfo'])) {
            $model->vpdBaseInfo = vpdBaseInfo::fromMap($map['VpdBaseInfo']);
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
