<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20230630\Models;

use AlibabaCloud\Tea\Model;

class GetAccountByIdRequest extends Model
{
    /**
     * @example 5035op97******************a63994
     *
     * @var string
     */
    public $identityId;

    /**
     * @example 60yqjd1**************************561da00851
     *
     * @var string
     */
    public $openId;

    /**
     * @example 76****57
     *
     * @var string
     */
    public $openIdAppKey;
    protected $_name = [
        'identityId'   => 'IdentityId',
        'openId'       => 'OpenId',
        'openIdAppKey' => 'OpenIdAppKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->identityId) {
            $res['IdentityId'] = $this->identityId;
        }
        if (null !== $this->openId) {
            $res['OpenId'] = $this->openId;
        }
        if (null !== $this->openIdAppKey) {
            $res['OpenIdAppKey'] = $this->openIdAppKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAccountByIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IdentityId'])) {
            $model->identityId = $map['IdentityId'];
        }
        if (isset($map['OpenId'])) {
            $model->openId = $map['OpenId'];
        }
        if (isset($map['OpenIdAppKey'])) {
            $model->openIdAppKey = $map['OpenIdAppKey'];
        }

        return $model;
    }
}
