<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeSmbAclResponseBody;

use AlibabaCloud\Dara\Model;

class acl extends Model
{
    /**
     * @var bool
     */
    public $enableAnonymousAccess;
    /**
     * @var bool
     */
    public $enabled;
    /**
     * @var bool
     */
    public $encryptData;
    /**
     * @var string
     */
    public $homeDirPath;
    /**
     * @var bool
     */
    public $rejectUnencryptedAccess;
    /**
     * @var string
     */
    public $superAdminSid;
    protected $_name = [
        'enableAnonymousAccess'   => 'EnableAnonymousAccess',
        'enabled'                 => 'Enabled',
        'encryptData'             => 'EncryptData',
        'homeDirPath'             => 'HomeDirPath',
        'rejectUnencryptedAccess' => 'RejectUnencryptedAccess',
        'superAdminSid'           => 'SuperAdminSid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableAnonymousAccess) {
            $res['EnableAnonymousAccess'] = $this->enableAnonymousAccess;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->encryptData) {
            $res['EncryptData'] = $this->encryptData;
        }

        if (null !== $this->homeDirPath) {
            $res['HomeDirPath'] = $this->homeDirPath;
        }

        if (null !== $this->rejectUnencryptedAccess) {
            $res['RejectUnencryptedAccess'] = $this->rejectUnencryptedAccess;
        }

        if (null !== $this->superAdminSid) {
            $res['SuperAdminSid'] = $this->superAdminSid;
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
        if (isset($map['EnableAnonymousAccess'])) {
            $model->enableAnonymousAccess = $map['EnableAnonymousAccess'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['EncryptData'])) {
            $model->encryptData = $map['EncryptData'];
        }

        if (isset($map['HomeDirPath'])) {
            $model->homeDirPath = $map['HomeDirPath'];
        }

        if (isset($map['RejectUnencryptedAccess'])) {
            $model->rejectUnencryptedAccess = $map['RejectUnencryptedAccess'];
        }

        if (isset($map['SuperAdminSid'])) {
            $model->superAdminSid = $map['SuperAdminSid'];
        }

        return $model;
    }
}
