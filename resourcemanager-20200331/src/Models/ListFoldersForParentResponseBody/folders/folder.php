<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListFoldersForParentResponseBody\folders;

use AlibabaCloud\Tea\Model;

class folder extends Model
{
    /**
     * @example 2015-01-23T12:33:18Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example rd-evic31****
     *
     * @var string
     */
    public $folderId;

    /**
     * @example project-1
     *
     * @var string
     */
    public $folderName;
    protected $_name = [
        'createTime' => 'CreateTime',
        'folderId'   => 'FolderId',
        'folderName' => 'FolderName',
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

        return $model;
    }
}
