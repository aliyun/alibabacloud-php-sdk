<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class RegisterTransitRouterMulticastGroupSourcesRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * >  If you do not set this parameter, ClientToken is set to the value of RequestId. The value of RequestId for each API request may be different.
     * @example 123e4567-e89b-12d3-a456-4266****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether only to check the request. Valid values:
     *
     *   **true**: prechecks the request but does not create the multicast source. The system checks the required parameters, the request format, and the service limits. If the request fails to pass the precheck, an error message is returned. If the request passes the precheck, the `DryRunOperation` error code is returned.
     *   **false** (default): sends the request. After the request passes the precheck, the multicast source is created.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The IP address of the multicast group to which the multicast source belongs. Valid values: **224.0.0.1** to **239.255.255.254**.
     *
     * If the multicast group does not exist in the multicast domain, the system automatically creates the multicast group in the multicast domain.
     * @example 239.XX.XX.2
     *
     * @var string
     */
    public $groupIpAddress;

    /**
     * @description The IDs of the ENIs.
     *
     * >  This parameter is required.
     * @var string[]
     */
    public $networkInterfaceIds;

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
     * @description The ID of the multicast domain to which the multicast source belongs.
     *
     * @example tr-mcast-domain-5mjb5gjb6dgu98****
     *
     * @var string
     */
    public $transitRouterMulticastDomainId;

    /**
     * @description The ID of the VPC to which the ENI belongs.
     *
     *   If the ENI belongs to the current Alibaba Cloud account, ignore this parameter.
     *   If the ENI belongs to a different Alibaba Cloud account, you must set this parameter.
     *
     * @example vpc-wz9fusm6zq8uy7cfa****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'clientToken'                    => 'ClientToken',
        'dryRun'                         => 'DryRun',
        'groupIpAddress'                 => 'GroupIpAddress',
        'networkInterfaceIds'            => 'NetworkInterfaceIds',
        'ownerAccount'                   => 'OwnerAccount',
        'ownerId'                        => 'OwnerId',
        'resourceOwnerAccount'           => 'ResourceOwnerAccount',
        'resourceOwnerId'                => 'ResourceOwnerId',
        'transitRouterMulticastDomainId' => 'TransitRouterMulticastDomainId',
        'vpcId'                          => 'VpcId',
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
        if (null !== $this->groupIpAddress) {
            $res['GroupIpAddress'] = $this->groupIpAddress;
        }
        if (null !== $this->networkInterfaceIds) {
            $res['NetworkInterfaceIds'] = $this->networkInterfaceIds;
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
        if (null !== $this->transitRouterMulticastDomainId) {
            $res['TransitRouterMulticastDomainId'] = $this->transitRouterMulticastDomainId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegisterTransitRouterMulticastGroupSourcesRequest
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
        if (isset($map['GroupIpAddress'])) {
            $model->groupIpAddress = $map['GroupIpAddress'];
        }
        if (isset($map['NetworkInterfaceIds'])) {
            if (!empty($map['NetworkInterfaceIds'])) {
                $model->networkInterfaceIds = $map['NetworkInterfaceIds'];
            }
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
        if (isset($map['TransitRouterMulticastDomainId'])) {
            $model->transitRouterMulticastDomainId = $map['TransitRouterMulticastDomainId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
