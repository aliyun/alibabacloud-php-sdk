<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAssetDetailByUuidResponseBody;

use AlibabaCloud\Tea\Model;

class assetDetail extends Model
{
    /**
     * @description The type of the asset. Valid values:
     *
     *   **0**: ECS instance
     *   **1**: Server Load Balancer (SLB) instance
     *   **2**: NAT gateway
     *   **3**: ApsaraDB RDS database
     *   **4**: ApsaraDB for MongoDB database
     *   **5**: ApsaraDB for Redis database
     *   **6**: image
     *   **7**: container
     *
     * @example 0
     *
     * @var string
     */
    public $assetType;

    /**
     * @description The timestamp when Security Center is authorized to protect the asset. Unit: milliseconds.
     *
     * @example 1627974044000
     *
     * @var int
     */
    public $authModifyTime;

    /**
     * @description The edition of Security Center that is authorized to protect the asset. Valid values:
     *
     *   **1**: Basic edition (Unauthorized)
     *   **6**: Anti-virus edition
     *   **5**: Advanced edition
     *   **3**: Enterprise edition
     *   **7**: Ultimate edition
     *   **10**: Value-added Plan edition
     *
     * @example 7
     *
     * @var int
     */
    public $authVersion;

    /**
     * @description Indicates whether Security Center is authorized to protect the asset. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $bind;

    /**
     * @description The status of the Security Center agent. Valid values:
     *
     *   **pause**: The Security Center agent suspends protection for your server.
     *   **online**: The Security Center agent is protecting your server.
     *   **offline**: The Security Center agent does not protect your server.
     *
     * @example online
     *
     * @var string
     */
    public $clientStatus;

    /**
     * @description The version of the Security Center agent.
     *
     * @example 2.0.0
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @description The number of CPU cores.
     *
     * @example 2
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The details of the CPU.
     *
     * @example Intel(R) Xeon(R) Platinum 8163 CPU @ 2.50GHz
     *
     * @var string
     */
    public $cpuInfo;

    /**
     * @description The timestamp when Security Center records the details of the server. Unit: milliseconds.
     *
     * @example 1603863599000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description An array that consists of the information about the disk.
     *
     * @var string[]
     */
    public $diskInfoList;

    /**
     * @description Indicates whether the asset is provided by Alibaba Cloud. Valid values:
     *
     *   **0**: yes
     *   **1**: no
     *
     * @example 0
     *
     * @var int
     */
    public $flag;

    /**
     * @description The group to which the server belongs. By default, the servers that are not grouped belong to the **Default** group.
     *
     * @example default
     *
     * @var string
     */
    public $groupTrace;

    /**
     * @description The name of the host.
     *
     * @example qewrqwerqs****
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The ID of the server.
     *
     * @example i-uf6h7p2fgk6rkk0g****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the server.
     *
     * @example i-fasdfasdfadfafa****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The public IP address of the server.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address of the server.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The IP address that is assigned to the Elastic Compute Service (ECS) instance.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @description The IP addresses of the server.
     *
     * @var string[]
     */
    public $ipList;

    /**
     * @description The kernel version of the operating system.
     *
     * @example 4.18.0-80.11.2.el8_0.x86_64
     *
     * @var string
     */
    public $kernel;

    /**
     * @description The Media Access Control (MAC) addresses.
     *
     * @var string[]
     */
    public $macList;

    /**
     * @description The memory size of the server. Unit: GB.
     *
     * @example 32
     *
     * @var int
     */
    public $mem;

    /**
     * @description The memory size of the server. Unit: MB.
     *
     * @example 512
     *
     * @var int
     */
    public $memory;

    /**
     * @description The operating system type of the server.
     *
     * @example linux
     *
     * @var string
     */
    public $os;

    /**
     * @description The operating system version of the server.
     *
     * @example Linux 64bit
     *
     * @var string
     */
    public $osDetail;

    /**
     * @description The name of the operating system.
     *
     * @example -
     *
     * @var string
     */
    public $osName;

    /**
     * @description The region in which the server resides.
     *
     * @example cn-hangzhou-dg-a01
     *
     * @var string
     */
    public $region;

    /**
     * @description The ID of the region in which the asset resides.
     *
     * @example cn-hanghzou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the region in which the server resides.
     *
     * @example China (Hohhot)
     *
     * @var string
     */
    public $regionName;

    /**
     * @description The operating system information about the server.
     *
     * @example CentOS Linux 8.0.1905
     *
     * @var string
     */
    public $sysInfo;

    /**
     * @description The tag that is added to the server.
     *
     * @example InternetIp
     *
     * @var string
     */
    public $tag;

    /**
     * @description The UUID of the server.
     *
     * @example 9e6cad93-a379-46fd-a701-9bbf02f4****
     *
     * @var string
     */
    public $uuid;

