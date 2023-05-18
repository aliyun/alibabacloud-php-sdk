<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class UpdateFolderRequest extends Model
{
    /**
     * @description The ID of the folder.
     *
     * @example fd-u8B321****
     *
     * @var string
     */
    public $folderId;

    /**
     * @description The new name of the folder.
     *
     * The name must be 1 to 24 characters in length and can contain letters, digits, underscores (\_), periods (.), and hyphens (-).
     * @example rdFolder
     *
     * @var string
     */
    public $newFolderName;
    protected $_name = [
        'folderId'      => 'FolderId',
        'newFolderName' => 'NewFolderName',
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
        if (null !== $this->newFolderName) {
            $res['NewFolderName'] = $this->newFolderName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateFolderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }
        if (isset($map['NewFolderName'])) {
            $model->newFolderName = $map['NewFolderName'];
        }

        return $model;
    }
}
