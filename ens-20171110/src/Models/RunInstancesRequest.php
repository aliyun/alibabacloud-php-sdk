<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\RunInstancesRequest\dataDisk;
use AlibabaCloud\SDK\Ens\V20171110\Models\RunInstancesRequest\systemDisk;
use AlibabaCloud\Tea\Model;

class RunInstancesRequest extends Model
{
    /**
     * @description 数量
     *
     * @var int
     */
    public $amount;

    /**
     * @description 是否自动续费，默认为false
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description 运营商
     *
     * @var string
     */
    public $carrier;

    /**
     * @description 数据盘规格
     *
     * @var dataDisk[]
     */
    public $dataDisk;

    /**
     * @description 节点id
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description 主机名称
     *
     * @var string
     */
    public $hostName;

    /**
     * @description 镜像id
     *
     * @var string
     */
    public $imageId;

    /**
     * @description 实例付费方式，PrePaid:预付费，包年包月 PostPaid:按量付费
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description 实例名称。长度为2~128个字符，必须以大小字母或中文开头，不能以http://和https://开头。可以包含中文、英文、数字、半角冒号（:）、下划线（_）、点号（.）或者连字符（-）。默认值为实例的InstanceId
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description 实例规格
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description 带宽计费方式
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description 公网最大带宽，如果参数InternetMaxBandwidthOut的值大于0，则自动为实例分配公网IP。
     *
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @description 密钥对名称
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @description 地区code
     *
     * @var string
     */
    public $netDistrictCode;

    /**
     * @description 网络id
     *
     * @var string
     */
    public $netWorkId;

    /**
     * @description 实例密码
     *
     * @var string
     */
    public $password;

    /**
     * @description 购买资源的时长，单位为：月
     *
     * @var int
     */
    public $period;

    /**
     * @description 查询云服务器ENS不同计费周期的价格。取值范围：
     * Day：按天计费的价格单位。
     * @var string
     */
    public $periodUnit;

    /**
     * @description 私网ip
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @var bool
     */
    public $publicIpIdentification;

    /**
     * @description 调度层级
     *
     * @var string
     */
    public $scheduleAreaLevel;

    /**
     * @description 调度价格策略
     *
     * @var string
     */
    public $schedulingPriceStrategy;

    /**
     * @description 调度策略
     *
     * @var string
     */
    public $schedulingStrategy;

    /**
     * @description 安全组id
     *
     * @var string
     */
    public $securityId;

    /**
     * @description 系统盘规格
     *
     * @var systemDisk
     */
    public $systemDisk;

    /**
     * @description 是否为HostName和InstanceName添加有序后缀，有序后缀从001开始递增，最大不能超过999
     *
     * @var bool
     */
    public $uniqueSuffix;

    /**
     * @description 用户自定义数据，最大支持16KB 您可传入UserData信息。UserData以Base64的方式编码
     *
     * @var string
     */
    public $userData;

    /**
     * @description 交换机id
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'amount'                  => 'Amount',
        'autoRenew'               => 'AutoRenew',
        'carrier'                 => 'Carrier',
        'dataDisk'                => 'DataDisk',
        'ensRegionId'             => 'EnsRegionId',
        'hostName'                => 'HostName',
        'imageId'                 => 'ImageId',
        'instanceChargeType'      => 'InstanceChargeType',
        'instanceName'            => 'InstanceName',
        'instanceType'            => 'InstanceType',
        'internetChargeType'      => 'InternetChargeType',
        'internetMaxBandwidthOut' => 'InternetMaxBandwidthOut',
        'keyPairName'             => 'KeyPairName',
        'netDistrictCode'         => 'NetDistrictCode',
        'netWorkId'               => 'NetWorkId',
        'password'                => 'Password',
        'period'                  => 'Period',
        'periodUnit'              => 'PeriodUnit',
        'privateIpAddress'        => 'PrivateIpAddress',
        'publicIpIdentification'  => 'PublicIpIdentification',
        'scheduleAreaLevel'       => 'ScheduleAreaLevel',
        'schedulingPriceStrategy' => 'SchedulingPriceStrategy',
        'schedulingStrategy'      => 'SchedulingStrategy',
        'securityId'              => 'SecurityId',
        'systemDisk'              => 'SystemDisk',
        'uniqueSuffix'            => 'UniqueSuffix',
        'userData'                => 'UserData',
        'vSwitchId'               => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->carrier) {
            $res['Carrier'] = $this->carrier;
        }
        if (null !== $this->dataDisk) {
            $res['DataDisk'] = [];
            if (null !== $this->dataDisk && \is_array($this->dataDisk)) {
                $n = 0;
                foreach ($this->dataDisk as $item) {
                    $res['DataDisk'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->internetMaxBandwidthOut) {
            $res['InternetMaxBandwidthOut'] = $this->internetMaxBandwidthOut;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->netDistrictCode) {
            $res['NetDistrictCode'] = $this->netDistrictCode;
        }
        if (null !== $this->netWorkId) {
            $res['NetWorkId'] = $this->netWorkId;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->publicIpIdentification) {
            $res['PublicIpIdentification'] = $this->publicIpIdentification;
        }
        if (null !== $this->scheduleAreaLevel) {
            $res['ScheduleAreaLevel'] = $this->scheduleAreaLevel;
        }
        if (null !== $this->schedulingPriceStrategy) {
            $res['SchedulingPriceStrategy'] = $this->schedulingPriceStrategy;
        }
        if (null !== $this->schedulingStrategy) {
            $res['SchedulingStrategy'] = $this->schedulingStrategy;
        }
        if (null !== $this->securityId) {
            $res['SecurityId'] = $this->securityId;
        }
        if (null !== $this->systemDisk) {
            $res['SystemDisk'] = null !== $this->systemDisk ? $this->systemDisk->toMap() : null;
        }
        if (null !== $this->uniqueSuffix) {
            $res['UniqueSuffix'] = $this->uniqueSuffix;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['Carrier'])) {
            $model->carrier = $map['Carrier'];
        }
        if (isset($map['DataDisk'])) {
            if (!empty($map['DataDisk'])) {
                $model->dataDisk = [];
                $n               = 0;
                foreach ($map['DataDisk'] as $item) {
                    $model->dataDisk[$n++] = null !== $item ? dataDisk::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['InternetMaxBandwidthOut'])) {
            $model->internetMaxBandwidthOut = $map['InternetMaxBandwidthOut'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['NetDistrictCode'])) {
            $model->netDistrictCode = $map['NetDistrictCode'];
        }
        if (isset($map['NetWorkId'])) {
            $model->netWorkId = $map['NetWorkId'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['PublicIpIdentification'])) {
            $model->publicIpIdentification = $map['PublicIpIdentification'];
        }
        if (isset($map['ScheduleAreaLevel'])) {
            $model->scheduleAreaLevel = $map['ScheduleAreaLevel'];
        }
        if (isset($map['SchedulingPriceStrategy'])) {
            $model->schedulingPriceStrategy = $map['SchedulingPriceStrategy'];
        }
        if (isset($map['SchedulingStrategy'])) {
            $model->schedulingStrategy = $map['SchedulingStrategy'];
        }
        if (isset($map['SecurityId'])) {
            $model->securityId = $map['SecurityId'];
        }
        if (isset($map['SystemDisk'])) {
            $model->systemDisk = systemDisk::fromMap($map['SystemDisk']);
        }
        if (isset($map['UniqueSuffix'])) {
            $model->uniqueSuffix = $map['UniqueSuffix'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
