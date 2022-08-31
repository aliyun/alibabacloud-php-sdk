<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyADInfoRequest extends Model
{
    /**
     * @var string
     */
    public $ADAccountName;

    /**
     * @var string
     */
    public $ADDNS;

    /**
     * @var string
     */
    public $ADPassword;

    /**
     * @var string
     */
    public $ADServerIpAddress;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $DBInstanceId;

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
    protected $_name = [
        'ADAccountName'        => 'ADAccountName',
        'ADDNS'                => 'ADDNS',
        'ADPassword'           => 'ADPassword',
        'ADServerIpAddress'    => 'ADServerIpAddress',
        'clientToken'          => 'ClientToken',
        'DBInstanceId'         => 'DBInstanceId',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ADAccountName) {
            $res['ADAccountName'] = $this->ADAccountName;
        }
        if (null !== $this->ADDNS) {
            $res['ADDNS'] = $this->ADDNS;
        }
        if (null !== $this->ADPassword) {
            $res['ADPassword'] = $this->ADPassword;
        }
        if (null !== $this->ADServerIpAddress) {
            $res['ADServerIpAddress'] = $this->ADServerIpAddress;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyADInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ADAccountName'])) {
            $model->ADAccountName = $map['ADAccountName'];
        }
        if (isset($map['ADDNS'])) {
            $model->ADDNS = $map['ADDNS'];
        }
        if (isset($map['ADPassword'])) {
            $model->ADPassword = $map['ADPassword'];
        }
        if (isset($map['ADServerIpAddress'])) {
            $model->ADServerIpAddress = $map['ADServerIpAddress'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
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

        return $model;
    }
}
