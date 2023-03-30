<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class UpdateGatewayAuthConsumerRequest extends Model
{
    /**
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string
     */
    public $description;

    /**
     * @example RSA
     *
     * @var string
     */
    public $encodeType;

    /**
     * @example gw-90392d768a3847a7b804c505254d****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @example 63
     *
     * @var int
     */
    public $id;

    /**
     * @example {"keys":[{"e":"AQAB","kid":"DHFbpoIUqrY8t2zpA2qXfCmr5VO5ZEr4RzHU_-envvQ","kty":"RSA","n":"xAE7eB6qugXyCAG3yhh7pkDkT65pHymX-P7KfIupjf59vsdo91bSP9C8H07pSAGQO1MV_xFj9VswgsCg4R6otmg5PV2He95lZdHtOcU5DXIg_pbhLdKXbi66GlVeK6ABZOUW3WYtnNHD-91gVuoeJT_DwtGGcp4ignkgXfkiEm4sw-4sfb4qdt5oLbyVpmW6x9cfa7vs2WTfURiCrBoUqgBo_-4WTiULmmHSGZHOjzwa8WtrtOQGsAFjIbno85jp6MnGGGZPYZbDAa_b3y5u-YpW7ypZrvD8BgtKVjgtQgZhLAGezMt0ua3DRrWnKqTZ0BJ_EyxOGuHJrLsn00fnMQ"}]}
     *
     * @var string
     */
    public $jwks;

    /**
     * @example iss
     *
     * @var string
     */
    public $keyName;

    /**
     * @example abcd
     *
     * @var string
     */
    public $keyValue;

    /**
     * @example Authorization
     *
     * @var string
     */
    public $tokenName;

    /**
     * @example true
     *
     * @var bool
     */
    public $tokenPass;

    /**
     * @example HEADER
     *
     * @var string
     */
    public $tokenPosition;

    /**
     * @example Bearer
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return UpdateGatewayAuthConsumerRequest
     */
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
