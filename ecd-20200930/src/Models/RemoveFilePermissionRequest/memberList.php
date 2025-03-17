<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\RemoveFilePermissionRequest;

use AlibabaCloud\SDK\Ecd\V20200930\Models\RemoveFilePermissionRequest\memberList\cdsIdentity;
use AlibabaCloud\Tea\Model;

class memberList extends Model
{
    /**
     * @description The permission information.
     *
     * This parameter is required.
     *
     * @var cdsIdentity
     */
    public $cdsIdentity;

    /**
     * @description The role ID. You can configure permissions on roles or actions. This parameter is used to specify the permissions on roles, which conflicts with the ActionList parameter. When you configure both the parameters, this parameter shall prevail.
     *
     * Valid values:
     *
     *   SystemFileEditorWithoutShareLink
     *
     * <!-- -->
     *
     * :
     *
     * <!-- -->
     *
     * the role that has the permissions to edit files but cannot share files
     *
     * <!-- -->
     *
     *   SystemFileUploaderAndDownloaderWithShareLink
     *
     * <!-- -->
     *
     * :
     *
     * <!-- -->
     *
     * the role that has the permissions to upload, download, and share files
     *
     * <!-- -->
     *
     *   SystemFileDownloader
     *
     * <!-- -->
     *
     * :
     *
     * <!-- -->
     *
     * the role that has the permissions to download files
     *
     * <!-- -->
     *
     *   SystemFileEditorWithoutDelete
     *
     * <!-- -->
     *
     * :
     *
     * <!-- -->
     *
     * the role that has the permissions to edit files but cannot delete files
     *
     * <!-- -->
     *
     *   SystemFileOwner
     *
     * <!-- -->
     *
     * :
     *
     * <!-- -->
     *
     * the role that has the permissions to collaborate with others
     *
     * <!-- -->
     *
     *   SystemFileDownloaderWithShareLink
     *
     * <!-- -->
     *
     * :
     *
     * <!-- -->
     *
     * the role that has the permissions to download and share files
     *
     * <!-- -->
     *
     *   SystemFileUploaderAndViewer
     *
     * <!-- -->
     *
     * :
     *
     * <!-- -->
     *
     * the role that has the permissions to preview or upload files
     *
     * <!-- -->
     *
     *   SystemFileViewer
     *
     * <!-- -->
     *
     * :
     *
     * <!-- -->
     *
     * the role that has the permissions to preview files
     *
     * <!-- -->
     *
     *   SystemFileEditor
     *
     * <!-- -->
     *
     * :
     *
     * <!-- -->
     *
     * the role that has the permissions to edit files
     *
     * <!-- -->
     *
     *   SystemFileUploaderWithShareLink
     *
     * <!-- -->
     *
     * :
     *
     * <!-- -->
     *
     * the role that has the permissions to upload or share files
     *
     * <!-- -->
     *
     *   SystemFileUploader
     *
     * <!-- -->
     *
     * :
     *
     * <!-- -->
     *
     * the role that has the permission to upload files
     *
     * <!-- -->
     *
     *   SystemFileUploaderAndDownloader
     *
     * <!-- -->
     *
     * :
     *
     * <!-- -->
     *
     * the role that has the permissions to upload or download files
     *
     * <!-- -->
     *
     *   SystemFileMetaViewer
     *
     * <!-- -->
     *
     * :
     *
     * <!-- -->
     *
     * the role that has the permissions to view files
     *
     * <!-- -->
     *
     * This parameter is required.
     *
     * @example SystemFileUploaderAndDownloader
     *
     * @var string
     */
    public $roleId;
    protected $_name = [
        'cdsIdentity' => 'CdsIdentity',
        'roleId' => 'RoleId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cdsIdentity) {
            $res['CdsIdentity'] = null !== $this->cdsIdentity ? $this->cdsIdentity->toMap() : null;
        }
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return memberList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CdsIdentity'])) {
            $model->cdsIdentity = cdsIdentity::fromMap($map['CdsIdentity']);
        }
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }

        return $model;
    }
}
