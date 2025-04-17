<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetEditingProjectMaterialsResponseBody\materialList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetEditingProjectMaterialsResponseBody\materialList\material\snapshots;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetEditingProjectMaterialsResponseBody\materialList\material\sprites;

class material extends Model
{
    /**
     * @var int
     */
    public $cateId;

    /**
     * @var string
     */
    public $cateName;

    /**
     * @var string
     */
    public $coverURL;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var float
     */
    public $duration;

    /**
     * @var string
     */
    public $materialId;

    /**
     * @var string
     */
    public $materialType;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var int
     */
    public $size;

    /**
     * @var snapshots
     */
    public $snapshots;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $spriteConfig;

    /**
     * @var sprites
     */
    public $sprites;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'cateId' => 'CateId',
        'cateName' => 'CateName',
        'coverURL' => 'CoverURL',
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'duration' => 'Duration',
        'materialId' => 'MaterialId',
        'materialType' => 'MaterialType',
        'modifiedTime' => 'ModifiedTime',
        'size' => 'Size',
        'snapshots' => 'Snapshots',
        'source' => 'Source',
        'spriteConfig' => 'SpriteConfig',
        'sprites' => 'Sprites',
        'status' => 'Status',
        'tags' => 'Tags',
        'title' => 'Title',
    ];

    public function validate()
    {
        if (null !== $this->snapshots) {
            $this->snapshots->validate();
        }
        if (null !== $this->sprites) {
            $this->sprites->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cateId) {
            $res['CateId'] = $this->cateId;
        }

        if (null !== $this->cateName) {
            $res['CateName'] = $this->cateName;
        }

        if (null !== $this->coverURL) {
            $res['CoverURL'] = $this->coverURL;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->materialId) {
            $res['MaterialId'] = $this->materialId;
        }

        if (null !== $this->materialType) {
            $res['MaterialType'] = $this->materialType;
        }

        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->snapshots) {
            $res['Snapshots'] = null !== $this->snapshots ? $this->snapshots->toArray($noStream) : $this->snapshots;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->spriteConfig) {
            $res['SpriteConfig'] = $this->spriteConfig;
        }

        if (null !== $this->sprites) {
            $res['Sprites'] = null !== $this->sprites ? $this->sprites->toArray($noStream) : $this->sprites;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['CateId'])) {
            $model->cateId = $map['CateId'];
        }

        if (isset($map['CateName'])) {
            $model->cateName = $map['CateName'];
        }

        if (isset($map['CoverURL'])) {
            $model->coverURL = $map['CoverURL'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['MaterialId'])) {
            $model->materialId = $map['MaterialId'];
        }

        if (isset($map['MaterialType'])) {
            $model->materialType = $map['MaterialType'];
        }

        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['Snapshots'])) {
            $model->snapshots = snapshots::fromMap($map['Snapshots']);
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['SpriteConfig'])) {
            $model->spriteConfig = $map['SpriteConfig'];
        }

        if (isset($map['Sprites'])) {
            $model->sprites = sprites::fromMap($map['Sprites']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
