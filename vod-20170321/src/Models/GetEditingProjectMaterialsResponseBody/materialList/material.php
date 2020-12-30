<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetEditingProjectMaterialsResponseBody\materialList;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetEditingProjectMaterialsResponseBody\materialList\material\snapshots;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetEditingProjectMaterialsResponseBody\materialList\material\sprites;
use AlibabaCloud\Tea\Model;

class material extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var sprites
     */
    public $sprites;

    /**
     * @var int
     */
    public $cateId;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $spriteConfig;

    /**
     * @var string
     */
    public $source;

    /**
     * @var snapshots
     */
    public $snapshots;

    /**
     * @var string
     */
    public $cateName;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $materialId;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $coverURL;

    /**
     * @var float
     */
    public $duration;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'status'       => 'Status',
        'sprites'      => 'Sprites',
        'cateId'       => 'CateId',
        'tags'         => 'Tags',
        'spriteConfig' => 'SpriteConfig',
        'source'       => 'Source',
        'snapshots'    => 'Snapshots',
        'cateName'     => 'CateName',
        'modifiedTime' => 'ModifiedTime',
        'description'  => 'Description',
        'materialId'   => 'MaterialId',
        'size'         => 'Size',
        'coverURL'     => 'CoverURL',
        'duration'     => 'Duration',
        'title'        => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->sprites) {
            $res['Sprites'] = null !== $this->sprites ? $this->sprites->toMap() : null;
        }
        if (null !== $this->cateId) {
            $res['CateId'] = $this->cateId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->spriteConfig) {
            $res['SpriteConfig'] = $this->spriteConfig;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->snapshots) {
            $res['Snapshots'] = null !== $this->snapshots ? $this->snapshots->toMap() : null;
        }
        if (null !== $this->cateName) {
            $res['CateName'] = $this->cateName;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->materialId) {
            $res['MaterialId'] = $this->materialId;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->coverURL) {
            $res['CoverURL'] = $this->coverURL;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return material
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Sprites'])) {
            $model->sprites = sprites::fromMap($map['Sprites']);
        }
        if (isset($map['CateId'])) {
            $model->cateId = $map['CateId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['SpriteConfig'])) {
            $model->spriteConfig = $map['SpriteConfig'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Snapshots'])) {
            $model->snapshots = snapshots::fromMap($map['Snapshots']);
        }
        if (isset($map['CateName'])) {
            $model->cateName = $map['CateName'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['MaterialId'])) {
            $model->materialId = $map['MaterialId'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['CoverURL'])) {
            $model->coverURL = $map['CoverURL'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
