<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypls\V20170830\Models;

use AlibabaCloud\Tea\Model;

class CreateRingToneRequest extends Model
{
    /**
     * @var string
     */
    public $billId;

    /**
     * @var string
     */
    public $fileKey;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $playType;

    /**
     * @var string
     */
    public $prodCode;

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
    public $ringName;

    /**
     * @var string
     */
    public $tts;
    protected $_name = [
        'billId'               => 'BillId',
        'fileKey'              => 'FileKey',
        'ownerId'              => 'OwnerId',
        'playType'             => 'PlayType',
        'prodCode'             => 'ProdCode',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'ringName'             => 'RingName',
        'tts'                  => 'Tts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billId) {
            $res['BillId'] = $this->billId;
        }
        if (null !== $this->fileKey) {
            $res['FileKey'] = $this->fileKey;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->playType) {
            $res['PlayType'] = $this->playType;
        }
        if (null !== $this->prodCode) {
            $res['ProdCode'] = $this->prodCode;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->ringName) {
            $res['RingName'] = $this->ringName;
        }
        if (null !== $this->tts) {
            $res['Tts'] = $this->tts;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRingToneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillId'])) {
            $model->billId = $map['BillId'];
        }
        if (isset($map['FileKey'])) {
            $model->fileKey = $map['FileKey'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PlayType'])) {
            $model->playType = $map['PlayType'];
        }
        if (isset($map['ProdCode'])) {
            $model->prodCode = $map['ProdCode'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RingName'])) {
            $model->ringName = $map['RingName'];
        }
        if (isset($map['Tts'])) {
            $model->tts = $map['Tts'];
        }

        return $model;
    }
}
