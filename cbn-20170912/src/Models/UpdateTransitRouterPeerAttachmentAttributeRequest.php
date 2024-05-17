<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class UpdateTransitRouterPeerAttachmentAttributeRequest extends Model
{
    /**
     * @description Specifies whether to enable the local Enterprise Edition transit router to automatically advertise the routes of the inter-region connection to the peer transit router. Valid values:
     *
     *   **false** (default): no
     *   **true**: yes
     *
     * @example false
     *
     * @var bool
     */
    public $autoPublishRouteEnabled;

    /**
     * @description The bandwidth value of the inter-region connection. Unit: Mbit/s.
     *
     *   This parameter specifies the maximum bandwidth value for the inter-region connection if you set **BandwidthType** to **BandwidthPackage**.
     *   This parameter specifies the bandwidth throttling threshold for the inter-region connection if you set **BandwidthType** to **DataTransfer**.
     *
     * @example 2
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The bandwidth allocation method. Valid values:
     *
     *   **BandwidthPackage**: allocates bandwidth from a bandwidth plan.
     *   **DataTransfer**: bandwidth is billed based on the pay-by-data-transfer metering method.
     *
     * @example BandwidthPackage
     *
     * @var string
     */
    public $bandwidthType;

    /**
     * @description The ID of the bandwidth plan that is used to allocate bandwidth to the inter-region connection.
     *
     * >  If you set **BandwidthType** to **DataTransfer**, you do not need to set this parameter.
     * @example cenbwp-3xrxupouolw5ou****
     *
     * @var string
     */
    public $cenBandwidthPackageId;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * >  If you do not set this parameter, **ClientToken** is set to the value of **RequestId**. The value of **RequestId** for each API request may be different.
     * @example 02fb3da4-130e-11e9-8e44-001****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The default line type.
     *
     * Platinum is supported only when BandwidthType is set to DataTransfer.
     * @example Gold
     *
     * @var string
     */
    public $defaultLinkType;

    /**
     * @description Specifies whether to perform a dry run to check information such as the permissions and the instance status. Default values:
     *
     *   **false** (default): performs a dry run and sends the request.
     *   **true**: performs a dry run. The system checks the required parameters and request syntax. If the request fails the dry run, an error message is returned. If the request passes the dry run, the system returns the ID of the request.
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
     * @description The new description of the inter-region connection.
     *
     * This parameter is optional. If you enter a description, it must be 1 to 256 characters in length, and cannot start with http:// or https://.
     * @example testdesc
     *
     * @var string
     */
    public $transitRouterAttachmentDescription;

    /**
     * @description The ID of the inter-region connection.
     *
     * This parameter is required.
     * @example tr-attach-ft94dcrbc3e5taun3x
     *
     * @var string
     */
    public $transitRouterAttachmentId;

    /**
     * @description The new name of the inter-region connection.
     *
     * The name can be empty or 1 to 128 characters in length, and cannot start with http:// or https://.
     * @example testname
     *
     * @var string
     */
    public $transitRouterAttachmentName;
    protected $_name = [
        'autoPublishRouteEnabled'            => 'AutoPublishRouteEnabled',
        'bandwidth'                          => 'Bandwidth',
        'bandwidthType'                      => 'BandwidthType',
        'cenBandwidthPackageId'              => 'CenBandwidthPackageId',
        'clientToken'                        => 'ClientToken',
        'defaultLinkType'                    => 'DefaultLinkType',
        'dryRun'                             => 'DryRun',
        'ownerAccount'                       => 'OwnerAccount',
        'ownerId'                            => 'OwnerId',
        'resourceOwnerAccount'               => 'ResourceOwnerAccount',
        'resourceOwnerId'                    => 'ResourceOwnerId',
        'transitRouterAttachmentDescription' => 'TransitRouterAttachmentDescription',
        'transitRouterAttachmentId'          => 'TransitRouterAttachmentId',
        'transitRouterAttachmentName'        => 'TransitRouterAttachmentName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPublishRouteEnabled) {
            $res['AutoPublishRouteEnabled'] = $this->autoPublishRouteEnabled;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->bandwidthType) {
            $res['BandwidthType'] = $this->bandwidthType;
        }
        if (null !== $this->cenBandwidthPackageId) {
            $res['CenBandwidthPackageId'] = $this->cenBandwidthPackageId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->defaultLinkType) {
            $res['DefaultLinkType'] = $this->defaultLinkType;
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
        if (null !== $this->transitRouterAttachmentDescription) {
            $res['TransitRouterAttachmentDescription'] = $this->transitRouterAttachmentDescription;
        }
        if (null !== $this->transitRouterAttachmentId) {
            $res['TransitRouterAttachmentId'] = $this->transitRouterAttachmentId;
        }
        if (null !== $this->transitRouterAttachmentName) {
            $res['TransitRouterAttachmentName'] = $this->transitRouterAttachmentName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTransitRouterPeerAttachmentAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPublishRouteEnabled'])) {
            $model->autoPublishRouteEnabled = $map['AutoPublishRouteEnabled'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['BandwidthType'])) {
            $model->bandwidthType = $map['BandwidthType'];
        }
        if (isset($map['CenBandwidthPackageId'])) {
            $model->cenBandwidthPackageId = $map['CenBandwidthPackageId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DefaultLinkType'])) {
            $model->defaultLinkType = $map['DefaultLinkType'];
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
        if (isset($map['TransitRouterAttachmentDescription'])) {
            $model->transitRouterAttachmentDescription = $map['TransitRouterAttachmentDescription'];
        }
        if (isset($map['TransitRouterAttachmentId'])) {
            $model->transitRouterAttachmentId = $map['TransitRouterAttachmentId'];
        }
        if (isset($map['TransitRouterAttachmentName'])) {
            $model->transitRouterAttachmentName = $map['TransitRouterAttachmentName'];
        }

        return $model;
    }
}
