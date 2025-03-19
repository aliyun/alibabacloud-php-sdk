<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\SDK\NAS\V20170626\Models\CreateFilesetRequest\quota;
use AlibabaCloud\Tea\Model;

class CreateFilesetRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests.
     *
     * The token can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How do I ensure the idempotence?](https://help.aliyun.com/document_detail/25693.html)
     *
     * >  If you do not specify this parameter, the system automatically uses the request ID as the client token. The request ID may be different for each request.
     *
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to enable deletion protection to allow you to release the fileset by using the console or by calling the [DeleteFileset](https://help.aliyun.com/document_detail/2838077.html) operation.
     *
     *   true: enables release protection.
     *   false (default): disables release protection.
     *
     * >  This parameter can protect filesets only against manual releases, but not against automatic releases.
     *
     * @example false
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description The description of the fileset.
     *
     *   The description must be 2 to 128 characters in length.
     *   The description must start with a letter but cannot start with http:// or https://.
     *   The description can contain letters, digits, colons (:), underscores (_), and hyphens (-).
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to perform a dry run.
     *
     * During the dry run, the system checks whether the request parameters are valid and whether the requested resources are available. During the dry run, no fileset is created and no fee is incurred.
     *
     * Valid values:
     *
     *   true: performs a dry run. The system checks the required parameters, request syntax, service limits, and available Apsara File Storage NAS (NAS) resources. If the request fails the dry run, an error message is returned. If the request passes the dry run, the HTTP status code 200 is returned. No value is returned for the FsetId parameter.
     *   false (default): performs a dry run and sends the request. If the request passes the dry run, a fileset is created.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The ID of the file system.
     *
     *   The IDs of CPFS file systems must start with `cpfs-`. Example: cpfs-099394bd928c\\*\\*\\*\\*.
     *   The IDs of CPFS for LINGJUN file systems must start with `bmcpfs-`. Example: bmcpfs-290w65p03ok64ya\\*\\*\\*\\*.
     *
     * >  CPFS is not supported on the international site.
     *
     * This parameter is required.
     *
     * @example bmcpfs-290w65p03ok64ya****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The absolute path of the fileset.
     *
     *   The path must be 2 to 1024 characters in length.
     *   The path must start and end with a forward slash (/).
     *   The fileset path must be a new path and cannot be an existing path. Fileset paths cannot be renamed and cannot be symbolic links.
     *   The maximum depth supported by a fileset path is eight levels. The depth of the root directory / is 0 levels. For example, the fileset path /test/aaa/ccc/ has three levels.
     *   If the fileset path is a multi-level path, the parent directory must be an existing directory.
     *   Nested filesets are not supported. If a fileset is specified as a parent directory, its subdirectory cannot be a fileset. A fileset path supports only one quota.
     *
     * This parameter is required.
     *
     * @example /test/
     *
     * @var string
     */
    public $fileSystemPath;

    /**
     * @description The quota information.
     *
     * >  Only CPFS for LINGJUN V2.7.0 and later support this parameter.
     *
     * @var quota
     */
    public $quota;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'deletionProtection' => 'DeletionProtection',
        'description' => 'Description',
        'dryRun' => 'DryRun',
        'fileSystemId' => 'FileSystemId',
        'fileSystemPath' => 'FileSystemPath',
        'quota' => 'Quota',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->fileSystemPath) {
            $res['FileSystemPath'] = $this->fileSystemPath;
        }
        if (null !== $this->quota) {
            $res['Quota'] = null !== $this->quota ? $this->quota->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFilesetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['FileSystemPath'])) {
            $model->fileSystemPath = $map['FileSystemPath'];
        }
        if (isset($map['Quota'])) {
            $model->quota = quota::fromMap($map['Quota']);
        }

        return $model;
    }
}
