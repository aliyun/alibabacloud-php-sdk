<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetInstanceLDAPAuthServerResponseBody\LDAP;
use AlibabaCloud\Tea\Model;

class GetInstanceLDAPAuthServerResponseBody extends Model
{
    /**
     * @var LDAP
     */
    public $LDAP;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'LDAP'      => 'LDAP',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->LDAP) {
            $res['LDAP'] = null !== $this->LDAP ? $this->LDAP->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceLDAPAuthServerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LDAP'])) {
            $model->LDAP = LDAP::fromMap($map['LDAP']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
