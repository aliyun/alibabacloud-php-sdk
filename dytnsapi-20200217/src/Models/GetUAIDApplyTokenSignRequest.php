<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models;

use AlibabaCloud\Tea\Model;

class GetUAIDApplyTokenSignRequest extends Model
{
    /**
     * @example HwD97InG
     *
     * @var string
     */
    public $authCode;

    /**
     * @example CM
     *
     * @var string
     */
    public $carrier;

    /**
     * @example 30300
     *
     * @var string
     */
    public $clientType;

    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $format;

    /**
     * @example b8b5b3a*******0b9893484fdf412c99
     *
     * @var string
     */
    public $outId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @example 955EC1A869852EA8BC66F********D7C6E92017BBD5B001C736EFEAFB775C232
     *
     * @var string
     */
    public $paramKey;

    /**
     * @example B2F0D4CD7A216D16CE2AF4BBC********29A454FDDD991F919106C12CB89ABA8
     *
     * @var string
     */
    public $paramStr;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @example 20121227180001165
     *
     * @var string
     */
    public $time;
    protected $_name = [
        'authCode'             => 'AuthCode',
        'carrier'              => 'Carrier',
        'clientType'           => 'ClientType',
        'format'               => 'Format',
        'outId'                => 'OutId',
        'ownerId'              => 'OwnerId',
        'paramKey'             => 'ParamKey',
        'paramStr'             => 'ParamStr',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'time'                 => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authCode) {
            $res['AuthCode'] = $this->authCode;
        }
        if (null !== $this->carrier) {
            $res['Carrier'] = $this->carrier;
        }
        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->paramKey) {
            $res['ParamKey'] = $this->paramKey;
        }
        if (null !== $this->paramStr) {
            $res['ParamStr'] = $this->paramStr;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUAIDApplyTokenSignRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthCode'])) {
            $model->authCode = $map['AuthCode'];
        }
        if (isset($map['Carrier'])) {
            $model->carrier = $map['Carrier'];
        }
        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ParamKey'])) {
            $model->paramKey = $map['ParamKey'];
        }
        if (isset($map['ParamStr'])) {
            $model->paramStr = $map['ParamStr'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
