<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetInstanceLDAPAuthServerResponseBody\LDAP;

class GetInstanceLDAPAuthServerResponseBody extends Model
{
    /**
     * @var LDAP
     */
    public $LDAP;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'LDAP' => 'LDAP',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->LDAP) {
            $this->LDAP->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->LDAP) {
            $res['LDAP'] = null !== $this->LDAP ? $this->LDAP->toArray($noStream) : $this->LDAP;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['LDAP'])) {
            $model->LDAP = LDAP::fromMap($map['LDAP']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
