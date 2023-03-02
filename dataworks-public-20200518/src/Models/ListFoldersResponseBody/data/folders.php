<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFoldersResponseBody\data;

use AlibabaCloud\Tea\Model;

class folders extends Model
{
    /**
     * @description The ID of the folder.
     *
     * @example 2735c2****
     *
     * @var string
     */
    public $folderId;

    /**
     * @description The path of the folder.
     *
     * @var string
     */
    public $folderPath;
    protected $_name = [
        'folderId'   => 'FolderId',
        'folderPath' => 'FolderPath',
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
        if (null !== $this->folderPath) {
            $res['FolderPath'] = $this->folderPath;
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
        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }
        if (isset($map['FolderPath'])) {
            $model->folderPath = $map['FolderPath'];
        }

        return $model;
    }
}
