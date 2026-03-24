<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LingMou\V20250527\Models;

use AlibabaCloud\Dara\Model;

class BroadcastSceneTemplate extends Model
{
    /**
     * @var string
     */
    public $coverURL;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $previewURL;

    /**
     * @var string
     */
    public $ratio;

    /**
     * @var string
     */
    public $shortVideoURL;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var string
     */
    public $thumbnailURL;
    protected $_name = [
        'coverURL' => 'coverURL',
        'createTime' => 'createTime',
        'desc' => 'desc',
        'id' => 'id',
        'modifiedTime' => 'modifiedTime',
        'name' => 'name',
        'previewURL' => 'previewURL',
        'ratio' => 'ratio',
        'shortVideoURL' => 'shortVideoURL',
        'tags' => 'tags',
        'thumbnailURL' => 'thumbnailURL',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->coverURL) {
            $res['coverURL'] = $this->coverURL;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->modifiedTime) {
            $res['modifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->previewURL) {
            $res['previewURL'] = $this->previewURL;
        }

        if (null !== $this->ratio) {
            $res['ratio'] = $this->ratio;
        }

        if (null !== $this->shortVideoURL) {
            $res['shortVideoURL'] = $this->shortVideoURL;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->thumbnailURL) {
            $res['thumbnailURL'] = $this->thumbnailURL;
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
        if (isset($map['coverURL'])) {
            $model->coverURL = $map['coverURL'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['desc'])) {
            $model->desc = $map['desc'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['modifiedTime'])) {
            $model->modifiedTime = $map['modifiedTime'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['previewURL'])) {
            $model->previewURL = $map['previewURL'];
        }

        if (isset($map['ratio'])) {
            $model->ratio = $map['ratio'];
        }

        if (isset($map['shortVideoURL'])) {
            $model->shortVideoURL = $map['shortVideoURL'];
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['thumbnailURL'])) {
            $model->thumbnailURL = $map['thumbnailURL'];
        }

        return $model;
    }
}
