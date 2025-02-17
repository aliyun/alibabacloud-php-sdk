<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CopySnapshotRequest\arn;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CopySnapshotRequest\tag;

class CopySnapshotRequest extends Model
{
    /**
     * @var arn[]
     */
    public $arn;
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string
     */
    public $destinationRegionId;
    /**
     * @var string
     */
    public $destinationSnapshotDescription;
    /**
     * @var string
     */
    public $destinationSnapshotName;
    /**
     * @var string
     */
    public $destinationStorageLocationArn;
    /**
     * @var bool
     */
    public $encrypted;
    /**
     * @var string
     */
    public $KMSKeyId;
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
    public $resourceGroupId;
    /**
     * @var string
     */
    public $resourceOwnerAccount;
    /**
     * @var int
     */
    public $resourceOwnerId;
    /**
     * @var int
     */
    public $retentionDays;
    /**
     * @var string
     */
    public $snapshotId;
    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'arn'                            => 'Arn',
        'clientToken'                    => 'ClientToken',
        'destinationRegionId'            => 'DestinationRegionId',
        'destinationSnapshotDescription' => 'DestinationSnapshotDescription',
        'destinationSnapshotName'        => 'DestinationSnapshotName',
        'destinationStorageLocationArn'  => 'DestinationStorageLocationArn',
        'encrypted'                      => 'Encrypted',
        'KMSKeyId'                       => 'KMSKeyId',
        'ownerId'                        => 'OwnerId',
        'regionId'                       => 'RegionId',
        'resourceGroupId'                => 'ResourceGroupId',
        'resourceOwnerAccount'           => 'ResourceOwnerAccount',
        'resourceOwnerId'                => 'ResourceOwnerId',
        'retentionDays'                  => 'RetentionDays',
        'snapshotId'                     => 'SnapshotId',
        'tag'                            => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->arn)) {
            Model::validateArray($this->arn);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arn) {
            if (\is_array($this->arn)) {
                $res['Arn'] = [];
                $n1         = 0;
                foreach ($this->arn as $item1) {
                    $res['Arn'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->destinationRegionId) {
            $res['DestinationRegionId'] = $this->destinationRegionId;
        }

        if (null !== $this->destinationSnapshotDescription) {
            $res['DestinationSnapshotDescription'] = $this->destinationSnapshotDescription;
        }

        if (null !== $this->destinationSnapshotName) {
            $res['DestinationSnapshotName'] = $this->destinationSnapshotName;
        }

        if (null !== $this->destinationStorageLocationArn) {
            $res['DestinationStorageLocationArn'] = $this->destinationStorageLocationArn;
        }

        if (null !== $this->encrypted) {
            $res['Encrypted'] = $this->encrypted;
        }

        if (null !== $this->KMSKeyId) {
            $res['KMSKeyId'] = $this->KMSKeyId;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->retentionDays) {
            $res['RetentionDays'] = $this->retentionDays;
        }

        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Arn'])) {
            if (!empty($map['Arn'])) {
                $model->arn = [];
                $n1         = 0;
                foreach ($map['Arn'] as $item1) {
                    $model->arn[$n1++] = arn::fromMap($item1);
                }
            }
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DestinationRegionId'])) {
            $model->destinationRegionId = $map['DestinationRegionId'];
        }

        if (isset($map['DestinationSnapshotDescription'])) {
            $model->destinationSnapshotDescription = $map['DestinationSnapshotDescription'];
        }

        if (isset($map['DestinationSnapshotName'])) {
            $model->destinationSnapshotName = $map['DestinationSnapshotName'];
        }

        if (isset($map['DestinationStorageLocationArn'])) {
            $model->destinationStorageLocationArn = $map['DestinationStorageLocationArn'];
        }

        if (isset($map['Encrypted'])) {
            $model->encrypted = $map['Encrypted'];
        }

        if (isset($map['KMSKeyId'])) {
            $model->KMSKeyId = $map['KMSKeyId'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['RetentionDays'])) {
            $model->retentionDays = $map['RetentionDays'];
        }

        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
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

        return $model;
    }
}
