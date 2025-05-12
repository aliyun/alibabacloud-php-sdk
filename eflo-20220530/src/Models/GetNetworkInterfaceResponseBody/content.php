<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetNetworkInterfaceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetNetworkInterfaceResponseBody\content\privateIpAddressMacGroup;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetNetworkInterfaceResponseBody\content\subnetBaseInfo;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetNetworkInterfaceResponseBody\content\tags;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetNetworkInterfaceResponseBody\content\vpdBaseInfo;

class content extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string[]
     */
    public $ethernet;

    /**
     * @var string
     */
    public $gateway;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $ncType;

    /**
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @var string
     */
    public $networkInterfaceName;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var privateIpAddressMacGroup[]
     */
    public $privateIpAddressMacGroup;

    /**
     * @var int
     */
    public $quota;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $serviceMac;

    /**
     * @var string
     */
    public $status;

    /**
     * @var subnetBaseInfo
     */
    public $subnetBaseInfo;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var vpdBaseInfo
     */
    public $vpdBaseInfo;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'ethernet' => 'Ethernet',
        'gateway' => 'Gateway',
        'ip' => 'Ip',
        'ncType' => 'NcType',
        'networkInterfaceId' => 'NetworkInterfaceId',
        'networkInterfaceName' => 'NetworkInterfaceName',
        'nodeId' => 'NodeId',
        'privateIpAddressMacGroup' => 'PrivateIpAddressMacGroup',
        'quota' => 'Quota',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'serviceMac' => 'ServiceMac',
        'status' => 'Status',
        'subnetBaseInfo' => 'SubnetBaseInfo',
        'tags' => 'Tags',
        'tenantId' => 'TenantId',
        'vpdBaseInfo' => 'VpdBaseInfo',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->ethernet)) {
            Model::validateArray($this->ethernet);
        }
        if (\is_array($this->privateIpAddressMacGroup)) {
            Model::validateArray($this->privateIpAddressMacGroup);
        }
        if (null !== $this->subnetBaseInfo) {
            $this->subnetBaseInfo->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (null !== $this->vpdBaseInfo) {
            $this->vpdBaseInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->ethernet) {
            if (\is_array($this->ethernet)) {
                $res['Ethernet'] = [];
                $n1 = 0;
                foreach ($this->ethernet as $item1) {
                    $res['Ethernet'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->privateIpAddressMacGroup)) {
                $res['PrivateIpAddressMacGroup'] = [];
                $n1 = 0;
                foreach ($this->privateIpAddressMacGroup as $item1) {
                    $res['PrivateIpAddressMacGroup'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->quota) {
            $res['Quota'] = $this->quota;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->serviceMac) {
            $res['ServiceMac'] = $this->serviceMac;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subnetBaseInfo) {
            $res['SubnetBaseInfo'] = null !== $this->subnetBaseInfo ? $this->subnetBaseInfo->toArray($noStream) : $this->subnetBaseInfo;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->vpdBaseInfo) {
            $res['VpdBaseInfo'] = null !== $this->vpdBaseInfo ? $this->vpdBaseInfo->toArray($noStream) : $this->vpdBaseInfo;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Ethernet'])) {
            if (!empty($map['Ethernet'])) {
                $model->ethernet = [];
                $n1 = 0;
                foreach ($map['Ethernet'] as $item1) {
                    $model->ethernet[$n1++] = $item1;
                }
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
                $n1 = 0;
                foreach ($map['PrivateIpAddressMacGroup'] as $item1) {
                    $model->privateIpAddressMacGroup[$n1++] = privateIpAddressMacGroup::fromMap($item1);
                }
            }
        }

        if (isset($map['Quota'])) {
            $model->quota = $map['Quota'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
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
