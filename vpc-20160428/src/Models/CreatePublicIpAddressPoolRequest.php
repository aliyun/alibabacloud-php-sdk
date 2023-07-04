<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreatePublicIpAddressPoolRequest extends Model
{
    /**
     * @description The client token that you want to use to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that the value is unique among all requests. ClientToken can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system uses **RequestId** as **ClientToken**. The value of **RequestId** for each API request may be different.
     * @example 02fb3da4-130e-11****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the IP address pool.
     *
     * This parameter is optional. The description must be 2 to 256 characters in length, and cannot start with http:// or https://.
     * @example AddressPoolDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to perform a dry run. Valid values:
     *
     *   **true**: performs a dry run. The system checks the required parameters, request syntax, and limits. If the request fails the dry run, an error message is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *   **false** (default): performs a dry run and sends the request. If the request passes the dry run, a 2xx HTTP status code is returned and the operation is performed.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The line type. Valid values:
     *
     *   **BGP** (default): BGP (Multi-ISP) lines.
     *   **BGP_PRO**: BGP (Multi-ISP) Pro lines
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
    public $isp;

    /**
     * @description The name of the IP address pool.
     *
     * This parameter is optional. The name must be 1 to 128 characters in length, and can contain digits, periods (.), underscores (\_), and hyphens (-). The name must start with a letter but cannot start with `http://` or `https://`.
     * @example AddressPoolName
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
     * @description The ID of the region where you want to create the IP address pool.
     *
     * @example cn-chengdu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the IP address pool belongs.
     *
     * @example rg-acfmxazb4pcdvf****
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
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'description'          => 'Description',
        'dryRun'               => 'DryRun',
        'isp'                  => 'Isp',
        'name'                 => 'Name',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePublicIpAddressPoolRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
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

        return $model;
    }
}
