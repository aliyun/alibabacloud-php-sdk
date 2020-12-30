<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyiotapi\V20171111\Models;

use AlibabaCloud\Tea\Model;

class DoIotChgBindOrUnBindRequest extends Model
{
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
     * @var string
     */
    public $iccid;

    /**
     * @var string
     */
    public $imei;

    /**
     * @var string
     */
    public $newImei;

    /**
     * @var string
     */
    public $opionType;

    /**
     * @var string
     */
    public $midChannelId;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'iccid'                => 'Iccid',
        'imei'                 => 'Imei',
        'newImei'              => 'NewImei',
        'opionType'            => 'OpionType',
        'midChannelId'         => 'MidChannelId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->iccid) {
            $res['Iccid'] = $this->iccid;
        }
        if (null !== $this->imei) {
            $res['Imei'] = $this->imei;
        }
        if (null !== $this->newImei) {
            $res['NewImei'] = $this->newImei;
        }
        if (null !== $this->opionType) {
            $res['OpionType'] = $this->opionType;
        }
        if (null !== $this->midChannelId) {
            $res['MidChannelId'] = $this->midChannelId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DoIotChgBindOrUnBindRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Iccid'])) {
            $model->iccid = $map['Iccid'];
        }
        if (isset($map['Imei'])) {
            $model->imei = $map['Imei'];
        }
        if (isset($map['NewImei'])) {
            $model->newImei = $map['NewImei'];
        }
        if (isset($map['OpionType'])) {
            $model->opionType = $map['OpionType'];
        }
        if (isset($map['MidChannelId'])) {
            $model->midChannelId = $map['MidChannelId'];
        }

        return $model;
    }
}
