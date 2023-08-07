<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class AllocateEipSegmentAddressRequest extends Model
{
    /**
     * @description The maximum bandwidth of the EIP. Unit: Mbit/s.
     *
     *   When **InstanceChargeType** is set to **PostPaid** and **InternetChargeType** is set to **PayByBandwidth**, the valid values for **Bandwidth** are **1** to **500**.
     *   When **InstanceChargeType** is set to **PostPaid** and **InternetChargeType** is set to **PayByTraffic**, the valid values for **Bandwidth** are **1** to **200**.
     *   When **InstanceChargeType** is set to **PrePaid**, the valid values for **Bandwidth** are **1** to **1000**.
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
     * You can use the client to generate the token, but you must make sure that the token is unique among all requests. The **client token** can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system uses **RequestId** as **ClientToken**. The value of **RequestId** for each API request may be different.
     * @example 02fb3da4-130e-11e9-8e44-001****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The subnet mask length of the contiguous EIPs. Valid values:
     *
     * - **28**: applies for 16 contiguous EIPs in each call.
     * - **27**: applies for 32 contiguous EIPs in each call.
     * - **26**: applies for 64 contiguous EIPs each call.
     * - **25**: applies for 128 contiguous EIPs in each call.
     * - **24**: applies for 256 contiguous EIPs in each call.
     *
     * >  The number of contiguous EIPs allocated by the system may be less than the requested number because one, three, or four EIPs may be reserved.
     * @example 28
     *
     * @var string
     */
    public $eipMask;

    /**
     * @description The metering method of the contiguous EIPs. Valid values:
     *
     *   **PayByBandwidth** (default): pay-by-bandwidth
     *   **PayByTraffic**: pay-by-data-transfer
     *
     * @example PayByBandwidth
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The line type. Valid values:
     *
     *   **BGP** (default): BGP (Multi-ISP) lines All regions support BGP (Multi-ISP) EIPs.
     *   **BGP_PRO**: BGP (Multi-ISP) Pro lines. Only the following regions support BGP (Multi-ISP) Pro lines: China (Hong Kong), Singapore, Malaysia (Kuala Lumpur), Philippines (Manila), Indonesia (Jakarta), and Thailand (Bangkok).
     *
     * If you are allowed to use single-ISP bandwidth, you can also choose one of the following values:
     *
     *   **ChinaTelecom**: China Telecom
     *   **ChinaUnicom**: China Unicom
     *   **ChinaMobile**: China Mobile
     *   **ChinaTelecom_L2**: China Telecom L2
     *   **ChinaUnicom_L2**: China Unicom L2
     *   **ChinaMobile_L2**: China Mobile L2
     *
     * If your services are deployed in China East 1 Finance, this parameter is required and you must set the value to **BGP_FinanceCloud**.
     * @example BGP
     *
     * @var string
     */
    public $isp;

    /**
     * @description Set the value to **public**, which specifies the Internet.
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
     * @description The region ID of the contiguous EIPs.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-bp67acfmxazb4ph****
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
     * @example cn-hangzhou-a
     *
     * @var string
     */
    public $zone;
    protected $_name = [
        'bandwidth'            => 'Bandwidth',
        'clientToken'          => 'ClientToken',
        'eipMask'              => 'EipMask',
        'internetChargeType'   => 'InternetChargeType',
        'isp'                  => 'Isp',
        'netmode'              => 'Netmode',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'zone'                 => 'Zone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->eipMask) {
            $res['EipMask'] = $this->eipMask;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
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
        if (null !== $this->zone) {
            $res['Zone'] = $this->zone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AllocateEipSegmentAddressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['EipMask'])) {
            $model->eipMask = $map['EipMask'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
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
        if (isset($map['Zone'])) {
            $model->zone = $map['Zone'];
        }

        return $model;
    }
}
