<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateAndroidInstanceGroupRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateAndroidInstanceGroupRequest extends Model
{
    /**
     * @description The number of instance groups. Default value: 1. Maximum value: 1.
     *
     * @example 8
     *
     * @var int
     */
    public $amount;

    /**
     * @description Specifies whether to enable automatic payment. Default value: false.
     *
     * Valid values:
     *
     *   true: enables automatic payment. Make sure that your Alibaba Cloud account has sufficient balance.
     *   false: disables automatic payment. You must manually complete the payment.
     *
     * @example false
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description Specifies whether to enable auto-renewal. Default value: false.
     *
     * Valid values:
     *
     *   true: automatically renew resource upon expiration.
     *   false: manually renew resources upon expiration.
     *
     * @example false
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The ID of the region. You can call the DescribeRegions operation to query the regions where Cloud Phone is supported.
     *
     * Valid values:
     *
     *   cn-shenzhen: China (Shenzhen).
     *   cn-beijing: China (Beijing).
     *   cn-shanghai: China (Shanghai).
     *   cn-hongkong: China (Hong Kong).
     *   ap-southeast-1: Singapore.
     *   cn-hangzhou: China (Hangzhou).
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $bizRegionId;

    /**
     * @description The billing method.
     *
     * Valid values:
     *
     *   PostPaid: pay-as-you-go.
     *   PrePaid: subscription.
     *
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The client token that is used to ensure the idempotence of the request. The value cannot exceed 100 characters in length.
     *
     * @example asadbuvwiabdbvchjsbj
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description >  This parameter is not publicly available.
     *
     * @example null
     *
     * @var bool
     */
    public $enableIpv6;

    /**
     * @description Specifies whether to enable GPU acceleration.
     *
     * Valid values:
     *
     *   true: enables GPU acceleration.
     *   false (default): disables GPU acceleration.
     *
     * @example false
     *
     * @var bool
     */
    public $gpuAcceleration;

    /**
     * @description The ID of the image. You can call the [DescribeImageList](https://help.aliyun.com/document_detail/2807324.html) operation to query images.
     *
     * This parameter is required.
     *
     * @example imgc-06zyt9m93zwax****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The name of the instance group.
     *
     * >  The name can be up to 30 characters in length. It can contain letters, digits, colons (:), underscores (_), periods (.), or hyphens (-). It must start with letters but cannot start with `http://` or `https://`.
     *
     * @example defaultInstanceGroup
     *
     * @var string
     */
    public $instanceGroupName;

    /**
     * @description The specifications of the instance group. You can call the [DescribeSpec](https://help.aliyun.com/document_detail/2807299.html) operation to query the available specifications.
     *
     * Valid values:
     *
     *   acp.perf.large: Performance (8 vCPUs, 16 GiB of memory, and 32 GiB of storage.
     *   acp.basic.small: Lightweight (2 vCPUs, 4 GiB of memory, and 32 GiB of storage).
     *   acp.std.large: Standard (4 vCPUs, 8 GiB of memory, and 32 GiB of storage).
     *
     * This parameter is required.
     *
     * @example acp.basic.small
     *
     * @var string
     */
    public $instanceGroupSpec;

    /**
     * @description >  This parameter is not publicly available.
     *
     * @example null
     *
     * @var int
     */
    public $ipv6Bandwidth;

    /**
     * @description The ID of the key pair. When you create an instance group and specify a valid key pair ID, all cloud phone instances within the group will automatically be bound to that key pair upon creation. This eliminates the need to manually bind key pairs to individual cloud phone instances.
     *
     * >  Binding key pairs to cloud phone instances is currently not supported during instance group resizing.
     *
     * @example kp-7o9xywwfutc1l****
     *
     * @var string
     */
    public $keyPairId;

    /**
     * @description The number of cloud phones in the instance group. Maximum value: 100.
     *
     * @example 1
     *
     * @var int
     */
    public $numberOfInstances;

    /**
     * @description The ID of the network.
     *
     *   This parameter is required if you assign a shared network to cloud phones. You can go to the [Network](https://wya.wuying.aliyun.com/network) page of the Cloud Phone console to retrieve the ID of a **shared network**. If no shared network is available in the Cloud Phone console, you can leave this parameter empty. The system automatically creates one when you create an instance group.
     *   This parameter is required if you assign a virtual private cloud (VPC) to cloud phones. You can go to the [Network](https://wya.wuying.aliyun.com/network) page of the Cloud Phone console to retrieve the ID of a **VPC**. If no VPC is available in the Cloud Phone console, you must first create one.
     *
     * @example cn-hangzhou+dir-745976****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The subscription duration. The unit is specified by PeriodUnit.
     *
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The unit of the subscription duration.
     *
     * Valid values:
     *
     *   Month
     *   Year
     *   Hour (Note that this unit is supported only by pay-as-you-go.)
     *
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The ID of the policy. You can call the [ListPolicyGroups](https://help.aliyun.com/document_detail/2807352.html) operation to query policies.
     *
     * @example pg-b7bxrrwxkijjh****
     *
     * @var string
     */
    public $policyGroupId;

    /**
     * @description The tags
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The ID of the vSwitch. You can call the [DescribeVSwitches](https://help.aliyun.com/document_detail/448774.html) operation to query vSwitches.
     *
     *   This parameter is not required if you assign a shared network to cloud phones.
     *   This parameter is required if you assign a VPC to cloud phones. The vSwitch specified by this parameter is used to create cloud phones.
     *
     * @example vsw-uf61uvzhz8ejaw776****
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'amount' => 'Amount',
        'autoPay' => 'AutoPay',
        'autoRenew' => 'AutoRenew',
        'bizRegionId' => 'BizRegionId',
        'chargeType' => 'ChargeType',
        'clientToken' => 'ClientToken',
        'enableIpv6' => 'EnableIpv6',
        'gpuAcceleration' => 'GpuAcceleration',
        'imageId' => 'ImageId',
        'instanceGroupName' => 'InstanceGroupName',
        'instanceGroupSpec' => 'InstanceGroupSpec',
        'ipv6Bandwidth' => 'Ipv6Bandwidth',
        'keyPairId' => 'KeyPairId',
        'numberOfInstances' => 'NumberOfInstances',
        'officeSiteId' => 'OfficeSiteId',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
        'policyGroupId' => 'PolicyGroupId',
        'tag' => 'Tag',
        'vSwitchId' => 'VSwitchId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->enableIpv6) {
            $res['EnableIpv6'] = $this->enableIpv6;
        }
        if (null !== $this->gpuAcceleration) {
            $res['GpuAcceleration'] = $this->gpuAcceleration;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->instanceGroupName) {
            $res['InstanceGroupName'] = $this->instanceGroupName;
        }
        if (null !== $this->instanceGroupSpec) {
            $res['InstanceGroupSpec'] = $this->instanceGroupSpec;
        }
        if (null !== $this->ipv6Bandwidth) {
            $res['Ipv6Bandwidth'] = $this->ipv6Bandwidth;
        }
        if (null !== $this->keyPairId) {
            $res['KeyPairId'] = $this->keyPairId;
        }
        if (null !== $this->numberOfInstances) {
            $res['NumberOfInstances'] = $this->numberOfInstances;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAndroidInstanceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['EnableIpv6'])) {
            $model->enableIpv6 = $map['EnableIpv6'];
        }
        if (isset($map['GpuAcceleration'])) {
            $model->gpuAcceleration = $map['GpuAcceleration'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['InstanceGroupName'])) {
            $model->instanceGroupName = $map['InstanceGroupName'];
        }
        if (isset($map['InstanceGroupSpec'])) {
            $model->instanceGroupSpec = $map['InstanceGroupSpec'];
        }
        if (isset($map['Ipv6Bandwidth'])) {
            $model->ipv6Bandwidth = $map['Ipv6Bandwidth'];
        }
        if (isset($map['KeyPairId'])) {
            $model->keyPairId = $map['KeyPairId'];
        }
        if (isset($map['NumberOfInstances'])) {
            $model->numberOfInstances = $map['NumberOfInstances'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
