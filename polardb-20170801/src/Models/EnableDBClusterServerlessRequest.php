<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class EnableDBClusterServerlessRequest extends Model
{
    /**
     * @example pc-**************
     *
     * @var string
     */
    public $DBClusterId;

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
     * @example 1
     *
     * @var string
     */
    public $scaleApRoNumMax;

    /**
     * @example 1
     *
     * @var string
     */
    public $scaleApRoNumMin;

    /**
     * @example 2
     *
     * @var string
     */
    public $scaleMax;

    /**
     * @example 1
     *
     * @var string
     */
    public $scaleMin;

    /**
     * @example 2
     *
     * @var string
     */
    public $scaleRoNumMax;

    /**
     * @example 1
     *
     * @var string
     */
    public $scaleRoNumMin;
    protected $_name = [
        'DBClusterId'          => 'DBClusterId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'scaleApRoNumMax'      => 'ScaleApRoNumMax',
        'scaleApRoNumMin'      => 'ScaleApRoNumMin',
        'scaleMax'             => 'ScaleMax',
        'scaleMin'             => 'ScaleMin',
        'scaleRoNumMax'        => 'ScaleRoNumMax',
        'scaleRoNumMin'        => 'ScaleRoNumMin',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
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
        if (null !== $this->scaleApRoNumMax) {
            $res['ScaleApRoNumMax'] = $this->scaleApRoNumMax;
        }
        if (null !== $this->scaleApRoNumMin) {
            $res['ScaleApRoNumMin'] = $this->scaleApRoNumMin;
        }
        if (null !== $this->scaleMax) {
            $res['ScaleMax'] = $this->scaleMax;
        }
        if (null !== $this->scaleMin) {
            $res['ScaleMin'] = $this->scaleMin;
        }
        if (null !== $this->scaleRoNumMax) {
            $res['ScaleRoNumMax'] = $this->scaleRoNumMax;
        }
        if (null !== $this->scaleRoNumMin) {
            $res['ScaleRoNumMin'] = $this->scaleRoNumMin;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableDBClusterServerlessRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
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
        if (isset($map['ScaleApRoNumMax'])) {
            $model->scaleApRoNumMax = $map['ScaleApRoNumMax'];
        }
        if (isset($map['ScaleApRoNumMin'])) {
            $model->scaleApRoNumMin = $map['ScaleApRoNumMin'];
        }
        if (isset($map['ScaleMax'])) {
            $model->scaleMax = $map['ScaleMax'];
        }
        if (isset($map['ScaleMin'])) {
            $model->scaleMin = $map['ScaleMin'];
        }
        if (isset($map['ScaleRoNumMax'])) {
            $model->scaleRoNumMax = $map['ScaleRoNumMax'];
        }
        if (isset($map['ScaleRoNumMin'])) {
            $model->scaleRoNumMin = $map['ScaleRoNumMin'];
        }

        return $model;
    }
}
