<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListAuthorizedFoldersResponseBody\folders;

use AlibabaCloud\Dara\Model;

class folder extends Model
{
    /**
     * @var string
     */
    public $folderId;

    /**
     * @var string
     */
    public $folderName;

    /**
     * @var string
     */
    public $resourceDirectoryPath;
    protected $_name = [
        'folderId' => 'FolderId',
        'folderName' => 'FolderName',
        'resourceDirectoryPath' => 'ResourceDirectoryPath',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
        }

        if (null !== $this->folderName) {
            $res['FolderName'] = $this->folderName;
        }

        if (null !== $this->resourceDirectoryPath) {
            $res['ResourceDirectoryPath'] = $this->resourceDirectoryPath;
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
        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }

        if (isset($map['FolderName'])) {
            $model->folderName = $map['FolderName'];
        }

        if (isset($map['ResourceDirectoryPath'])) {
            $model->resourceDirectoryPath = $map['ResourceDirectoryPath'];
        }

        return $model;
    }
}
