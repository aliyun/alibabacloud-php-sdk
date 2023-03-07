<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\CreateHybridClusterRequest;

use AlibabaCloud\Tea\Model;

class openldapPar extends Model
{
    /**
     * @example ehpctest
     *
     * @var string
     */
    public $baseDn;

    /**
     * @example 192.168.1.2
     *
     * @var string
     */
    public $ldapServerIp;
    protected $_name = [
        'baseDn'       => 'BaseDn',
        'ldapServerIp' => 'LdapServerIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseDn) {
            $res['BaseDn'] = $this->baseDn;
        }
        if (null !== $this->ldapServerIp) {
            $res['LdapServerIp'] = $this->ldapServerIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return openldapPar
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseDn'])) {
            $model->baseDn = $map['BaseDn'];
        }
        if (isset($map['LdapServerIp'])) {
            $model->ldapServerIp = $map['LdapServerIp'];
        }

        return $model;
    }
}
