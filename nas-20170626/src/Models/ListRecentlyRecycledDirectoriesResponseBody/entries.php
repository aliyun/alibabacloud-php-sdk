<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\ListRecentlyRecycledDirectoriesResponseBody;

use AlibabaCloud\Dara\Model;

class entries extends Model
{
    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $lastDeleteTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $path;
    protected $_name = [
        'fileId' => 'FileId',
        'lastDeleteTime' => 'LastDeleteTime',
        'name' => 'Name',
        'path' => 'Path',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
