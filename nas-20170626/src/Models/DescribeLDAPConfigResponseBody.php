<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLDAPConfigResponseBody\ldap;
use AlibabaCloud\Tea\Model;

class DescribeLDAPConfigResponseBody extends Model
{
    /**
     * @var ldap
     */
    public $ldap;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ldap'      => 'Ldap',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ldap) {
            $res['Ldap'] = null !== $this->ldap ? $this->ldap->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLDAPConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ldap'])) {
            $model->ldap = ldap::fromMap($map['Ldap']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
