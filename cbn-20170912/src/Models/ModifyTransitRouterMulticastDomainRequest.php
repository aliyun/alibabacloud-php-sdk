<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class ModifyTransitRouterMulticastDomainRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     * @example 123e4567-e89b-12d3-a456-4266****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to perform a dry run, without performing the actual request. Valid values:
     *
     *   **true**: performs only a dry run. The system checks the request for potential issues, including missing parameter values, incorrect request syntax, and service limits. If the request fails the dry run, an error code is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *   **false** (default): performs a dry run and performs the actual request.
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
     * @description The new description of the multicast domain.
     *
     * This parameter is optional. If you enter a description, it must be 1 to 256 characters in length and cannot start with http:// or https://.
     * @example desctest
     *
     * @var string
     */
    public $transitRouterMulticastDomainDescription;

    /**
     * @description The ID of the multicast domain.
     *
     * This parameter is required.
     * @example tr-mcast-domain-40cwj0rgzgdtam****
     *
     * @var string
     */
    public $transitRouterMulticastDomainId;

    /**
     * @description The new name of the multicast domain.
     *
     * The name can be empty or 1 to 128 characters in length, and cannot start with http:// or https://.
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