    /**
     * @description The ID of the virtual private cloud (VPC) in which the server resides.
     *
     * @example vpc-bp1fs3bwonlfq503w****
     *
     * @var string
     */
    public $vpcInstanceId;
    protected $_name = [
        'assetType'      => 'AssetType',
        'authModifyTime' => 'AuthModifyTime',
        'authVersion'    => 'AuthVersion',
        'bind'           => 'Bind',
        'clientStatus'   => 'ClientStatus',
        'clientVersion'  => 'ClientVersion',
        'cpu'            => 'Cpu',
        'cpuInfo'        => 'CpuInfo',
        'createTime'     => 'CreateTime',
        'diskInfoList'   => 'DiskInfoList',
        'flag'           => 'Flag',
        'groupTrace'     => 'GroupTrace',
        'hostName'       => 'HostName',
        'instanceId'     => 'InstanceId',
        'instanceName'   => 'InstanceName',
        'internetIp'     => 'InternetIp',
        'intranetIp'     => 'IntranetIp',
        'ip'             => 'Ip',
        'ipList'         => 'IpList',
        'kernel'         => 'Kernel',
        'macList'        => 'MacList',
        'mem'            => 'Mem',
        'memory'         => 'Memory',
        'os'             => 'Os',
        'osDetail'       => 'OsDetail',
        'osName'         => 'OsName',
        'region'         => 'Region',
        'regionId'       => 'RegionId',
        'regionName'     => 'RegionName',
        'sysInfo'        => 'SysInfo',
        'tag'            => 'Tag',
        'uuid'           => 'Uuid',
        'vpcInstanceId'  => 'VpcInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }
        if (null !== $this->authModifyTime) {
            $res['AuthModifyTime'] = $this->authModifyTime;
        }
        if (null !== $this->authVersion) {
            $res['AuthVersion'] = $this->authVersion;
        }
        if (null !== $this->bind) {
            $res['Bind'] = $this->bind;
        }
        if (null !== $this->clientStatus) {
            $res['ClientStatus'] = $this->clientStatus;
        }
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->cpuInfo) {
            $res['CpuInfo'] = $this->cpuInfo;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->diskInfoList) {
            $res['DiskInfoList'] = $this->diskInfoList;
        }
        if (null !== $this->flag) {
            $res['Flag'] = $this->flag;
        }
        if (null !== $this->groupTrace) {
            $res['GroupTrace'] = $this->groupTrace;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->ipList) {
            $res['IpList'] = $this->ipList;
        }
        if (null !== $this->kernel) {
            $res['Kernel'] = $this->kernel;
        }
        if (null !== $this->macList) {
            $res['MacList'] = $this->macList;
        }
        if (null !== $this->mem) {
            $res['Mem'] = $this->mem;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->osDetail) {
            $res['OsDetail'] = $this->osDetail;
        }
        if (null !== $this->osName) {
            $res['OsName'] = $this->osName;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->sysInfo) {
            $res['SysInfo'] = $this->sysInfo;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->vpcInstanceId) {
            $res['VpcInstanceId'] = $this->vpcInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return assetDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }
        if (isset($map['AuthModifyTime'])) {
            $model->authModifyTime = $map['AuthModifyTime'];
        }
        if (isset($map['AuthVersion'])) {
            $model->authVersion = $map['AuthVersion'];
        }
        if (isset($map['Bind'])) {
            $model->bind = $map['Bind'];
        }
        if (isset($map['ClientStatus'])) {
            $model->clientStatus = $map['ClientStatus'];
        }
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['CpuInfo'])) {
            $model->cpuInfo = $map['CpuInfo'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DiskInfoList'])) {
            if (!empty($map['DiskInfoList'])) {
                $model->diskInfoList = $map['DiskInfoList'];
            }
        }
        if (isset($map['Flag'])) {
            $model->flag = $map['Flag'];
        }
        if (isset($map['GroupTrace'])) {
            $model->groupTrace = $map['GroupTrace'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['IpList'])) {
            if (!empty($map['IpList'])) {
                $model->ipList = $map['IpList'];
            }
        }
        if (isset($map['Kernel'])) {
            $model->kernel = $map['Kernel'];
        }
        if (isset($map['MacList'])) {
            if (!empty($map['MacList'])) {
                $model->macList = $map['MacList'];
            }
        }
        if (isset($map['Mem'])) {
            $model->mem = $map['Mem'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['OsDetail'])) {
            $model->osDetail = $map['OsDetail'];
        }
        if (isset($map['OsName'])) {
            $model->osName = $map['OsName'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['SysInfo'])) {
            $model->sysInfo = $map['SysInfo'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['VpcInstanceId'])) {
            $model->vpcInstanceId = $map['VpcInstanceId'];
        }

        return $model;
    }
}
