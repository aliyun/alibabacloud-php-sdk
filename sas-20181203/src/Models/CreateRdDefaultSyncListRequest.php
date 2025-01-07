<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateRdDefaultSyncListRequest extends Model
{
    /**
     * @description The IDs of the folders in the resource directory.
     *
     * >  You can call the [GetRdTree](~~GetRdTree~~) operation to obtain the IDs of the folders. Separate multiple folder IDs with commas (,). If you do not specify a value for this parameter, the existing member list is cleared.
     * @example fd-BwoXuf****,fd-CFamY7****
     *
     * @var string
     */
    public $folderIds;
    protected $_name = [
        'folderIds' => 'FolderIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->folderIds) {
            $res['FolderIds'] = $this->folderIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRdDefaultSyncListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FolderIds'])) {
            $model->folderIds = $map['FolderIds'];
        }

        return $model;
    }
}
