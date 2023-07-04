<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateVbrHaRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * The client token must be unique among different requests. It can contain only ASCII characters and cannot exceed 64 characters in length.
     * @example CBCE910E-D396-4944-8****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the VBR failover group.
     *
     * The description must be 2 to 256 characters in length. It must start with a letter and cannot start with `http://`or `https://`.
     * @example VBRHa
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to precheck the request. Valid values:
     *
     *   **true**: prechecks the request without performing the operation. The system checks the request format, instance status, and whether the required parameters are specified. An error message is returned if the request fails the precheck. If the request passes the precheck, `DRYRUN.SUCCESS` is returned.
     *   **false**: prechecks the request. After the request passes the precheck, the operation is performed.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The name of the VBR failover group.
     *
     * @example VBRHa
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
     * @description The ID of the other VBR in the VBR failover group.
     *
     * @example vbr-bp12mw1f8k3jgygk9****
     *
     * @var string
     */
    public $peerVbrId;

    /**
     * @description The ID of the region where the VBR is deployed.
     *
     * @example cn-hangzhou
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
     * @description The ID of the VBR.
     *
     * @example vbr-bp1jcg5cmxjbl9xgc****
     *
     * @var string
     */
    public $vbrId;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'description'          => 'Description',
        'dryRun'               => 'DryRun',
        'name'                 => 'Name',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'peerVbrId'            => 'PeerVbrId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'vbrId'                => 'VbrId',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->peerVbrId) {
            $res['PeerVbrId'] = $this->peerVbrId;
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
        if (null !== $this->vbrId) {
            $res['VbrId'] = $this->vbrId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVbrHaRequest
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PeerVbrId'])) {
            $model->peerVbrId = $map['PeerVbrId'];
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
        if (isset($map['VbrId'])) {
            $model->vbrId = $map['VbrId'];
        }

        return $model;
    }
}
