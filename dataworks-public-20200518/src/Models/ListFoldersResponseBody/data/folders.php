<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFoldersResponseBody\data;

use AlibabaCloud\Tea\Model;

class folders extends Model
{
    /**
     * @var string
     */
    public $folderPath;

    /**
     * @var string
     */
    public $folderId;
    protected $_name = [
        'folderPath' => 'FolderPath',
        'folderId'   => 'FolderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->folderPath) {
            $res['FolderPath'] = $this->folderPath;
        }
        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return folders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FolderPath'])) {
            $model->folderPath = $map['FolderPath'];
        }
        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }

        return $model;
    }
}
