<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetAssetDetailByUuidResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetAssetDetailByUuidResponseBody\assetDetail\diskInfoList;
use AlibabaCloud\Tea\Model;

class assetDetail extends Model
{
    /**
     * @example 0
     *
     * @var string
     */
    public $assetType;

    /**
     * @example 1627974044000
     *
     * @var int
     */
    public $authModifyTime;

    /**
     * @example 7
     *
     * @var int
     */
    public $authVersion;

    /**
     * @example true
     *
     * @var bool
     */
    public $bind;

    /**
     * @example online
     *
     * @var string
     */
    public $clientStatus;

    /**
     * @example 2.0.0
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @example 2
     *
     * @var int
     */
    public $cpu;

    /**
     * @example Intel(R) Xeon(R) Platinum 8163 CPU @ 2.50GHz
     *
     * @var string
     */
    public $cpuInfo;

    /**
     * @example 1603863599000
     *
     * @var int
     */
    public $createTime;

    /**
     * @var diskInfoList[]
     */
    public $diskInfoList;

    /**
     * @example 0
     *
     * @var int
     */
    public $flag;

    /**
     * @example default
     *
     * @var string
     */
    public $groupTrace;

    /**
     * @example qewrqwerqs****
     *
     * @var string
     */
    public $hostName;

    /**
     * @example i-uf6h7p2fgk6rkk0g****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example i-fasdfasdfadfafa****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example 120.47.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @example 120.47.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @var string[]
     */
    public $ipList;

    /**
     * @example 4.18.0-80.11.2.el8_0.x86_64
     *
     * @var string
     */
    public $kernel;

    /**
     * @var string[]
     */
    public $macList;

    /**
     * @example 16
     *
     * @var int
     */
    public $mem;

    /**
     * @example 16384
     *
     * @var int
     */
    public $memory;

    /**
     * @example linux
     *
     * @var string
     */
    public $os;

    /**
     * @example Linux 64bit
     *
     * @var string
     */
    public $osDetail;

    /**
     * @example CentOS  7.4 64bit
     *
     * @var string
     */
    public $osName;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @example cn-hanghzou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example China (Hohhot)
     *
     * @var string
     */
    public $regionName;

    /**
     * @example CentOS Linux 8.0.1905
     *
     * @var string
     */
    public $sysInfo;

    /**
     * @example InternetIp
     *
     * @var string
     */
    public $tag;

    /**
     * @example 9e6cad93-a379-46fd-a701-9bbf02f4****
     *
     * @var string
     */
    public $uuid;

    /**
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
            $res['DiskInfoList'] = [];
            if (null !== $this->diskInfoList && \is_array($this->diskInfoList)) {
                $n = 0;
                foreach ($this->diskInfoList as $item) {
                    $res['DiskInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
                $model->diskInfoList = [];
                $n                   = 0;
                foreach ($map['DiskInfoList'] as $item) {
                    $model->diskInfoList[$n++] = null !== $item ? diskInfoList::fromMap($item) : $item;
                }
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
