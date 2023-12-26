<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeSmbAclResponseBody;

use AlibabaCloud\Tea\Model;

class acl extends Model
{
    /**
     * @description Indicates whether the file system allows anonymous access. Valid values:
     *
     *   true: The file system allows anonymous access.
     *   false: The file system does not allow anonymous access.
     *
     * @example true
     *
     * @var bool
     */
    public $enableAnonymousAccess;

    /**
     * @description Indicates whether the ACL feature is enabled. Valid values:
     *
     *   true: The ACL feature is enabled.
     *   false: The ACL feature is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description Indicates whether encryption in transit is enabled. Valid values:
     *
     *   true: Encryption in transit is enabled.
     *   false: Encryption in transit is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $encryptData;

    /**
     * @description The home directory of each user.
     *
     * @example /home
     *
     * @var string
     */
    public $homeDirPath;

    /**
     * @description Indicates whether the file system denies access from non-encrypted clients. Valid values:
     *
     *   true: The file system denies access from non-encrypted clients.
     *   false: The file system allows access from non-encrypted clients.
     *
     * @example true
     *
     * @var bool
     */
    public $rejectUnencryptedAccess;

    /**
     * @description The ID of a super admin.
     *
     * @example S-1-0-0
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return acl
     */
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
