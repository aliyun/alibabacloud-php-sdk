<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypls\V20170830\Models;

use AlibabaCloud\Tea\Model;

class TestTtsRingToneRequest extends Model
{
    /**
     * @var string
     */
    public $billId;

    /**
     * @var int
     */
    public $ownerId;

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
    public $tts;

    /**
     * @var string
     */
    public $voiceSpeed;

    /**
     * @var string
     */
    public $voiceStyle;

    /**
     * @var string
     */
    public $voiceType;

    /**
     * @var string
     */
    public $voiceVolume;
    protected $_name = [
        'billId'               => 'BillId',
        'ownerId'              => 'OwnerId',
        'prodCode'             => 'ProdCode',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'tts'                  => 'Tts',
        'voiceSpeed'           => 'VoiceSpeed',
        'voiceStyle'           => 'VoiceStyle',
        'voiceType'            => 'VoiceType',
        'voiceVolume'          => 'VoiceVolume',
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (null !== $this->tts) {
            $res['Tts'] = $this->tts;
        }
        if (null !== $this->voiceSpeed) {
            $res['VoiceSpeed'] = $this->voiceSpeed;
        }
        if (null !== $this->voiceStyle) {
            $res['VoiceStyle'] = $this->voiceStyle;
        }
        if (null !== $this->voiceType) {
            $res['VoiceType'] = $this->voiceType;
        }
        if (null !== $this->voiceVolume) {
            $res['VoiceVolume'] = $this->voiceVolume;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TestTtsRingToneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillId'])) {
            $model->billId = $map['BillId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
        if (isset($map['Tts'])) {
            $model->tts = $map['Tts'];
        }
        if (isset($map['VoiceSpeed'])) {
            $model->voiceSpeed = $map['VoiceSpeed'];
        }
        if (isset($map['VoiceStyle'])) {
            $model->voiceStyle = $map['VoiceStyle'];
        }
        if (isset($map['VoiceType'])) {
            $model->voiceType = $map['VoiceType'];
        }
        if (isset($map['VoiceVolume'])) {
            $model->voiceVolume = $map['VoiceVolume'];
        }

        return $model;
    }
}
