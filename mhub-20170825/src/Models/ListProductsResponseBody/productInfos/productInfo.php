<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mhub\V20170825\Models\ListProductsResponseBody\productInfos;

use AlibabaCloud\Dara\Model;

class productInfo extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $encodedIcon;

    /**
     * @var int
     */
    public $industryId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $platforms;

    /**
     * @var int
     */
    public $productId;

    /**
     * @var bool
     */
    public $readonly;
    protected $_name = [
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'encodedIcon' => 'EncodedIcon',
        'industryId' => 'IndustryId',
        'name' => 'Name',
        'platforms' => 'Platforms',
        'productId' => 'ProductId',
        'readonly' => 'Readonly',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->encodedIcon) {
            $res['EncodedIcon'] = $this->encodedIcon;
        }

        if (null !== $this->industryId) {
            $res['IndustryId'] = $this->industryId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->platforms) {
            $res['Platforms'] = $this->platforms;
        }

        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        if (null !== $this->readonly) {
            $res['Readonly'] = $this->readonly;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EncodedIcon'])) {
            $model->encodedIcon = $map['EncodedIcon'];
        }

        if (isset($map['IndustryId'])) {
            $model->industryId = $map['IndustryId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Platforms'])) {
            $model->platforms = $map['Platforms'];
        }

        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        if (isset($map['Readonly'])) {
            $model->readonly = $map['Readonly'];
        }

        return $model;
    }
}
