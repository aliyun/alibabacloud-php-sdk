<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\ListWorkspaceCodeResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var bool
     */
    public $isDir;

    /**
     * @var string
     */
    public $mtime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $symlink;
    protected $_name = [
        'isDir' => 'IsDir',
        'mtime' => 'Mtime',
        'name' => 'Name',
        'size' => 'Size',
        'symlink' => 'Symlink',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isDir) {
            $res['IsDir'] = $this->isDir;
        }

        if (null !== $this->mtime) {
            $res['Mtime'] = $this->mtime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->symlink) {
            $res['Symlink'] = $this->symlink;
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
        if (isset($map['IsDir'])) {
            $model->isDir = $map['IsDir'];
        }

        if (isset($map['Mtime'])) {
            $model->mtime = $map['Mtime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['Symlink'])) {
            $model->symlink = $map['Symlink'];
        }

        return $model;
    }
}
