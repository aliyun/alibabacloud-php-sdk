<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models\FileRemovePermissionRequest;

use AlibabaCloud\SDK\Pds\V20220301\Models\Identity;
use AlibabaCloud\Tea\Model;

class memberList extends Model
{
    /**
     * @description The identity to whom the permissions are granted, which is a user or a group.
     *
     * This parameter is required.
     *
     * @var Identity
     */
    public $identity;

    /**
     * @description The role ID. You can grant permissions by assigning roles to identities, or you can customize the permissions. To grant permissions by assigning roles to identities, specify role_id. role_id and action_list are mutually exclusive. If both parameters are specified, role_id has a higher priority.
     *
     * Valid values:
     *
     * SystemFileOwner: collaborator.
     *
     * SystemFileDownloader: downloader.
     *
     * SystemFileEditor: editor.
     *
     * SystemFileEditorWithoutDelete: editor without permissions to delete the file.
     *
     * SystemFileEditorWithoutShareLink: editor without permissions to share the file.
     *
     * SystemFileMetaViewer: viewer of lists.
     *
     * SystemFileUploader: uploader. SystemFileUploaderAndDownloader: uploader and downloader.
     *
     * SystemFileDownloaderWithShareLink: downloader and sharer.
     *
     * SystemFileUploaderAndDownloaderWithShareLink: uploader, downloader, and sharer.
     *
     * SystemFileUploaderAndViewer: viewer and uploader.
     *
     * SystemFileUploaderWithShareLink: uploader and sharer.
     *
     * SystemFileViewer: viewer.
     *
     * This parameter is required.
     *
     * @example SystemFileDownloader
     *
     * @var string
     */
    public $roleId;
    protected $_name = [
        'identity' => 'identity',
        'roleId' => 'role_id',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->identity) {
            $res['identity'] = null !== $this->identity ? $this->identity->toMap() : null;
        }
        if (null !== $this->roleId) {
            $res['role_id'] = $this->roleId;
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
        if (isset($map['identity'])) {
            $model->identity = Identity::fromMap($map['identity']);
        }
        if (isset($map['role_id'])) {
            $model->roleId = $map['role_id'];
        }

        return $model;
    }
}
