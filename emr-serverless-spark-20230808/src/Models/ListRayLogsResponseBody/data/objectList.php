<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListRayLogsResponseBody\data;

use AlibabaCloud\Dara\Model;

class objectList extends Model
{
    /**
     * @var bool
     */
    public $isDir;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $path;

    /**
     * @var int
     */
    public $size;

    /**
     * @var int
     */
    public $timeModified;
    protected $_name = [
        'isDir' => 'isDir',
        'name' => 'name',
        'path' => 'path',
        'size' => 'size',
        'timeModified' => 'timeModified',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isDir) {
            $res['isDir'] = $this->isDir;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->path) {
            $res['path'] = $this->path;
        }

        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        if (null !== $this->timeModified) {
            $res['timeModified'] = $this->timeModified;
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
        if (isset($map['isDir'])) {
            $model->isDir = $map['isDir'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        if (isset($map['timeModified'])) {
            $model->timeModified = $map['timeModified'];
        }

        return $model;
    }
}
