<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class AllocateEipAddressRequest extends Model
{
    /**
     * @description The billing cycle of the subscription EIP. Valid values:
     *
     *   **Month** (default): The EIP is billed on a monthly basis.
     *   **Year**: The EIP is billed on an annual basis.
     *
     * When **InstanceChargeType** is set to **PrePaid**, this parameter is required. When **InstanceChargeType** is set to **PostPaid**, this parameter is not required.
     * @example 123456
     *
     * @var int
     */
    public $activityId;

    /**
     * @description The metering method of the EIP. Valid values:
     *
     *   **PayByBandwidth** (default): pay-by-bandwidth
     *   **PayByTraffic**: pay-by-data-transfer
     *
     * When **InstanceChargeType** is set to **PrePaid**, you must set **InternetChargeType** to **PayByBandwidth**.
     *
     * When **InstanceChargeType** is set to **PostPaid**, set **InternetChargeType** to **PayByBandwidth** or **PayByTraffic**.
     * @example false
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The promotion code. Ignore this parameter.
     *
     * @example 5
     *
     * @var string
     */
    public $bandwidth;

    /**
     * @description The edition of Anti-DDoS.
     *
     *   If you do not set this parameter, Anti-DDoS Origin Basic is used by default.
     *   If you set the value to **AntiDDoS_Enhanced**, Anti-DDoS Pro/Premium is used.
     *
     * You can set up to 10 editions of Anti-DDoS.
     * @example 0c593ea1-3bea-11e9-b96b-88e9fe637760
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the request.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to enable automatic payment. Default value: false. Valid values:
     *
     *   **false**: disables automatic payment. This is the default value. If you select this option, you must go to the Order Center to complete the payment after an order is generated.
     *   **true**: enables automatic payment. Payments are automatically completed.
     *
     * When **InstanceChargeType** is set to **PrePaid**, this parameter is required. When **InstanceChargeType** is set to **PostPaid**, this parameter is not required.
     * @example BGP
     *
     * @var string
     */
    public $ISP;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The **token** can contain only ASCII characters.
     *
     * >  If you do not set this parameter, the system automatically uses the value of **RequestId** as the value of **ClientToken**. The value of **RequestId** for each API request is different.
     * @example PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the EIP.
     *
     * >  This parameter is unavailable when you create a subscription EIP.
     * @example PayByTraffic
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @var string
     */
    public $ipAddress;

    /**
     * @description The ID of the IP address pool.
     *
     * You cannot use the IP address pool feature by default. To use the IP address pool feature, apply for the privilege in the Quota Center console. For more information, see [Request a quota increase in the Quota Center console](~~108213~~).
     * @example EIP1
     *
     * @var string
     */
    public $name;

    /**
     * @description The billing method of the EIP. Valid values:
     *
     *   **PrePaid**: subscription
     *   **PostPaid** (default): pay-as-you-go
     *
     * When **InstanceChargeType** is set to **PrePaid**, set **InternetChargeType** to **PayByBandwidth**. When **InstanceChargeType** is set to **PostPaid**, set **InternetChargeType** to **PayByBandwidth** or **PayByTraffic**.
     * @example public
     *
     * @var string
     */
    public $netmode;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The network type. Set the value to **public**, which specifies the Internet.
     *
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The ID of the resource group.
     *
     * @example Month
     *
     * @var string
     */
    public $pricingCycle;

    /**
     * @description The ID of the resource group. This parameter is returned only when **InstanceChargeType** is set to **PostPaid**.
     *
     * @example pippool-2vc0kxcedhquybdsz****
     *
     * @var string
     */
    public $publicIpAddressPoolId;

    /**
     * @description The line type. Valid values:
     *
     *   **BGP** (default): BGP (Multi-ISP) lines All regions support BGP (Multi-ISP) EIPs.
     *   **BGP_PRO**: BGP (Multi-ISP) Pro lines Only the following regions support BGP (Multi-ISP) Pro lines: China (Hong Kong), Singapore, Malaysia (Kuala Lumpur), Philippines (Manila), Indonesia (Jakarta), and Thailand (Bangkok).
     *
     * For more information about BGP (Multi-ISP) and BGP (Multi-ISP) Pro, see [EIP line types](~~32321~~).
     *
     *   If you are allowed to use single-ISP bandwidth, you can also choose one of the following values:
     *
     *   **ChinaTelecom**: China Telecom
     *   **ChinaUnicom**: China Unicom
     *   **ChinaMobile**: China Mobile
     *   **ChinaTelecom_L2**: China Telecom L2
     *   **ChinaUnicom_L2**: China Unicom L2
     *   **ChinaMobile_L2**: China Mobile L2
     *
     *   If your services are deployed in China East 1 Finance, this parameter is required and you must set the value to **BGP_FinanceCloud**.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The description of the EIP.
     *
     * >  This parameter is unavailable when you create a subscription EIP.
     * @example rg-acfmxazffggds****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @example AntiDDoS_Enhanced
     *
     * @var string[]
     */
    public $securityProtectionTypes;

    /**
     * @var string
     */
    public $zone;
    protected $_name = [
        'activityId'              => 'ActivityId',
        'autoPay'                 => 'AutoPay',
        'bandwidth'               => 'Bandwidth',
        'clientToken'             => 'ClientToken',
        'description'             => 'Description',
        'ISP'                     => 'ISP',
        'instanceChargeType'      => 'InstanceChargeType',
        'instanceId'              => 'InstanceId',
        'internetChargeType'      => 'InternetChargeType',
        'ipAddress'               => 'IpAddress',
        'name'                    => 'Name',
        'netmode'                 => 'Netmode',
        'ownerAccount'            => 'OwnerAccount',
        'ownerId'                 => 'OwnerId',
        'period'                  => 'Period',
        'pricingCycle'            => 'PricingCycle',
        'publicIpAddressPoolId'   => 'PublicIpAddressPoolId',
        'regionId'                => 'RegionId',
        'resourceGroupId'         => 'ResourceGroupId',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
        'securityProtectionTypes' => 'SecurityProtectionTypes',
        'zone'                    => 'Zone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityId) {
            $res['ActivityId'] = $this->activityId;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ISP) {
            $res['ISP'] = $this->ISP;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->netmode) {
            $res['Netmode'] = $this->netmode;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->publicIpAddressPoolId) {
            $res['PublicIpAddressPoolId'] = $this->publicIpAddressPoolId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->securityProtectionTypes) {
            $res['SecurityProtectionTypes'] = $this->securityProtectionTypes;
        }
        if (null !== $this->zone) {
            $res['Zone'] = $this->zone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AllocateEipAddressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivityId'])) {
            $model->activityId = $map['ActivityId'];
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ISP'])) {
            $model->ISP = $map['ISP'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Netmode'])) {
            $model->netmode = $map['Netmode'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }
        if (isset($map['PublicIpAddressPoolId'])) {
            $model->publicIpAddressPoolId = $map['PublicIpAddressPoolId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SecurityProtectionTypes'])) {
            if (!empty($map['SecurityProtectionTypes'])) {
                $model->securityProtectionTypes = $map['SecurityProtectionTypes'];
            }
        }
        if (isset($map['Zone'])) {
            $model->zone = $map['Zone'];
        }

        return $model;
    }
}
