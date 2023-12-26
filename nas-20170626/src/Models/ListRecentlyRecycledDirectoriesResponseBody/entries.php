<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\ListRecentlyRecycledDirectoriesResponseBody;

use AlibabaCloud\Tea\Model;

class entries extends Model
{
    /**
     * @description The ID of the directory.
     *
     * @example 04***08
     *
     * @var string
     */
    public $fileId;

    /**
     * @description The time when the directory was last deleted.
     *
     * @example 2021-05-30T10:08:08Z
     *
     * @var string
     */
    public $lastDeleteTime;

    /**
     * @description The name of the directory.
     *
     * @example b
     *
     * @var string
     */
    public $name;

    /**
     * @description The absolute path to the directory.
     *
     * @example /a/b
     *
     * @var string
     */
    public $path;
    protected $_name = [
        'fileId'         => 'FileId',
        'lastDeleteTime' => 'LastDeleteTime',
        'name'           => 'Name',
        'path'           => 'Path',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->lastDeleteTime) {
            $res['LastDeleteTime'] = $this->lastDeleteTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return entries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['LastDeleteTime'])) {
            $model->lastDeleteTime = $map['LastDeleteTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        return $model;
    }
}
