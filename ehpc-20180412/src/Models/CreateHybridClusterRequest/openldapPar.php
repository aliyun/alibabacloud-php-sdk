<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\CreateHybridClusterRequest;

use AlibabaCloud\Tea\Model;

class openldapPar extends Model
{
    /**
     * @description The BaseDN of the LDAP server.
     *
     * @example ehpctest
     *
     * @var string
     */
    public $baseDn;

    /**
     * @description The home directory of the Linux server.
     *
     * @example /home
     *
     * @var string
     */
    public $fallbackHomeDir;

    /**
     * @description The IP address of the LDAP server.
     *
     * @example 192.168.1.2
     *
     * @var string
     */
    public $ldapServerIp;
    protected $_name = [
        'baseDn'          => 'BaseDn',
        'fallbackHomeDir' => 'FallbackHomeDir',
        'ldapServerIp'    => 'LdapServerIp',
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
        if (null !== $this->fallbackHomeDir) {
            $res['FallbackHomeDir'] = $this->fallbackHomeDir;
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
        if (isset($map['FallbackHomeDir'])) {
            $model->fallbackHomeDir = $map['FallbackHomeDir'];
        }
        if (isset($map['LdapServerIp'])) {
            $model->ldapServerIp = $map['LdapServerIp'];
        }

        return $model;
    }
}
