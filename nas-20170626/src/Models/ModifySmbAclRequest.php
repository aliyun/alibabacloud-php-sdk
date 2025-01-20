<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;

class ModifySmbAclRequest extends Model
{
    /**
     * @var bool
     */
    public $enableAnonymousAccess;
    /**
     * @var bool
     */
    public $encryptData;
    /**
     * @var string
     */
    public $fileSystemId;
    /**
     * @var string
     */
    public $homeDirPath;
    /**
     * @var string
     */
    public $keytab;
    /**
     * @var string
     */
    public $keytabMd5;
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
        'encryptData'             => 'EncryptData',
        'fileSystemId'            => 'FileSystemId',
        'homeDirPath'             => 'HomeDirPath',
        'keytab'                  => 'Keytab',
        'keytabMd5'               => 'KeytabMd5',
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

        if (null !== $this->encryptData) {
            $res['EncryptData'] = $this->encryptData;
        }

        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }

        if (null !== $this->homeDirPath) {
            $res['HomeDirPath'] = $this->homeDirPath;
        }

        if (null !== $this->keytab) {
            $res['Keytab'] = $this->keytab;
        }

        if (null !== $this->keytabMd5) {
            $res['KeytabMd5'] = $this->keytabMd5;
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

        if (isset($map['EncryptData'])) {
            $model->encryptData = $map['EncryptData'];
        }

        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }

        if (isset($map['HomeDirPath'])) {
            $model->homeDirPath = $map['HomeDirPath'];
        }

        if (isset($map['Keytab'])) {
            $model->keytab = $map['Keytab'];
        }

        if (isset($map['KeytabMd5'])) {
            $model->keytabMd5 = $map['KeytabMd5'];
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
