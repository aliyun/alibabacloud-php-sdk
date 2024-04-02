<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models\DescribeImageFromLibResponseBody;

use AlibabaCloud\Tea\Model;

class imageFromLibList extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $image;

    /**
     * @var int
     */
    public $imageHitCount;

    /**
     * @var string
     */
    public $thumbnail;

    /**
     * @var int
     */
    public $videoHitCount;
    protected $_name = [
        'createTime'    => 'CreateTime',
        'id'            => 'Id',
        'image'         => 'Image',
        'imageHitCount' => 'ImageHitCount',
        'thumbnail'     => 'Thumbnail',
        'videoHitCount' => 'VideoHitCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->imageHitCount) {
            $res['ImageHitCount'] = $this->imageHitCount;
        }
        if (null !== $this->thumbnail) {
            $res['Thumbnail'] = $this->thumbnail;
        }
        if (null !== $this->videoHitCount) {
            $res['VideoHitCount'] = $this->videoHitCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageFromLibList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['ImageHitCount'])) {
            $model->imageHitCount = $map['ImageHitCount'];
        }
        if (isset($map['Thumbnail'])) {
            $model->thumbnail = $map['Thumbnail'];
        }
        if (isset($map['VideoHitCount'])) {
            $model->videoHitCount = $map['VideoHitCount'];
        }

        return $model;
    }
}
