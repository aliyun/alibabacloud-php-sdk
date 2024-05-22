<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\CreateInstanceRequest\dataDisk;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateInstanceRequest\systemDisk;
use AlibabaCloud\Tea\Model;

class CreateInstanceRequest extends Model
{
    /**
     * @var dataDisk[]
     */
    public $dataDisk;

    /**
     * @var systemDisk
     */
    public $systemDisk;

    /**
     * @description Specifies whether to enable the auto-renewal feature. Valid values: **True** and **False**. Default value: False.
     *
     * @example True
     *
     * @var string
     */
    public $autoRenew;

    /**
     * @description The auto-renewal period for the instance. This parameter is required when the **AutoRenew** parameter is set to **True**. Valid values: **1** to **12**. Unit: months.
     *
     * @example 12
     *
     * @var string
     */
    public $autoRenewPeriod;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The hostname of the Elastic Compute Service (ECS) instance. General naming rules: The hostname cannot start or end with a period (.) or hyphen (-). It cannot contain consecutive periods (.) or hyphens (-).
     *
     * Naming rules for specific instances:
     *
     *   For Windows instances, the hostname must be **2** to **15** characters in length and cannot contain periods (.) or contain only digits. The hostname cannot contain periods (.) or contain only digits.
     *   For instances that run one of other operating systems such as Linux, the hostname must be **2** to **64** characters in length. You can use periods (.) to separate the hostname into multiple segments. Each segment can contain letters, digits, and hyphens (-).
     *
     * @example test-HostName
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The ID of the image file that you select when creating the instance.
     *
     * @example yourImage ID
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The name of the instance. The name must conform to the following naming conventions:
     *
     *   The name must be **2** to **128** characters in length.
     *   It must start with a letter but cannot start with http:// or https://.
     *   The name can contain letters, digits, colons (:), underscores (_), periods (.), and hyphens (-).
     *
     * If you do not specify this parameter, the instance ID is used as the instance name by default.
     * @example test:Instance_Name.1-2
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The type of the instance.
     *
     * This parameter is required.
     * @example ens.se1.tiny
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description This parameter is required if you create the instance for the first time. The existing billing method is used by default if you have created an instance. Valid values:
     *
     *   **BandwidthByDay**: Pay by daily peak bandwidth.
     *   **95BandwidthByMonth**: Pay by monthly 95th percentile bandwidth.
     *
     * @example 95BandwidthByMonth
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The type of IP address. Valid values:
     *
     *   **ipv4**: IPv4. This is the default value.
     *   **ipv6**: IPv6.
     *   **ipv4Andipv6**: IPv4 and IPv6.
     *
     * @example ipv4
     *
     * @var string
     */
    public $ipType;

    /**
     * @description The name of the key pair. You can specify only one name.
     *
     * @example TestKeyPairName
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The password of the instance.
     *
     * The password must be 8 to 30 characters in length and contain at least three of the following character types: uppercase letters, lowercase letters, digits, and special characters. Special characters include: ``()`~!@#$%^&*-_+=|{}[]:;\\"<>,.?/``
     * @example yourPassword:1
     *
     * @var string
     */
    public $password;

    /**
     * @description Specifies whether to use the preset password of the image. Valid values:
     *
     * - **true**: The password preset in the image is used, and the **Password** parameter must be null. For secure access, make sure that the selected image has a password configured.
     *
     * - **false**: does not use the password preset in the image.
     * @example false
     *
     * @var bool
     */
    public $passwordInherit;

    /**
     * @description The billing method of the instance. The value is set to Subscription.
     *
     * @example Subscription
     *
     * @var string
     */
    public $paymentType;

    /**
     * @description The subscription period of the instance. Valid values: **1** to **9** and **12**. Unit: months.
     *
     * This parameter is required.
     * @example 12
     *
     * @var string
     */
    public $period;

    /**
     * @description The internal IP address. If this parameter is specified, you must specify the vSwitch ID. The vSwitch must be created first. Otherwise, an error is returned.
     *
     * @example 10.10.10.10
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description Specifies whether a public IP address can be assigned to the specified instance. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $publicIpIdentification;

    /**
     * @description The number of instances.
     *
     * This parameter is required.
     * @example 1
     *
     * @var string
     */
    public $quantity;

    /**
     * @description Specifies whether to automatically append sequential suffixes to the hostnames specified by the **HostName** parameter and instance names specified by the **InstanceName** parameter. The sequential numbers in the suffix range from **001** to **999**.
     *
     * Examples: **LocalHost001** and **LocalHost002**, and **MyInstance001** and **MyInstance002**.
     *
     * Default value: **false**.
     * @example false
     *
     * @var bool
     */
    public $uniqueSuffix;

    /**
     * @description Custom data. The data starts with `#!`. The data can be at most 256 characters in length and 16 KB in size. Only custom scripts are supported and cannot be rendered by InstanceMetaData.
     *
     * For more information, see [User data formats](https://cloudinit.readthedocs.io/en/latest/topics/format.html).
     * @example #!/bin/sh  echo "Hello World.  The time is now $(date -R)!" | tee /home/output.txt
     *
     * @var string
     */
    public $userData;

    /**
     * @description The ID of the vSwitch.
     *
     * @example YourVSwitchId
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'dataDisk'               => 'DataDisk',
        'systemDisk'             => 'SystemDisk',
        'autoRenew'              => 'AutoRenew',
        'autoRenewPeriod'        => 'AutoRenewPeriod',
        'ensRegionId'            => 'EnsRegionId',
        'hostName'               => 'HostName',
        'imageId'                => 'ImageId',
        'instanceName'           => 'InstanceName',
        'instanceType'           => 'InstanceType',
        'internetChargeType'     => 'InternetChargeType',
        'ipType'                 => 'IpType',
        'keyPairName'            => 'KeyPairName',
        'ownerId'                => 'OwnerId',
        'password'               => 'Password',
        'passwordInherit'        => 'PasswordInherit',
        'paymentType'            => 'PaymentType',
        'period'                 => 'Period',
        'privateIpAddress'       => 'PrivateIpAddress',
        'publicIpIdentification' => 'PublicIpIdentification',
        'quantity'               => 'Quantity',
        'uniqueSuffix'           => 'UniqueSuffix',
        'userData'               => 'UserData',
        'vSwitchId'              => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataDisk) {
            $res['DataDisk'] = [];
            if (null !== $this->dataDisk && \is_array($this->dataDisk)) {
                $n = 0;
                foreach ($this->dataDisk as $item) {
                    $res['DataDisk'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->systemDisk) {
            $res['SystemDisk'] = null !== $this->systemDisk ? $this->systemDisk->toMap() : null;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
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
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->ipType) {
            $res['IpType'] = $this->ipType;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->passwordInherit) {
            $res['PasswordInherit'] = $this->passwordInherit;
        }
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->publicIpIdentification) {
            $res['PublicIpIdentification'] = $this->publicIpIdentification;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
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
     * @return CreateInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataDisk'])) {
            if (!empty($map['DataDisk'])) {
                $model->dataDisk = [];
                $n               = 0;
                foreach ($map['DataDisk'] as $item) {
                    $model->dataDisk[$n++] = null !== $item ? dataDisk::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SystemDisk'])) {
            $model->systemDisk = systemDisk::fromMap($map['SystemDisk']);
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
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
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['IpType'])) {
            $model->ipType = $map['IpType'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['PasswordInherit'])) {
            $model->passwordInherit = $map['PasswordInherit'];
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['PublicIpIdentification'])) {
            $model->publicIpIdentification = $map['PublicIpIdentification'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
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
