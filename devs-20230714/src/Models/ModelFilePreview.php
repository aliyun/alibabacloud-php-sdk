<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class ModelFilePreview extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $hash;

    /**
     * @var bool
     */
    public $isCompressedImage;

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
     * @var bool
     */
    public $unpreviewable;
    protected $_name = [
        'content' => 'content',
        'hash' => 'hash',
        'isCompressedImage' => 'isCompressedImage',
        'isDir' => 'isDir',
        'name' => 'name',
        'path' => 'path',
        'size' => 'size',
        'unpreviewable' => 'unpreviewable',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->hash) {
            $res['hash'] = $this->hash;
        }

        if (null !== $this->isCompressedImage) {
            $res['isCompressedImage'] = $this->isCompressedImage;
        }

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

        if (null !== $this->unpreviewable) {
            $res['unpreviewable'] = $this->unpreviewable;
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
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['hash'])) {
            $model->hash = $map['hash'];
        }

        if (isset($map['isCompressedImage'])) {
            $model->isCompressedImage = $map['isCompressedImage'];
        }

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

        if (isset($map['unpreviewable'])) {
            $model->unpreviewable = $map['unpreviewable'];
        }

        return $model;
    }
}
