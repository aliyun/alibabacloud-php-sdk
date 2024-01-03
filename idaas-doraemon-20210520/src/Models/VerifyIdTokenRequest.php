<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models;

use AlibabaCloud\Tea\Model;

class VerifyIdTokenRequest extends Model
{
    /**
     * @example webauth_demo
     *
     * @var string
     */
    public $applicationExternalId;

    /**
     * @description jwtIdToken
     *
     * @example eyJraWQiOiIzNj
     *
     * @var string
     */
    public $jwtIdToken;
    protected $_name = [
        'applicationExternalId' => 'ApplicationExternalId',
        'jwtIdToken'            => 'JwtIdToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationExternalId) {
            $res['ApplicationExternalId'] = $this->applicationExternalId;
        }
        if (null !== $this->jwtIdToken) {
            $res['JwtIdToken'] = $this->jwtIdToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifyIdTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationExternalId'])) {
            $model->applicationExternalId = $map['ApplicationExternalId'];
        }
        if (isset($map['JwtIdToken'])) {
            $model->jwtIdToken = $map['JwtIdToken'];
        }

        return $model;
    }
}
