<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;

class UpdateTrafficMirrorFilterAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
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
     * @var string
     */
    public $trafficMirrorFilterDescription;

    /**
     * @var string
     */
    public $trafficMirrorFilterId;

    /**
     * @var string
     */
    public $trafficMirrorFilterName;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'trafficMirrorFilterDescription' => 'TrafficMirrorFilterDescription',
        'trafficMirrorFilterId' => 'TrafficMirrorFilterId',
        'trafficMirrorFilterName' => 'TrafficMirrorFilterName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->trafficMirrorFilterDescription) {
            $res['TrafficMirrorFilterDescription'] = $this->trafficMirrorFilterDescription;
        }

        if (null !== $this->trafficMirrorFilterId) {
            $res['TrafficMirrorFilterId'] = $this->trafficMirrorFilterId;
        }

        if (null !== $this->trafficMirrorFilterName) {
            $res['TrafficMirrorFilterName'] = $this->trafficMirrorFilterName;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['TrafficMirrorFilterDescription'])) {
            $model->trafficMirrorFilterDescription = $map['TrafficMirrorFilterDescription'];
        }

        if (isset($map['TrafficMirrorFilterId'])) {
            $model->trafficMirrorFilterId = $map['TrafficMirrorFilterId'];
        }

        if (isset($map['TrafficMirrorFilterName'])) {
            $model->trafficMirrorFilterName = $map['TrafficMirrorFilterName'];
        }

        return $model;
    }
}
