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
     *   SystemFileUploaderAndDownloaderWithShareLink
     *
     * <!-- -->
     *
     *   SystemFileDownloader
     *
     * <!-- -->
     *
     *   SystemFileEditorWithoutDelete
     *
     * <!-- -->
     *
     *   SystemFileOwner
     *
     * <!-- -->
     *
     *   SystemFileDownloaderWithShareLink
     *
     * <!-- -->
     *
     *   SystemFileUploaderAndViewer
     *
     * <!-- -->
     *
     *   SystemFileViewer
     *
     * <!-- -->
     *
     *   SystemFileEditor
     *
     * <!-- -->
     *
     *   SystemFileUploaderWithShareLink
     *
     * <!-- -->
     *
     *   SystemFileUploader
     *
     * <!-- -->
     *
     *   SystemFileUploaderAndDownloader
     *
     * <!-- -->
     *
     *   SystemFileMetaViewer
     *
     * <!-- -->
     * @example SystemFileUploaderAndDownloader
     *
     * @var string
     */
    public $roleId;
    protected $_name = [
        'cdsIdentity' => 'CdsIdentity',
        'roleId'      => 'RoleId',
    ];

    public function validate()
    {
    }

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
