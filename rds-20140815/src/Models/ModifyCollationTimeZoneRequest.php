<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyCollationTimeZoneRequest extends Model
{
    /**
     * @description The character set collation of the instance. Valid values:
     *
     *   **Latin1\_General_CI_AS**
     *   **Latin1\_General_CS_AS**
     *   **SQL_Latin1\_General_CP1\_CI_AS**
     *   **SQL_Latin1\_General_CP1\_CS_AS**
     *   **Chinese_PRC_CS_AS**
     *   **Chinese_PRC_BIN**
     *   **Chinese_PRC_CI_AS**
     *   **Japanese_CI_AS**
     *   **Japanese_CS_AS**
     *   **Chinese_Taiwan_Stroke_CI_AS**
     *   **Chinese_Taiwan_Stroke_CS_AS**
     *
     * By default, the system does not modify the character set collation of the instance.
     *
     * > You must specify one of the **Collation** and **Timezone** parameters.
     * @example Latin1_General_CI_AS
     *
     * @var string
     */
    public $collation;

    /**
     * @description The ID of the instance.
     *
     * @example rm-uf6wjk5xxxxxxx
     *
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
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The time zone of the instance. By default, the system does not modify the time zone.
     *
     * > You must specify one of the **Collation** and **Timezone** parameters.
     * @example China Standard Time
     *
     * @var string
     */
    public $timezone;
    protected $_name = [
        'collation'            => 'Collation',
        'DBInstanceId'         => 'DBInstanceId',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'timezone'             => 'Timezone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->collation) {
            $res['Collation'] = $this->collation;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
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
        if (null !== $this->timezone) {
            $res['Timezone'] = $this->timezone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCollationTimeZoneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Collation'])) {
            $model->collation = $map['Collation'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
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
        if (isset($map['Timezone'])) {
            $model->timezone = $map['Timezone'];
        }

        return $model;
    }
}
