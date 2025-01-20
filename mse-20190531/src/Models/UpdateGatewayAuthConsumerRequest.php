<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;

class UpdateGatewayAuthConsumerRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $encodeType;
    /**
     * @var string
     */
    public $gatewayUniqueId;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $jwks;
    /**
     * @var string
     */
    public $keyName;
    /**
     * @var string
     */
    public $keyValue;
    /**
     * @var string
     */
    public $tokenName;
    /**
     * @var bool
     */
    public $tokenPass;
    /**
     * @var string
     */
    public $tokenPosition;
    /**
     * @var string
     */
    public $tokenPrefix;
    protected $_name = [
        'acceptLanguage'  => 'AcceptLanguage',
        'description'     => 'Description',
        'encodeType'      => 'EncodeType',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'id'              => 'Id',
        'jwks'            => 'Jwks',
        'keyName'         => 'KeyName',
        'keyValue'        => 'KeyValue',
        'tokenName'       => 'TokenName',
        'tokenPass'       => 'TokenPass',
        'tokenPosition'   => 'TokenPosition',
        'tokenPrefix'     => 'TokenPrefix',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->encodeType) {
            $res['EncodeType'] = $this->encodeType;
        }

        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->jwks) {
            $res['Jwks'] = $this->jwks;
        }

        if (null !== $this->keyName) {
            $res['KeyName'] = $this->keyName;
        }

        if (null !== $this->keyValue) {
            $res['KeyValue'] = $this->keyValue;
        }

        if (null !== $this->tokenName) {
            $res['TokenName'] = $this->tokenName;
        }

        if (null !== $this->tokenPass) {
            $res['TokenPass'] = $this->tokenPass;
        }

        if (null !== $this->tokenPosition) {
            $res['TokenPosition'] = $this->tokenPosition;
        }

        if (null !== $this->tokenPrefix) {
            $res['TokenPrefix'] = $this->tokenPrefix;
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
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EncodeType'])) {
            $model->encodeType = $map['EncodeType'];
        }

        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Jwks'])) {
            $model->jwks = $map['Jwks'];
        }

        if (isset($map['KeyName'])) {
            $model->keyName = $map['KeyName'];
        }

        if (isset($map['KeyValue'])) {
            $model->keyValue = $map['KeyValue'];
        }

        if (isset($map['TokenName'])) {
            $model->tokenName = $map['TokenName'];
        }

        if (isset($map['TokenPass'])) {
            $model->tokenPass = $map['TokenPass'];
        }

        if (isset($map['TokenPosition'])) {
            $model->tokenPosition = $map['TokenPosition'];
        }

        if (isset($map['TokenPrefix'])) {
            $model->tokenPrefix = $map['TokenPrefix'];
        }

        return $model;
    }
}
