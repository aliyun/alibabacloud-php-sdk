<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class AddInboundNumberShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $applicationCode;

    /**
     * @var string
     */
    public $inboundNumbersShrink;

    /**
     * @var int
     */
    public $inboundType;

    /**
     * @var string
     */
    public $lineCode;

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
    protected $_name = [
        'applicationCode' => 'ApplicationCode',
        'inboundNumbersShrink' => 'InboundNumbers',
        'inboundType' => 'InboundType',
        'lineCode' => 'LineCode',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationCode) {
            $res['ApplicationCode'] = $this->applicationCode;
        }

        if (null !== $this->inboundNumbersShrink) {
            $res['InboundNumbers'] = $this->inboundNumbersShrink;
        }

        if (null !== $this->inboundType) {
            $res['InboundType'] = $this->inboundType;
        }

        if (null !== $this->lineCode) {
            $res['LineCode'] = $this->lineCode;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationCode'])) {
            $model->applicationCode = $map['ApplicationCode'];
        }

        if (isset($map['InboundNumbers'])) {
            $model->inboundNumbersShrink = $map['InboundNumbers'];
        }

        if (isset($map['InboundType'])) {
            $model->inboundType = $map['InboundType'];
        }

        if (isset($map['LineCode'])) {
            $model->lineCode = $map['LineCode'];
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

        return $model;
    }
}
