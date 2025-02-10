<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVSwitchCidrReservationRequest\tag;

class CreateVSwitchCidrReservationRequest extends Model
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
    public $ipVersion;
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
     * @var tag[]
     */
    public $tag;
    /**
     * @var string
     */
    public $vSwitchCidrReservationCidr;
    /**
     * @var string
     */
    public $vSwitchCidrReservationDescription;
    /**
     * @var string
     */
    public $vSwitchCidrReservationMask;
    /**
     * @var string
     */
    public $vSwitchCidrReservationName;
    /**
     * @var string
     */
    public $vSwitchCidrReservationType;
    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'clientToken'                       => 'ClientToken',
        'dryRun'                            => 'DryRun',
        'ipVersion'                         => 'IpVersion',
        'ownerAccount'                      => 'OwnerAccount',
        'ownerId'                           => 'OwnerId',
        'regionId'                          => 'RegionId',
        'resourceOwnerAccount'              => 'ResourceOwnerAccount',
        'resourceOwnerId'                   => 'ResourceOwnerId',
        'tag'                               => 'Tag',
        'vSwitchCidrReservationCidr'        => 'VSwitchCidrReservationCidr',
        'vSwitchCidrReservationDescription' => 'VSwitchCidrReservationDescription',
        'vSwitchCidrReservationMask'        => 'VSwitchCidrReservationMask',
        'vSwitchCidrReservationName'        => 'VSwitchCidrReservationName',
        'vSwitchCidrReservationType'        => 'VSwitchCidrReservationType',
        'vSwitchId'                         => 'VSwitchId',
    ];

    public function validate()
    {
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
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

        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
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

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1         = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->vSwitchCidrReservationCidr) {
            $res['VSwitchCidrReservationCidr'] = $this->vSwitchCidrReservationCidr;
        }

        if (null !== $this->vSwitchCidrReservationDescription) {
            $res['VSwitchCidrReservationDescription'] = $this->vSwitchCidrReservationDescription;
        }

        if (null !== $this->vSwitchCidrReservationMask) {
            $res['VSwitchCidrReservationMask'] = $this->vSwitchCidrReservationMask;
        }

        if (null !== $this->vSwitchCidrReservationName) {
            $res['VSwitchCidrReservationName'] = $this->vSwitchCidrReservationName;
        }

        if (null !== $this->vSwitchCidrReservationType) {
            $res['VSwitchCidrReservationType'] = $this->vSwitchCidrReservationType;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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

        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
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

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1         = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        if (isset($map['VSwitchCidrReservationCidr'])) {
            $model->vSwitchCidrReservationCidr = $map['VSwitchCidrReservationCidr'];
        }

        if (isset($map['VSwitchCidrReservationDescription'])) {
            $model->vSwitchCidrReservationDescription = $map['VSwitchCidrReservationDescription'];
        }

        if (isset($map['VSwitchCidrReservationMask'])) {
            $model->vSwitchCidrReservationMask = $map['VSwitchCidrReservationMask'];
        }

        if (isset($map['VSwitchCidrReservationName'])) {
            $model->vSwitchCidrReservationName = $map['VSwitchCidrReservationName'];
        }

        if (isset($map['VSwitchCidrReservationType'])) {
            $model->vSwitchCidrReservationType = $map['VSwitchCidrReservationType'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
