<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAssetDetailByUuidsResponseBody;

use AlibabaCloud\Tea\Model;

class assetList extends Model
{
    /**
     * @description The type of the asset.
     *
     * The value is fixed as **0**, which indicates ECS instances.
     * @example 0
     *
     * @var string
     */
    public $assetType;

    /**
     * @description The timestamp when Security Center is authorized to protect the instance. Unit: milliseconds.
     *
     * @example 1627974044000
     *
     * @var int
     */
    public $authModifyTime;

    /**
     * @description The edition of Security Center that is authorized to protect the instance. Valid values:
     *
     *   **1**: Basic edition (Unauthorized)
     *   **6**: Anti-virus edition
     *   **5**: Advanced edition
     *   **3**: Enterprise edition
     *   **7**: Ultimate edition
     *
     * @example 7
     *
     * @var int
     */
    public $authVersion;

    /**
     * @description Indicates whether Security Center is authorized to protect the instance. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $bind;

    /**
     * @description The status of the Security Center agent. Valid values:
     *
     *   **online**
     *   **offline**
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
     * @example 4
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
     * @description The timestamp when Security Center records the details of the instance. Unit: milliseconds.
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
     * @description The type of the asset by source. Valid values:
     *
     *   **0**: The asset is provided by Alibaba Cloud.
     *   **1**: The asset is not provided by Alibaba Cloud.
     *   **2**: The asset resides in a data center.
     *   **3**, **4**, **5**, and **7**: other cloud asset.
     *   **8**: light-weight assets.
     *
     * @example 0
     *
     * @var int
     */
    public $flag;

    /**
     * @description The group to which the instance belongs. By default, the instances that are not grouped belong to the **Default** group.
     *
     * @example default
     *
     * @var string
     */
    public $groupTrace;

    /**
     * @description The hostname.
     *
     * @example test
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The ID of the ECS instance.
     *
     * @example i-rj9gda4wolo0zixi****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the ECS instance.
     *
     * @example TestInstanceName
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The public IP address of the ECS instance.
     *
     * @example 10.10.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address of the ECS instance.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The IP address of the ECS instance.
     *
     * >  If the ECS instance has a public IP address, the value of this parameter is the public IP address of the ECS instance. If the ECS instance does not have a public IP address, the value of this parameter is the private IP address of the ECS instance.
     * @example 10.10.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @description The IP addresses of the instances.
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
     * @description The media access control (MAC) addresses of the instances.
     *
     * @var string[]
     */
    public $macList;

    /**
     * @description The memory size of the instance. Unit: GB.
     *
     * @example 4
     *
     * @var int
     */
    public $mem;

    /**
     * @description The memory size of the instance. Unit: MB.
     *
     * @example 1024
     *
     * @var int
     */
    public $memory;

    /**
     * @description The operating system of the ECS instance.
     *
     * @example Linux
     *
     * @var string
     */
    public $os;

    /**
     * @description The operating system version of the instance.
     *
     * @example Linux 64bit
     *
     * @var string
     */
    public $osDetail;

    /**
     * @description The name of the operating system run by the ECS instance.
     *
     * @example CentOS 7.6 64-bit
     *
     * @var string
     */
    public $osName;

    /**
     * @description The region in which the ECS instance resides.
     *
     * @example cn-guangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The region in which the ECS instance resides.
     *
     * >  For more information about the mapping between region IDs and region names, see [Regions and zones](https://help.aliyun.com/document_detail/40654.html).
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the region in which the ECS instance resides.
     *
     * @example cn-shenzhen
     *
     * @var string
     */
    public $regionName;

    /**
     * @description The operating system information about the instance.
     *
     * @example CentOS Linux 8.0.1905
     *
     * @var string
     */
    public $sysInfo;

    /**
     * @description The tag added to the instance.
     *
     * @example test
     *
     * @var string
     */
    public $tag;

    /**
     * @description The UUID of the ECS instance.
     *
     * @example 2a98f149-0256-414c-a29a-a69f8a75****
     *
     * @var string
     */
    public $uuid;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example 13231-331331
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
     * @return assetList
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
