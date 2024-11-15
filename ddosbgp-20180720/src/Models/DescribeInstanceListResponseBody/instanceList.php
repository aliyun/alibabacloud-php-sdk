<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeInstanceListResponseBody;

use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeInstanceListResponseBody\instanceList\autoProtectCondition;
use AlibabaCloud\Tea\Model;

class instanceList extends Model
{
    /**
     * @description The condition that triggers automatic association of the instance with an object.
     *
     * @var autoProtectCondition
     */
    public $autoProtectCondition;

    /**
     * @description Indicates whether auto-renewal is enabled for the instance. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $autoRenewal;

    /**
     * @description The number of protected public IP addresses for which blackhole filtering is triggered.
     *
     * >  You can call the [DeleteBlackhole](https://help.aliyun.com/document_detail/118692.html) operation to deactivate blackhole filtering for a protected IP address.
     * @example 0
     *
     * @var string
     */
    public $blackholdingCount;

    /**
     * @description The type of the instance.
     *
     *   **ddos_ddosorigin_public_cn**: Anti-DDoS Origin 2.0 (Pay-as-you-go) on the China site (aliyun.com).
     *   **ddos_ddosorigin_public_intl**: Anti-DDoS Origin 2.0 (Pay-as-you-go) on the International site (alibabacloud.com).
     *
     * @example ddos_ddosorigin_public_cn
     *
     * @var string
     */
    public $commodityType;

    /**
     * @description The application scope of the instance.
     *
     *   **1**: The instance supports public IP addresses in all regions.
     *   **2**: The instance supports public IP addresses in regions in the Chinese mainland.
     *   **3**: The instance supports public IP addresses in regions outside the Chinese mainland.
     *   **4**: The instance supports public IP addresses in a region in or outside the Chinese mainland.
     *
     * @example 1
     *
     * @var int
     */
    public $coverageType;

    /**
     * @var int
     */
    public $debtStatus;

    /**
     * @description The time when the instance expires. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1640275200000
     *
     * @var int
     */
    public $expireTime;

    /**
     * @description The time when the instance was purchased. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1592886047000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description The ID of the instance.
     *
     * @example ddosbgp-cn-oew1pjrk****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The mitigation plan of the instance. Valid values:
     *
     *   **0**: the Professional mitigation plan
     *   **1**: the Enterprise mitigation plan
     *
     * @example 1
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The protocol type of the IP address asset that is protected by the instance. Valid values:
     *
     *   **Ipv4**
     *   **Ipv6**
     *
     * @example IPv4
     *
     * @var string
     */
    public $ipType;

    /**
     * @description The type of the cloud service that is associated with the Anti-DDoS Origin instance By default, this parameter is not returned. If the Anti-DDoS Origin instance is created by using a different cloud service, the code of the cloud service is returned.
     *
     * Valid values:
     *
     *   **gamebox**: The Anti-DDoS Origin instance is created by using Game Security Box.
     *   **eip**: The Anti-DDoS Origin instance is created by using an elastic IP address (EIP) for which Anti-DDoS (Enhanced Edition) is enabled.
     *
     * @example gamebox
     *
     * @var string
     */
    public $product;

    /**
     * @description The description of the instance.
     *
     * @example test
     *
     * @var string
     */
    public $remark;

    /**
     * @description The status of the instance. Valid values:
     *
     *   **1**: normal
     *   **2**: expired
     *   **3**: released
     *
     * @example 1
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'autoProtectCondition' => 'AutoProtectCondition',
        'autoRenewal'          => 'AutoRenewal',
        'blackholdingCount'    => 'BlackholdingCount',
        'commodityType'        => 'CommodityType',
        'coverageType'         => 'CoverageType',
        'debtStatus'           => 'DebtStatus',
        'expireTime'           => 'ExpireTime',
        'gmtCreate'            => 'GmtCreate',
        'instanceId'           => 'InstanceId',
        'instanceType'         => 'InstanceType',
        'ipType'               => 'IpType',
        'product'              => 'Product',
        'remark'               => 'Remark',
        'status'               => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoProtectCondition) {
            $res['AutoProtectCondition'] = null !== $this->autoProtectCondition ? $this->autoProtectCondition->toMap() : null;
        }
        if (null !== $this->autoRenewal) {
            $res['AutoRenewal'] = $this->autoRenewal;
        }
        if (null !== $this->blackholdingCount) {
            $res['BlackholdingCount'] = $this->blackholdingCount;
        }
        if (null !== $this->commodityType) {
            $res['CommodityType'] = $this->commodityType;
        }
        if (null !== $this->coverageType) {
            $res['CoverageType'] = $this->coverageType;
        }
        if (null !== $this->debtStatus) {
            $res['DebtStatus'] = $this->debtStatus;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->ipType) {
            $res['IpType'] = $this->ipType;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
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
     * @return instanceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoProtectCondition'])) {
            $model->autoProtectCondition = autoProtectCondition::fromMap($map['AutoProtectCondition']);
        }
        if (isset($map['AutoRenewal'])) {
            $model->autoRenewal = $map['AutoRenewal'];
        }
        if (isset($map['BlackholdingCount'])) {
            $model->blackholdingCount = $map['BlackholdingCount'];
        }
        if (isset($map['CommodityType'])) {
            $model->commodityType = $map['CommodityType'];
        }
        if (isset($map['CoverageType'])) {
            $model->coverageType = $map['CoverageType'];
        }
        if (isset($map['DebtStatus'])) {
            $model->debtStatus = $map['DebtStatus'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['IpType'])) {
            $model->ipType = $map['IpType'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
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
