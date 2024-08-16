<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouterShrinkRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateTransitRouterShrinkRequest extends Model
{
    /**
     * @description The ID of the Cloud Enterprise Network (CEN) instance.
     *
     * This parameter is required.
     * @example cen-j3jzhw1zpau2km****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * >  If you do not set this parameter, the system automatically uses **RequestId** as **ClientToken**. The value of **RequestId** of each API request is different.
     * @example 02fb3da4-130e-11e9-8e44-001****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to check the request without performing the operation. Check items include permissions and the status of the specified cloud resources. Valid values:
     *
     *   **false** (default): sends the request. If the request passes the check, an Enterprise Edition transit router is created.
     *   **true**: checks the request but does not create the Enterprise Edition transit router. If you use this value, the system checks whether the required parameters are set, and whether the request syntax is valid. If the request fails the check, an error message is returned. If the request passes the check, the `DryRunOperation` error code is returned.
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
     * @description The ID of the region where the Enterprise Edition transit router is deployed.
     *
     * This parameter is required.
     * @example cn-zhangjiakou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description Specifies whether to enable the multicast feature for the Enterprise Edition transit router. Valid values:
     *
     *   **false** (default): no
     *   **true**: yes
     *
     * The multicast feature is supported only in specific regions. You can call [ListTransitRouterAvailableResource](https://help.aliyun.com/document_detail/261356.html) to query the regions that support multicast.
     * @example false
     *
     * @var bool
     */
    public $supportMulticast;

    /**
     * @description The tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The CIDR blocks to be added to the transit router.
     *
     * @var string
     */
    public $transitRouterCidrListShrink;

    /**
     * @description The description of the Enterprise Edition transit router instance.
     *
     * The description must be 1 to 256 characters in length, and cannot start with http:// or https://. You can also leave this parameter empty.
     * @example testdesc
     *
     * @var string
     */
    public $transitRouterDescription;

    /**
     * @description The name of the Enterprise Edition transit router.
     *
     * The name must be 1 to 128 characters in length, and cannot start with http:// or https://. You can also leave this parameter empty.
     * @example testname
     *
     * @var string
     */
    public $transitRouterName;
    protected $_name = [
        'cenId'                       => 'CenId',
        'clientToken'                 => 'ClientToken',
        'dryRun'                      => 'DryRun',
        'ownerAccount'                => 'OwnerAccount',
        'ownerId'                     => 'OwnerId',
        'regionId'                    => 'RegionId',
        'resourceOwnerAccount'        => 'ResourceOwnerAccount',
        'resourceOwnerId'             => 'ResourceOwnerId',
        'supportMulticast'            => 'SupportMulticast',
        'tag'                         => 'Tag',
        'transitRouterCidrListShrink' => 'TransitRouterCidrList',
        'transitRouterDescription'    => 'TransitRouterDescription',
        'transitRouterName'           => 'TransitRouterName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->supportMulticast) {
            $res['SupportMulticast'] = $this->supportMulticast;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->transitRouterCidrListShrink) {
            $res['TransitRouterCidrList'] = $this->transitRouterCidrListShrink;
        }
        if (null !== $this->transitRouterDescription) {
            $res['TransitRouterDescription'] = $this->transitRouterDescription;
        }
        if (null !== $this->transitRouterName) {
            $res['TransitRouterName'] = $this->transitRouterName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTransitRouterShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SupportMulticast'])) {
            $model->supportMulticast = $map['SupportMulticast'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TransitRouterCidrList'])) {
            $model->transitRouterCidrListShrink = $map['TransitRouterCidrList'];
        }
        if (isset($map['TransitRouterDescription'])) {
            $model->transitRouterDescription = $map['TransitRouterDescription'];
        }
        if (isset($map['TransitRouterName'])) {
            $model->transitRouterName = $map['TransitRouterName'];
        }

        return $model;
    }
}
