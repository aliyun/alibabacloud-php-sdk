<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetRdTreeResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The subfolder.
     *
     * @var mixed[]
     */
    public $children;

    /**
     * @description The ID of the folder in the resource directory.
     *
     * @example fd-CGA73I****
     *
     * @var string
     */
    public $folderId;

    /**
     * @description The name of the folder.
     *
     * @example Root
     *
     * @var string
     */
    public $folderName;
    protected $_name = [
        'children'   => 'Children',
        'folderId'   => 'FolderId',
        'folderName' => 'FolderName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->children) {
            $res['Children'] = $this->children;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Children'])) {
            if (!empty($map['Children'])) {
                $model->children = $map['Children'];
            }
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
