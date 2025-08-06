<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\AddEditingProjectMaterialsResponseBody;

use AlibabaCloud\Dara\Model;

class materialList extends Model
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
    public $createTime;

    /**
     * @var int
     */
    public $customerId;

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
    public $modifyTime;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string[]
     */
    public $snapshots;

    /**
     * @var string
     */
    public $spriteConfig;

    /**
     * @var string[]
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
        'createTime' => 'CreateTime',
        'customerId' => 'CustomerId',
        'description' => 'Description',
        'duration' => 'Duration',
        'materialId' => 'MaterialId',
        'materialType' => 'MaterialType',
        'modifyTime' => 'ModifyTime',
        'size' => 'Size',
        'snapshots' => 'Snapshots',
        'spriteConfig' => 'SpriteConfig',
        'sprites' => 'Sprites',
        'status' => 'Status',
        'tags' => 'Tags',
        'title' => 'Title',
    ];

    public function validate()
    {
        if (\is_array($this->snapshots)) {
            Model::validateArray($this->snapshots);
        }
        if (\is_array($this->sprites)) {
            Model::validateArray($this->sprites);
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
            if (\is_array($this->snapshots)) {
                $res['Snapshots'] = [];
                $n1 = 0;
                foreach ($this->snapshots as $item1) {
                    $res['Snapshots'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->spriteConfig) {
            $res['SpriteConfig'] = $this->spriteConfig;
        }

        if (null !== $this->sprites) {
            if (\is_array($this->sprites)) {
                $res['Sprites'] = [];
                $n1 = 0;
                foreach ($this->sprites as $item1) {
                    $res['Sprites'][$n1] = $item1;
                    ++$n1;
                }
            }
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
                $model->snapshots = [];
                $n1 = 0;
                foreach ($map['Snapshots'] as $item1) {
                    $model->snapshots[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SpriteConfig'])) {
            $model->spriteConfig = $map['SpriteConfig'];
        }

        if (isset($map['Sprites'])) {
            if (!empty($map['Sprites'])) {
                $model->sprites = [];
                $n1 = 0;
                foreach ($map['Sprites'] as $item1) {
                    $model->sprites[$n1] = $item1;
                    ++$n1;
                }
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
