<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateTransitRouterRouteTableRequest\routeTableOptions;
use AlibabaCloud\Tea\Model;

class UpdateTransitRouterRouteTableRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among different requests. ClientToken can contain only ASCII characters.
     *
     * >  If you do not set this parameter, **ClientToken** is set to the value of **RequestId**. The value of **RequestId** may be different for each API request.
     * @example 02fb3da4-130e-11e9-8e44-001****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to perform a dry run. Default values:
     *
     *   **false** (default): performs a dry run and sends the request.
     *   **true**: performs a dry run. The system checks the required parameters and the request syntax. If the request fails the dry run, an error message is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
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
     * @description The features of the route table.
     *
     * @var routeTableOptions
     */
    public $routeTableOptions;

    /**
     * @description The description of the route table.
     *
     * The description must be 1 to 256 characters in length, and cannot start with http:// or https://. You can also leave this parameter empty.
     * @example testdesc
     *
     * @var string
     */
    public $transitRouterRouteTableDescription;

    /**
     * @description The ID of the route table of the Enterprise Edition transit router.
     *
     * @example vtb-bp1dudbh2d5na6b50****
     *
     * @var string
     */
    public $transitRouterRouteTableId;

    /**
     * @description The name of the route table.
     *
     * The name must be 1 to 128 characters in length, and cannot start with http:// or https://. You can also leave this parameter empty.
     * @example testname
     *
     * @var string
     */
    public $transitRouterRouteTableName;
    protected $_name = [
        'clientToken'                        => 'ClientToken',
        'dryRun'                             => 'DryRun',
        'ownerAccount'                       => 'OwnerAccount',
        'ownerId'                            => 'OwnerId',
        'resourceOwnerAccount'               => 'ResourceOwnerAccount',
        'resourceOwnerId'                    => 'ResourceOwnerId',
        'routeTableOptions'                  => 'RouteTableOptions',
        'transitRouterRouteTableDescription' => 'TransitRouterRouteTableDescription',
        'transitRouterRouteTableId'          => 'TransitRouterRouteTableId',
        'transitRouterRouteTableName'        => 'TransitRouterRouteTableName',
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
        if (null !== $this->routeTableOptions) {
            $res['RouteTableOptions'] = null !== $this->routeTableOptions ? $this->routeTableOptions->toMap() : null;
        }
        if (null !== $this->transitRouterRouteTableDescription) {
            $res['TransitRouterRouteTableDescription'] = $this->transitRouterRouteTableDescription;
        }
        if (null !== $this->transitRouterRouteTableId) {
            $res['TransitRouterRouteTableId'] = $this->transitRouterRouteTableId;
        }
        if (null !== $this->transitRouterRouteTableName) {
            $res['TransitRouterRouteTableName'] = $this->transitRouterRouteTableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTransitRouterRouteTableRequest
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
        if (isset($map['RouteTableOptions'])) {
            $model->routeTableOptions = routeTableOptions::fromMap($map['RouteTableOptions']);
        }
        if (isset($map['TransitRouterRouteTableDescription'])) {
            $model->transitRouterRouteTableDescription = $map['TransitRouterRouteTableDescription'];
        }
        if (isset($map['TransitRouterRouteTableId'])) {
            $model->transitRouterRouteTableId = $map['TransitRouterRouteTableId'];
        }
        if (isset($map['TransitRouterRouteTableName'])) {
            $model->transitRouterRouteTableName = $map['TransitRouterRouteTableName'];
        }

        return $model;
    }
}
