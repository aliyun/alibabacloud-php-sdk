<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models\QueryBarrelImageListResponseBody;

use AlibabaCloud\SDK\Premiumpics\V20200505\Models\QueryBarrelImageListResponseBody\images\specifications;
use AlibabaCloud\Tea\Model;

class images extends Model
{
    /**
     * @var string
     */
    public $bigImage;

    /**
     * @var bool
     */
    public $buy;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $midImage;

    /**
     * @var string
     */
    public $smallImage;

    /**
     * @var specifications[]
     */
    public $specifications;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'bigImage'       => 'BigImage',
        'buy'            => 'Buy',
        'imageId'        => 'ImageId',
        'midImage'       => 'MidImage',
        'smallImage'     => 'SmallImage',
        'specifications' => 'Specifications',
        'tag'            => 'Tag',
        'title'          => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bigImage) {
            $res['BigImage'] = $this->bigImage;
        }
        if (null !== $this->buy) {
            $res['Buy'] = $this->buy;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->midImage) {
            $res['MidImage'] = $this->midImage;
        }
        if (null !== $this->smallImage) {
            $res['SmallImage'] = $this->smallImage;
        }
        if (null !== $this->specifications) {
            $res['Specifications'] = [];
            if (null !== $this->specifications && \is_array($this->specifications)) {
                $n = 0;
                foreach ($this->specifications as $item) {
                    $res['Specifications'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return images
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BigImage'])) {
            $model->bigImage = $map['BigImage'];
        }
        if (isset($map['Buy'])) {
            $model->buy = $map['Buy'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['MidImage'])) {
            $model->midImage = $map['MidImage'];
        }
        if (isset($map['SmallImage'])) {
            $model->smallImage = $map['SmallImage'];
        }
        if (isset($map['Specifications'])) {
            if (!empty($map['Specifications'])) {
                $model->specifications = [];
                $n                     = 0;
                foreach ($map['Specifications'] as $item) {
                    $model->specifications[$n++] = null !== $item ? specifications::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
