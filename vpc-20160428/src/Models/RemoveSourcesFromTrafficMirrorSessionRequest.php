<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;

class RemoveSourcesFromTrafficMirrorSessionRequest extends Model
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
    public $trafficMirrorSessionId;

    /**
     * @var string[]
     */
    public $trafficMirrorSourceIds;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'trafficMirrorSessionId' => 'TrafficMirrorSessionId',
        'trafficMirrorSourceIds' => 'TrafficMirrorSourceIds',
    ];

    public function validate()
    {
        if (\is_array($this->trafficMirrorSourceIds)) {
            Model::validateArray($this->trafficMirrorSourceIds);
        }
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

        if (null !== $this->trafficMirrorSessionId) {
            $res['TrafficMirrorSessionId'] = $this->trafficMirrorSessionId;
        }

        if (null !== $this->trafficMirrorSourceIds) {
            if (\is_array($this->trafficMirrorSourceIds)) {
                $res['TrafficMirrorSourceIds'] = [];
                $n1 = 0;
                foreach ($this->trafficMirrorSourceIds as $item1) {
                    $res['TrafficMirrorSourceIds'][$n1++] = $item1;
                }
            }
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

        if (isset($map['TrafficMirrorSessionId'])) {
            $model->trafficMirrorSessionId = $map['TrafficMirrorSessionId'];
        }

        if (isset($map['TrafficMirrorSourceIds'])) {
            if (!empty($map['TrafficMirrorSourceIds'])) {
                $model->trafficMirrorSourceIds = [];
                $n1 = 0;
                foreach ($map['TrafficMirrorSourceIds'] as $item1) {
                    $model->trafficMirrorSourceIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
