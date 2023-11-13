<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @description The time when the instance is created. This value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1637751953000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The overdue status of the instance. The value is fixed as **0**, which indicates that your Alibaba Cloud account does not have overdue payments. The instance supports only the subscription billing method.
     *
     * @example 0
     *
     * @var int
     */
    public $debtStatus;

    /**
     * @description The mitigation plan of the instance. Valid values:
     *
     *   **0**: Anti-DDoS Premium instance of the Insurance mitigation plan
     *   **1**: Anti-DDoS Premium instance of the Unlimited mitigation plan
     *   **2**: Anti-DDoS Premium instance of the MCA mitigation plan
     *   **9**: Anti-DDoS Pro instance of the Profession mitigation plan
     *
     * @example 9
     *
     * @var int
     */
    public $edition;

    /**
     * @description The forwarding status of the instance. Valid values:
     *
     *   **0**: The instance no longer forwards service traffic.
     *   **1**: The instance forwards service traffic as expected.
     *
     * @example 1
     *
     * @var int
     */
    public $enabled;

    /**
     * @description The time when the instance expires. This value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1640361600000
     *
     * @var int
     */
    public $expireTime;

    /**
     * @description The ID of the instance.
     *
     * @example ddoscoo-cn-7pp2g9ed****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The IP address of the instance.
     *
     * @example 203.199.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @description The IP address-based forwarding mode of the instance. Valid values:
     *
     *   **fnat**: Requests from IPv4 addresses are forwarded to origin servers that use IPv4 addresses and requests from IPv6 addresses are forwarded to origin servers that use IPv6 addresses.
     *   **v6tov4**: All requests are forwarded to origin servers that use IPv4 addresses.
     *
     * @example fnat
     *
     * @var string
     */
    public $ipMode;

    /**
     * @description The IP version of the instance. Valid values:
     *
     *   **Ipv4**: IPv4
     *   **Ipv6**: IPv6
     *
     * @example Ipv4
     *
     * @var string
     */
    public $ipVersion;

    /**
     * @description Indicates whether the 95th percentile metering method has been enabled for the instance. Valid values:
     *
     *   0: The 95th percentile metering method has not been enabled for the instance.
     *   1: The 95th percentile metering method has been enabled for the instance.
     *
     * @example 0
     *
     * @var int
     */
    public $isFirstOpenBw;

    /**
     * @description Indicates whether the metering method of the 95th percentile burstable QPS is enabled for the instance. Valid values:
     *
     * - 1: yes
     * @example 0
     *
     * @var int
     */
    public $isFirstOpenQps;

    /**
     * @description The remarks of the instance.
     *
     * @example doc-test
     *
     * @var string
     */
    public $remark;

    /**
     * @description The status of the instance. Valid values:
     *
     *   **1**: normal
     *   **2**: expired
     *
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'createTime'     => 'CreateTime',
        'debtStatus'     => 'DebtStatus',
        'edition'        => 'Edition',
        'enabled'        => 'Enabled',
        'expireTime'     => 'ExpireTime',
        'instanceId'     => 'InstanceId',
        'ip'             => 'Ip',
        'ipMode'         => 'IpMode',
        'ipVersion'      => 'IpVersion',
        'isFirstOpenBw'  => 'IsFirstOpenBw',
        'isFirstOpenQps' => 'IsFirstOpenQps',
        'remark'         => 'Remark',
        'status'         => 'Status',
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
        if (null !== $this->debtStatus) {
            $res['DebtStatus'] = $this->debtStatus;
        }
        if (null !== $this->edition) {
            $res['Edition'] = $this->edition;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->ipMode) {
            $res['IpMode'] = $this->ipMode;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->isFirstOpenBw) {
            $res['IsFirstOpenBw'] = $this->isFirstOpenBw;
        }
        if (null !== $this->isFirstOpenQps) {
            $res['IsFirstOpenQps'] = $this->isFirstOpenQps;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DebtStatus'])) {
            $model->debtStatus = $map['DebtStatus'];
        }
        if (isset($map['Edition'])) {
            $model->edition = $map['Edition'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['IpMode'])) {
            $model->ipMode = $map['IpMode'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['IsFirstOpenBw'])) {
            $model->isFirstOpenBw = $map['IsFirstOpenBw'];
        }
        if (isset($map['IsFirstOpenQps'])) {
            $model->isFirstOpenQps = $map['IsFirstOpenQps'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
