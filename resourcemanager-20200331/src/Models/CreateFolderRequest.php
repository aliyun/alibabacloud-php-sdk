<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class CreateFolderRequest extends Model
{
    /**
     * @var string
     */
    public $parentFolderId;

    /**
     * @var string
     */
    public $folderName;
    protected $_name = [
        'parentFolderId' => 'ParentFolderId',
        'folderName'     => 'FolderName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return CreateFolderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParentFolderId'])) {
            $model->parentFolderId = $map['ParentFolderId'];
        }
        if (isset($map['FolderName'])) {
            $model->folderName = $map['FolderName'];
        }

        return $model;
    }
}
