<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\CreateHybridClusterRequest;

use AlibabaCloud\Dara\Model;

class openldapPar extends Model
{
    /**
     * @var string
     */
    public $baseDn;

    /**
     * @var string
     */
    public $fallbackHomeDir;

    /**
     * @var string
     */
    public $ldapServerIp;
    protected $_name = [
        'baseDn' => 'BaseDn',
        'fallbackHomeDir' => 'FallbackHomeDir',
        'ldapServerIp' => 'LdapServerIp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
