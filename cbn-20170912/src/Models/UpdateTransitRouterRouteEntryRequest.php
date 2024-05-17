<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class UpdateTransitRouterRouteEntryRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** is different for each request.
     * @example 02fb3da4-130e-11e9-8e44-001****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to perform a dry run. Default values:
     *
     *   **false** (default): performs a dry run and sends the request.
     *   **true**: performs a dry run. The system checks the required parameters and request syntax. If the request fails the dry run, an error message is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The new description of the route.
     *
     * The description must be 1 to 256 characters in length, and cannot start with http:// or https://. You can also leave this parameter empty.
     * @example testdesc
     *
     * @var string
     */
    public $transitRouterRouteEntryDescription;

    /**
     * @description The ID of the route.
     *
     * This parameter is required.
     * @example rte-ksssq7kto4wfdx****
     *
     * @var string
     */
    public $transitRouterRouteEntryId;

    /**
     * @description The new name of the route.
     *
     * The name must be 1 to 128 characters in length, and cannot start with http:// or https://. You can also leave this parameter empty.
     * @example testname
     *
     * @var string
     */
    public $transitRouterRouteEntryName;
    protected $_name = [
        'clientToken'                        => 'ClientToken',
        'dryRun'                             => 'DryRun',
        'ownerAccount'                       => 'OwnerAccount',
        'ownerId'                            => 'OwnerId',
        'resourceOwnerAccount'               => 'ResourceOwnerAccount',
        'resourceOwnerId'                    => 'ResourceOwnerId',
        'transitRouterRouteEntryDescription' => 'TransitRouterRouteEntryDescription',
        'transitRouterRouteEntryId'          => 'TransitRouterRouteEntryId',
        'transitRouterRouteEntryName'        => 'TransitRouterRouteEntryName',
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
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->transitRouterRouteEntryDescription) {
            $res['TransitRouterRouteEntryDescription'] = $this->transitRouterRouteEntryDescription;
        }
        if (null !== $this->transitRouterRouteEntryId) {
            $res['TransitRouterRouteEntryId'] = $this->transitRouterRouteEntryId;
        }
        if (null !== $this->transitRouterRouteEntryName) {
            $res['TransitRouterRouteEntryName'] = $this->transitRouterRouteEntryName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTransitRouterRouteEntryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['TransitRouterRouteEntryDescription'])) {
            $model->transitRouterRouteEntryDescription = $map['TransitRouterRouteEntryDescription'];
        }
        if (isset($map['TransitRouterRouteEntryId'])) {
            $model->transitRouterRouteEntryId = $map['TransitRouterRouteEntryId'];
        }
        if (isset($map['TransitRouterRouteEntryName'])) {
            $model->transitRouterRouteEntryName = $map['TransitRouterRouteEntryName'];
        }

        return $model;
    }
}
