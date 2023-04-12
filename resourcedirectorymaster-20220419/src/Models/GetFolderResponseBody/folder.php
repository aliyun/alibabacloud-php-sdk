<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\GetFolderResponseBody;

use AlibabaCloud\Tea\Model;

class folder extends Model
{
    /**
     * @description The time when the folder was created.
     *
     * @example 2021-06-15T06:39:08.521Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the folder.
     *
     * @example fd-Jyl5U7****
     *
     * @var string
     */
    public $folderId;

    /**
     * @description The name of the folder.
     *
     * @example Applications
     *
     * @var string
     */
    public $folderName;

    /**
     * @description The ID of the parent folder.
     *
     * @example r-Wm****
     *
     * @var string
     */
    public $parentFolderId;

    /**
     * @description The path of the folder in the resource directory.
     *
     * @example rd-3G****\/r-Wm****\/fd-Jyl5U7****
     *
     * @var string
     */
    public $resourceDirectoryPath;
    protected $_name = [
        'createTime'            => 'CreateTime',
        'folderId'              => 'FolderId',
        'folderName'            => 'FolderName',
        'parentFolderId'        => 'ParentFolderId',
        'resourceDirectoryPath' => 'ResourceDirectoryPath',
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
        if (null !== $this->resourceDirectoryPath) {
            $res['ResourceDirectoryPath'] = $this->resourceDirectoryPath;
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
        if (isset($map['ResourceDirectoryPath'])) {
            $model->resourceDirectoryPath = $map['ResourceDirectoryPath'];
        }

        return $model;
    }
}
