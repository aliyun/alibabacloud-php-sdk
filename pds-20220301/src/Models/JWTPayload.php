<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class JWTPayload extends Model
{
    /**
     * @var string
     */
    public $aud;

    /**
     * @var bool
     */
    public $autoCreate;

    /**
     * @var int
     */
    public $exp;

    /**
     * @var int
     */
    public $iat;

    /**
     * @var string
     */
    public $iss;

    /**
     * @var string
     */
    public $jti;

    /**
     * @var int
     */
    public $nbf;

    /**
     * @var string
     */
    public $sub;

    /**
     * @var string
     */
    public $subType;
    protected $_name = [
        'aud'        => 'aud',
        'autoCreate' => 'auto_create',
        'exp'        => 'exp',
        'iat'        => 'iat',
        'iss'        => 'iss',
        'jti'        => 'jti',
        'nbf'        => 'nbf',
        'sub'        => 'sub',
        'subType'    => 'sub_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aud) {
            $res['aud'] = $this->aud;
        }
        if (null !== $this->autoCreate) {
            $res['auto_create'] = $this->autoCreate;
        }
        if (null !== $this->exp) {
            $res['exp'] = $this->exp;
        }
        if (null !== $this->iat) {
            $res['iat'] = $this->iat;
        }
        if (null !== $this->iss) {
            $res['iss'] = $this->iss;
        }
        if (null !== $this->jti) {
            $res['jti'] = $this->jti;
        }
        if (null !== $this->nbf) {
            $res['nbf'] = $this->nbf;
        }
        if (null !== $this->sub) {
            $res['sub'] = $this->sub;
        }
        if (null !== $this->subType) {
            $res['sub_type'] = $this->subType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return JWTPayload
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aud'])) {
            $model->aud = $map['aud'];
        }
        if (isset($map['auto_create'])) {
            $model->autoCreate = $map['auto_create'];
        }
        if (isset($map['exp'])) {
            $model->exp = $map['exp'];
        }
        if (isset($map['iat'])) {
            $model->iat = $map['iat'];
        }
        if (isset($map['iss'])) {
            $model->iss = $map['iss'];
        }
        if (isset($map['jti'])) {
            $model->jti = $map['jti'];
        }
        if (isset($map['nbf'])) {
            $model->nbf = $map['nbf'];
        }
        if (isset($map['sub'])) {
            $model->sub = $map['sub'];
        }
        if (isset($map['sub_type'])) {
            $model->subType = $map['sub_type'];
        }

        return $model;
    }
}
