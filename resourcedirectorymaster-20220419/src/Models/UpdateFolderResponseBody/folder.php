<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\UpdateFolderResponseBody;

use AlibabaCloud\Tea\Model;

class folder extends Model
{
    /**
     * @description The time when the folder was created.
     *
     * @example 2019-02-19T09:34:50.757Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the folder.
     *
     * @example fd-u8B321****
     *
     * @var string
     */
    public $folderId;

    /**
     * @description The name of the folder.
     *
     * @example rdFolder
     *
     * @var string
     */
    public $folderName;

    /**
     * @description The ID of the parent folder.
     *
     * @example r-b1****
     *
     * @var string
     */
    public $parentFolderId;
    protected $_name = [
        'createTime'     => 'CreateTime',
        'folderId'       => 'FolderId',
        'folderName'     => 'FolderName',
        'parentFolderId' => 'ParentFolderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
        }
        if (null !== $this->folderName) {
            $res['FolderName'] = $this->folderName;
        }
        if (null !== $this->parentFolderId) {
            $res['ParentFolderId'] = $this->parentFolderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return folder
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }
        if (isset($map['FolderName'])) {
            $model->folderName = $map['FolderName'];
        }
        if (isset($map['ParentFolderId'])) {
            $model->parentFolderId = $map['ParentFolderId'];
        }

        return $model;
    }
}
