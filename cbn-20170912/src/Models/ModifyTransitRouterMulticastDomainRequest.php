<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class ModifyTransitRouterMulticastDomainRequest extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 123e4567-e89b-12d3-a456-4266****
     *
     * @var string
     */
    public $clientToken;

    /**
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
     * @example desctest
     *
     * @var string
     */
    public $transitRouterMulticastDomainDescription;

    /**
     * @description The operation that you want to perform. Set the value to **ModifyTransitRouterMulticastDomain**.
     *
     * @example tr-mcast-domain-40cwj0rgzgdtam****
     *
     * @var string
     */
    public $transitRouterMulticastDomainId;

    /**
     * @description Specifies whether only to precheck the request. Valid values:
     *
     *   **true**: prechecks the request but does not modify the name or description of the multicast domain. The system checks the required parameters, the request format, and the service limits. If the request fails the precheck, an error message is returned. If the request passes the precheck, the `DryRunOperation` error code is returned.
     *   **false** (default): sends the request. If the request passes the precheck, the name and description of the multicast domain are modified.
     *
     * >  This parameter is not in use.
     * @example nametest
     *
     * @var string
     */
    public $transitRouterMulticastDomainName;
    protected $_name = [
        'clientToken'                             => 'ClientToken',
        'dryRun'                                  => 'DryRun',
        'ownerAccount'                            => 'OwnerAccount',
        'ownerId'                                 => 'OwnerId',
        'resourceOwnerAccount'                    => 'ResourceOwnerAccount',
        'resourceOwnerId'                         => 'ResourceOwnerId',
        'transitRouterMulticastDomainDescription' => 'TransitRouterMulticastDomainDescription',
        'transitRouterMulticastDomainId'          => 'TransitRouterMulticastDomainId',
        'transitRouterMulticastDomainName'        => 'TransitRouterMulticastDomainName',
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
        if (null !== $this->transitRouterMulticastDomainDescription) {
            $res['TransitRouterMulticastDomainDescription'] = $this->transitRouterMulticastDomainDescription;
        }
        if (null !== $this->transitRouterMulticastDomainId) {
            $res['TransitRouterMulticastDomainId'] = $this->transitRouterMulticastDomainId;
        }
        if (null !== $this->transitRouterMulticastDomainName) {
            $res['TransitRouterMulticastDomainName'] = $this->transitRouterMulticastDomainName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyTransitRouterMulticastDomainRequest
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
        if (isset($map['TransitRouterMulticastDomainDescription'])) {
            $model->transitRouterMulticastDomainDescription = $map['TransitRouterMulticastDomainDescription'];
        }
        if (isset($map['TransitRouterMulticastDomainId'])) {
            $model->transitRouterMulticastDomainId = $map['TransitRouterMulticastDomainId'];
        }
        if (isset($map['TransitRouterMulticastDomainName'])) {
            $model->transitRouterMulticastDomainName = $map['TransitRouterMulticastDomainName'];
        }

        return $model;
    }
}
