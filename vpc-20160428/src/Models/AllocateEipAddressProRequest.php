<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class AllocateEipAddressProRequest extends Model
{
    /**
     * @description Specifies whether to enable automatic payment. Valid values:
     *
     *   **false**: disables automatic payment. After an order is generated, you must go to the Order Center to complete the payment.
     *   **true**: enabled. Payments are automatically completed.
     *
     * When **InstanceChargeType** is set to **PrePaid**, this parameter is required. When **InstanceChargeType** is set to **PostPaid**, this parameter is not required.
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The maximum bandwidth of the specified EIP. Unit: Mbit/s.
     *
     *   When **InstanceChargeType** is set to **PostPaid** and **InternetChargeType** is set to **PayByBandwidth**, valid values for **Bandwidth** are **1** to **500**.
     *   When **InstanceChargeType** is set to **PostPaid** and **InternetChargeType** is set to **PayByTraffic**, valid values for **Bandwidth** are **1** to **200**.
     *   When **InstanceChargeType** is set to **PrePaid**, valid values for **Bandwidth** are **1** to **1000**.
     *
     * Default value: **5**. Unit: Mbit/s.
     * @example 5
     *
     * @var string
     */
    public $bandwidth;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * >  If you do not set this parameter, **ClientToken** is set to the value of **RequestId**. The value of **RequestId** for each API request may be different.
     * @example 0c593ea1-3bea-11e9-b96b-88e9fe6****
     *
     * @var string
     */
    public $clientToken;

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
     * @example BGP
     *
     * @var string
     */
    public $ISP;

    /**
     * @description The billing method of the specified EIP. Valid values:
     *
     *   **PrePaid**: subscription
     *   **PostPaid** (default): pay-as-you-go
     *
     * When **InstanceChargeType** is set to **PrePaid**, you must set **InternetChargeType** to **PayByBandwidth**.
     *
     * When **InstanceChargeType** is set to **PostPaid**, you must set **InternetChargeType** to **PayByBandwidth** or **PayByTraffic**.
     * @example PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The ID of the EIP.
     *
     * Set **IpAddress** or **InstanceId**. If you leave both parameters empty, the system randomly allocates an EIP.
     * @example eip-25877c70gddh****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The metering method of the specified EIP. Valid values:
     *
     *   **PayByBandwidth** (default): pay-by-bandwidth
     *   **PayByTraffic**: pay-by-data-transfer
     *
     * When **InstanceChargeType** is set to **PrePaid**, you must set **InternetChargeType** to **PayByBandwidth**.
     *
     * When **InstanceChargeType** is set to **PostPaid**, you must set **InternetChargeType** to **PayByBandwidth** or **PayByTraffic**.
     * @example PayByBandwidth
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The IP address of the EIP that you want to request.
     *
     * Set **IpAddress** or **InstanceId**. If you leave both parameters empty, the system randomly allocates an EIP.
     * @example 192.0.XX.XX
     *
     * @var string
     */
    public $ipAddress;

    /**
     * @description The network type. Set the value to **public**, which specifies the Internet.
     *
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
     * @description The subscription duration of the bandwidth plan.
     *
     *   If **PricingCycle** is set to **Month**, set **Period** to a value from **1 to 9**.
     *   If **PricingCycle** is set to **Year**, set **Period** to a value from **1 to 3**.
     *
     * When **InstanceChargeType** is set to **PrePaid**, this parameter is required.
     *
     * Ignore this parameter when **InstanceChargeType** is set to **PostPaid**.
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The billing cycle of the subscription EIP. Valid values:
     *
     *   **Month** (default): The EIP is billed on a monthly basis.
     *   **Year**: The EIP is billed on an annual basis.
     *
     * When **InstanceChargeType** is set to **PrePaid**, this parameter is required. When **InstanceChargeType** is set to **PostPaid**, this parameter is not required.
     * @example Month
     *
     * @var string
     */
    public $pricingCycle;

    /**
     * @description The ID of the IP address pool.
     *
     * You cannot use the IP address pool feature by default. To use this feature, apply for the privilege in the Quota Center console. For more information, see [Request a quota increase in the Quota Center console](~~108213~~).
     * @example pippool-2vc0kxcedhquybdsz****
     *
     * @var string
     */
    public $publicIpAddressPoolId;

    /**
     * @description The ID of the region where you want to request a specified EIP.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the EIP belongs.
     *
     * @example rg-resourcegroup****
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
     * @var string[]
     */
    public $securityProtectionTypes;
    protected $_name = [
        'autoPay'                 => 'AutoPay',
        'bandwidth'               => 'Bandwidth',
        'clientToken'             => 'ClientToken',
        'ISP'                     => 'ISP',
        'instanceChargeType'      => 'InstanceChargeType',
        'instanceId'              => 'InstanceId',
        'internetChargeType'      => 'InternetChargeType',
        'ipAddress'               => 'IpAddress',
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
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AllocateEipAddressProRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
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

        return $model;
    }
}
