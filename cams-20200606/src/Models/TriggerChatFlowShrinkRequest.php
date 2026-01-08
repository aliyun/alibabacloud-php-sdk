<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Dara\Model;

class TriggerChatFlowShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $claimTimeMillis;

    /**
     * @var string
     */
    public $dataShrink;

    /**
     * @var int
     */
    public $discardTimeMillis;

    /**
     * @var string
     */
    public $flowCode;

    /**
     * @var string
     */
    public $outId;

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
    public $uuid;
    protected $_name = [
        'claimTimeMillis' => 'ClaimTimeMillis',
        'dataShrink' => 'Data',
        'discardTimeMillis' => 'DiscardTimeMillis',
        'flowCode' => 'FlowCode',
        'outId' => 'OutId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->claimTimeMillis) {
            $res['ClaimTimeMillis'] = $this->claimTimeMillis;
        }

        if (null !== $this->dataShrink) {
            $res['Data'] = $this->dataShrink;
        }

        if (null !== $this->discardTimeMillis) {
            $res['DiscardTimeMillis'] = $this->discardTimeMillis;
        }

        if (null !== $this->flowCode) {
            $res['FlowCode'] = $this->flowCode;
        }

        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
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

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['ClaimTimeMillis'])) {
            $model->claimTimeMillis = $map['ClaimTimeMillis'];
        }

        if (isset($map['Data'])) {
            $model->dataShrink = $map['Data'];
        }

        if (isset($map['DiscardTimeMillis'])) {
            $model->discardTimeMillis = $map['DiscardTimeMillis'];
        }

        if (isset($map['FlowCode'])) {
            $model->flowCode = $map['FlowCode'];
        }

        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
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

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
