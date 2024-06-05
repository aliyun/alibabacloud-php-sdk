<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class ModifySmbAclRequest extends Model
{
    /**
     * @description Specifies whether to allow anonymous access. Valid values:
     *
     *   true: The file system allows anonymous access.
     *   false (default): The file system denies anonymous access.
     *
     * @example false
     *
     * @var bool
     */
    public $enableAnonymousAccess;

    /**
     * @description Specifies whether to enable encryption in transit. Valid values:
     *
     *   true: enables encryption in transit.
     *   false (default): disables encryption in transit.
     *
     * @example false
     *
     * @var bool
     */
    public $encryptData;

    /**
     * @description The ID of the file system.
     *
     * This parameter is required.
     * @example 1ca404****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The home directory of each user. Each user-specific home directory must meet the following requirements:
     *
     *   Each segment starts with a forward slash (/) or a backward slash (\\\\).
     *   Each segment does not contain the following special characters: `<>":|?*`.
     *   Each segment is 0 to 255 characters in length.
     *   The total length is 0 to 32,767 characters.
     *
     * > User A must have the permissions to create folders in the \\home directory. Otherwise, the file system cannot create the `/home/A` directory when User A logs on to the file system.
     * @example /home
     *
     * @var string
     */
    public $homeDirPath;

    /**
     * @description The string that is generated after the system encodes the keytab file by using Base64.
     *
     * @example BQIAAABHAAIADUFMSUFEVEVTVC5DT00ABGNpZnMAGXNtYnNlcnZlcjI0LmFsaWFkdGVzdC5jb20AAAABAAAAAAEAAQAIqIx6v7p11oUAAABHAAIADUFMSUFEVEVTVC5DT00ABGNpZnMAGXNtYnNlcnZlcjI0LmFsaWFkdGVzdC5jb20AAAABAAAAAAEAAwAIqIx6v7p11oUAAABPAAIADUFMSUFEVEVTVC5DT00ABGNpZnMAGXNtYnNlcnZlcjI0LmFsaWFkdGVzdC5jb20AAAABAAAAAAEAFwAQnQZWB3RAPHU7PMIJyBWePAAAAF8AAgANQUxJQURURVNULkNPTQAEY2lmcwAZc21ic2VydmVyMjQuYWxpYWR0ZXN0LmNvbQAAAAEAAAAAAQASACAGJ7F0s+bcBjf6jD5HlvlRLmPSOW+qDZe0Qk0lQcf8WwAAAE8AAgANQUxJQURURVNULkNPTQAEY2lmcwAZc21ic2VydmVyMjQuYWxpYWR0ZXN0LmNvbQAAAAEAAAAAAQARABDdFmanrSIatnDDh****
     *
     * @var string
     */
    public $keytab;

    /**
     * @description The string that is generated after the system encodes the keytab file by using MD5.
     *
     * @example E3CCF7E2416DF04FA958AA4513EA****
     *
     * @var string
     */
    public $keytabMd5;

    /**
     * @description Specifies whether to deny access from non-encrypted clients. Valid values:
     *
     *   true: The file system denies access from non-encrypted clients.
     *   false (default): The file system allows access from non-encrypted clients.
     *
     * @example false
     *
     * @var bool
     */
    public $rejectUnencryptedAccess;

    /**
     * @description The ID of a super admin. The ID must meet the following requirements:
     *
     *   The ID starts with `S` and does not contain letters except S.
     *   The ID contains at least three hyphens (-) as delimiters.
     *
     * Examples: `S-1-5-22` and `S-1-5-22-23`.
     * @example S-1-5-22
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ModifySmbAclRequest
     */
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
