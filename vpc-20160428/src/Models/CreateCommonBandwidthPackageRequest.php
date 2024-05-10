<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateCommonBandwidthPackageRequest extends Model
{
    /**
     * @description The maximum bandwidth of the Internet Shared Bandwidth instance. Unit: Mbit/s.
     *
     * Valid values: **1** to **1000**. Default value: **1**.
     *
     * This parameter is required.
     * @example 1000
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * >
     *
     * If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     * @example 02fb3da4-130e-11e9-8e44-001****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the Internet Shared Bandwidth instance.
     *
     * The description must be 2 to 256 characters in length and start with a letter. The description cannot start with `http://` or `https://`.
     * @example abc
     *
     * @var string
     */
    public $description;

    /**
     * @description The line type. Valid values:
     *
     *   **BGP** All regions support BGP (Multi-ISP).
     *   **BGP_PRO** BGP (Multi-ISP) Pro lines are available in the China (Hong Kong), Singapore, Japan (Tokyo), Philippines (Manila), Malaysia (Kuala Lumpur), Indonesia (Jakarta), and Thailand (Bangkok) regions.
     *
     * If you are allowed to use single-ISP bandwidth, you can also use one of the following values:
     *
     *   **ChinaTelecom**
     *   **ChinaUnicom**
     *   **ChinaMobile**
     *   **ChinaTelecom_L2**
     *   **ChinaUnicom_L2**
     *   **ChinaMobile_L2**
     *
     * If your services are deployed in China East 1 Finance, this parameter is required and you must set the value to **BGP_FinanceCloud**.
     * @example BGP
     *
     * @var string
     */
    public $ISP;

    /**
     * @description The billing method of the Internet Shared Bandwidth instance. Set the value to **PayByTraffic**, which specifies the pay-by-data-transfer billing method.
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The name of the Internet Shared Bandwidth instance.
     *
     * The name must be 2 to 128 characters in length, and can contain letters, digits, underscores (_), and hyphens (-). The name must start with a letter.
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
     * This parameter is available only on the Alibaba Cloud China site.
     * @example 20
     *
     * @var int
     */
    public $ratio;

    /**
     * @description The region ID of the Internet Shared Bandwidth instance.
     *
     * This parameter is required.
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
     * @description The zone of the Internet Shared Bandwidth instance. This parameter is required if you create an Internet Shared Bandwidth instance for a cloud box.
     *
     * @example ap-southeast-1-lzdvn-cb
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
