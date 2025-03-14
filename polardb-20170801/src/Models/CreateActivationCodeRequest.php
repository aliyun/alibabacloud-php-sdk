<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class CreateActivationCodeRequest extends Model
{
    /**
     * @description The Alibaba Cloud order ID (including the virtual order ID).
     *
     * This parameter is required.
     *
     * @example 2233****445566
     *
     * @var string
     */
    public $aliyunOrderId;

    /**
     * @description The description of the activation code.
     *
     * @example testCode
     *
     * @var string
     */
    public $description;

    /**
     * @description The MAC address.
     *
     * This parameter is required.
     *
     * @example 12:34:56:78:98:00
     *
     * @var string
     */
    public $macAddress;

    /**
     * @description The name of the activation code. The name can contain only letters, digits, underscores (_), and hyphens (-). The activation code file downloaded from the console is named based on this name.
     *
     * This parameter is required.
     *
     * @example testName
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
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The system identifier of the database. This parameter is required if you set AllowEmptySystemIdentifier to false.
     *
     * @example 1234567890123456
     *
     * @var string
     */
    public $systemIdentifier;
    protected $_name = [
        'aliyunOrderId' => 'AliyunOrderId',
        'description' => 'Description',
        'macAddress' => 'MacAddress',
        'name' => 'Name',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'systemIdentifier' => 'SystemIdentifier',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunOrderId) {
            $res['AliyunOrderId'] = $this->aliyunOrderId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->macAddress) {
            $res['MacAddress'] = $this->macAddress;
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
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->systemIdentifier) {
            $res['SystemIdentifier'] = $this->systemIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateActivationCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunOrderId'])) {
            $model->aliyunOrderId = $map['AliyunOrderId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['MacAddress'])) {
            $model->macAddress = $map['MacAddress'];
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
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SystemIdentifier'])) {
            $model->systemIdentifier = $map['SystemIdentifier'];
        }

        return $model;
    }
}
