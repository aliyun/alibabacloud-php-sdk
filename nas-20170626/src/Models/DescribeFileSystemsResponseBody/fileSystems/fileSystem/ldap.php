<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody\fileSystems\fileSystem;

use AlibabaCloud\Tea\Model;

class ldap extends Model
{
    /**
     * @description An LDAP entry.
     *
     * @example cn=alibaba,dc=com
     *
     * @var string
     */
    public $bindDN;

    /**
     * @description An LDAP search base.
     *
     * @example dc=example
     *
     * @var string
     */
    public $searchBase;

    /**
     * @description An LDAP URI.
     *
     * @example ldap://ldap.example.example
     *
     * @var string
     */
    public $URI;
    protected $_name = [
        'bindDN' => 'BindDN',
        'searchBase' => 'SearchBase',
        'URI' => 'URI',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindDN) {
            $res['BindDN'] = $this->bindDN;
        }
        if (null !== $this->searchBase) {
            $res['SearchBase'] = $this->searchBase;
        }
        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ldap
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindDN'])) {
            $model->bindDN = $map['BindDN'];
        }
        if (isset($map['SearchBase'])) {
            $model->searchBase = $map['SearchBase'];
        }
        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }

        return $model;
    }
}
