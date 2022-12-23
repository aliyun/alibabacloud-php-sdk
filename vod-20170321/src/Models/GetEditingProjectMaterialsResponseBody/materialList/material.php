<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetEditingProjectMaterialsResponseBody\materialList;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetEditingProjectMaterialsResponseBody\materialList\material\snapshots;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetEditingProjectMaterialsResponseBody\materialList\material\sprites;
use AlibabaCloud\Tea\Model;

class material extends Model
{
    /**
     * @description The category ID of the material.
     *
     * @example 100005****
     *
     * @var int
     */
    public $cateId;

    /**
     * @description The category name of the material.
     *
     * @example test1
     *
     * @var string
     */
    public $cateName;

    /**
     * @description The thumbnail URL of the material.
     *
     * @example http://example.aliyundoc.com/aivideocover/46fa444aa34065cb9250f6c****\/image_01.jpg
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description The time when the material was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2017-10-19 10:48:17
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the material.
     *
     * @example test2
     *
     * @var string
     */
    public $description;

    /**
     * @description The duration of the material. The value is rounded to four decimal places. Unit: seconds.
     *
     * @example 15.16
     *
     * @var float
     */
    public $duration;

    /**
     * @description The ID of the material.
     *
     * @example 85befc4118b84c6723e53b80b1****
     *
     * @var string
     */
    public $materialId;

    /**
     * @description The type of the material. Valid values:
     *
     *   **video**
     *   **audio**
     *   **image**
     *
     * @example video
     *
     * @var string
     */
    public $materialType;

    /**
     * @description The time when the material was last updated. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2017-10-19 10:48:17
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The size of the mezzanine file. Unit: byte.
     *
     * @example 1682694
     *
     * @var int
     */
    public $size;

    /**
     * @description The URLs of material snapshots. The value is an array.
     *
     * @var snapshots
     */
    public $snapshots;

    /**
     * @description The source of the sprite.
     *
     * @example xxx
     *
     * @var string
     */
    public $source;

    /**
     * @description The configuration of the sprite.
     *
     * @example xxx
     *
     * @var string
     */
    public $spriteConfig;

    /**
     * @description The URLs of material sprites. The value is an array.
     *
     * @var sprites
     */
    public $sprites;

    /**
     * @description The status of the material. Valid values:
     *
     *   **Normal**: The material is in draft.
     *   **Producing**: The material is being produced.
     *   **Produced**: The material was produced.
     *   **ProduceFailed**: The material failed to be produced.
     *
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The tag of the material. Multiple tags are separated by commas (,).
     *
     * @example editing test
     *
     * @var string
     */
    public $tags;

    /**
     * @description The title of the material.
     *
     * @example test
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'cateId'       => 'CateId',
        'cateName'     => 'CateName',
        'coverURL'     => 'CoverURL',
        'creationTime' => 'CreationTime',
        'description'  => 'Description',
        'duration'     => 'Duration',
        'materialId'   => 'MaterialId',
        'materialType' => 'MaterialType',
        'modifiedTime' => 'ModifiedTime',
        'size'         => 'Size',
        'snapshots'    => 'Snapshots',
        'source'       => 'Source',
        'spriteConfig' => 'SpriteConfig',
        'sprites'      => 'Sprites',
        'status'       => 'Status',
        'tags'         => 'Tags',
        'title'        => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Snapshots'] = null !== $this->snapshots ? $this->snapshots->toMap() : null;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->spriteConfig) {
            $res['SpriteConfig'] = $this->spriteConfig;
        }
        if (null !== $this->sprites) {
            $res['Sprites'] = null !== $this->sprites ? $this->sprites->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return material
     */
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
