<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListVSwitchCidrReservationsRequest\tags;

class ListVSwitchCidrReservationsRequest extends Model
{
    /**
     * @var string
     */
    public $ipVersion;
    /**
     * @var int
     */
    public $maxResults;
    /**
     * @var string
     */
    public $nextToken;
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
     * @var tags[]
     */
    public $tags;
    /**
     * @var string[]
     */
    public $vSwitchCidrReservationIds;
    /**
     * @var string
     */
    public $vSwitchCidrReservationType;
    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'ipVersion'                  => 'IpVersion',
        'maxResults'                 => 'MaxResults',
        'nextToken'                  => 'NextToken',
        'ownerAccount'               => 'OwnerAccount',
        'ownerId'                    => 'OwnerId',
        'regionId'                   => 'RegionId',
        'resourceOwnerAccount'       => 'ResourceOwnerAccount',
        'resourceOwnerId'            => 'ResourceOwnerId',
        'tags'                       => 'Tags',
        'vSwitchCidrReservationIds'  => 'VSwitchCidrReservationIds',
        'vSwitchCidrReservationType' => 'VSwitchCidrReservationType',
        'vSwitchId'                  => 'VSwitchId',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (\is_array($this->vSwitchCidrReservationIds)) {
            Model::validateArray($this->vSwitchCidrReservationIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->vSwitchCidrReservationIds) {
            if (\is_array($this->vSwitchCidrReservationIds)) {
                $res['VSwitchCidrReservationIds'] = [];
                $n1                               = 0;
                foreach ($this->vSwitchCidrReservationIds as $item1) {
                    $res['VSwitchCidrReservationIds'][$n1++] = $item1;
                }
            }
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
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['VSwitchCidrReservationIds'])) {
            if (!empty($map['VSwitchCidrReservationIds'])) {
                $model->vSwitchCidrReservationIds = [];
                $n1                               = 0;
                foreach ($map['VSwitchCidrReservationIds'] as $item1) {
                    $model->vSwitchCidrReservationIds[$n1++] = $item1;
                }
            }
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
