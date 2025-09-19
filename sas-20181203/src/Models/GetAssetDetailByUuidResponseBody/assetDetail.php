<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetAssetDetailByUuidResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetAssetDetailByUuidResponseBody\assetDetail\diskInfoList;

class assetDetail extends Model
{
    /**
     * @var string
     */
    public $assetType;

    /**
     * @var int
     */
    public $authModifyTime;

    /**
     * @var int
     */
    public $authVersion;

    /**
     * @var bool
     */
    public $bind;

    /**
     * @var string
     */
    public $clientStatus;

    /**
     * @var string
     */
    public $clientSubStatus;

    /**
     * @var string
     */
    public $clientVersion;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $cpuInfo;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var diskInfoList[]
     */
    public $diskInfoList;

    /**
     * @var int
     */
    public $flag;

    /**
     * @var string
     */
    public $groupTrace;

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
    public $instanceName;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string[]
     */
    public $ipList;

    /**
     * @var string
     */
    public $kernel;

    /**
     * @var string[]
     */
    public $macList;

    /**
     * @var int
     */
    public $mem;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $os;

    /**
     * @var string
     */
    public $osDetail;

    /**
     * @var string
     */
    public $osName;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var string
     */
    public $sysInfo;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $vendorAuthAlias;

    /**
     * @var string
     */
    public $vpcInstanceId;
    protected $_name = [
        'assetType' => 'AssetType',
        'authModifyTime' => 'AuthModifyTime',
        'authVersion' => 'AuthVersion',
        'bind' => 'Bind',
        'clientStatus' => 'ClientStatus',
        'clientSubStatus' => 'ClientSubStatus',
        'clientVersion' => 'ClientVersion',
        'cpu' => 'Cpu',
        'cpuInfo' => 'CpuInfo',
        'createTime' => 'CreateTime',
        'diskInfoList' => 'DiskInfoList',
        'flag' => 'Flag',
        'groupTrace' => 'GroupTrace',
        'hostName' => 'HostName',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'internetIp' => 'InternetIp',
        'intranetIp' => 'IntranetIp',
        'ip' => 'Ip',
        'ipList' => 'IpList',
        'kernel' => 'Kernel',
        'macList' => 'MacList',
        'mem' => 'Mem',
        'memory' => 'Memory',
        'os' => 'Os',
        'osDetail' => 'OsDetail',
        'osName' => 'OsName',
        'region' => 'Region',
        'regionId' => 'RegionId',
        'regionName' => 'RegionName',
        'sysInfo' => 'SysInfo',
        'tag' => 'Tag',
        'uuid' => 'Uuid',
        'vendorAuthAlias' => 'VendorAuthAlias',
        'vpcInstanceId' => 'VpcInstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->diskInfoList)) {
            Model::validateArray($this->diskInfoList);
        }
        if (\is_array($this->ipList)) {
            Model::validateArray($this->ipList);
        }
        if (\is_array($this->macList)) {
            Model::validateArray($this->macList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->clientSubStatus) {
            $res['ClientSubStatus'] = $this->clientSubStatus;
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
            if (\is_array($this->diskInfoList)) {
                $res['DiskInfoList'] = [];
                $n1 = 0;
                foreach ($this->diskInfoList as $item1) {
                    $res['DiskInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->ipList)) {
                $res['IpList'] = [];
                $n1 = 0;
                foreach ($this->ipList as $item1) {
                    $res['IpList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->kernel) {
            $res['Kernel'] = $this->kernel;
        }

        if (null !== $this->macList) {
            if (\is_array($this->macList)) {
                $res['MacList'] = [];
                $n1 = 0;
                foreach ($this->macList as $item1) {
                    $res['MacList'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->vendorAuthAlias) {
            $res['VendorAuthAlias'] = $this->vendorAuthAlias;
        }

        if (null !== $this->vpcInstanceId) {
            $res['VpcInstanceId'] = $this->vpcInstanceId;
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

        if (isset($map['ClientSubStatus'])) {
            $model->clientSubStatus = $map['ClientSubStatus'];
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
                $n1 = 0;
                foreach ($map['DiskInfoList'] as $item1) {
                    $model->diskInfoList[$n1] = diskInfoList::fromMap($item1);
                    ++$n1;
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
                $model->ipList = [];
                $n1 = 0;
                foreach ($map['IpList'] as $item1) {
                    $model->ipList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Kernel'])) {
            $model->kernel = $map['Kernel'];
        }

        if (isset($map['MacList'])) {
            if (!empty($map['MacList'])) {
                $model->macList = [];
                $n1 = 0;
                foreach ($map['MacList'] as $item1) {
                    $model->macList[$n1] = $item1;
                    ++$n1;
                }
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

        if (isset($map['VendorAuthAlias'])) {
            $model->vendorAuthAlias = $map['VendorAuthAlias'];
        }

        if (isset($map['VpcInstanceId'])) {
            $model->vpcInstanceId = $map['VpcInstanceId'];
        }

        return $model;
    }
}
