<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateFolderResponse;

use AlibabaCloud\Tea\Model;

class folder extends Model
{
    /**
     * @var string
     */
    public $folderId;

    /**
     * @var string
     */
    public $parentFolderId;

    /**
     * @var string
     */
    public $folderName;

    /**
     * @var string
     */
    public $createTime;
    protected $_name = [
        'folderId'       => 'FolderId',
        'parentFolderId' => 'ParentFolderId',
        'folderName'     => 'FolderName',
        'createTime'     => 'CreateTime',
    ];

    public function validate()
    {
        Model::validateRequired('folderId', $this->folderId, true);
        Model::validateRequired('parentFolderId', $this->parentFolderId, true);
        Model::validateRequired('folderName', $this->folderName, true);
        Model::validateRequired('createTime', $this->createTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
        }
        if (null !== $this->parentFolderId) {
            $res['ParentFolderId'] = $this->parentFolderId;
        }
        if (null !== $this->folderName) {
            $res['FolderName'] = $this->folderName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }
        if (isset($map['ParentFolderId'])) {
            $model->parentFolderId = $map['ParentFolderId'];
        }
        if (isset($map['FolderName'])) {
            $model->folderName = $map['FolderName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        return $model;
    }
}
