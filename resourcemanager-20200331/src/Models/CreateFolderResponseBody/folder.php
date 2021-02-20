<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\CreateFolderResponseBody;

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
    public $createTime;

    /**
     * @var string
     */
    public $parentFolderId;

    /**
     * @var string
     */
    public $folderName;
    protected $_name = [
        'folderId'       => 'FolderId',
        'createTime'     => 'CreateTime',
        'parentFolderId' => 'ParentFolderId',
        'folderName'     => 'FolderName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->parentFolderId) {
            $res['ParentFolderId'] = $this->parentFolderId;
        }
        if (null !== $this->folderName) {
            $res['FolderName'] = $this->folderName;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ParentFolderId'])) {
            $model->parentFolderId = $map['ParentFolderId'];
        }
        if (isset($map['FolderName'])) {
            $model->folderName = $map['FolderName'];
        }

        return $model;
    }
}
