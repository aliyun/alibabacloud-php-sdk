<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\STAROps\V20260428\Models\ListArtifactsResponseBody;

use AlibabaCloud\Dara\Model;

class artifacts extends Model
{
    /**
     * @var bool
     */
    public $isDirectory;

    /**
     * @var string
     */
    public $lastModified;

    /**
     * @var string
     */
    public $path;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'isDirectory' => 'isDirectory',
        'lastModified' => 'lastModified',
        'path' => 'path',
        'size' => 'size',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isDirectory) {
            $res['isDirectory'] = $this->isDirectory;
        }

        if (null !== $this->lastModified) {
            $res['lastModified'] = $this->lastModified;
        }

        if (null !== $this->path) {
            $res['path'] = $this->path;
        }

        if (null !== $this->size) {
            $res['size'] = $this->size;
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
        if (isset($map['isDirectory'])) {
            $model->isDirectory = $map['isDirectory'];
        }

        if (isset($map['lastModified'])) {
            $model->lastModified = $map['lastModified'];
        }

        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        return $model;
    }
}
