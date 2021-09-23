<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\ListRecentlyRecycledDirectoriesResponseBody;

use AlibabaCloud\Tea\Model;

class entries extends Model
{
    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $lastDeleteTime;
    protected $_name = [
        'fileId'         => 'FileId',
        'path'           => 'Path',
        'name'           => 'Name',
        'lastDeleteTime' => 'LastDeleteTime',
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
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->lastDeleteTime) {
            $res['LastDeleteTime'] = $this->lastDeleteTime;
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
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['LastDeleteTime'])) {
            $model->lastDeleteTime = $map['LastDeleteTime'];
        }

        return $model;
    }
}
