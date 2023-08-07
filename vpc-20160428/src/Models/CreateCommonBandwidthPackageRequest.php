<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateCommonBandwidthPackageRequest extends Model
{
    /**
     * @description The maximum bandwidth of the EIP bandwidth plan.
     *
     * Valid values: **1** to **1000**. Unit: Mbit/s.
     * @example 1000
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among different requests. The token can contain only ASCII characters.
     *
     * >  If you do not set this parameter, the system automatically sets the **ClientToken** parameter to the value of **RequestId**. The value of **RequestId** may be different for each API request.
     * @example 02fb3da4-130e-11e9-8e44-001****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the EIP bandwidth plan.
     *
     * The description must be 2 to 256 characters in length. It must start with a letter but cannot start with `http://` or `https://`.
     * @example abc
     *
     * @var string
     */
    public $description;

    /**
     * @description The line type. Valid values:
     *
     *   **BGP**: BGP (Multi-ISP) lines. BGP (Multi-ISP) lines are available in all regions.
     *   **BGP_PRO**: BGP (Multi-ISP) Pro lines. BGP (Multi-ISP) Pro is available only in the China (Hong Kong), Singapore, Philippines (Manila), Malaysia (Kuala Lumpur), Indonesia (Jakarta), and Thailand (Bangkok) regions.
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
     * If your services are deployed in China East 1 Finance, you must set this parameter to **BGP_FinanceCloud**.
     * @example BGP
     *
     * @var string
     */
    public $ISP;

    /**
     * @description The billing method of the EIP bandwidth plan. Set the value to **PayByTraffic**, which refers to the pay-by-data-transfer metering method.
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The name of the EIP bandwidth plan.
     *
     * The name must be 2 to 128 characters in length, and can contain letters, digits, underscores (\_), and hyphens (-). The name must start with a letter.
     * @example test123
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The percentage of the minimum bandwidth commitment. Set the parameter to **20**.
     *
     * >  This parameter is available only on the Alibaba Cloud China site.
     * @example 20
     *
     * @var int
     */
    public $ratio;

    /**
     * @description The region ID of the EIP bandwidth plan.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to obtain the region ID.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmxazdjdhd****
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
     * @description The zone of the EIP bandwidth plan.
     *
     * You do not need to set this parameter.
     * @example cn-hangzhou-a
     *
     * @var string
     */
    public $zone;
    protected $_name = [
        'bandwidth'               => 'Bandwidth',
        'clientToken'             => 'ClientToken',
        'description'             => 'Description',
        'ISP'                     => 'ISP',
        'internetChargeType'      => 'InternetChargeType',
        'name'                    => 'Name',
        'ownerAccount'            => 'OwnerAccount',
        'ownerId'                 => 'OwnerId',
        'ratio'                   => 'Ratio',
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
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->ratio) {
            $res['Ratio'] = $this->ratio;
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
     * @return CreateCommonBandwidthPackageRequest
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ISP'])) {
            $model->ISP = $map['ISP'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Ratio'])) {
            $model->ratio = $map['Ratio'];
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
