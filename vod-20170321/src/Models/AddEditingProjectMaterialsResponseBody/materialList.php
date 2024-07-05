<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\AddEditingProjectMaterialsResponseBody;

use AlibabaCloud\Tea\Model;

class materialList extends Model
{
    /**
     * @example 1000487543
     *
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
     * @example 2019-10-02T08:26Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1234751840694470
     *
     * @var int
     */
    public $customerId;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 3690.2332
     *
     * @var float
     */
    public $duration;

    /**
     * @example 85befc4118b84c6723e53b80b1****
     *
     * @var string
     */
    public $materialId;

    /**
     * @example video
     *
     * @var string
     */
    public $materialType;

    /**
     * @example 2022-11-25T07:28:34Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @example 1682694
     *
     * @var int
     */
    public $size;

    /**
     * @var string[]
     */
    public $snapshots;

    /**
     * @example xxx
     *
     * @var string
     */
    public $spriteConfig;

    /**
     * @var string[]
     */
    public $sprites;

    /**
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @example tag1,tag2
     *
     * @var string
     */
    public $tags;

    /**
     * @example test
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'cateId'       => 'CateId',
        'cateName'     => 'CateName',
        'coverURL'     => 'CoverURL',
        'createTime'   => 'CreateTime',
        'customerId'   => 'CustomerId',
        'description'  => 'Description',
        'duration'     => 'Duration',
        'materialId'   => 'MaterialId',
        'materialType' => 'MaterialType',
        'modifyTime'   => 'ModifyTime',
        'size'         => 'Size',
        'snapshots'    => 'Snapshots',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->customerId) {
            $res['CustomerId'] = $this->customerId;
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
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->snapshots) {
            $res['Snapshots'] = $this->snapshots;
        }
        if (null !== $this->spriteConfig) {
            $res['SpriteConfig'] = $this->spriteConfig;
        }
        if (null !== $this->sprites) {
            $res['Sprites'] = $this->sprites;
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
     * @return materialList
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CustomerId'])) {
            $model->customerId = $map['CustomerId'];
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
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Snapshots'])) {
            if (!empty($map['Snapshots'])) {
                $model->snapshots = $map['Snapshots'];
            }
        }
        if (isset($map['SpriteConfig'])) {
            $model->spriteConfig = $map['SpriteConfig'];
        }
        if (isset($map['Sprites'])) {
            if (!empty($map['Sprites'])) {
                $model->sprites = $map['Sprites'];
            }
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
