<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class UpdateAxbBindFixedLineShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $anucode;

    /**
     * @var string
     */
    public $anucodecalled;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $expiration;

    /**
     * @var string
     */
    public $extraShrink;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $remark;

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
    public $subId;

    /**
     * @var string
     */
    public $subts;

    /**
     * @var string
     */
    public $TAnucodeConnect;

    /**
     * @var string
     */
    public $telA;

    /**
     * @var string
     */
    public $telB;

    /**
     * @var string
     */
    public $ts;
    protected $_name = [
        'anucode' => 'Anucode',
        'anucodecalled' => 'Anucodecalled',
        'appId' => 'AppId',
        'expiration' => 'Expiration',
        'extraShrink' => 'Extra',
        'orderId' => 'OrderId',
        'ownerId' => 'OwnerId',
        'remark' => 'Remark',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'subId' => 'SubId',
        'subts' => 'Subts',
        'TAnucodeConnect' => 'TAnucodeConnect',
        'telA' => 'TelA',
        'telB' => 'TelB',
        'ts' => 'Ts',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->anucode) {
            $res['Anucode'] = $this->anucode;
        }

        if (null !== $this->anucodecalled) {
            $res['Anucodecalled'] = $this->anucodecalled;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->expiration) {
            $res['Expiration'] = $this->expiration;
        }

        if (null !== $this->extraShrink) {
            $res['Extra'] = $this->extraShrink;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->subId) {
            $res['SubId'] = $this->subId;
        }

        if (null !== $this->subts) {
            $res['Subts'] = $this->subts;
        }

        if (null !== $this->TAnucodeConnect) {
            $res['TAnucodeConnect'] = $this->TAnucodeConnect;
        }

        if (null !== $this->telA) {
            $res['TelA'] = $this->telA;
        }

        if (null !== $this->telB) {
            $res['TelB'] = $this->telB;
        }

        if (null !== $this->ts) {
            $res['Ts'] = $this->ts;
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
        if (isset($map['Anucode'])) {
            $model->anucode = $map['Anucode'];
        }

        if (isset($map['Anucodecalled'])) {
            $model->anucodecalled = $map['Anucodecalled'];
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['Expiration'])) {
            $model->expiration = $map['Expiration'];
        }

        if (isset($map['Extra'])) {
            $model->extraShrink = $map['Extra'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['SubId'])) {
            $model->subId = $map['SubId'];
        }

        if (isset($map['Subts'])) {
            $model->subts = $map['Subts'];
        }

        if (isset($map['TAnucodeConnect'])) {
            $model->TAnucodeConnect = $map['TAnucodeConnect'];
        }

        if (isset($map['TelA'])) {
            $model->telA = $map['TelA'];
        }

        if (isset($map['TelB'])) {
            $model->telB = $map['TelB'];
        }

        if (isset($map['Ts'])) {
            $model->ts = $map['Ts'];
        }

        return $model;
    }
}
