<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListRdDefaultSyncListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The IDs of the folders in the resource directory.
     *
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
     * @return data
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
