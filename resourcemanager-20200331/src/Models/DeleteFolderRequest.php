<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class DeleteFolderRequest extends Model
{
    /**
     * @example fd-ae1in7****
     *
     * @var string
     */
    public $folderId;
    protected $_name = [
        'folderId' => 'FolderId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteFolderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }

        return $model;
    }
}
