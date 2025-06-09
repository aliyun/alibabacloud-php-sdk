<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribePrinsInstanceResponseBody\dbInstance;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribePrinsInstanceResponseBody\dbInstance\hostInstances\diskInfo;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribePrinsInstanceResponseBody\dbInstance\hostInstances\ipAddress;

class hostInstances extends Model
{
    /**
     * @var string
     */
    public $cpu;

    /**
     * @var string
     */
    public $description;

    /**
     * @var diskInfo[]
     */
    public $diskInfo;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $instanceClass;

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
    public $instanceRole;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var ipAddress[]
     */
    public $ipAddress;

    /**
     * @var string
     */
    public $mem;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'cpu' => 'Cpu',
        'description' => 'Description',
        'diskInfo' => 'DiskInfo',
        'gmtCreated' => 'GmtCreated',
        'instanceClass' => 'InstanceClass',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'instanceRole' => 'InstanceRole',
        'ip' => 'Ip',
        'ipAddress' => 'IpAddress',
        'mem' => 'Mem',
        'port' => 'Port',
        'securityGroupId' => 'SecurityGroupId',
        'status' => 'Status',
        'vpcId' => 'VpcId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->diskInfo)) {
            Model::validateArray($this->diskInfo);
        }
        if (\is_array($this->ipAddress)) {
            Model::validateArray($this->ipAddress);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->diskInfo) {
            if (\is_array($this->diskInfo)) {
                $res['DiskInfo'] = [];
                $n1 = 0;
                foreach ($this->diskInfo as $item1) {
                    $res['DiskInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->instanceRole) {
            $res['InstanceRole'] = $this->instanceRole;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->ipAddress) {
            if (\is_array($this->ipAddress)) {
                $res['IpAddress'] = [];
                $n1 = 0;
                foreach ($this->ipAddress as $item1) {
                    $res['IpAddress'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->mem) {
            $res['Mem'] = $this->mem;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DiskInfo'])) {
            if (!empty($map['DiskInfo'])) {
                $model->diskInfo = [];
                $n1 = 0;
                foreach ($map['DiskInfo'] as $item1) {
                    $model->diskInfo[$n1++] = diskInfo::fromMap($item1);
                }
            }
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['InstanceRole'])) {
            $model->instanceRole = $map['InstanceRole'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['IpAddress'])) {
            if (!empty($map['IpAddress'])) {
                $model->ipAddress = [];
                $n1 = 0;
                foreach ($map['IpAddress'] as $item1) {
                    $model->ipAddress[$n1++] = ipAddress::fromMap($item1);
                }
            }
        }

        if (isset($map['Mem'])) {
            $model->mem = $map['Mem'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
