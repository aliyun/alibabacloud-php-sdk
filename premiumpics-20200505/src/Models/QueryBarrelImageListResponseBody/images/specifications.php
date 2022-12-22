<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models\QueryBarrelImageListResponseBody\images;

use AlibabaCloud\Tea\Model;

class specifications extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $height;

    /**
     * @example 55222
     *
     * @var int
     */
    public $id;

    /**
     * @description ID
     *
     * @example h4604360275725312
     *
     * @var string
     */
    public $imageId;

    /**
     * @example authId
     *
     * @var string
     */
    public $name;

    /**
     * @example 300
     *
     * @var string
     */
    public $price;

    /**
     * @example jpg
     *
     * @var string
     */
    public $suffix;

    /**
     * @example 1
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'height'  => 'Height',
        'id'      => 'Id',
        'imageId' => 'ImageId',
        'name'    => 'Name',
        'price'   => 'Price',
        'suffix'  => 'Suffix',
        'width'   => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->price) {
            $res['Price'] = $this->price;
        }
        if (null !== $this->suffix) {
            $res['Suffix'] = $this->suffix;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return specifications
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Price'])) {
            $model->price = $map['Price'];
        }
        if (isset($map['Suffix'])) {
            $model->suffix = $map['Suffix'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
